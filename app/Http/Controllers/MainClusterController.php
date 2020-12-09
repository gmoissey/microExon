<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainCluster;
use App\MEList;
use App\RNAseq;
use App\Annotation;
use App\Prediction;

class MainClusterController extends Controller
{
    public function index(){
        $allClusters = MainCluster::all();

        return view('welcome', [
            'allClusters' => $allClusters,
        ]);
    }

    public function show($id){
        $cluster = MainCluster::where('cluster_ID', $id)->get();
        $meList = MEList::where('clusterID', $id)->get();

        if($id != 'MEP99'){
            //Getting NT60 and AA20 consensys matrix data from json
            $consensusMatrix1 = explode("/", $cluster[0]["NT60_consensusMatrix_files"])[1];
            $consensusMatrix2 = explode("/", $cluster[0]["AA20_consensusMatrix_files"])[1];
            $consensusMatrix1 = substr($consensusMatrix1, 0, -3);
            $consensusMatrix2 = substr($consensusMatrix2, 0, -3);
            $pathMatrix1 = public_path() . "/matrices/${consensusMatrix1}json";
            $pathMatrix2 = public_path() . "/matrices/${consensusMatrix2}json";
            $NT60matrix = json_decode(file_get_contents($pathMatrix1), true);
            $AA20matrix = json_decode(file_get_contents($pathMatrix2), true);

            //Getting NT60 and AA20 consesus string
            $consensusStiring1 = substr(explode("/", $cluster[0]["NT60_consensusString_files"])[1], 0, -3);
            $consensusStiring2 = substr(explode("/", $cluster[0]["AA20_consensusString_files"])[1], 0, -3);
            $stringPath1 = public_path() . "/logo_files/${consensusStiring1}txt";
            $stringPath2 = public_path() . "/logo_files/${consensusStiring2}txt";
            $NT60string = file_get_contents($stringPath1);
            $AA20string = file_get_contents($stringPath2);
        }else{
            $NT60string = 'NO RECORDS FOUND';
            $AA20string = 'NO RECORDS FOUND';
            $NT60matrix = 'NO RECORDS FOUND';
            $AA20matrix = 'NO RECORDS FOUND';
        }

        if(count($cluster) == 0){
            return view('404NotFound');
        }else{
            return view('clusterDetails', [
                'id' => $id,
                'cluster' => $cluster,
                'meList' => $meList,
                'AA20matrix' => $AA20matrix,
                'NT60matrix' => $NT60matrix,
                'AA20string' => $AA20string,
                'NT60string' => $NT60string
            ]);
        }
    }

    public function microExonDetails($id, $microExonID){
        $meList = MEList::where('clusterID', $id)->get();
        $prediction = Prediction::where('microExonID', $microExonID)->get();
        $annotation = Annotation::where('microExonID', $microExonID)->get();
        $rnaSeq = RNAseq::where('microExonID', $microExonID)->get();

        $jbrowse = "http://localhost/jbrowse/JBrowse-1.16.10/index.html?data=";
        $idTmp = $microExonID;

        $speciesDict = array("At"=>"A_thalian",
                        "Cr"=>"C_reinhardtii",
                        "Gm"=>"G_max",
                        "Ha"=>"H_annuus",
                        "Os"=>"O_sativa",
                        "Pp"=>"P_patens",
                        "Ps"=>"P_somniferum",
                        "Sm"=>"S_moellendorffii",
                        "Vv"=>"V_vinifera",
                        "Zm"=>"Z_mays");

        $specieShort = substr($microExonID, 0, 2);
        $specie = $speciesDict[$specieShort];
        $idTmp = substr($idTmp, 3);
        $idArray = explode(":", $idTmp);
        $region = $idArray[0];
        $location = str_replace("-", "..", $idArray[1]);

        $jbrowseLink = $jbrowse . $specie . "&tracklist=0&nav=0&overview=0&loc=" . $region . "%3A" . $location .
                        "&tracks=refseq%2C" . $specieShort . "_Annotation%2C" .
                        $specieShort . "BigWig%2C" .
                        $specieShort . "_Prediction%2C" .  $specieShort . "_RNAseq&highlight=";

        //$jbrowseLink = "http://localhost/jbrowse/JBrowse-1.16.10/index.html?data=A_thalian&tracklist=0&nav=0&overview=0&loc=3%3A1754286..1754338&tracks=DNA%2CAt_annotation%2CrnaSeq%2CAt_Prediction%2CAt_RNAseq&highlight="


        if(count($meList) == 0 ||
            (count($prediction) == 0 &&
            count($annotation) == 0 &&
            count($rnaSeq) == 0)){
            return view('404NotFound');
        }else{
            return view('microExonDetails', [
                'id' => $id,
                'microExonID' => $microExonID,
                'prediction' => $prediction,
                'annotation' => $annotation,
                'rnaSeq' => $rnaSeq,
                'jbrowseLink' => $jbrowseLink,
            ]);
        }
    }

    public function downloadConsensusFiles($clusterID, $fileType){
        $cluster = MainCluster::where('cluster_ID', $clusterID)->get();
        $arr = explode("/", $cluster[0][$fileType]);

        if(count($cluster) == 0 || count($arr) < 2){
            return view('404NotFound');
        }else{
            $headers = array(
                "Content-type: application/fa",
            );

            $file =  public_path() . '/logo_files/'. $arr[1];

            return response()->download($file, $clusterID . '_' . $fileType, $headers);
        }
    }

    public function downloadSeqFile($publicFilePath){


        $headers = array(
            "Content-type: application/fa",
        );

        $file =  public_path(). '/seq_files/' . $publicFilePath;

        return response()->download($file, $publicFilePath, $headers);

    }
}

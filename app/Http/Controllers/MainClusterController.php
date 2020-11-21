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
        $filename1 = explode("/", $cluster[0]["NT60_consensusMatrix_files"])[1];
        $filename2 = explode("/", $cluster[0]["AA20_consensusMatrix_files"])[1];
        $filename1 = substr($filename1, 0, -3);
        $filename2 = substr($filename2, 0, -3);

        $path1 = public_path() . "/matrices/${filename1}json";
        $path2 = public_path() . "/matrices/${filename2}json";

        $NT60matrix = json_decode(file_get_contents($path1), true);
        $AA20matrix = json_decode(file_get_contents($path2), true);

        if(count($cluster) == 0){
            return view('404NotFound');
        }else{
            return view('clusterDetails', [
                'id' => $id,
                'cluster' => $cluster,
                'meList' => $meList,
                'AA20matrix' => $AA20matrix,
                'NT60matrix' => $NT60matrix
            ]);
        }
    }

    public function microExonDetails($id, $microExonID){
        $meList = MEList::where('clusterID', $id)->get();
        $prediction = Prediction::where('microExonID', $microExonID)->get();
        $annotation = Annotation::where('microExonID', $microExonID)->get();
        $rnaSeq = RNAseq::where('microExonID', $microExonID)->get();

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
            ]);
        }
    }

    public function downloadFile($clusterID, $fileType){
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
}

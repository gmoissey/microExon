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

        if(count($cluster) == 0){
            return view('404NotFound');
        }else{
            return view('clusterDetails', [
                'id' => $id,
                'cluster' => $cluster,
                'meList' => $meList,
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
}

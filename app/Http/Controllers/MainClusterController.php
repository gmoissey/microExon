<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainCluster;
use App\MEList;

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
        error_log('Some message here.');
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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainCluster;

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

        if(count($cluster) == 0){
            return view('404NotFound');
        }else{
            return view('clusterDetails', [
                'id' => $id,
                'cluster' => $cluster,
            ]);
        }
    }
}

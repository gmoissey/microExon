@extends('layouts.header_footer_layout')
@section('content')


<div class="container-fluid" style="padding:0 5% 0 5%">
    <h1 style="margin-top:20px">{{ $id }}</h1>

    <div class="row" style="margin-top:20px">
        <div class="col-6">
            <ul class="list-group list-group-flush">
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Size</b>
                    <span>{{$cluster[0] -> size}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Phase</b>
                    <span>{{$cluster[0] -> phase}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Pfam Motif</b>
                    <span>{{$cluster[0] -> pfamMotif}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Exon Blocks</b>
                    <span>{{$cluster[0] -> exonBlocks}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Micro Exon Order</b>
                    <span>{{$cluster[0] -> microExonOrder}}</span>
                </li>
            </ul>
        </div>
        <div class="col-6">
            <picture>
                <img src="/{{ substr($cluster[0] -> ME_logo_files, 0, -3) . 'png' }}" class="img-fluid img-thumbnail" style="height: 280px" alt="ME_Logo">
            </picture>
        </div>
    </div>

    </p>
        <a href="/download/{{ $id }}/NT60_seq_files" class="badge badge-secondary">NT60 Sequence File</a>
        <a href="/download/{{ $id }}/NT60_consensusString_files" class="badge badge-secondary">NT60 Consensus String</a>
        <a href="/download/{{ $id }}/NT60_consensusMatrix_files" class="badge badge-secondary">NT60 Consensus Matrix</a>
        <a href="/download/{{ $id }}/AA20_consensusString_files" class="badge badge-secondary">AA20 Consensus String</a>
        <a href="/download/{{ $id }}/AA20_consensusMatrix_files" class="badge badge-secondary" class="badge badge-secondary">AA20 Consensus Matrix</a>
    <p>

    <p>
        <a class="btn btn-outline-dark" data-toggle="collapse" href="#generalInfo" role="button" aria-expanded="false" aria-controls="generalInfo">
          NT60 and AA20
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-compact-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
          </svg>
        </a>
    </p>
    <div class="collapse" id="generalInfo">
        <div class="card card-body">
            <div class="row">
                <div class="col-6">
                    <figure class="figure">
                        <img src="/{{ substr($cluster[0] -> NT60_logo_files, 0, -3) . 'png' }}" class="img-fluid img-thumbnail"  alt="ME_Logo">
                        <figcaption class="figure-caption text-center">NT60</figcaption>
                    </figure>
                </div>
                <div class="col-6">
                    <figure class="figure">
                        <img src="/{{ substr($cluster[0] -> AA20_logo_files, 0, -3) . 'png' }}" class="img-fluid img-thumbnail"  alt="ME_Logo">
                        <figcaption class="figure-caption text-center">AA20</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <p style="margin-top: 10px">
        <a class="btn btn-outline-dark" data-toggle="collapse" href="#phaseOffCollapse" role="button" aria-expanded="false" aria-controls="phaseOffCollapse">
            MSA Phase Off
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-compact-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
            </svg>
        </a>
    </p>
    <div class="collapse" id="phaseOffCollapse">
        <div class="card card-body">
            <div class="row">
                <div class="col-4">
                    <figure class="figure">
                        <img src="/{{ substr($cluster[0] -> msa_files_limit50_phaseOff, 0, -3) . 'png' }}" class="img-fluid img-thumbnail"  alt="ME_Logo">
                        <figcaption class="figure-caption text-center">MSA Limit 50, phase Off</figcaption>
                    </figure>
                </div>
                <div class="col-4">
                    <figure class="figure">
                        <img src="/{{ substr($cluster[0] -> msa_files_limit500_phaseOff, 0, -3) . 'png' }}" class="img-fluid img-thumbnail"  alt="ME_Logo">
                        <figcaption class="figure-caption text-center">MSA Limit 500, phase Off</figcaption>
                    </figure>
                </div>
                <div class="col-4">
                    <figure class="figure">
                        <img src="/{{ substr($cluster[0] -> msa_files_limitNA_phaseOff, 0, -3) . 'png' }}" class="img-fluid img-thumbnail"  alt="ME_Logo">
                        <figcaption class="figure-caption text-center">MSA Limit NA, phase Off</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <p style="margin-top: 10px">
        <a class="btn btn-outline-dark" data-toggle="collapse" href="#phaseOnCollapse" role="button" aria-expanded="false" aria-controls="phaseOnCollapse">
            MSA Phase On
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-compact-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
            </svg>
        </a>
    </p>
    <div class="collapse" id="phaseOnCollapse">
        <div class="card card-body">
            <div class="row">
                <div class="col-4">
                    <figure class="figure">
                        <img src="/{{ substr($cluster[0] -> msa_files_limit50_phaseOn, 0, -3) . 'png' }}" class="img-fluid img-thumbnail"  alt="ME_Logo">
                        <figcaption class="figure-caption text-center">MSA Limit 50, phase On</figcaption>
                    </figure>
                </div>
                <div class="col-4">
                    <figure class="figure">
                        <img src="/{{ substr($cluster[0] -> msa_files_limit500_phaseOn, 0, -3) . 'png' }}" class="img-fluid img-thumbnail"  alt="ME_Logo">
                        <figcaption class="figure-caption text-center">MSA Limit 500, phase On</figcaption>
                    </figure>
                </div>
                <div class="col-4">
                    <figure class="figure">
                        <img src="/{{ substr($cluster[0] -> msa_files_limitNA_phaseOn, 0, -3) . 'png' }}" class="img-fluid img-thumbnail"  alt="ME_Logo">
                        <figcaption class="figure-caption text-center">MSA Limit NA, phase On</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>


    <table class="table table-striped" style="margin-top:20px">
        <thead>
          <tr>
            <th scope="col">microExon ID</th>
            <th scope="col">Species</th>
            <th scope="col">Chr</th>
            <th scope="col">Start</th>
            <th scope="col">End</th>
            <th scope="col">Strand</th>
            <th scope="col">Size</th>
            <th scope="col">RNA-Seq</th>
            <th scope="col">Prediction</th>
            <th scope="col">Annotation</th>
          </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($meList); $i += 1)
                <tr>
                    <td><a href="/{{ $id }}/{{ $meList[$i] -> microExonID }}" class="btn stretched-link">{{ $meList[$i] -> microExonID }}</a></td>
                    <td>{{ $meList[$i] -> species }}</td>
                    <td>{{ $meList[$i] -> chr }}</td>
                    <td>{{ $meList[$i] -> start }}</td>
                    <td>{{ $meList[$i] -> end }}</td>
                    <td>{{ $meList[$i] -> strand }}</td>
                    <td>{{ $meList[$i] -> size }}</td>
                    <td>
                        @if( $meList[$i] -> RNA_seq == 1)
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:green">
                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        @else
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:red">
                                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        @endif
                    </td>
                    <td>
                        @if( $meList[$i] -> prediction == 1)
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:green">
                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        @else
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:red">
                                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        @endif
                    </td>
                    <td>
                        @if( $meList[$i] -> annotation == 1)
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:green">
                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        @else
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:red">
                                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        @endif
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>


</div>

@stop

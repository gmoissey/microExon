@extends('layouts.header_footer_layout')
@section('content')

<div class="container-fluid" style="padding: 30px 5% 0 5%">

    <h2>{{$id}}: {{ $microExonID }}</h2>

    @if(count($prediction) != 0)
    <div class="row">
        <div class="col-6">
            <ul class="list-group list-group-flush">
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Species</b>
                    <span>{{$prediction[0] -> species}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Char</b>
                    <span>{{$prediction[0] -> chr}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Start</b>
                    <span>{{$prediction[0] -> start}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>End</b>
                    <span>{{$prediction[0] -> end}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Strand</b>
                    <span>{{$prediction[0] -> strand}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Size</b>
                    <span>{{$prediction[0] -> size}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Phase</b>
                    <span>{{$prediction[0] -> phase}}</span>
                </li>
            </ul>
        </div>

        <div class="col-6">
            <ul class="list-group list-group-flush">
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>ME NT</b>
                    <span>{{$prediction[0] -> me_nt}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>ME AA</b>
                    <span>{{$prediction[0] -> me_aa}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>NT 60</b>
                    <span>{{ $genomeSeq = chunk_split($prediction[0]['nt60'], 4, ' ') }}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>AA 20</b>
                    <span>{{$prediction[0] -> aa20}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Blocks</b>
                    <span>{{$prediction[0] -> blocks}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>ME Order</b>
                    <span>{{$prediction[0] -> me_order}}</span>
                </li>
            </ul>
        </div>
    </div>
    @elseif(count($annotation) != 0)
    <div class="row">
        <div class="col-6">
            <ul class="list-group list-group-flush">
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Species</b>
                    <span>{{$annotation[0] -> species}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Char</b>
                    <span>{{$annotation[0] -> chr}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Start</b>
                    <span>{{$annotation[0] -> start}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>End</b>
                    <span>{{$annotation[0] -> end}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Strand</b>
                    <span>{{$annotation[0] -> strand}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Size</b>
                    <span>{{$annotation[0] -> size}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Phase</b>
                    <span>{{$annotation[0] -> phase}}</span>
                </li>
            </ul>
        </div>

        <div class="col-6">
            <ul class="list-group list-group-flush">
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>ME NT</b>
                    <span>{{$annotation[0] -> me_nt}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>ME AA</b>
                    <span>{{$annotation[0] -> me_aa}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>NT 60</b>
                    <span>{{ $genomeSeq = chunk_split($annotation[0]['nt60'], 4, ' ') }}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>AA 20</b>
                    <span>{{$annotation[0] -> aa20}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Blocks</b>
                    <span>{{$annotation[0] -> blocks}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>ME Order</b>
                    <span>{{$annotation[0] -> me_order}}</span>
                </li>
            </ul>
        </div>
    </div>
    @elseif(count($rnaSeq) != 0)
    <div class="row">
        <div class="col-6">
            <ul class="list-group list-group-flush">
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Species</b>
                    <span>{{$rnaSeq[0] -> species}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Char</b>
                    <span>{{$rnaSeq[0] -> chr}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Start</b>
                    <span>{{$rnaSeq[0] -> start}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>End</b>
                    <span>{{$rnaSeq[0] -> end}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Strand</b>
                    <span>{{$rnaSeq[0] -> strand}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Size</b>
                    <span>{{$rnaSeq[0] -> size}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Phase</b>
                    <span>{{$rnaSeq[0] -> phase}}</span>
                </li>
            </ul>
        </div>

        <div class="col-6">
            <ul class="list-group list-group-flush">
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>ME NT</b>
                    <span>{{$rnaSeq[0] -> me_nt}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>ME AA</b>
                    <span>{{$rnaSeq[0] -> me_aa}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>NT 60</b>
                    <span>{{ chunk_split($rnaSeq[0]['nt60'], 4, ' ') }}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>AA 20</b>
                    <span>{{$rnaSeq[0] -> aa20}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Blocks</b>
                    <span>{{$rnaSeq[0] -> blocks}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>ME Order</b>
                    <span>{{$rnaSeq[0] -> me_order}}</span>
                </li>
            </ul>
        </div>
    </div>
    @else
    <div class="panel alert alert-danger" style="margin-top: 30px;">
        RECORDS NOT FOUND.
    </div>
    @endif

    <div calss="row">

        <br>
        <div style="width: 100%; margin: 0 auto;">
            <iframe
                src="{{ $jbrowseLink }}"
                style="border: 1px solid black"
                width="100%"
                height="350"
            >
            </iframe>
    </div>

    <p></p>
    @include('layouts.microExonDropDowns.microExonPrediction')
    <p></p>
    @include('layouts.microExonDropDowns.microExonRNAseq')
    <p></p>
    @include('layouts.microExonDropDowns.microExonAnnotation')
    <p></p>

</div>

@stop

@if(count($prediction) == 0)

<button class="accordion btn text-left">
    <b>
        Prediction
        <span style="float: right;" class="dropStatus">+</span>
    </b>
</button>
<div class="panel alert alert-danger" style="margin-top: 30px;">
        Prediction records not found.
</div>

@else
<button class="accordion btn text-left">
    <b>
        Prediction
        <span style="float: right;" class="dropStatus">+</span>
    </b>
</button>
<div class="panel">
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
            </ul>
        </div>

        <div class="col-6">
            <ul class="list-group list-group-flush">
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
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Region</b>
                    <span>{{$prediction[0] -> region}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>score</b>
                    <span>{{$prediction[0] -> score}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>PCT Overlap</b>
                    <span>{{$prediction[0] -> pctOverlap}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Transcript ID</b>
                    <span>{{$prediction[0] -> transcript_id}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Ref. Transcript ID</b>
                    <span>{{$prediction[0] -> ref_transcript_id}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Ref. Gene ID</b>
                    <span>{{$prediction[0] -> ref_gene_id}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Ref. Gene Name</b>
                    <span>{{$prediction[0] -> ref_gene_name}}</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endif

@if(count($prediction) == 0)

<button class="btn text-left" style="width: 100%;" data-toggle="collapse" data-target="#predictionPanel" aria-controls="predictionPanel">
    <b>
        Prediction
        <span style="float: right;" class="dropStatus">+</span>
    </b>
</button>
<div class="collapse alert alert-danger" style="margin-top: 20px;" id="predictionPanel">
        Prediction records not found.
</div>

@else
<button class="btn text-left" style="width: 100%;" data-toggle="collapse" data-target="#predictionPanel" aria-controls="predictionPanel">
    <b>
        Prediction
        <span style="float: right;" class="dropStatus">+</span>
    </b>
</button>
<div class="collapse" id="predictionPanel">
    <div class="row">
        <div class="col-6">
            <ul class="list-group list-group-flush">
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
            </ul>
        </div>

        <div class="col-6">
            <ul class="list-group list-group-flush">
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

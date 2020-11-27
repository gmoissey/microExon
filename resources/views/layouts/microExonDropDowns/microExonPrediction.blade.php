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

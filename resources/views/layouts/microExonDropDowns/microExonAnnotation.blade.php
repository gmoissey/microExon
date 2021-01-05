@if(count($annotation) == 0)

<button class="btn text-left" style="width: 100%;" data-toggle="collapse" data-target="#annotationPanel" aria-controls="annotationPanel">
    <b>
        Annotation
        <span style="float: right;" class="dropStatus">+</span>
    </b>
</button>
<div class="collapse alert alert-danger" style="margin-top: 20px;" id="annotationPanel">
    Annotation records not found.
</div>

@else

<button class="btn text-left" style="width: 100%;" data-toggle="collapse" data-target="#annotationPanel" aria-controls="annotationPanel">
    <b>
        Annotation
        <span style="float: right;" class="dropStatus">+</span>
    </b>
</button>
<div class="collapse" id="annotationPanel">
    <div class="row">
        <div class="col-6">
            <ul class="list-group list-group-flush">
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Transcript ID</b>
                    <span>{{$annotation[0] -> transcript_id}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Protein ID</b>
                    <span>{{$annotation[0] -> protein_id}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Gene ID</b>
                    <span>{{$annotation[0] -> gene_id}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Gene Name</b>
                    <span>{{$annotation[0] -> gene_name}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Pfam Motif</b>
                    <span>{{$annotation[0] -> Pfam_motif}}</span>
                </li>
            </ul>
        </div>

        <div class="col-6">
            <ul class="list-group list-group-flush">
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>MOTIF Evalue</b>
                    <span>{{$annotation[0] -> motif_evalue}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>MOTIF Start</b>
                    <span>{{$annotation[0] -> motif_start}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>MOTIF End</b>
                    <span>{{$annotation[0] -> motif_end}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Protein Files</b>
                    <span>
                        <a href="/download/{{ $annotation[0] -> protein_files }}" class="btn stretched-link">{{ $annotation[0] -> protein_files }}</a>
                    </span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>CDS Files</b>
                    <span>
                        <a href="/download/{{ $annotation[0] -> cds_files }}" class="btn stretched-link">{{ $annotation[0] -> cds_files }}</a>
                    </span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endif

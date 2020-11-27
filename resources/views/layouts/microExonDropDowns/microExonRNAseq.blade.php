@if(count($rnaSeq) == 0)

<button class="accordion btn text-left">
    <b>
        RNA Sequence
        <span style="float: right;" class="dropStatus">+</span>
    </b>
</button>
<div class="panel alert alert-danger" style="margin-top: 30px;">
    RNA Sequence records not found.
</div>

@else

<button class="accordion btn text-left">
    <b>
        RNA Sequence
        <span style="float: right;" class="dropStatus">+</span>
    </b>
</button>
<div class="panel">
    <div class="row">
        <div class="col-6">
            <ul class="list-group list-group-flush">
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Transcript ID</b>
                    <span>{{$rnaSeq[0] -> transcript_id}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Pfam Motif</b>
                    <span>{{$rnaSeq[0] -> Pfam_motif}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>MOTIF Evalue</b>
                    <span>{{$rnaSeq[0] -> motif_evalue}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>MOTIF Start</b>
                    <span>{{$rnaSeq[0] -> motif_start}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>MOTIF End</b>
                    <span>{{$rnaSeq[0] -> motif_end}}</span>
                </li>
            </ul>
        </div>

        <div class="col-6">
            <ul class="list-group list-group-flush">
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Ref. Gene ID</b>
                    <span>{{$rnaSeq[0] -> ref_gene_id}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Ref. Gene Name</b>
                    <span>{{$rnaSeq[0] -> ref_gene_name}}</span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Protein Files</b>
                    <span>
                        <a href="/download/{{ $rnaSeq[0] -> protein_files }}" class="btn stretched-link">{{ $rnaSeq[0] -> protein_files }}</a>
                    </span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>CDS Files</b>
                    <span>
                        <a href="/download/{{ $rnaSeq[0] -> cds_files }}" class="btn stretched-link">{{ $rnaSeq[0] -> cds_files }}</a>
                    </span>
                </li>
                <li class="list-group-item justify-content-between d-flex align-items-center">
                    <b>Annotated</b>
                    <span>{{$rnaSeq[0] -> annotated}}</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endif

@extends('layouts.header_footer_layout')
@section('content')

<div class="container-fluid" style="padding: 30px 5% 0 5%">

<h2>{{$id}}: {{ $microExonID }}</h2>

    @include('layouts.microExonDropDowns.microExonPrediction')

    @include('layouts.microExonDropDowns.microExonRNAseq')

    @include('layouts.microExonDropDowns.microExonAnnotation')

</div>

@stop

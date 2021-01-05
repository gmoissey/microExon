@extends('layouts.header_footer_layout')
@section('content')

<div class="container-fluid" style="padding:0 5% 0 5%">

    <div class="homeContent row">

        <div class="col1Home col">
            <h3>Introduction</h3>
            <p class="text-justify">
                Lorem ipsum dolor, sit amet consectetur adipisicing
                elit. Fugit ducimus odio repellendus labore praesentium,
                dolor eveniet. Incidunt libero tempora nihil porro
                quam saepe magni quibusdam ratione eius eum. Aperiam, non.
                Lorem ipsum dolor, sit amet consectetur adipisicing
                elit. Fugit ducimus odio repellendus labore praesentium,
                dolor eveniet. Incidunt libero tempora nihil porro
                quam saepe magni quibusdam ratione eius eum. Aperiam, non.
                Lorem ipsum dolor, sit amet consectetur adipisicing
                elit. Fugit ducimus odio repellendus labore praesentium,
                dolor eveniet. Incidunt libero tempora nihil porro
                quam saepe magni quibusdam ratione eius eum. Aperiam, non.
                Lorem ipsum dolor, sit amet consectetur adipisicing
                elit. Fugit ducimus odio repellendus labore praesentium,
                dolor eveniet. Incidunt libero tempora nihil porro
                quam saepe magni quibusdam ratione eius eum. Aperiam, non.

            </p>

            <form class="top-buffer row">
                <select class="selectpicker col-2 rowElement">
                    <option title="Option 1">Option 1</option>
                    <option title="Option 2">Option 2</option>
                    <option title="Option 3">Option 3</option>
                </select>
                <input class="form-control col rowElement" type="text" placeholder="Search" aria-label="Search">
                <button type="button" class="btn btn-secondary col-2 rowElement">Secondary</button>
            </form>

            <table class="table top-buffer">
                <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">ME Logo</th>
                      <th scope="col">Size</th>
                      <th scope="col">Phase</th>
                      <th scope="col">Motif</th>
                    </tr>
                  </thead>

                  <tbody class="tableMainCluster">
                    @foreach ($allClusters as $cluster)
                        <tr>
                            <th scope="row"><a href="{{ $cluster -> cluster_ID }}" class="btn stretched-link">{{ $cluster -> cluster_ID }}</a></th>
                            <td class="w-25">
                            <img src="{{ substr($cluster -> ME_logo_files, 0, -3) . 'png' }}" class="img-fluid img-thumbnail" alt="ME_Logo">
                            </td>
                            <td>{{ $cluster -> size }}</td>
                            <td>{{ $cluster -> phase }}</td>
                            <td>{{ $cluster -> pfamMotif }}</td>
                        </tr>
                    @endforeach
                  </tbody>
            </table>


        </div>
        <div class="col2Home col-4">
            <div style="margin-left: 20%; border: 2px solid rgba(25,124,204,0.23);">
                <script type="text/javascript" src="//rf.revolvermaps.com/0/0/6.js?i=54yj8iit7o0&amp;m=7&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
            </div>

            <div class="card top-buffer float-right" style="width: 18rem;">
                <img class="card-img-top" src="img/icon-no-image.svg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

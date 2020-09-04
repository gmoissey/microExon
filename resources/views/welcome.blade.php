@extends('layouts.header_footer_layout')
@section('content')

<ul class="nav nav-tabs tabs">
    <li class="nav-item" id="firstTab">
        <a class="nav-link active" href="#">Tab1</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="#">Tab2</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="#">Tab3</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
    </li>
</ul>

<div class="container">

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
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Some Info</th>
                    <th scope="col">Some Info</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Cluster1</td>
                    <td>23123</td>
                    <td>3k4j32l</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Cluster2</td>
                    <td>234234</td>
                    <td>3klj234k</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Cluster3</td>
                    <td>34249</td>
                    <td>lkj34lk2</td>
                  </tr>
                </tbody>
            </table>

        </div>
        <div class="col2Home col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="img/icon-no-image.svg" alt="Card image cap">
            </div>

            <div class="card top-buffer" style="width: 18rem;">
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

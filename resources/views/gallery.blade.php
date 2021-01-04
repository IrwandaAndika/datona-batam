@extends('layouts.app')

@section('content')
<section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1>Gallery</h1>
                <span class="d-block text-4">Our Activity Documentation</span>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right breadcrumb-light">
                    <li><a href="datona-hr-consulting .html">Home</a></li>
                    <li class="active">Gallery</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row pt-1 pb-4 mb-3">
        <div class="col">

            <ul class="nav nav-pills sort-source mb-4" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
                <li class="nav-item active" data-option-value="*" class=""><a class="nav-link active btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase mr-2 mb-2" href="#">Show All</a></li>
                <li class="nav-item" data-option-value=".economic"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase mr-2 mb-2" href="#">2019</a></li>
                <li class="nav-item" data-option-value=".strategic"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase mr-2 mb-2" href="#">2020</a></li>
                <li class="nav-item" data-option-value=".tech"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase mr-2 mb-2" href="#">2021</a></li>
            </ul>

            <div class="sort-destination-loader sort-destination-loader-showing">
                <div class="sort-destination-loader sort-destination-loader-showing">
                    <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                        <div class="col-lg-4 isotope-item economic">
                            <span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
                                <span class="thumb-info-wrapper m-0">
                                    <img src="img/activity/pemerintahan/galeri3.jpg" class="img-fluid" alt="">
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@include('layouts.contact')
@endsection
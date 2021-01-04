@extends('layouts.app')

@section('content')
<section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1>- Partnerships</h1>
                <span class="d-block text-4">Our Partners and Associates</span>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right breadcrumb-light">
                    <li><a href="datona-hr-consulting .html">Home</a></li>
                    <li class="active">Partnerships</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<article class="post post-medium blog-single-post border-0 m-0 p-0">

    <div class="post-image ml-0">
        <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
            <div class="row mx-0">
                <div class="col-6 col-md-4 p-0">
                    <a href="{{asset('img/idei.png') }}">
                        <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                            <span class="thumb-info-wrapper">
                                <img src="{{asset('img/idei.png') }}" class="img-fluid" alt="" />
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-6 col-md-4 p-0">
                    <a href="{{asset('img/indohc.jpg') }}">
                        <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                            <span class="thumb-info-wrapper">
                                <img src="{{asset('img/indohc.jpg') }}" class="img-fluid" alt="" />
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-6 col-md-4 p-0">
                    <a href="{{asset('img/datona.jpg') }}">
                        <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                            <span class="thumb-info-wrapper">
                                <img src="{{asset('img/datona.jpg') }}" class="img-fluid" alt="" />
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-6 col-md-4 p-0">
                    <a href="{{asset('img/bnsp.png') }}">
                        <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                            <span class="thumb-info-wrapper">
                                <img src="{{asset('img/bnsp.png') }}" class="img-fluid" alt="" />
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-6 col-md-4 p-0">
                    <a href="{{asset('img/sstc.png') }}">
                        <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                            <span class="thumb-info-wrapper">
                                <img src="{{asset('img/sstc.png') }}" class="img-fluid" alt="" />
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-6 col-md-4 p-0">
                    <a href="{{asset('img/msdm.png') }}">
                        <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                            <span class="thumb-info-wrapper">
                                <img src="{{asset('img/msdm.png') }}" class="img-fluid" alt="" />
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="section section-default border-0 mt-5 pt-2 pb-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="mb-0 mt-3 font-weight-extra-bold text-6">Our Partner</h2>
                <div class="divider divider-primary divider-small divider-small-center mb-3">
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center font-weight-semibold">
                <ul>YAYASAN SDM INDONESIA, INDO HUMAN CAPITAL NASIONAL – Jakarta </ul>
                <ul>IKATAN DOKTOR EKONOMI INDONESIA (IDEI)</ul>
                <ul>LSP MSDM UNIVERSAL</ul>
                <ul>DINAS TENAGA KERJA KOTA BATAM</ul>
                <ul>DINAS TENAGA KERJA PROVINSI KEPRI</ul>
                <ul>DIRJEN LATAS KEMENTERIAN TK RI</ul>
                <ul>BLK BEKASI</ul>
                <ul>SSTC SINGAPORE</ul>
                <ul>FORTE MANAGEMENT SINGAPORE</ul>
                <ul>PKMS Singapore </ul>		
            </div>
        </div>
    </section>
</article>


@include('layouts.contact')
@endsection
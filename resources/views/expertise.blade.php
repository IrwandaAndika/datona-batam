@extends('layouts.app')

@section('content')
<section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1>- Expertise</h1>
                <span class="d-block text-4">What We Do</span>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right breadcrumb-light">
                    <li><a href="datona-hr-consulting .html">Home</a></li>
                    <li class="active">Expertise</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row pt-1 pb-5 mb-3">
        <div class="col">
            @foreach ($expertises as $ex)
            <div class="row mb-3">
                <div class="col">
                    <div class="feature-box custom-feature-box custom-feature-box-active feature-box-style-2">
                        <div class="feature-box-icon">
                            <img src="{{ asset('storage/'. $ex->image) }}" alt="">
                        </div>
                        <div class="feature-box-info ml-3">
                            <h4 class="font-weight-normal text-5">{{ $ex->title }}</h4>
                            <p>{!! $ex->content !!}</p>
                            <a href="{{ $ex->link }}">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>    
            @endforeach
        </div>
    </div>
</div>


@include('layouts.contact')
@endsection
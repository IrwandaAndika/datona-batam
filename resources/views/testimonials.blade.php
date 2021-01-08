@extends('layouts.app')

@section('content')
<section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1>- Testimonials</h1>
                <span class="d-block text-4">What our clients say about us</span>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right breadcrumb-light">
                    <li><a href="datona-hr-consulting .html">Home</a></li>
                    <li class="active">Testimonials</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row pt-1">
        <div class="col">

            @foreach ($testimonials as $t)
                <div class="row mb-4 pb-4">
                    <div class="col-8 col-sm-4 col-lg-2 text-center pt-5">
                    <img src="{{ asset('storage/app/public/'. $t->image) }}" class="img-fluid custom-rounded-image"/>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-10">
                        <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-0">
                            <blockquote class="pb-2">
                            <p>{{ $t->description }}</p>
                            </blockquote>
                            <div class="testimonial-author float-left">
                            <p><strong>{{ $t->author }}</strong><span class="text-color-primary">{{ $t->company }}</span></p>
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
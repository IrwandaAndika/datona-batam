@extends('layouts.app')

@section('content')
<section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1>- Contact Us</h1>
                <span class="d-block text-4">Send us a Message or Call Us</span>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right breadcrumb-light">
                    <li><a href="datona-hr-consulting .html">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row pt-1 pb-4 mb-3">
        <div class="col-lg-8">

            <h2 class="font-weight-bold text-color-dark">- Send a Message</h2>
              
            <form id="contactForm" class="contact-form custom-contact-form-style-1" action="{{ route('contact-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="contact-form-error alert alert-success d-none mt-4" id="contactError">
                    <strong>Success!</strong> Your message has been sent to us.
                </div> 
                {{-- <div class="contact-form-success alert alert-success d-none mt-4" id="contactError">
                    <strong>Success!</strong> Your message has been sent to us.
                    <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                </div> --}}

                <input type="hidden" name="subject" value="Contact Message Received" />
                <div class="form-row">
                    <div class="form-group col">
                        <div class="custom-input-box">
                            <i class="icon-user icons text-color-primary"></i>
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="title" id="name" placeholder="Name*" required>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <div class="custom-input-box">
                            <i class="icon-envelope icons text-color-primary"></i>
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="Email*" required>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <div class="custom-input-box">
                            <i class="icon-bubble icons text-color-primary"></i>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" placeholder="Message*" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <input type="submit" value="Submit Now" class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mb-4">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4">

            <div class="row mb-4">
                <div class="col">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon mt-1">
                            <i class="icon-location-pin icons"></i>
                        </div>
                        <div class="feature-box-info">
                            <h2 class="font-weight-bold text-color-dark">- Address</h2>
                            <p class="text-4">
                                Ruko Royal Sincom Block C No 11 Batam Centre<br>
                                Batam, Riau Islands
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon mt-1">
                            <i class="icon-phone icons"></i>
                        </div>
                        <div class="feature-box-info">
                            <h2 class="font-weight-bold text-color-dark">- Phone</h2>
                            <p class="text-4">
                                +62 819-2700-0073 <br>
                                +62 812-6790-8009
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon mt-1">
                            <i class="icon-envelope icons"></i>
                        </div>
                        <div class="feature-box-info">
                            <h2 class="font-weight-bold text-color-dark">- Email</h2>
                            <p class="text-4">
                                <a href="mailto:register@datonaconsulting.com" class="text-decoration-none">register@datonaconsulting.com</a><br>
                                <a href="mailto:jobs@datonaconsulting.com" class="text-decoration-none">jobs@datonaconsulting.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
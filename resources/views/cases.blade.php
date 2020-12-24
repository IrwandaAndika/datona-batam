@extends('layouts.app')

@section('content')
<section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1>- Cases and Jobs Openings</h1>
                <span class="d-block text-4">Successful Cases and Available Jobs</span>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right breadcrumb-light">
                    <li><a href="datona-hr-consulting .html">Home</a></li>
                    <li class="active">Cases</li>
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
                <li class="nav-item" data-option-value=".1"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase mr-2 mb-2" href="#">HR Management</a></li>
                <li class="nav-item" data-option-value=".2"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase mr-2 mb-2" href="#">Industrial Relation</a></li>
                <li class="nav-item" data-option-value=".3"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase mr-2 mb-2" href="#">Jobs</a></li>
            </ul>

            <div class="sort-destination-loader sort-destination-loader-showing">
                <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                    @foreach ($cases as $c)
                    <div class="col-lg-4 isotope-item {{ $c->type_id }}">
                        <a href="datona-hr-consulting-cases-detail.html" class="text-decoration-none">
                            <span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
                                <span class="thumb-info-wrapper m-0">
                                    <img src="{{ asset('/storage/img/cases/'. $c->content) }}" class="img-fluid" alt="">
                                </span>
                                <span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
                                    <span class="custom-thumb-info-title">
                                        <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">{{ $c->name }}</span>
                                        <span class="custom-thumb-info-desc font-weight-light">{{ $c->description }}</span>
                                    </span>
                                    <span class="custom-arrow"></span>
                                </span>
                            </span>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


<section class="section section-text-light section-background m-0" style="background: url('img/foot1.jpg'); background-size: cover;">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="font-weight-bold">- Contact Us</h2>
                <p class="custom-opacity-font">Fill the form if you want to know more about us or to schedule a consultation session.</p>
                <div class="row">
                    <div class="col-md-6 custom-sm-margin-top">
                        <h4 class="mb-1">Call Us</h4>
                        <a href="tel:+62819-2700-0073" class="text-decoration-none" target="_blank" title="Call Us">
                            <span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
                                Phone
                                <span class="info text-5">
                                    +62 819-2700-0073
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-md-6 custom-sm-margin-top">
                        <h4 class="mb-1">Our Location</h4>
                        <p class="custom-opacity-font">Ruko Royal Sincom Block C No 11, Batam Centre, Batam, Riau Islands</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 custom-sm-margin-top">
                        <h4 class="mb-1">Mail Us</h4>
                        <a href="mail:register@datonaconsulting.com" class="text-decoration-none" target="_blank" title="Mail Us">
                            <span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
                                Email
                                <span class="info text-5">
                                    register@datonaconsulting.com
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-md-6 custom-sm-margin-top">
                        <h4 class="mb-1">Social Media</h4>
                        <ul class="social-icons social-icons-clean custom-social-icons-style-1 mt-2 custom-opacity-font">
                            <li class="social-icons-facebook">
                                <a href="http://www.facebook.com/lpmibatam" target="_blank" title="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="social-icons-instagram">
                                <a href="http://www.instagram.com/lpmibatam" target="_blank" title="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="social-icons-linkedin">
                                <a href="http://www.linkedin.com/lpmibatam" target="_blank" title="Linkedin">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 custom-sm-margin-top">
                <h2 class="font-weight-bold">- Write Us</h2>
                <form id="contactForm" class="contact-form custom-contact-form-style-1" action="php/contact-form.php" method="POST">
                    <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                    </div>

                    <input type="hidden" name="subject" value="Contact Message Received" />
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="custom-input-box">
                                <i class="icon-user icons text-color-primary"></i>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="Name*" required>
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
                            <input type="submit" value="Submit Now" class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
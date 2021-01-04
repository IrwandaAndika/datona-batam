@extends('layouts.app')

@section('content')
<div class="slider-container rev_slider_wrapper" style="height: 100%;">
    <div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
        <ul>
            <li data-transition="fade">
                <img src="{{ asset('img/head1.jpg') }}"  
                    alt=""
                    data-bgposition="center center" 
                    data-bgfit="cover" 
                    data-bgrepeat="no-repeat" 
                    data-bgparallax="1" 
                    class="rev-slidebg">

                <h1 class="tp-caption custom-secondary-font font-weight-bold text-color-light"
                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                    data-y="center" data-voffset="['-80','-80','-80','-40']"
                    data-start="800"
                    data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 32px;">Solutions for</h1>

                <div class="tp-caption custom-secondary-font font-weight-bold text-color-light"
                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                    data-y="center" data-voffset="['-42','-42','-42','2']"
                    data-start="800"
                    data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 42px;">HR Management and Industrial Relation</div>

                <a href="{{ route('login') }}" class="btn btn-primary tp-caption text-uppercase text-color-light custom-border-radius"
                    data-hash
                    data-hash-offset="85"
                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                    data-y="center" data-voffset="['60','60','60','100']"
                    data-start="1500"
                    style="font-size: 12px; padding: 15px 6px;"
                    data-transform_in="y:[-300%];opacity:0;s:500;">Get Started</a>
            </li>
            <li data-transition="fade">
                <img src="{{ asset('img/head2.jpg') }}"  
                    alt=""
                    data-bgposition="center center" 
                    data-bgfit="cover" 
                    data-bgrepeat="no-repeat" 
                    data-bgparallax="1" 
                    class="rev-slidebg">

                <h1 class="tp-caption custom-secondary-font font-weight-bold text-color-light"
                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                    data-y="center" data-voffset="['-80','-80','-80','-40']"
                    data-start="800"
                    data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 32px;">Schedule your</h1>

                <div class="tp-caption custom-secondary-font font-weight-bold text-color-light"
                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                    data-y="center" data-voffset="['-42','-42','-42','2']"
                    data-start="800"
                    data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 42px;">Consultation</div>

                <a href="{{ route('login') }}" class="btn btn-primary tp-caption text-uppercase text-color-light custom-border-radius"
                    data-hash
                    data-hash-offset="85"
                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                    data-y="center" data-voffset="['60','60','60','100']"
                    data-start="1500"
                    style="font-size: 12px; padding: 15px 6px;"
                    data-transform_in="y:[-300%];opacity:0;s:500;">Get Started</a>
            </li>
            <li data-transition="fade">
                <img src="{{ asset('img/head3.jpg') }}"  
                    alt=""
                    data-bgposition="center center" 
                    data-bgfit="cover" 
                    data-bgrepeat="no-repeat" 
                    data-bgparallax="1" 
                    class="rev-slidebg">

                <h1 class="tp-caption custom-secondary-font font-weight-bold text-color-light"
                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                    data-y="center" data-voffset="['-80','-80','-80','-40']"
                    data-start="800"
                    data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 32px;">Looking for Talents?</h1>

                <div class="tp-caption custom-secondary-font font-weight-bold text-color-light"
                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                    data-y="center" data-voffset="['-42','-42','-42','2']"
                    data-start="800"
                    data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 42px;">Try Our Head Hunting Service</div>

                <a href="{{ route('login') }}" class="btn btn-primary tp-caption text-uppercase text-color-light custom-border-radius"
                    data-hash
                    data-hash-offset="85"
                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                    data-y="center" data-voffset="['60','60','60','100']"
                    data-start="1500"
                    style="font-size: 12px; padding: 15px 6px;"
                    data-transform_in="y:[-300%];opacity:0;s:500;">Get Started</a>
            </li>
        </ul>
    </div>
</div>

<section class="looking-for custom-position-1 custom-md-border-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <div class="looking-for-box">
                    <h2>- <span class="text-1 custom-secondary-font">Are you looking for a</span><br>
                    HR Management and Industrial Relation Consultant?</h2>
                    <p>Schedule your company strategy right session now</p>
                </div>
            </div>
            <div class="col-md-3 col-lg-2">
                <a class="text-decoration-none" href="mail:register@datonaconsulting.com" target="_blank" title="Email Us Now">
                    <span class="custom-call-to-action">
                        <span class="action-title text-color-primary">Email Us Now</span>
                        <span class="action-info text-color-light">register@datonaconsulting.com</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="about-us custom-section-padding" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <h2 class="font-weight-bold text-color-dark">- About Us</h2>
                <p class="pl-4">Datona Consulting is a HR/IR Consulting Company. We understand and provide the best consultancy in all aspects of your Human Resources Management. We also have experience in sourcing specialised skills. We provide tailor made services according to our clients’ specifications and company culture.</p>
                <div class="pl-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fas fa-chevron-right"></i> Certified Professionals</li>
                                <li><i class="fas fa-chevron-right"></i> Former Chief Executives and Managers</li>
                                <li><i class="fas fa-chevron-right"></i> Experienced HR/IR Practitioner</li>
                            </ul>	
                        </div>
                        <div class="col-lg-6">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fas fa-chevron-right"></i> Wide Industrial Network</li>
                                <li><i class="fas fa-chevron-right"></i> Wide Experts Network</li>
                                <li><i class="fas fa-chevron-right"></i> Executive Search and Headhunting Best Experts</li>
                            </ul>
                        </div>
                    </div>
                    <a class="btn btn-outline custom-border-width btn-primary mt-3 mb-2 custom-border-radius font-weight-semibold text-uppercase" href="/about-us">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="content-grid custom-content-grid mt-5 mb-4">
                    <div class="row content-grid-row">
                        <div class="content-grid-item col-lg-6 bg-color-light p-4">
                            <div class="counters">
                                <div class="counter custom-sm-counter-style">
                                    <img class="counter-icon" src="{{ asset('img/icon-1.png') }}" alt />
                                    <strong class="text-color-primary custom-primary-font" data-to="14" data-append="+">0</strong>
                                    <label>Years in Business</label>
                                </div>
                            </div>	
                        </div>
                        <div class="content-grid-item col-lg-6 p-4">
                            <div class="counters">
                                <div class="counter margin-style-2 custom-sm-counter-style">
                                    <img class="counter-icon" src="{{ asset('img/icon-2.png') }}" alt />
                                    <strong class="text-color-primary custom-primary-font" data-to="200" data-append="+">0</strong>
                                    <label>Successful Cases</label>
                                </div>
                            </div>	
                        </div>
                    </div>
                    <div class="row content-grid-row">
                        <div class="content-grid-item col-lg-6 p-4">
                            <div class="counters">
                                <div class="counter custom-sm-counter-style">
                                    <img class="counter-icon" src="{{ asset('img/icon-3.png') }}" alt />
                                    <strong class="text-color-primary custom-primary-font" data-to="140" data-append="+">0</strong>
                                    <label>Satisfied Clients</label>
                                </div>
                            </div>	
                        </div>
                        <div class="content-grid-item col-lg-6 p-4">
                            <div class="counters">
                                <div class="counter margin-style-2 custom-sm-counter-style">
                                    <img class="counter-icon" src="{{ asset('img/icon-4.png') }}" alt />
                                    <strong class="text-color-primary custom-primary-font" data-to="130" data-append="+">0</strong>
                                    <label>Pro Consultants Network</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-secondary custom-section-padding">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h2 class="font-weight-bold text-color-dark mb-3">- Expertises</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <a href="datona-hr-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                    <div class="feature-box custom-feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <img src="{{ asset('img/hricon.jpg') }}" alt="">
                        </div>
                        <div class="feature-box-info ml-3">
                            <h4 class="font-weight-normal text-5">Human Resources Management</h4>
                            <p class="text-2">We make people management and HR compliance easier to get right. We understand and provide customized consultancy in all aspects of your HR Management.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="datona-hr-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="100">
                    <div class="feature-box custom-feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <img src="{{ asset('img/iricon.jpg') }}" alt="">
                        </div>
                        <div class="feature-box-info ml-3">
                            <h4 class="font-weight-normal text-5">Industrial Relation Consultancy</h4>
                            <p class="text-2">Lay down the foundations to enable good people practices and a stable working environment and avoid adverse situations.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="datona-hr-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200">
                    <div class="feature-box custom-feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <img src="{{ asset('img/headhuntico.jpg') }}" alt="">
                        </div>
                        <div class="feature-box-info ml-3">
                            <h4 class="font-weight-normal text-5">Executive Search and Head Hunting</h4>
                            <p class="text-2">We seek the best candidate for your organization. We provide tailor made services according to our clients’ specifications and company culture.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mb-3" href="/expertise" title="View All">View All</a>
            </div>
        </div>
    </div>
</section>

<section class="section-secondary custom-section-padding-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="font-weight-bold text-color-dark mb-3">- Our Cases, Training and Job Openings</h2>
            </div>
        </div>
    </div>
    <div class="owl-carousel show-nav-title custom-both-sides-shadow custom-dots-position-2 custom-dots-style-1 custom-xs-arrows-style-2 mb-0" data-plugin-options="{'items': 6, 'loop': false, 'dots': true, 'nav': false}">
        <div>
            <a href="datona-hr-consulting-cases-detail.html" class="text-decoration-none">
                <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                    <span class="thumb-info-wrapper m-0">
                        <img src="{{ asset('img/demos/business-consulting/cases/case-1.jpg') }}" class="img-fluid" alt="">
                    </span>
                    <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                        <span class="custom-thumb-info-title">
                            <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Corporate Finance</span>
                            <span class="custom-thumb-info-desc font-weight-light">Okler</span>
                        </span>
                        <span class="custom-arrow"></span>
                    </span>
                </span>
            </a>
        </div>
        <div>
            <a href="datona-hr-consulting-cases-detail.html" class="text-decoration-none">
                <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                    <span class="thumb-info-wrapper m-0">
                        <img src="{{ asset('img/demos/business-consulting/cases/case-2.jpg') }}" class="img-fluid" alt="">
                    </span>
                    <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                        <span class="custom-thumb-info-title">
                            <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Corporate Restructuring</span>
                            <span class="custom-thumb-info-desc font-weight-light">Envato</span>
                        </span>
                        <span class="custom-arrow"></span>
                    </span>
                </span>
            </a>
        </div>
        <div>
            <a href="datona-hr-consulting-cases-detail.html" class="text-decoration-none">
                <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                    <span class="thumb-info-wrapper m-0">
                        <img src="{{ asset('img/demos/business-consulting/cases/case-3.jpg') }}" class="img-fluid" alt="">
                    </span>
                    <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                        <span class="custom-thumb-info-title">
                            <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Economic Consultanting</span>
                            <span class="custom-thumb-info-desc font-weight-light">Porto</span>
                        </span>
                        <span class="custom-arrow"></span>
                    </span>
                </span>
            </a>
        </div>
        <div>
            <a href="datona-hr-consulting-cases-detail.html" class="text-decoration-none">
                <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                    <span class="thumb-info-wrapper m-0">
                        <img src="{{ asset('img/demos/business-consulting/cases/case-4.jpg') }}" class="img-fluid" alt="">
                    </span>
                    <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                        <span class="custom-thumb-info-title">
                            <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Tech Consulting</span>
                            <span class="custom-thumb-info-desc font-weight-light">GetCustom</span>
                        </span>
                        <span class="custom-arrow"></span>
                    </span>
                </span>
            </a>
        </div>
        <div>
            <a href="datona-hr-consulting-cases-detail.html" class="text-decoration-none">
                <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                    <span class="thumb-info-wrapper m-0">
                        <img src="{{ asset('img/demos/business-consulting/cases/case-5.jpg') }}" class="img-fluid" alt="">
                    </span>
                    <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                        <span class="custom-thumb-info-title">
                            <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Strategic</span>
                            <span class="custom-thumb-info-desc font-weight-light">Jet Orange</span>
                        </span>
                        <span class="custom-arrow"></span>
                    </span>
                </span>
            </a>
        </div>
        <div>
            <a href="datona-hr-consulting-cases-detail.html" class="text-decoration-none">
                <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                    <span class="thumb-info-wrapper m-0">
                        <img src="{{ asset('img/demos/business-consulting/cases/case-1.jpg') }}" class="img-fluid" alt="">
                    </span>
                    <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                        <span class="custom-thumb-info-title">
                            <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Litigation</span>
                            <span class="custom-thumb-info-desc font-weight-light">Paradoxx</span>
                        </span>
                        <span class="custom-arrow"></span>
                    </span>
                </span>
            </a>
        </div>
        <div>
            <a href="datona-hr-consulting-cases-detail.html" class="text-decoration-none">
                <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                    <span class="thumb-info-wrapper m-0">
                        <img src="{{ asset('img/demos/business-consulting/cases/case-2.jpg') }}" class="img-fluid" alt="">
                    </span>
                    <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                        <span class="custom-thumb-info-title">
                            <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Consulting</span>
                            <span class="custom-thumb-info-desc font-weight-light">iMessenger</span>
                        </span>
                        <span class="custom-arrow"></span>
                    </span>
                </span>
            </a>
        </div>
        <div>
            <a href="datona-hr-consulting-cases-detail.html" class="text-decoration-none">
                <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                    <span class="thumb-info-wrapper m-0">
                        <img src="{{ asset('img/demos/business-consulting/cases/case-3.jpg') }}" class="img-fluid" alt="">
                    </span>
                    <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                        <span class="custom-thumb-info-title">
                            <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Brand Consulting</span>
                            <span class="custom-thumb-info-desc font-weight-light">Theme Forest</span>
                        </span>
                        <span class="custom-arrow"></span>
                    </span>
                </span>
            </a>
        </div>
        <div>
            <a href="datona-hr-consulting-cases-detail.html" class="text-decoration-none">
                <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                    <span class="thumb-info-wrapper m-0">
                        <img src="{{ asset('img/demos/business-consulting/cases/case-4.jpg') }}" class="img-fluid" alt="">
                    </span>
                    <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                        <span class="custom-thumb-info-title">
                            <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Corporate Consulting</span>
                            <span class="custom-thumb-info-desc font-weight-light">Tucson</span>
                        </span>
                        <span class="custom-arrow"></span>
                    </span>
                </span>
            </a>
        </div>
    </div>
</section>

<section class="custom-section-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="font-weight-bold text-color-dark">- Testimonials</h2>
            </div>
        </div>
        <div class="row">						
            <div class="col">
                <div class="owl-carousel show-nav-title custom-dots-style-1 custom-dots-position custom-xs-arrows-style-2 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
                    <div class="row">
                        <div class="col-8 col-sm-4 col-lg-2 text-center pt-5">
                            <img src="{{ asset('img/demos/business-consulting/testimonials/testimonial-author-2.jpg') }}" alt class="img-fluid custom-rounded-image" />
                        </div>
                        <div class="col-12 col-sm-12 col-lg-10">
                            <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-0">
                                <blockquote class="pb-2">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex. Aliquam et tortor nisi. Duis mollis diam nec elit volutpat suscipit.</p>
                                </blockquote>
                                <div class="testimonial-author float-left">
                                    <p><strong>John Smith</strong><span class="text-color-primary">CEO &amp; Founder - Okler</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 col-sm-4 col-lg-2 text-center pt-5">
                            <img src="{{ asset('img/demos/business-consulting/testimonials/testimonial-author-3.jpg') }}" alt class="img-fluid custom-rounded-image" />
                        </div>
                        <div class="col-12 col-sm-12 col-lg-10">
                            <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-0">
                                <blockquote class="pb-2">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex. Aliquam et tortor nisi. Duis mollis diam nec elit volutpat suscipit.</p>
                                </blockquote>
                                <div class="testimonial-author float-left">
                                    <p><strong>John Smith</strong><span class="text-color-primary">CEO &amp; Founder - Okler</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-secondary custom-section-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="font-weight-bold text-color-dark">- Our Team</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="owl-carousel show-nav-title custom-dots-style-1 custom-dots-position custom-xs-arrows-style-2 mb-0" data-plugin-options="{'items': 4, 'margin': 20, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
                    <div>
                        <div class="team-item p-0">
                            <a href="datona-hr-consulting-team-detail.html" class="text-decoration-none">
                                <span class="image-wrapper">
                                    <img src="{{ asset('img/luce.jpg') }}" alt="" class="img-fluid" />
                                </span>
                            </a>
                            <div class="team-infos">
                                <a href="datona-hr-consulting-team-detail.html" class="text-decoration-none">
                                    <span class="team-member-name text-color-dark font-weight-semibold text-4">Luce Kristina Siagian S.E.</span>
                                    <span class="team-member-desc font-weight-light">Director</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="team-item p-0">
                            <a href="datona-hr-consulting-team-detail.html" class="text-decoration-none">
                                <span class="image-wrapper">
                                    <img src="{{ asset('img/pakpaimin.png') }}" alt="" class="img-fluid" />
                                </span>
                            </a>
                            <div class="team-infos">
                                <a href="datona-hr-consulting-team-detail.html" class="text-decoration-none">
                                    <span class="team-member-name text-color-dark font-weight-semibold text-4">Paimin Siahaan S.E.,M.Hum.,M.Th.</span>
                                    <span class="team-member-desc font-weight-light">Managing Partner</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="team-item p-0">
                            <a href="datona-hr-consulting-team-detail.html" class="text-decoration-none">
                                <span class="image-wrapper">
                                    <img src="{{ asset('img/david.jpg') }}" alt="" class="img-fluid" />
                                </span>
                            </a>
                            <div class="team-infos">
                                <a href="datona-hr-consulting-team-detail.html" class="text-decoration-none">
                                    <span class="team-member-name text-color-dark font-weight-semibold text-4">David Ricardo Siahaan</span>
                                    <span class="team-member-desc font-weight-light">Marketing Manager</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="team-item p-0">
                            <a href="datona-hr-consulting-team-detail.html" class="text-decoration-none">
                                <span class="image-wrapper">
                                    <img src="{{ asset('img/pakyohanes.png') }}" alt="" class="img-fluid" />
                                </span>
                            </a>
                            <div class="team-infos">
                                <a href="datona-hr-consulting-team-detail.html" class="text-decoration-none">
                                    <span class="team-member-name text-color-dark font-weight-semibold text-4">Drs. Yohanes Purnomo, MBA.</span>
                                    <span class="team-member-desc font-weight-light">Associate Consultant</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="team-item p-0">
                            <a href="datona-hr-consulting-team-detail.html" class="text-decoration-none">
                                <span class="image-wrapper">
                                    <img src="{{ asset('img/freddy.jpg') }}" alt="" class="img-fluid" />
                                </span>
                            </a>
                            <div class="team-infos">
                                <a href="datona-hr-consulting-team-detail.html" class="text-decoration-none">
                                    <span class="team-member-name text-color-dark font-weight-semibold text-4">Freddy Marolop S.E.</span>
                                    <span class="team-member-desc font-weight-light">Operational Manager</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center mt-5">
            <div class="col">
                <a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase" href="/team">View All</a>
            </div>
        </div>
    </div>
</section>

<section class="looking-for section-dark">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <div class="looking-for-box">
                    <h2>- <span class="text-1 custom-secondary-font">Are you looking for a</span><br>
                    HR Management and Industrial Relation Consultant?</h2>
                    <p class="mb-4 mb-md-0">Schedule your company strategy right session now</p>
                </div>
            </div>
            <div class="col-md-3 col-lg-2">
                <a class="text-decoration-none" href="mail:register@datonaconsulting.com" target="_blank" title="Email Us Now">
                    <span class="custom-call-to-action white-border text-color-light">
                        <span class="action-title">Email Us Now</span>
                        <span class="action-info">register@datonaconsulting.com</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

@include('layouts.contact')
@endsection

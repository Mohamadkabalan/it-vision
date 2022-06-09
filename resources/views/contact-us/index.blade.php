@php $page='contact-us';  @endphp
@extends('layouts.master')

@section('page_title')
    Contact Us
@endsection

@section('head')

@endsection

@section('seo')


@stop

@section('content-wrapper')
    @include('home.navbar')
    <section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Contact 2</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="./">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Contact 2
                        </li>
                    </ol>
                    <div class="divider-15 d-none d-xl-block"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="ls s-pt-30 s-pb-100 s-pb-md-130 s-py-lg-100 contact2">
        <div class="divider-15 d-none d-xl-block"></div>
        <div class="container">
            <div class="row c-mb-30 c-mb-md-50">
                <div class="col-md-4 text-center">
                    <div class="border-icon">
                        <div class="teaser-icon">
                            <img src="images/icon1.png" alt="">
                        </div>
                    </div>
                    <h6>
                        Call Us
                    </h6>
                    <p class="teaser-content">
                        <strong>New Accounts:</strong> +961-76053730
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="border-icon">
                        <div class="teaser-icon">
                            <img src="images/icon3.png" alt="">
                        </div>
                    </div>
                    <h6>
                        Write Us
                    </h6>
                    <p class="teaser-content">
                        info@itvision.me
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="border-icon">
                        <div class="teaser-icon">
                            <img src="images/icon2.png" alt="">
                        </div>
                    </div>
                    <h6>
                        Visit Us
                    </h6>
                    <p class="teaser-content">
                        Lebanon, Koura, Ras Maska
                    </p>
                </div>
            </div>
            <div class="divider-60 d-none d-xl-block"></div>
            <div class="row">
                <div class="col-lg-12 ">
                    <form class="contact-form" method="post" action="/">

                        <div class="row c-gutter-20">

                            <div class="col-12 col-md-6">
                                <div class="form-group has-placeholder">
                                    <label for="name">Full Name
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control text-left" placeholder="Full Name">
                                </div>
                                <div class="form-group has-placeholder ">
                                    <label for="email">Email address
                                        <span class="required">*</span>
                                    </label>
                                    <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control text-left" placeholder="Email Address">
                                </div>
                                <div class="form-group has-placeholder">
                                    <label for="subject">Subject
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control text-left" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">

                                <div class="form-group has-placeholder">
                                    <label for="message">Message</label>
                                    <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control text-left" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group text-center">
                                    <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor">Send Message</button>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
                <!--.col-* -->

                <div class="divider-80 d-none d-xl-block"></div>

            </div>
        </div>
    </section>
    <section class="about-map ms page_map" data-draggable="false" data-scrollwheel="false">

        <div class="marker">
            <div class="marker-address">2231 Sycamore, Green Bay, WI 54304</div>
            <div class="marker-description">

                <ul class="list-unstyled">
                    <li>
								<span class="icon-inline">
									<span class="icon-styled color-main">
										<i class="fa fa-map-marker"></i>
									</span>

									<span>
										2231 Sycamore, Green Bay, WI 54304
									</span>
								</span>
                    </li>

                    <li>
								<span class="icon-inline">
									<span class="icon-styled color-main">
										<i class="fa fa-phone"></i>
									</span>

									<span>
										+961-76053730
									</span>
								</span>
                    </li>
                    <li>
								<span class="icon-inline">
									<span class="icon-styled color-main">
										<i class="fa fa-envelope"></i>
									</span>

									<span>
										Info@itvision.me
									</span>
								</span>
                    </li>
                </ul>
            </div>

            <img class="marker-icon" src="images/map_marker_icon.png" alt="">
        </div>
        <!-- .marker -->

    </section>

@endsection

@push('scripts')
@endpush

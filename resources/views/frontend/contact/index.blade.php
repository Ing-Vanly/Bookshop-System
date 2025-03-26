@extends('frontend.layouts.app')

@section('content')
    <section class="breadcrumb-section">
        <div class="container">
            <div class="text-merge"><a href="{{ route('home-page') }}" class="breadcrumb-link">Home</a>
                <div class="breadcrumb-link">/</div>
                <div class="breadcrumb-link"><a href="{{ route('contact') }}" class="breadcrumb-link">Contact</a></div>
            </div>
        </div>
    </section>
    <div class="page-wrapper">
        <section class="section-60px">
            <div class="container">
                <div class="title-wrapper">
                    <h2 class="heading">Need Help? Reach Out to Our Team for Assistance Here</h2>
                </div>
                <div class="margin-120px">
                    <div class="_3-column-grid">
                        <div data-w-id="476712f5-ec8c-b452-8a11-beeb10fba8f8" class="contact-card"
                            style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                            <div class="contact-svg-position">
                                <div class="contact-svg-wrapper"
                                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; background-color: rgb(135, 230, 121);">
                                    <img loading="lazy"
                                        src="{{ asset('frontend/assets') }}/img/66ab8282560ac2178fdcc980_home-8-line.png"
                                        alt="" class="image-32px">
                                </div>
                            </div>
                            <div class="_30px-title">Visit our office</div>
                            <p class="text">930 Hilgard Ave, Los Angeles, CA <br>90024, United States.</p>
                        </div>
                        <div class="contact-card"
                            style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; background-color: rgb(255, 255, 255);">
                            <div class="contact-svg-position">
                                <div class="contact-svg-wrapper"
                                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; background-color: rgb(135, 230, 121);">
                                    <img loading="lazy"
                                        src="{{ asset('frontend/assets') }}/img/66ab8282560ac2178fdcc97e_phone-line.png"
                                        alt="" class="image-32px">
                                </div>
                            </div>
                            <div class="_30px-title" style="color: rgb(36, 36, 36);">Give us a call</div>
                            <p class="text" style="color: rgb(80, 80, 80);">(406) 555-0120<br>(407) 222-0456</p>
                        </div>
                        <div id="w-node-_476712f5-ec8c-b452-8a11-beeb10fba90c-8fdcc6dd" class="contact-card"
                            style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                            <div class="contact-svg-position">
                                <div class="contact-svg-wrapper"
                                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; background-color: rgb(135, 230, 121);">
                                    <img loading="lazy"
                                        src="{{ asset('frontend/assets') }}/img/66ab8282560ac2178fdcc97f_mail-send-line.png"
                                        alt="" class="image-32px">
                                </div>
                            </div>
                            <div class="_30px-title">Chat with us</div>
                            <p class="text">hello@yourdomain.com<br>contact@yourname.com</p>
                        </div>
                    </div>
                </div>
                <div class="_2-column-block">
                    <div class="contact-form-wrapper w-form">
                        <h2 class="_36px-text">Get in touch</h2>
                        <p class="contact-paragraph">Contact me directly for inquiries, collaborations, or to share your
                            thoughts.
                            I'm eager to connect and discuss our interests.</p>
                        <form id="wf-form-Email" name="wf-form-Email" data-name="Email" method="get" class="contact-form"
                            data-wf-page-id="66ab8282560ac2178fdcc6dd"
                            data-wf-element-id="476712f5-ec8c-b452-8a11-beeb10fba91f" aria-label="Email">
                            <div class="horizotnal-input-wrapper"><input class="input-field-transparent-with-image w-input"
                                    maxlength="256" name="name" data-name="Name" placeholder="Name" type="text"
                                    id="name"><input class="input-field-transparent-with-image email w-input"
                                    maxlength="256" name="Email" data-name="Email" placeholder="Email" type="email"
                                    id="Email"></div>
                            <div class="horizotnal-input-wrapper"><input
                                    class="input-field-transparent-with-image phone w-input" maxlength="256" name="phone"
                                    data-name="Phone" placeholder="Phone" type="tel" id="phone"><input
                                    class="input-field-transparent-with-image subject w-input" maxlength="256"
                                    name="subject" data-name="Subject" placeholder="Subject" type="text" id="subject">
                            </div>
                            <div class="horizotnal-input-wrapper">
                                <textarea id="field" name="field" maxlength="5000" data-name="Field" placeholder="Message"
                                    class="input-field-transparent-with-image text-area w-input"></textarea>
                            </div>
                            <input type="submit" data-wait="Please wait..." class="primary-button w-button"
                                value="Send Message">
                        </form>
                        <div class="w-form-done" tabindex="-1" role="region" aria-label="Email success">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail" tabindex="-1" role="region" aria-label="Email failure">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                    <div class="map-embed-block">
                        <div class="w-embed w-iframe">
                            <iframe width="100%" height="650" style="border:0;" loading="lazy" allowfullscreen
                                referrerpolicy="no-referrer-when-downgrade"
                                src="https://maps.google.com/maps?q=Phnom%20Penh,Cambodia&output=embed">
                            </iframe>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

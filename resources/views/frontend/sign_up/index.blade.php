@extends('frontend.layouts.app')

@section('content')


<section class="breadcrumb-section">
    <div class="container">
      <div class="text-merge"><a href="{{route('home-page')}}" class="breadcrumb-link">Home</a>
        <div class="breadcrumb-link">/</div>
        <div class="breadcrumb-link"><a href="{{route('sign-up')}}" class="breadcrumb-link">Sign Up</a></div>
      </div>
    </div>
  </section>
  <div class="user-form-section">
    <div class="container">
      <div class="w-users-usersignupformwrapper user-form-wrapper">
        <div tabindex="-1" class="w-users-userformsuccessstate w-form-success">
          <div class="w-users-userformheader"><img loading="lazy" src="./sign up_files/thumbs-up-72.cbcaec93bc.svg"
              alt="">
            <h2>Account activated</h2>
          </div>
          <p>Your account was created successfully. You will be redirected shortly.</p>
          <div data-wf-user-form-redirect=""><a href="https://bookstorex-tnc.webflow.io/" class="w-inline-block">If
              nothing happens, click here.</a></div>
        </div>
        <div class="vertical-center-align">
          <h1>Welcome to</h1>
          <div class="margin-top-10px">
            <h2 class="_36px-text">Bookstore TNC</h2>
          </div>
          <div class="user-button-link-wrapper"><a href="{{route('sign-in')}}"
              class="user-link-button w-button">Login</a><a href="{{route('sign-up')}}"
              aria-current="page" class="user-link-button w-button w--current">Register</a></div>
        </div>
        <form class="user-form" method="post" data-wf-user-form-type="signup">
          <div class="w-users-userformheader margin-bottom-23px">
            <div class="_26px-text-600">Create an Account</div>
          </div>
          <div class="user-label">Full name</div><input class="user-input w-input" maxlength="256" name=""
            data-name="field" data-wf-user-field="wf-user-field-name" placeholder="" fieldtype="" type="text" id="name"
            required="">
          <div class="user-label">Email Address</div><input placeholder="" id="wf-sign-up-email" maxlength="256"
            name="Email" class="user-input w-input" type="email" autocomplete="username" required=""
            data-wf-user-form-input-type="email">
          <div class="user-label">Password</div><input placeholder="" id="wf-sign-up-password" data-name=""
            maxlength="256" name="Password" class="user-input w-input" type="password" required=""
            data-wf-user-form-input-type="password">
          <div class="w-users-userformfooter form-footer"><label class="w-checkbox user-checkbox-field">
              <div class="w-checkbox-input w-checkbox-input--inputType-custom circle-checkbox"></div><input name=""
                data-name="Checkbox" data-wf-user-field="wf-user-field-accept-privacy" placeholder="" type="checkbox"
                id="acceptPrivacy" required="" style="opacity:0;position:absolute;z-index:-1"><span
                class="_16px-500 w-form-label">I agree to the terms of service</span>
            </label></div><input data-wait="Please wait..." type="submit"
            class="w-users-userformbutton user-button w-button" value="Sign Up" wf-submit-button-value="Sign Up">
          <div class="log-in-borders-wrapper">
            <div class="user-border"></div>
            <p>or Login with</p>
            <div class="user-border"></div>
          </div>
          <div class="user-social-logins-wrapper"><a href="https://facebook.com/ThemeNcode" target="_blank"
              class="social-icon-transparent"></a><a href="https://twitter.com/ThemeNcode" target="_blank"
              class="social-icon-transparent twitter"></a><a href="https://twitter.com/ThemeNcode" target="_blank"
              class="social-icon-transparent google"></a><a href="https://www.linkedin.com/company/themencode"
              target="_blank" class="social-icon-transparent linkedin"></a><a href="https://pinterest.com/ThemeNcode"
              target="_blank" class="social-icon-transparent pinterest"></a></div>
        </form>
        <div style="display:none" data-wf-user-form-error="true" class="w-users-userformerrorstate w-form-fail">
          <div class="user-form-error-msg"
            wf-signup-form-general-error-error="There was an error signing you up. Please try again, or contact us if you continue to have problems."
            wf-signup-form-not-allowed-error="You&#39;re not allowed to access this site, please contact the admin for support."
            wf-signup-form-invalid-email-error="Make sure your email exists and is properly formatted (e.g., user@domain.com)."
            wf-signup-form-email-already_exist-error="An account with this email address already exists. Log in or reset your password."
            wf-signup-form-use-invite_email-error="Use the same email address your invitation was sent to."
            wf-signup-form-invalid-password-error="Your password must be at least 8 characters."
            wf-signup-form-not-verified-error="We couldn&#39;t verify your account. Please try again, or contact us if you continue to have problems."
            wf-signup-form-expired-token-error="This link has expired. A new link has been sent to your email. Please try again, or contact us if you continue to have problems."
            wf-signup-form-validation-failed-error="There was an error in some of the information provided.">There was
            an error signing you up. Please try again, or contact us if you continue to have problems.</div>
        </div>
        <div tabindex="-1" class="w-users-usersignupverificationmessage w-form-verification"
          data-wf-user-form-verification="true">
          <div class="w-users-userformheader"><img loading="lazy" src="./sign up_files/email-72.67fa6be437.svg" alt="">
            <h2>Verification Required</h2>
          </div>
          <p>Account verification required. Please check your email to find your unique verification link.</p>
        </div>
      </div>
    </div>
  </div>


@endsection
@extends('frontend.layouts.app')

@section('content')
<section class="breadcrumb-section">
    <div class="container">
      <div class="text-merge">
        <a href="{{route('home-page')}}" class="breadcrumb-link"
          >Home</a
        >
        <div class="breadcrumb-link">/</div>
        <div class="breadcrumb-link"><a href="{{route('sign-in')}}" class="breadcrumb-link">Login</a></div>
      </div>
    </div>
  </section>
  <div class="user-form-section">
    <div class="container">
      <div class="w-users-userloginformwrapper user-form-wrapper">
        <div class="vertical-center-align">
          <h1>Welcome to</h1>
          <h2 class="_36px-text">Bookstore TNC</h2>
          <div class="user-button-link-wrapper">
            <a
              href="{{route('sign-in')}}"
              aria-current="page"
              class="user-link-button w-button w--current"
              >Login</a
            ><a
              href="{{route('sign-up')}}"
              class="user-link-button w-button"
              >Register</a
            >
          </div>
        </div>
        <form
          class="user-form"
          data-wf-user-form-type="login"
          data-wf-user-form-redirect="/"
          method="post"
        >
          <div class="w-users-userformheader margin-bottom-23px">
            <div class="_26px-text-600-neutral-400">Login to your account</div>
          </div>
          <div class="user-label">Email Address</div>
          <input
            placeholder=""
            id="wf-log-in-email"
            maxlength="256"
            name="Email"
            class="user-input w-input"
            type="email"
            autocomplete="username"
            required=""
            data-wf-user-form-input-type="email"
          />
          <div class="user-label">Password</div>
          <input
            placeholder=""
            id="wf-log-in-password"
            maxlength="256"
            name="Password"
            class="user-input w-input"
            type="password"
            required=""
            data-wf-user-form-input-type="password"
          />
          <div class="w-users-userformfooter form-footer">
            <a
              href="https://bookstorex-tnc.webflow.io/reset-password"
              class="tertiary-link"
              >Forgot Password?</a
            >
          </div>
          <input
            data-wait="Please wait..."
            type="submit"
            class="w-users-userformbutton user-button w-button"
            value="Log In"
            wf-submit-button-value="Log In"
          />
          <div class="log-in-borders-wrapper">
            <div class="user-border"></div>
            <p class="_18px-500">or Login with</p>
            <div class="user-border"></div>
          </div>
          <div class="user-social-logins-wrapper">
            <a
              href="https://facebook.com/ThemeNcode"
              target="_blank"
              class="social-icon-transparent"
              ></a
            ><a
              href="https://twitter.com/ThemeNcode"
              target="_blank"
              class="social-icon-transparent twitter"
              ></a
            ><a
              href="https://twitter.com/ThemeNcode"
              target="_blank"
              class="social-icon-transparent google"
              ></a
            ><a
              href="https://www.linkedin.com/company/themencode"
              target="_blank"
              class="social-icon-transparent linkedin"
              ></a
            ><a
              href="https://pinterest.com/ThemeNcode"
              target="_blank"
              class="social-icon-transparent pinterest"
              ></a
            >
          </div>
        </form>
        <div
          style="display: none"
          data-wf-user-form-error="true"
          class="w-users-userformerrorstate w-form-fail"
        >
          <div
            class="user-form-error-msg"
            wf-login-form-general-error-error="We&#39;re having trouble logging you in. Please try again, or contact us if you continue to have problems."
            wf-login-form-invalid-email_or_password-error="Invalid email or password. Please try again."
          >
            We're having trouble logging you in. Please try again, or contact us
            if you continue to have problems.
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

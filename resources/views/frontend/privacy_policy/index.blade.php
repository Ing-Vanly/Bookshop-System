@extends('frontend.layouts.app')

@section('content')



<section class="breadcrumb-section">
    <div class="container">
      <div class="text-merge"><a href="{{route('home-page')}}" class="breadcrumb-link">Home</a>
        <div class="breadcrumb-link">/</div>
        <div class="breadcrumb-link"><a href="{{route('privacy-policy')}}" class="breadcrumb-link">Privacy Policy</a></div>
      </div>
    </div>
  </section>
  <div class="page-wrapper">
    <section class="section">
      <div class="container">
        <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100"
          class="policy-tab w-tabs">
          <div class="policy-tab-menu w-tab-menu" role="tablist"><a data-w-tab="Tab 1"
              class="policy-tab-link w-inline-block w-tab-link w--current" id="w-tabs-0-data-w-tab-0"
              href="https://bookstorex-tnc.webflow.io/privacy-poilcy#w-tabs-0-data-w-pane-0" role="tab"
              aria-controls="w-tabs-0-data-w-pane-0" aria-selected="true">
              <div>Privacy Policy</div>
            </a><a data-w-tab="Tab 2" class="policy-tab-link w-inline-block w-tab-link" tabindex="-1"
              id="w-tabs-0-data-w-tab-1" href="https://bookstorex-tnc.webflow.io/privacy-poilcy#w-tabs-0-data-w-pane-1"
              role="tab" aria-controls="w-tabs-0-data-w-pane-1" aria-selected="false">
              <div>Refund Policy</div>
            </a><a data-w-tab="Tab 3" class="policy-tab-link w-inline-block w-tab-link" tabindex="-1"
              id="w-tabs-0-data-w-tab-2" href="https://bookstorex-tnc.webflow.io/privacy-poilcy#w-tabs-0-data-w-pane-2"
              role="tab" aria-controls="w-tabs-0-data-w-pane-2" aria-selected="false">
              <div>Terms &amp; Use</div>
            </a></div>
          <div class="policy-contents w-tab-content">
            <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active" id="w-tabs-0-data-w-pane-0" role="tabpanel"
              aria-labelledby="w-tabs-0-data-w-tab-0">
              <div class="rich-text-block w-richtext">
                <h3>Information We Collect</h3>
                <ol start="" role="list">
                  <li><strong>Personal Information:</strong> When you register or use the App, we may collect personal
                    information such as your name, email address, and any other information you choose to provide.</li>
                  <li><strong>Device Information:</strong> We may automatically collect information about the device you
                    use to access the App, including the device model, operating system, unique device identifiers, and
                    mobile network information.</li>
                  <li><strong>Usage Data:</strong> We collect information about how you interact with the App, such as
                    the features you use, the buttons you click, and the pages you visit.</li>
                </ol>
                <h3>How We Use Your Information:<br></h3>
                <ol start="" role="list">
                  <li><strong>Provide and Improve the App:</strong> We use the information collected to provide,
                    maintain, and improve the features and functionality of the App.</li>
                  <li><strong>Communication:</strong> We may use your email address to send you important updates,
                    notifications, and information related to the App.</li>
                  <li><strong>Analytics:</strong> We use analytics tools to understand how users interact with the App,
                    allowing us to enhance user experience and improve our services.</li>
                </ol>
              </div>
            </div>
            <div data-w-tab="Tab 2" class="w-tab-pane" id="w-tabs-0-data-w-pane-1" role="tabpanel"
              aria-labelledby="w-tabs-0-data-w-tab-1">
              <div class="rich-text-block w-richtext">
                <p>Welcome to Ecommerce TNC! We strive to ensure your satisfaction with every purchase, but we
                  understand that sometimes things don’t work out. Our refund policy is designed to be transparent and
                  fair, ensuring you can shop with confidence.</p>
                <h4>1. Eligibility for Returns and Refunds</h4>
                <p>To be eligible for a return and refund, please ensure that:</p>
                <ul role="list">
                  <li>The item was purchased in the last 30 days.</li>
                  <li>The item is in its original condition: unworn, unwashed, and with all the original tags and
                    packaging intact.</li>
                  <li>You have the receipt or proof of purchase.</li>
                </ul>
                <h4>2. Non-Returnable Items</h4>
                <p>Please note that certain types of items cannot be returned, such as:<br></p>
                <ol start="" role="list">
                  <li>Provide and Improve the App: We use the information collected to provide, maintain, and improve
                    the features and functionality of the App.</li>
                  <li>Communication: We may use your email address to send you important updates, notifications, and
                    information related to the App.</li>
                  <li>Analytics: We use analytics tools to understand how users interact with the App, allowing us to
                    enhance user experience and improve our services.</li>
                </ol>
              </div>
            </div>
            <div data-w-tab="Tab 3" class="w-tab-pane" id="w-tabs-0-data-w-pane-2" role="tabpanel"
              aria-labelledby="w-tabs-0-data-w-tab-2">
              <div class="rich-text-block w-richtext">
                <p>Welcome to Ecommerce TNC! We strive to ensure your satisfaction with every purchase, but we
                  understand that sometimes things don’t work out. Our refund policy is designed to be transparent and
                  fair, ensuring you can shop with confidence.</p>
                <h4>Terms &amp; Use</h4>
                <p>To be eligible for a return and refund, please ensure that:</p>
                <ul role="list">
                  <li>The item was purchased in the last 30 days.</li>
                  <li>The item is in its original condition: unworn, unwashed, and with all the original tags and
                    packaging intact.</li>
                  <li>You have the receipt or proof of purchase.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection

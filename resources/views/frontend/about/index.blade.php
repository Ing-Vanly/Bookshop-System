@extends('frontend.layouts.app')

@section('content')

<section class="breadcrumb-section">
    <div class="container">
      <div class="text-merge"><a href="{{route('home-page')}}" class="breadcrumb-link">Home</a>
        <div class="breadcrumb-link">/</div>
        <div class="breadcrumb-link"><a href="{{route('about')}}" class="breadcrumb-link">About Me</a></div>
      </div>
    </div>
  </section>
  <div class="page-wrapper">
    <section class="section-60px">
      <div class="container">
        <div class="_2-column-block center">
          <div class="image-wrapper-50"><img class="image-75"
              src="{{asset('frontend/assets')}}/img/66b325f348e61244ebf150e0_Rectangle 769.png" alt=""
              style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
              sizes="(max-width: 479px) 70vw, (max-width: 767px) 71vw, (max-width: 991px) 72vw, 34vw"
              data-w-id="6d11fbec-1a06-4738-220b-0e8436dcc027" loading="lazy"
              srcset="https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6c8/66b325f348e61244ebf150e0_Rectangle%20769-p-500.png 500w, https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6c8/66b325f348e61244ebf150e0_Rectangle%20769-p-800.png 800w, https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6c8/66b325f348e61244ebf150e0_Rectangle%20769.png 920w"><img
              class="absolute-image-60" src="{{asset('frontend/assets')}}/img/66b325f36164f5ffa25df020_Rectangle 770.png" alt=""
              style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
              sizes="(max-width: 479px) 56vw, (max-width: 991px) 57vw, 27vw"
              data-w-id="cf963862-e739-5469-475f-8d00f6915169" loading="lazy"
              srcset="https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6c8/66b325f36164f5ffa25df020_Rectangle%20770-p-500.png 500w, https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6c8/66b325f36164f5ffa25df020_Rectangle%20770.png 728w">
          </div>
          <div class="contents about"
            style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
            <div class="margin-bottom-10px">
              <div class="_20px-500-secondary">Welcome to Bookstore TNC</div>
            </div>
            <h2>Discover the Story Behind BookStore TNC</h2>
            <p class="margin-30px">Delve into the origins and mission of BookStore TNC, where a passion for literature
              meets a commitment to enriching reading experiences through diverse selections, exceptional service, and
              community engagement. Learn about our journey and vision.</p>
            <div class="vertical-left-top-30px-gap">
              <div class="horizontal-left-center-35px-gap vertical">
                <div class="w-layout-hflex horizontal-left-center-10px-gap"><img
                    src="{{asset('frontend/assets')}}/img/67036f81125260b47d160f2d_Frame423.png" loading="lazy" alt="" class="image-24px">
                  <div class="_18px-500">Best Book Seller</div>
                </div>
                <div class="w-layout-hflex horizontal-left-center-10px-gap"><img
                    src="{{asset('frontend/assets')}}/img/67036f81125260b47d160f2d_Frame423.png" loading="lazy" alt="" class="image-24px">
                  <div class="_18px-500">24k+ Books</div>
                </div>
              </div>
              <div class="horizontal-left-center-35px-gap">
                <div class="w-layout-hflex horizontal-left-center-10px-gap"><img
                    src="{{asset('frontend/assets')}}/img/67036f81125260b47d160f2d_Frame423.png" loading="lazy" alt="" class="image-24px">
                  <div class="_18px-500">On Time Delivery</div>
                </div>
                <div class="w-layout-hflex horizontal-left-center-10px-gap"><img
                    src="{{asset('frontend/assets')}}/img/67036f81125260b47d160f2d_Frame423.png" loading="lazy" alt="" class="image-24px">
                  <div class="_18px-500">Good Customer Feedback</div>
                </div>
              </div>
            </div>
            <div class="margin-top-60px"><a data-w-id="ba2560af-a813-130c-b209-b41d37b4cd90"
                href="https://webflow.com/templates/designers/themencode" target="_blank"
                class="primary-button secondary w-inline-block">
                <div class="button-text-wrapper">
                  <div class="default-text">Contact us</div>
                  <div class="hover-text">Contact us</div>
                </div>
                <div class="button-icon">chevron_right</div>
              </a></div>
          </div>
        </div>
      </div>
      <div data-w-id="75dee3a5-aa0c-4906-047e-b09e8cd16d49"
        style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
        class="absolute-line-wrapper">
        <div class="absolute-card">
          <p class="_16px-500-neutral-300">Founded in</p>
          <div class="_46px-title">1995</div>
        </div><img src="{{asset('frontend/assets')}}/img/66deab88e7f6eb11fe31b970_Vector2.png" loading="lazy" alt="" class="svg-line">
      </div>
    </section>
    <section data-w-id="4147d302-4830-487d-1964-149a4cf02a5b" class="white-section center">
      <div class="container">
        <div class="title-wrapper">
          <div class="mask">
            <h2 data-w-id="50783ac9-90d3-f6f1-9bd5-b5e973cac833"
              style="opacity: 0; transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
              Our Mission and Passion</h2>
          </div>
          <div class="mask max-width-650px">
            <div data-w-id="50783ac9-90d3-f6f1-9bd5-b5e973cac836" class="_20px-text-500-neutral-400"
              style="opacity: 0; transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
              Empowering communities through diverse books, exceptional service, and enriching literary experiences at
              BookStore TNC.</div>
          </div>
        </div>
        <div
          data-poster-url="https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6c8%2F66b3406e0acb4ac82119fc67_-c8db-4d70-9ab5-34e69e6ee9f4-poster-00001.jpg"
          data-video-urls="https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6c8%2F66b3406e0acb4ac82119fc67_-c8db-4d70-9ab5-34e69e6ee9f4-transcode.mp4,https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6c8%2F66b3406e0acb4ac82119fc67_-c8db-4d70-9ab5-34e69e6ee9f4-transcode.webm"
          data-autoplay="false" data-loop="true" data-wf-ignore="true"
          class="about-video w-background-video w-background-video-atom"><video
            id="25ad241b-95c3-072f-f460-5a6639c15efd-video" loop=""
            style="background-image:url(&quot;https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6c8%2F66b3406e0acb4ac82119fc67_-c8db-4d70-9ab5-34e69e6ee9f4-poster-00001.jpg&quot;)"
            muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
            <source
              src="https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6c8%2F66b3406e0acb4ac82119fc67_-c8db-4d70-9ab5-34e69e6ee9f4-transcode.mp4"
              data-wf-ignore="true">
            <source
              src="https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6c8%2F66b3406e0acb4ac82119fc67_-c8db-4d70-9ab5-34e69e6ee9f4-transcode.webm"
              data-wf-ignore="true">
          </video><noscript>
            <style>
              [data-wf-bgvideo-fallback-img] {
                display: none;
              }

              @media (prefers-reduced-motion: reduce) {
                [data-wf-bgvideo-fallback-img] {
                  position: absolute;
                  z-index: -100;
                  display: inline-block;
                  height: 100%;
                  width: 100%;
                  object-fit: cover;
                }
              }
            </style><img data-wf-bgvideo-fallback-img="true"
              src="{{asset('frontend/assets')}}/img/66ffc1a5c49c28bb3bdee817_image.png"
              alt="" />
          </noscript>
          <div aria-live="polite"><button type="button" data-w-bg-video-control="true"
              aria-controls="25ad241b-95c3-072f-f460-5a6639c15efd-video"
              class="w-backgroundvideo-backgroundvideoplaypausebutton play-pause-button w-background-video--control"><span
                class="play-pause-button-wrapper bottom-right" hidden="">
                <div class="_30px-icon-white">pause</div>
              </span><span class="play-pause-button-wrapper">
                <div class="_44px-icon-white">play_arrow</div>
              </span></button></div>
        </div>
      </div>
      <div class="fancy-text top"
        style="will-change: transform; transform: translate3d(-92.886%, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
        Bookshops TNC</div>
      <div class="fancy-text center"
        style="will-change: transform; transform: translate3d(92.886%, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
        Bookshops TNC</div>
      <div class="fancy-text bottom"
        style="will-change: transform; transform: translate3d(46.443%, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
        Bookshops TNC</div>
    </section>
    {{-- <section class="section">
      <div class="container">
        <div data-w-id="640f08de-4485-fb7e-b70f-5f4cab692d33"
          style="opacity: 0; transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
          class="cta-block">
          <div data-w-id="640f08de-4485-fb7e-b70f-5f4cab692d34"
            style="opacity: 0; transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
            class="cta-contents-12px-gap">
            <h2 data-w-id="640f08de-4485-fb7e-b70f-5f4cab692d35"
              style="opacity: 0; transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
              class="_46px-title white">Get 50% discount on your first order!</h2>
            <div class="margin-bottom-38px">
              <p data-w-id="640f08de-4485-fb7e-b70f-5f4cab692d38"
                style="opacity: 0; transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                class="_18-text-500-white">Discover affordable reads under $50 at BookStore TNC! From gripping mysteries
                to heartwarming romances.</p>
            </div><a data-w-id="d8d360e1-f645-321f-d65f-94a46da5403d" href="https://bookstorex-tnc.webflow.io/shop-grid"
              class="primary-button w-inline-block">
              <div class="button-text-wrapper">
                <div class="default-text">Order now</div>
                <div class="hover-text">Order now</div>
              </div>
              <div class="button-icon">arrow_forward_ios</div>
            </a>
          </div>
        </div>
      </div>
    </section> --}}
@endsection

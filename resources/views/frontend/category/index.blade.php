@extends('frontend.layouts.app')

@section('content')

<section class="breadcrumb-section">
    <div class="container">
      <div class="text-merge">
        <a href="https://bookstorex-tnc.webflow.io/" class="breadcrumb-link">Home</a>
        <div class="breadcrumb-link">/</div>
        <a href="https://bookstorex-tnc.webflow.io/shop-grid" class="breadcrumb-link">Shop</a>
        <div class="breadcrumb-link">/</div>
        <div class="breadcrumb-link">Kid</div>
      </div>
    </div>
  </section>
  <section class="section-60px">
    <div class="container">
      <div class="_2-column-block-top reverse">
        <div class="sidebar-290px">
          <div class="w-layout-vflex sidebar-featured-block">
            <div class="margin-bottom-5px">
              <p class="_16px-500-neutral-200">Recommended Collections</p>
            </div>
            <div class="w-dyn-list">
              <div role="list" class="vertical-left-top-16px-gap w-dyn-items">
                <div role="listitem" class="w-dyn-item">
                  <a href="https://bookstorex-tnc.webflow.io/recommended-collections/top-sellers"
                    class="horizontal-left-center-10px-gap-link w-inline-block"><img
                      src="{{asset('frontend/assets')}}/img/67037149a260b82f3a2e9d8d_star-fill.avif" loading="lazy" alt=""
                      class="image-24px" />
                    <p class="_18px-500">Top Sellers</p>
                  </a>
                </div>
                <div role="listitem" class="w-dyn-item">
                  <a href="https://bookstorex-tnc.webflow.io/recommended-collections/featured-sellers"
                    class="horizontal-left-center-10px-gap-link w-inline-block"><img
                      src="{{asset('frontend/assets')}}/img/6703715d605b3d43a61a29d3_shield-star-fill (1).avif" loading="lazy" alt=""
                      class="image-24px" />
                    <p class="_18px-500">Featured Sellers</p>
                  </a>
                </div>
                <div role="listitem" class="w-dyn-item">
                  <a href="https://bookstorex-tnc.webflow.io/recommended-collections/editors-picks"
                    class="horizontal-left-center-10px-gap-link w-inline-block"><img
                      src="{{asset('frontend/assets')}}/img/67037165ba55207b052a7794_heart-fill.png" loading="lazy" alt=""
                      class="image-24px" />
                    <p class="_18px-500">Editor’s Picks</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="w-layout-vflex vertical-left-top-20px-gap">
            <div class="_26px-text-600-neutral-400">
              Show all categories
            </div>
            <div class="widget">
              <div class="w-dyn-list">
                <div role="list" class="product-categories no-gap w-dyn-items">
                  <div role="listitem" class="w-dyn-item">
                    <a href="https://bookstorex-tnc.webflow.io/category/kid" aria-current="page"
                      class="checkbox-field w-inline-block w--current">
                      <div href="#" class="checkbox w-condition-invisible">
                        <img src="{{asset('frontend/assets')}}/img/66ab8282560ac2178fdcc986_check1.webp" loading="lazy" alt=""
                          class="checkbox-image" style="opacity: 0" />
                      </div>
                      <div href="#" class="checkbox active">
                        <img src="{{asset('frontend/assets')}}/img/66ab8282560ac2178fdcc986_check1.webp" loading="lazy" alt=""
                          class="active-check-image" />
                      </div>
                      <div>Kid</div>
                    </a>
                  </div>
                  <div role="listitem" class="w-dyn-item">
                    <a href="https://bookstorex-tnc.webflow.io/category/romance"
                      class="checkbox-field w-inline-block">
                      <div href="#" class="checkbox">
                        <img src="{{asset('frontend/assets')}}/img/66ab8282560ac2178fdcc986_check1.webp" loading="lazy" alt=""
                          class="checkbox-image" style="opacity: 0" />
                      </div>
                      <div href="#" class="checkbox active w-condition-invisible">
                        <img src="{{asset('frontend/assets')}}/img/66ab8282560ac2178fdcc986_check1.webp" loading="lazy" alt=""
                          class="active-check-image" />
                      </div>
                      <div>Romance</div>
                    </a>
                  </div>
                  <div role="listitem" class="w-dyn-item">
                    <a href="https://bookstorex-tnc.webflow.io/category/documentary"
                      class="checkbox-field w-inline-block">
                      <div href="#" class="checkbox">
                        <img src="{{asset('frontend/assets')}}/img/66ab8282560ac2178fdcc986_check1.webp" loading="lazy" alt=""
                          class="checkbox-image" style="opacity: 0" />
                      </div>
                      <div href="#" class="checkbox active w-condition-invisible">
                        <img src="{{asset('frontend/assets')}}/img/66ab8282560ac2178fdcc986_check1.webp" loading="lazy" alt=""
                          class="active-check-image" />
                      </div>
                      <div>Documentary</div>
                    </a>
                  </div>
                  <div role="listitem" class="w-dyn-item">
                    <a href="https://bookstorex-tnc.webflow.io/category/fantasy"
                      class="checkbox-field w-inline-block">
                      <div href="#" class="checkbox">
                        <img src="{{asset('frontend/assets')}}/img/66ab8282560ac2178fdcc986_check1.webp" loading="lazy" alt=""
                          class="checkbox-image" style="opacity: 0" />
                      </div>
                      <div href="#" class="checkbox active w-condition-invisible">
                        <img src="{{asset('frontend/assets')}}/img/66ab8282560ac2178fdcc986_check1.webp" loading="lazy" alt=""
                          class="active-check-image" />
                      </div>
                      <div>Fantasy</div>
                    </a>
                  </div>
                  <div role="listitem" class="w-dyn-item">
                    <a href="https://bookstorex-tnc.webflow.io/category/mystery"
                      class="checkbox-field w-inline-block">
                      <div href="#" class="checkbox">
                        <img src="{{asset('frontend/assets')}}/img/66ab8282560ac2178fdcc986_check1.webp" loading="lazy" alt=""
                          class="checkbox-image" style="opacity: 0" />
                      </div>
                      <div href="#" class="checkbox active w-condition-invisible">
                        <img src="{{asset('frontend/assets')}}/img/66ab8282560ac2178fdcc986_check1.webp" loading="lazy" alt=""
                          class="active-check-image" />
                      </div>
                      <div>Mystery</div>
                    </a>
                  </div>
                  <div role="listitem" class="w-dyn-item">
                    <a href="https://bookstorex-tnc.webflow.io/category/textbook"
                      class="checkbox-field w-inline-block">
                      <div href="#" class="checkbox">
                        <img src="{{asset('frontend/assets')}}/img/66ab8282560ac2178fdcc986_check1.webp" loading="lazy" alt=""
                          class="checkbox-image" style="opacity: 0" />
                      </div>
                      <div href="#" class="checkbox active w-condition-invisible">
                        <img src="{{asset('frontend/assets')}}/img/66ab8282560ac2178fdcc986_check1.webp" loading="lazy" alt=""
                          class="active-check-image" />
                      </div>
                      <div>Textbook</div>
                    </a>
                  </div>
                  <div role="listitem" class="w-dyn-item">
                    <a href="https://bookstorex-tnc.webflow.io/category/thriller"
                      class="checkbox-field w-inline-block">
                      <div href="#" class="checkbox">
                        <img src="{{asset('frontend/assets')}}/img/66ab8282560ac2178fdcc986_check1.webp" loading="lazy" alt=""
                          class="checkbox-image" style="opacity: 0" />
                      </div>
                      <div href="#" class="checkbox active w-condition-invisible">
                        <img src="{{asset('frontend/assets')}}/img/66ab8282560ac2178fdcc986_check1.webp" loading="lazy" alt=""
                          class="active-check-image" />
                      </div>
                      <div>Thriller</div>
                    </a>
                  </div>
                  <div role="listitem" class="w-dyn-item">
                    <a href="https://bookstorex-tnc.webflow.io/category/fiction"
                      class="checkbox-field w-inline-block">
                      <div href="#" class="checkbox">
                        <img src="{{asset('frontend/assets')}}/img/66ab8282560ac2178fdcc986_check1.webp" loading="lazy" alt=""
                          class="checkbox-image" style="opacity: 0" />
                      </div>
                      <div href="#" class="checkbox active w-condition-invisible">
                        <img src="{{asset('frontend/assets')}}/img/66ab8282560ac2178fdcc986_check1.webp" loading="lazy" alt=""
                          class="active-check-image" />
                      </div>
                      <div>Fiction</div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-layout-vflex vertical-left-top-20px-gap">
            <div class="_26px-text-600-neutral-400">
              Filter by top Author
            </div>
            <div class="widget">
              <div class="w-dyn-list">
                <div role="list" class="author-categories w-dyn-items">
                  <div role="listitem" class="w-dyn-item">
                    <a href="https://bookstorex-tnc.webflow.io/book-author/john-doe"
                      class="author-link w-inline-block"><img
                        src="{{asset('frontend/assets')}}/img/6710d687b852284eb2a703b2_Rectangle 756-2.avif" loading="lazy" alt=""
                        sizes="40px" srcset="
                            https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d687b852284eb2a703b2_Rectangle%20756-2-p-500.avif  500w,
                            https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d687b852284eb2a703b2_Rectangle%20756-2.avif       1224w
                          " class="image-40px-rounded" />
                      <div class="_16px-text-500">John Doe</div>
                    </a>
                  </div>
                  <div role="listitem" class="w-dyn-item">
                    <a href="https://bookstorex-tnc.webflow.io/book-author/brooklyn-simmons"
                      class="author-link w-inline-block"><img
                        src="{{asset('frontend/assets')}}/img/6710d6a040a77e5ff462bec2_Rectangle 756.avif" loading="lazy" alt=""
                        sizes="40px" srcset="
                            https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d6a040a77e5ff462bec2_Rectangle%20756-p-500.avif  500w,
                            https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d6a040a77e5ff462bec2_Rectangle%20756.avif       1232w
                          " class="image-40px-rounded" />
                      <div class="_16px-text-500">B. Simmons</div>
                    </a>
                  </div>
                  <div role="listitem" class="w-dyn-item">
                    <a href="https://bookstorex-tnc.webflow.io/book-author/jane-cooper"
                      class="author-link w-inline-block"><img
                        src="{{asset('frontend/assets')}}/img/6710d6c7dcde7675e6a0b7e3_Rectangle 260.avif" loading="lazy" alt=""
                        sizes="40px" srcset="
                            https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d6c7dcde7675e6a0b7e3_Rectangle%20260-p-500.avif  500w,
                            https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d6c7dcde7675e6a0b7e3_Rectangle%20260-p-800.avif  800w,
                            https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d6c7dcde7675e6a0b7e3_Rectangle%20260.avif       1480w
                          " class="image-40px-rounded" />
                      <div class="_16px-text-500">Jane Cooper</div>
                    </a>
                  </div>
                  <div role="listitem" class="w-dyn-item">
                    <a href="https://bookstorex-tnc.webflow.io/book-author/robert-fox"
                      class="author-link w-inline-block"><img
                        src="{{asset('frontend/assets')}}/img/6710d6d44cd83a24350517f3_Rectangle 756-1.avif" loading="lazy" alt=""
                        sizes="40px" srcset="
                            https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d6d44cd83a24350517f3_Rectangle%20756-1-p-500.avif  500w,
                            https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d6d44cd83a24350517f3_Rectangle%20756-1.avif       1224w
                          " class="image-40px-rounded" />
                      <div class="_16px-text-500">Robert Fox</div>
                    </a>
                  </div>
                  <div role="listitem" class="w-dyn-item">
                    <a href="https://bookstorex-tnc.webflow.io/book-author/floyd-mila"
                      class="author-link w-inline-block"><img
                        src="{{asset('frontend/assets')}}/img/6710d6e17227f0ab4784d31e_Rectangle 756-3.avif" loading="lazy" alt=""
                        sizes="40px" srcset="
                            https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d6e17227f0ab4784d31e_Rectangle%20756-3-p-500.avif  500w,
                            https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d6e17227f0ab4784d31e_Rectangle%20756-3.avif       1224w
                          " class="image-40px-rounded" />
                      <div class="_16px-text-500">Floyd Mila</div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="main-block" style="
              opacity: 1;
              transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1)
                rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
              transform-style: preserve-3d;
            ">
          <div class="banner-376px-full">
            <div class="vertical-left-top">
              <h2 class="font-white-color">Big Discount</h2>
              <div class="margin-top-10px-bottom-30px">
                <p class="_20px-text-600-0-8-white-copy">
                  50% Discount for new users
                </p>
              </div>
              <a data-w-id="d8d360e1-f645-321f-d65f-94a46da5403d" href="https://bookstorex-tnc.webflow.io/shop-grid"
                class="primary-button w-inline-block">
                <div class="button-text-wrapper">
                  <div class="default-text">Grab now</div>
                  <div class="hover-text">Grab now</div>
                </div>
                <div class="button-icon">arrow_forward_ios</div>
              </a>
            </div>
          </div>
          <div class="margin-top-40px w-dyn-list">
            <div role="list" class="_3-column-grid w-dyn-items">
              <div role="listitem" class="w-dyn-item">
                <div class="book-wrapper">
                  <a href="https://bookstorex-tnc.webflow.io/product/play-time"
                    class="book-image-wrapper w-inline-block"><img
                      data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                      loading="lazy" alt="" src="{{asset('frontend/assets')}}/img/6710d857e1604eb1c6fcfd9f_book image-3.png"
                      sizes="(max-width: 479px) 100vw, (max-width: 991px) 214px, 15vw" srcset="
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d857e1604eb1c6fcfd9f_book%20image-3-p-500.png 500w,
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d857e1604eb1c6fcfd9f_book%20image-3-p-800.png 800w,
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d857e1604eb1c6fcfd9f_book%20image-3.png       942w
                        " class="book-image" /></a>
                  <div class="book-info-body">
                    <div class="text-merge">
                      <p class="_14px-text-500">By</p>
                      <p class="_14px-text-500">John Doe</p>
                    </div>
                    <a href="https://bookstorex-tnc.webflow.io/product/play-time" class="book-title-link">Play
                      Time</a>
                    <div class="margin-top-10px">
                      <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                        class="_18px-text-600-neutral-400">
                        $&nbsp;9.00&nbsp;USD
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div class="book-wrapper">
                  <a href="https://bookstorex-tnc.webflow.io/product/back-to-school"
                    class="book-image-wrapper w-inline-block"><img
                      data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                      loading="lazy" alt="" src="{{asset('frontend/assets')}}/img/66dfd0bcb317d09f8f4f7a80_book image-8.avif"
                      class="book-image" /></a>
                  <div class="book-info-body">
                    <div class="text-merge">
                      <p class="_14px-text-500">By</p>
                      <p class="_14px-text-500">B. Simmons</p>
                    </div>
                    <a href="https://bookstorex-tnc.webflow.io/product/back-to-school" class="book-title-link">Back To
                      School</a>
                    <div class="margin-top-10px">
                      <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                        class="_18px-text-600-neutral-400">
                        $&nbsp;10.00&nbsp;USD
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div class="book-wrapper">
                  <a href="https://bookstorex-tnc.webflow.io/product/book-day"
                    class="book-image-wrapper w-inline-block"><img
                      data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                      loading="lazy" alt="" src="{{asset('frontend/assets')}}/img/6710d926e8c86e0dfef21bda_book image-4.png"
                      sizes="(max-width: 479px) 100vw, (max-width: 991px) 214px, 15vw" srcset="
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d926e8c86e0dfef21bda_book%20image-4-p-500.png 500w,
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d926e8c86e0dfef21bda_book%20image-4-p-800.png 800w,
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d926e8c86e0dfef21bda_book%20image-4.png       942w
                        " class="book-image" /></a>
                  <div class="book-info-body">
                    <div class="text-merge">
                      <p class="_14px-text-500">By</p>
                      <p class="_14px-text-500">Robert Fox</p>
                    </div>
                    <a href="https://bookstorex-tnc.webflow.io/product/book-day" class="book-title-link">Book Day</a>
                    <div class="margin-top-10px">
                      <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                        class="_18px-text-600-neutral-400">
                        $&nbsp;7.00&nbsp;USD
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div class="book-wrapper">
                  <a href="https://bookstorex-tnc.webflow.io/product/chilldn-blucks"
                    class="book-image-wrapper w-inline-block"><img
                      data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                      loading="lazy" alt="" src="{{asset('frontend/assets')}}/img/6710d956fd9dd1a9f089440a_book image-5.png"
                      sizes="(max-width: 479px) 100vw, (max-width: 991px) 214px, 15vw" srcset="
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d956fd9dd1a9f089440a_book%20image-5-p-500.png 500w,
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d956fd9dd1a9f089440a_book%20image-5-p-800.png 800w,
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d956fd9dd1a9f089440a_book%20image-5.png       942w
                        " class="book-image" /></a>
                  <div class="book-info-body">
                    <div class="text-merge">
                      <p class="_14px-text-500">By</p>
                      <p class="_14px-text-500">B. Simmons</p>
                    </div>
                    <a href="https://bookstorex-tnc.webflow.io/product/chilldn-blucks" class="book-title-link">Chilldn
                      Bluck</a>
                    <div class="margin-top-10px">
                      <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                        class="_18px-text-600-neutral-400">
                        $&nbsp;13.00&nbsp;USD
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div class="book-wrapper">
                  <a href="https://bookstorex-tnc.webflow.io/product/back-to-schools"
                    class="book-image-wrapper w-inline-block"><img
                      data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                      loading="lazy" alt="" src="{{asset('frontend/assets')}}/img/6710d97064c5072a7a930cf7_book image.png"
                      sizes="(max-width: 479px) 100vw, (max-width: 991px) 214px, 15vw" srcset="
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d97064c5072a7a930cf7_book%20image-p-500.png 500w,
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d97064c5072a7a930cf7_book%20image-p-800.png 800w,
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d97064c5072a7a930cf7_book%20image.png       960w
                        " class="book-image" /></a>
                  <div class="book-info-body">
                    <div class="text-merge">
                      <p class="_14px-text-500">By</p>
                      <p class="_14px-text-500">John Doe</p>
                    </div>
                    <a href="https://bookstorex-tnc.webflow.io/product/back-to-schools" class="book-title-link">Back
                      To School</a>
                    <div class="margin-top-10px">
                      <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                        class="_18px-text-600-neutral-400">
                        $&nbsp;9.00&nbsp;USD
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div class="book-wrapper">
                  <a href="https://bookstorex-tnc.webflow.io/product/mebck-mone"
                    class="book-image-wrapper w-inline-block"><img
                      data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                      loading="lazy" alt="" src="{{asset('frontend/assets')}}/img/6710d98cf56ded514733d6c6_book image-2.png"
                      class="book-image" /></a>
                  <div class="book-info-body">
                    <div class="text-merge">
                      <p class="_14px-text-500">By</p>
                      <p class="_14px-text-500">Robert Fox</p>
                    </div>
                    <a href="https://bookstorex-tnc.webflow.io/product/mebck-mone" class="book-title-link">Mebck
                      mone</a>
                    <div class="margin-top-10px">
                      <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                        class="_18px-text-600-neutral-400">
                        $&nbsp;7.00&nbsp;USD
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div class="book-wrapper">
                  <a href="https://bookstorex-tnc.webflow.io/product/school-bluck"
                    class="book-image-wrapper w-inline-block"><img
                      data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                      loading="lazy" alt="" src="{{asset('frontend/assets')}}/img/6710d99c015e583036f10e3c_book image-1.png"
                      sizes="(max-width: 479px) 100vw, (max-width: 991px) 214px, 15vw" srcset="
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d99c015e583036f10e3c_book%20image-1-p-500.png 500w,
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d99c015e583036f10e3c_book%20image-1-p-800.png 800w,
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d99c015e583036f10e3c_book%20image-1.png       938w
                        " class="book-image" /></a>
                  <div class="book-info-body">
                    <div class="text-merge">
                      <p class="_14px-text-500">By</p>
                      <p class="_14px-text-500">B. Simmons</p>
                    </div>
                    <a href="https://bookstorex-tnc.webflow.io/product/school-bluck" class="book-title-link">School
                      Bluck</a>
                    <div class="margin-top-10px">
                      <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                        class="_18px-text-600-neutral-400">
                        $&nbsp;10.00&nbsp;USD
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div class="book-wrapper">
                  <a href="https://bookstorex-tnc.webflow.io/product/hdlgh-horf"
                    class="book-image-wrapper w-inline-block"><img
                      data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                      loading="lazy" alt="" src="{{asset('frontend/assets')}}/img/6710d9de8f5f146a2f4bd2d9_book image-6.png"
                      sizes="(max-width: 479px) 100vw, (max-width: 991px) 214px, 15vw" srcset="
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d9de8f5f146a2f4bd2d9_book%20image-6-p-500.png 500w,
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d9de8f5f146a2f4bd2d9_book%20image-6-p-800.png 800w,
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d9de8f5f146a2f4bd2d9_book%20image-6.png       942w
                        " class="book-image" /></a>
                  <div class="book-info-body">
                    <div class="text-merge">
                      <p class="_14px-text-500">By</p>
                      <p class="_14px-text-500">John Doe</p>
                    </div>
                    <a href="https://bookstorex-tnc.webflow.io/product/hdlgh-horf" class="book-title-link">HDLGH &amp;
                      HORF</a>
                    <div class="margin-top-10px">
                      <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                        class="_18px-text-600-neutral-400">
                        $&nbsp;12.00&nbsp;USD
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div class="book-wrapper">
                  <a href="https://bookstorex-tnc.webflow.io/product/awesome-chillen-book"
                    class="book-image-wrapper w-inline-block"><img
                      data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                      loading="lazy" alt="" src="{{asset('frontend/assets')}}/img/6710d9d2c09bdd82f32b2a75_book image-7.png"
                      sizes="(max-width: 479px) 100vw, (max-width: 991px) 214px, 15vw" srcset="
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d9d2c09bdd82f32b2a75_book%20image-7-p-500.png 500w,
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d9d2c09bdd82f32b2a75_book%20image-7-p-800.png 800w,
                          https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710d9d2c09bdd82f32b2a75_book%20image-7.png       938w
                        " class="book-image" /></a>
                  <div class="book-info-body">
                    <div class="text-merge">
                      <p class="_14px-text-500">By</p>
                      <p class="_14px-text-500">John Doe</p>
                    </div>
                    <a href="https://bookstorex-tnc.webflow.io/product/awesome-chillen-book"
                      class="book-title-link">Awesome Chillen Book</a>
                    <div class="margin-top-10px">
                      <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                        class="_18px-text-600-neutral-400">
                        $&nbsp;7.00&nbsp;USD
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div role="navigation" aria-label="List" class="w-pagination-wrapper"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection


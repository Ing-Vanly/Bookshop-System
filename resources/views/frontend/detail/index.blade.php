@extends('frontend.layouts.app')

@section('content')
    <section class="breadcrumb-section">
        <div class="container">
            <div class="text-merge"><a href="https://bookstorex-tnc.webflow.io/" class="breadcrumb-link">Home</a>
                <div class="breadcrumb-link">/</div><a href="https://bookstorex-tnc.webflow.io/shop-grid"
                    class="breadcrumb-link">Shop</a>
                <div class="breadcrumb-link">/</div>
                <div class="breadcrumb-link">Caaele Bipin</div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container _1140px">
            <div class="_2-column-block-top">
                <div data-w-id="15079dc3-5931-a883-58c8-bf90346d9ca1" class="product-images-wrapper"><a
                        href="https://bookstorex-tnc.webflow.io/product/caaele-bipin#"
                        data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22media%22%7D%5D"
                        data-w-id="15079dc3-5931-a883-58c8-bf90346d9ca2"
                        class="book-image-wrapper product-thumbnail w-inline-block w-lightbox" aria-label="open lightbox"
                        aria-haspopup="dialog"><img
                            data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                            src="{{ asset('frontend/assets') }}/img/6710da0659434f3eefcff5e4_book image.png" alt="" loading="lazy"
                            sizes="(max-width: 479px) 100vw, 360px"
                            srcset="https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710da0659434f3eefcff5e4_book%20image-p-500.png 500w, https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710da0659434f3eefcff5e4_book%20image-p-800.png 800w, https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710da0659434f3eefcff5e4_book%20image.png 856w"
                            class="book-image product-image"
                            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6f7/6710da0659434f3eefcff5e4_book%20image.png",
      "type": "image"
    }
  ],
  "group": "gallery"
}</script>
                    </a></div>
                <div data-w-id="15079dc3-5931-a883-58c8-bf90346d9cac"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                    class="product-details-block">
                    <div>
                        <div class="text-merge">
                            <p class="_14px-text-500">By</p>
                            <p class="_14px-text-500 link">Floyd Mila</p>
                        </div>
                        <div class="margin-top-4px-bottom-16px">
                            <div class="_26px-text-600">Caaele Bipin</div>
                        </div>
                        <div class="rating-block"><img src="{{asset('frontend/assets')}}/img/66b213487fa1b0077959ba4a_Frame 309.png"
                                loading="lazy" alt="" class="star-image">
                            <div class="_12px-500-neutral-200">(10)</div>
                        </div>
                        <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                            class="_18px-text-600-neutral-400">$&nbsp;12.00&nbsp;USD</div>
                    </div>
                    <div class="product-page-divider"></div>
                    <p class="_18px-500">Effect font move vertical share. Connection frame edit export arrow. Undo device
                        move
                        opacity image layer. List star blur strikethrough arrow.</p>
                    <div class="add-to-cart">
                        <form data-node-type="commerce-add-to-cart-form" data-commerce-sku-id="66acbfd6636bae32f4fa0063"
                            data-loading-text="Adding to cart..." data-commerce-product-id="66acbfcfe56183b94f50934c"
                            class="w-commerce-commerceaddtocartform default-state" method="POST">
                            @csrf
                            <input type="number" pattern="^[0-9]+$"
                                inputmode="numeric" id="quantity-99d0eaf5cba728cb33f6c5947ae85e62"
                                name="commerce-add-to-cart-quantity-input" min="1"
                                class="w-commerce-commerceaddtocartquantityinput _54px-qty" value="1"><input
                                type="submit" data-node-type="commerce-add-to-cart-button"
                                data-loading-text="Adding to cart..." aria-busy="false" aria-haspopup="dialog"
                                class="w-commerce-commerceaddtocartbutton submit-button-primary" value="Add to Cart"><a
                                data-node-type="commerce-buy-now-button" data-default-text="Buy now"
                                data-subscription-text="Subscribe now" aria-busy="false" aria-haspopup="false"
                                style="display:none" class="w-commerce-commercebuynowbutton w-dyn-hide"
                                href="https://bookstorex-tnc.webflow.io/checkout">Buy
                                now</a></form>
                        <div style="display:none" class="w-commerce-commerceaddtocartoutofstock" tabindex="0">
                            <div>This product is out of stock.</div>
                        </div>
                        <div aria-live="assertive" data-node-type="commerce-add-to-cart-error" style="display:none"
                            class="w-commerce-commerceaddtocarterror">
                            <div data-node-type="commerce-add-to-cart-error"
                                data-w-add-to-cart-quantity-error="Product is not available in this quantity."
                                data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart."
                                data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription."
                                data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item."
                                data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site."
                                data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product
                                is not
                                available in this quantity.</div>
                        </div>
                    </div>
                    <div class="product-meta-fields-wrapper">
                        <div class="product-meta">
                            <div class="meta">SKU:</div>
                            <p class="meta-info">TNCHP0012U6</p>
                        </div>
                        <div class="product-meta">
                            <div class="meta">Share:</div>
                            <div class="social-share-icon-container"><a href="https://www.facebook.com/ThemeNcode/"
                                    target="_blank" class="social-share-icon"></a><a href="https://twitter.com/ThemeNcode"
                                    target="_blank" class="social-share-icon twitter"></a><a
                                    href="https://pinterest.com/ThemeNcode" target="_blank"
                                    class="social-share-icon pinterest"></a><a
                                    href="https://www.youtube.com/@ThemeNcodeOfficial" target="_blank"
                                    class="social-share-icon youtube"></a></div>
                        </div>
                    </div>
                    <div class="product-page-divider"></div>
                    <div class="w-layout-vflex _8px-gap">
                        <div class="_20px-500">Payment Method:</div>
                        <div class="horizontal-left-center-10px-gap"><img
                                src="{{asset('frontend/assets')}}/img/66b2172f7ea61b18663ca5d5_paypal 1.png" loading="lazy" alt=""
                                class="image-30px"><img src="{{asset('frontend/assets')}}/img/66b2172fa38b6999bd2b9499_visa 1.png"
                                loading="lazy" alt="" class="image-30px"><img
                                src="{{asset('frontend/assets')}}/img/66b2172f06a34c527b5e6009_card 1.png" loading="lazy" alt=""
                                class="image-30px"><img
                                src="{{asset('frontend/assets')}}/img/66b2172f971385031d5340d6_american-express 1.png" loading="lazy"
                                alt="" class="image-30px"><img
                                src="{{asset('frontend/assets')}}/img/66b2172f3c4dc3712cdd896f_discover 1.png" loading="lazy"
                                alt="" class="image-30px">
                        </div>
                    </div>
                </div>
            </div>
            <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100"
                class="product-description-tab w-tabs">
                <div class="product-tab-menu w-tab-menu" role="tablist"><a data-w-tab="Tab 1"
                        class="product-tab-link w-inline-block w-tab-link w--current" id="w-tabs-0-data-w-tab-0"
                        href="https://bookstorex-tnc.webflow.io/product/caaele-bipin#w-tabs-0-data-w-pane-0"
                        role="tab" aria-controls="w-tabs-0-data-w-pane-0" aria-selected="true">
                        <div>Book Details</div>
                    </a><a data-w-tab="Tab 2" class="product-tab-link w-inline-block w-tab-link" tabindex="-1"
                        id="w-tabs-0-data-w-tab-1"
                        href="https://bookstorex-tnc.webflow.io/product/caaele-bipin#w-tabs-0-data-w-pane-1"
                        role="tab" aria-controls="w-tabs-0-data-w-pane-1" aria-selected="false">
                        <div>Additional info</div>
                    </a></div>
                <div class="product-tab-content w-tab-content">
                    <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active" id="w-tabs-0-data-w-pane-0" role="tabpanel"
                        aria-labelledby="w-tabs-0-data-w-tab-0">
                        <div class="rich-text-block w-richtext">
                            <p>Vector device hand undo asset editor figjam link prototype align. Figjam ellipse ellipse
                                figjam content
                                comment pencil. Vector main star undo stroke bold union. Flatten pixel thumbnail flows clip
                                pen list.
                                Vertical outline layer align library layout prototype mask. Invite list share export clip
                                text select.
                                Rectangle layer prototype stroke edit figma draft horizontal overflow list. Effect edit
                                create frame
                                content image arrange. Underline team slice editor undo editor arrange figma layer. Star
                                export scale
                                main blur arrow list scrolling content. </p>
                            <p>Editor component rotate shadow hand. Plugin list boolean inspect pixel pen distribute
                                prototype. Export
                                auto underline line main align.Overflow connection effect duplicate asset image rectangle
                                fill. Shadow
                                align invite frame connection blur content layout effect. Component layout main plugin
                                object thumbnail
                                rectangle pencil follower. Asset undo bold blur project. Flows text frame fill polygon
                                library
                                distribute list. Undo fill share text layer vector horizontal subtract.</p>
                            <figure style="max-width:1746pxpx"
                                class="w-richtext-align-fullwidth w-richtext-figure-type-image">
                                <div><img
                                        src="{{asset('frontend/assets')}}/img/book.png"
                                        loading="lazy" alt=""></div>
                            </figure>
                            <p>Slice comment library clip list edit edit flatten figjam. Arrow pen line pen flows project
                                pen fill
                                opacity connection. Component team hand connection team variant vertical reesizing edit.
                                Outline stroke
                                blur hand shadow overflow background draft. List draft list inspect flows connection auto.
                                Community
                                figjam figjam follower subtract.</p>
                            <p>Image select component editor draft subtract stroke line project font. Overflow align
                                connection editor
                                main vector vector overflow rotate pixel. Strikethrough main selection device auto.
                                Scrolling slice team
                                style background component team plugin. Layout content duplicate draft group follower. Style
                                project
                                clip stroke image draft prototype. Figjam align slice comment move horizontal subtract clip
                                variant.
                                Ellipse flatten edit strikethrough background boolean ipsum link.</p>
                        </div>
                    </div>
                    <div data-w-tab="Tab 2" class="w-tab-pane" id="w-tabs-0-data-w-pane-1" role="tabpanel"
                        aria-labelledby="w-tabs-0-data-w-tab-1">
                        <div class="rich-text-block w-richtext">
                            <p>Vector device hand undo asset editor figjam link prototype align. Figjam ellipse ellipse
                                figjam content
                                comment pencil. Vector main star undo stroke bold union. Flatten pixel thumbnail flows clip
                                pen list.
                                Vertical outline layer align library layout prototype mask. Invite list share export clip
                                text select.
                                Rectangle layer prototype stroke edit figma draft horizontal overflow list. Effect edit
                                create frame
                                content image arrange. Underline team slice editor undo editor arrange figma layer. Star
                                export scale
                                main blur arrow list scrolling content. </p>
                            <p>Editor component rotate shadow hand. Plugin list boolean inspect pixel pen distribute
                                prototype. Export
                                auto underline line main align.Overflow connection effect duplicate asset image rectangle
                                fill. Shadow
                                align invite frame connection blur content layout effect. Component layout main plugin
                                object thumbnail
                                rectangle pencil follower. Asset undo bold blur project. Flows text frame fill polygon
                                library
                                distribute list. Undo fill share text layer vector horizontal subtract.</p>
                            <p>Slice comment library clip list edit edit flatten figjam. Arrow pen line pen flows project
                                pen fill
                                opacity connection. Component team hand connection team variant vertical reesizing edit.
                                Outline stroke
                                blur hand shadow overflow background draft. List draft list inspect flows connection auto.
                                Community
                                figjam figjam follower subtract.</p>
                            <p>Image select component editor draft subtract stroke line project font. Overflow align
                                connection editor
                                main vector vector overflow rotate pixel. Strikethrough main selection device auto.
                                Scrolling slice team
                                style background component team plugin. Layout content duplicate draft group follower. Style
                                project
                                clip stroke image draft prototype. Figjam align slice comment move horizontal subtract clip
                                variant.
                                Ellipse flatten edit strikethrough background boolean ipsum link.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

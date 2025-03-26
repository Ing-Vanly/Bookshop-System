<!DOCTYPE html>
<html jstcache="0">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style type="text/css">
      .gm-inset-map {
        -webkit-box-sizing: border-box;
        border-radius: 3px;
        border-style: solid;
        border-width: 2px;
        -webkit-box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        cursor: pointer;
        box-sizing: border-box;
        margin: 0;
        overflow: hidden;
        padding: 0;
        position: relative;
      }
      .gm-inset-map:hover {
        border-width: 4px;
        margin: -2px;
        width: 46px;
      }
      .gm-inset-dark {
        background-color: rgb(34, 34, 34);
        border-color: rgb(34, 34, 34);
      }
      .gm-inset-light {
        background-color: white;
        border-color: white;
      }
      sentinel {
      }
    </style>
    <style type="text/css">
      html,
      body,
      #mapDiv {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script src="{{asset('frontend/assets')}}/js/geometry.js"></script>
    <script src="{{asset('frontend/assets')}}/js/search.js"></script>
    <script src="{{asset('frontend/assets')}}/js/main.js"></script>
    <script
      type="text/javascript"
      charset="UTF-8"
      src="{{asset('frontend/assets')}}/js/common.js"
      nonce=""
    ></script>
    <script
      type="text/javascript"
      charset="UTF-8"
      src="{{asset('frontend/assets')}}/js/util.js"
      nonce=""
    ></script>
    <script
      type="text/javascript"
      charset="UTF-8"
      src="{{asset('frontend/assets')}}/js/map.js"
      nonce=""
    ></script>
    <script
      type="text/javascript"
      charset="UTF-8"
      src="{{asset('frontend/assets')}}/js/overlay.js"
      nonce=""
    ></script>
    <script
      type="text/javascript"
      charset="UTF-8"
      src="{{asset('frontend/assets')}}/js/onion.js"
      nonce=""
    ></script>
    <script
      type="text/javascript"
      charset="UTF-8"
      src="{{asset('frontend/assets')}}/js/search_impl.js"
      nonce=""
    ></script>
    <style>
      .gm-style .icon {
        background-image: url(https://maps.gstatic.com/mapfiles/embed/images/entity11.png);
        background-size: 70px 210px;
      }
      @media (-webkit-min-device-pixel-ratio: 1.2),
        (min-resolution: 1.2dppx),
        (min-resolution: 116dpi) {
        .gm-style .icon {
          background-image: url(https://maps.gstatic.com/mapfiles/embed/images/entity11_hdpi.png);
          background-size: 70px 210px;
        }
      }
      .gm-style .experiment-icon {
        background-image: url(https://maps.gstatic.com/mapfiles/embed/images/exp2.png);
        background-size: 109px 276px;
      }
      @media (-webkit-min-device-pixel-ratio: 1.2),
        (min-resolution: 1.2dppx),
        (min-resolution: 116dpi) {
        .gm-style .experiment-icon {
          background-image: url(https://maps.gstatic.com/mapfiles/embed/images/exp2_hdpi.png);
          background-size: 109px 276px;
        }
      }
      .gm-style .place-card div,
      .gm-style .place-card a,
      .gm-style .default-card div,
      .gm-style .default-card a {
        color: #5b5b5b;
        font-family: Roboto, Arial;
        font-size: 12px;
        -moz-user-select: text;
        -webkit-user-select: text;
        -ms-user-select: text;
        user-select: text;
      }
      .gm-style .place-card,
      .gm-style .default-card,
      .gm-style .directions-card {
        cursor: default;
      }
      .gm-style .place-card-large {
        padding: 9px 4px 9px 11px;
      }
      .gm-style .place-card-medium {
        width: auto;
        padding: 9px 11px 9px 11px;
      }
      .gm-style .default-card {
        padding: 5px 14px 5px 14px;
      }
      .gm-style .place-card a:link,
      .gm-style .default-card a:link,
      .gm-style .directions-card a:link {
        text-decoration: none;
        color: #1a73e8;
      }
      .gm-style .place-card a:visited,
      .gm-style .default-card a:visited,
      .gm-style .directions-card a:visited {
        color: #1a73e8;
      }
      .gm-style .place-card a:hover,
      .gm-style .default-card a:hover,
      .gm-style .directions-card a:hover {
        text-decoration: underline;
      }
      .gm-style .place-desc-large {
        width: 200px;
        display: inline-block;
      }
      .gm-style .place-desc-medium {
        display: inline-block;
      }
      .gm-style .place-card .place-name {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        font-weight: 500;
        font-size: 14px;
        color: black;
      }
      html[dir="rtl"] .gm-style .place-name {
        padding-right: 5px;
      }
      .gm-style .place-card .address {
        margin-top: 6px;
      }
      .gm-style .tooltip-anchor {
        width: 100%;
        position: relative;
        float: right;
        z-index: 1;
      }
      .gm-style .navigate .tooltip-anchor {
        width: 50%;
        display: none;
      }
      .gm-style .navigate:hover .tooltip-anchor {
        display: inline;
      }
      .gm-style .tooltip-anchor > .tooltip-tip-inner,
      .gm-style .tooltip-anchor > .tooltip-tip-outer {
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        background-color: transparent;
        position: absolute;
        left: -8px;
      }
      .gm-style .tooltip-anchor > .tooltip-tip-outer {
        border-bottom: 8px solid #cbcbcb;
      }
      .gm-style .tooltip-anchor > .tooltip-tip-inner {
        border-bottom: 8px solid white;
        z-index: 1;
        top: 1px;
      }
      .gm-style .tooltip-content {
        position: absolute;
        top: 8px;
        left: -70px;
        line-height: 137%;
        padding: 10px 12px 10px 13px;
        width: 210px;
        margin: 0;
        border: 1px solid #cbcbcb;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 2px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        background-color: white;
      }
      html[dir="rtl"] .gm-style .tooltip-content {
        left: -10px;
      }
      .gm-style .navigate {
        display: inline-block;
        vertical-align: top;
        height: 43px;
        padding: 0 7px;
      }
      .gm-style .navigate-link {
        display: block;
      }
      .gm-style .place-card .navigate-text {
        margin-top: 5px;
        text-align: center;
        color: #1a73e8;
        font-size: 12px;
        max-width: 100px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
      }
      .gm-style .place-card .hidden {
        margin: 0;
        padding: 0;
        height: 0;
        overflow: hidden;
      }
      .gm-style .navigate-icon {
        width: 22px;
        height: 22px;
        overflow: hidden;
        margin: 0 auto;
      }
      .gm-style .navigate-icon {
        border: 0;
      }
      .gm-style .navigate-separator {
        display: inline-block;
        width: 1px;
        height: 43px;
        vertical-align: top;
        background: -webkit-linear-gradient(top, #fbfbfb, #e2e2e2, #fbfbfb);
        background: -moz-linear-gradient(top, #fbfbfb, #e2e2e2, #fbfbfb);
        background: -ms-linear-gradient(top, #fbfbfb, #e2e2e2, #fbfbfb);
        background: -linear-gradient(top, #fbfbfb, #e2e2e2, #fbfbfb);
      }
      .gm-style .review-box {
        padding-top: 5px;
      }
      .gm-style .place-card .review-box-link {
        padding-left: 8px;
      }
      .gm-style .place-card .review-number {
        display: inline-block;
        color: #5b5b5b;
        font-weight: 500;
        font-size: 14px;
      }
      .gm-style .review-box .rating-stars {
        display: inline-block;
      }
      .gm-style .rating-star {
        display: inline-block;
        width: 11px;
        height: 11px;
        overflow: hidden;
      }
      .gm-style .directions-card {
        color: #5b5b5b;
        font-family: Roboto, Arial;
        background-color: white;
        -moz-user-select: text;
        -webkit-user-select: text;
        -ms-user-select: text;
        user-select: text;
      }
      .gm-style .directions-card-medium-large {
        height: 61px;
        padding: 10px 11px;
      }
      .gm-style .directions-info {
        padding-left: 25px;
      }
      .gm-style .directions-waypoint {
        height: 20px;
      }
      .gm-style .directions-address {
        font-weight: 400;
        font-size: 13px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        color: black;
      }
      .gm-style .directions-icon {
        float: left;
        vertical-align: top;
        position: relative;
        top: -1px;
        height: 50px;
        width: 20px;
      }
      .gm-style .directions-icon div {
        width: 15px;
        height: 45px;
        overflow: hidden;
      }
      .gm-style .directions-separator {
        position: relative;
        height: 1px;
        margin-top: 3px;
        margin-bottom: 4px;
        background-color: #ccc;
      }
      .gm-style .navigate-icon {
        background-position: 0 0;
      }
      .gm-style .navigate:hover .navigate-icon {
        background-position: 48px 0;
      }
      .gm-style .rating-full-star {
        background-position: 48px 165px;
      }
      .gm-style .rating-half-star {
        background-position: 35px 165px;
      }
      html[dir="rtl"] .gm-style .rating-half-star {
        background-position: 10px 165px;
      }
      .gm-style .rating-empty-star {
        background-position: 23px 165px;
      }
      .gm-style .directions-icon {
        background-position: 0 144px;
      }
      .gm-style .info {
        height: 30px;
        width: 30px;
        background-position: 19px 36px;
      }
      .gm-style .bottom-actions {
        padding-top: 10px;
      }
      .gm-style .bottom-actions .google-maps-link {
        display: inline-block;
      }
      .saved-from-source-link {
        margin-top: 5px;
        max-width: 331px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
      }
    </style>
  </head>
  <body jstcache="0" style="overflow: hidden">
    <div id="mapDiv" dir=""><div style="height: 100%; width: 100%"></div></div>

    <script nonce="">
      function onEmbedLoad() {
        initEmbed([
          null,
          null,
          null,
          null,
          null,
          [
            [
              [
                2,
                "spotlit",
                null,
                null,
                null,
                null,
                null,
                [
                  null,
                  null,
                  null,
                  null,
                  null,
                  null,
                  null,
                  null,
                  null,
                  null,
                  11,
                  null,
                  [
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    1,
                  ],
                ],
              ],
            ],
            null,
            null,
            [
              [
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                [
                  [
                    ["9923602171368420039", "14406435510458217903"],
                    "/m/033xmz",
                    null,
                    [388912662, 3524706642],
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    "gcid:natural_history_museum",
                  ],
                  0,
                  0,
                  null,
                  null,
                  0,
                  null,
                  0,
                ],
              ],
            ],
          ],
          null,
          ["en", "bd"],
          [
            null,
            null,
            null,
            "/maps/api/js/ApplicationService.GetEntityDetails",
            "/maps/embed/upgrade204",
            null,
            "/maps/embed/record204",
          ],
          null,
          null,
          null,
          null,
          null,
          null,
          null,
          null,
          "fQrdZ4aHD-KX4-EPqsamgQI",
          null,
          null,
          null,
          [
            [
              [13366.05523058367, -77.02606539999999, 38.8912662],
              [0, 0, 0],
              null,
              13.10000038146973,
            ],
            null,
            0,
            [
              [
                "0x89b7b798ecb5b2c7:0xc7edf0c4a86f75af",
                "Smithsonian National Museum of Natural History, 10th St. \u0026 Constitution Ave. NW, Washington, DC 20560, United States",
                [38.8912662, -77.02606539999999],
                "14406435510458217903",
              ],
              "Smithsonian National Museum of Natural History",
              [
                "10th St. \u0026 Constitution Ave. NW",
                "Washington, DC 20560",
                "United States",
              ],
              4.800000190734863,
              "52,693 reviews",
              "https://search.google.com/local/reviews?placeid=ChIJx7K17Ji3t4kRr3VvqMTw7cc\u0026q=Smithsonian+National+Museum+of+Natural+History\u0026hl=en\u0026gl=BD",
              null,
              "+1 202-633-1000",
              null,
              null,
              null,
              [
                "https://naturalhistory.si.edu/",
                "naturalhistory.si.edu",
                null,
                null,
                ",AOvVaw2Py6A1hdtFDZuohUZ5E2r0,,0ahUKEwjGubaKyZqMAxXiyzgGHSqjKSAQ61gIFCgQ,",
              ],
              "Natural history museum",
              "10th St. \u0026 Constitution Ave. NW, Washington, DC 20560, United States",
              null,
              null,
              null,
              null,
              null,
              null,
              null,
              null,
              null,
              1,
              null,
              null,
              null,
              "ChIJx7K17Ji3t4kRr3VvqMTw7cc",
              null,
              null,
              "0ahUKEwjGubaKyZqMAxXiyzgGHSqjKSAQ8BcIAigA",
              null,
              null,
              ["tel:+12026331000"],
              null,
              null,
              null,
              1,
              [
                "0ahUKEwjGubaKyZqMAxXiyzgGHSqjKSAQqtMBCA0oCg",
                ["87C4VXRF+GH"],
                ["VXRF+GH Washington, District of Columbia, USA"],
                3,
              ],
              [
                [
                  [
                    "Friday",
                    5,
                    [2025, 3, 21],
                    [["10 AM–5:30 PM", [[10], [17, 30]]]],
                    0,
                    1,
                  ],
                  [
                    "Saturday",
                    6,
                    [2025, 3, 22],
                    [["10 AM–5:30 PM", [[10], [17, 30]]]],
                    0,
                    1,
                  ],
                  [
                    "Sunday",
                    7,
                    [2025, 3, 23],
                    [["10 AM–5:30 PM", [[10], [17, 30]]]],
                    0,
                    1,
                  ],
                  [
                    "Monday",
                    1,
                    [2025, 3, 24],
                    [["10 AM–5:30 PM", [[10], [17, 30]]]],
                    0,
                    1,
                  ],
                  [
                    "Tuesday",
                    2,
                    [2025, 3, 25],
                    [["10 AM–5:30 PM", [[10], [17, 30]]]],
                    0,
                    1,
                  ],
                  [
                    "Wednesday",
                    3,
                    [2025, 3, 26],
                    [["10 AM–5:30 PM", [[10], [17, 30]]]],
                    0,
                    1,
                  ],
                  [
                    "Thursday",
                    4,
                    [2025, 3, 27],
                    [["10 AM–5:30 PM", [[10], [17, 30]]]],
                    0,
                    1,
                  ],
                ],
                [
                  [
                    "Friday",
                    5,
                    [2025, 3, 21],
                    [["10 AM–5:30 PM", [[10], [17, 30]]]],
                    0,
                    1,
                  ],
                  0,
                  4,
                  null,
                  [
                    "Closed ⋅ Opens 10 AM",
                    [[0, 6, [null, [4292621870, 4294097077]]]],
                  ],
                  [
                    "Closed ⋅ Opens 10 AM",
                    [[0, 6, [null, [4292621870, 4294097077]]]],
                  ],
                  null,
                  null,
                  ["Closed", [[0, 6, [null, [4292621870, 4294097077]]]]],
                ],
                5,
                null,
                null,
                null,
                1,
              ],
            ],
          ],
          null,
          null,
          null,
          0,
          null,
          null,
          null,
          null,
          null,
          null,
          [1],
        ]);
      }
      function onApiLoad() {
        var embed = document.createElement("script");
        embed.src =
          "{{asset('frontend/assets')}}/js/init_embed.js";
        document.body.appendChild(embed);
      }
    </script>
    <link rel="preload" href="{{asset('frontend/assets')}}/js/init_embed.js" nonce="" as="script" />
    <script src="{{asset('frontend/assets')}}/js/script.js" nonce="" async="" defer=""></script>

    <script src="{{asset('frontend/assets')}}/js/init_embed.js"></script>
  </body>
</html>

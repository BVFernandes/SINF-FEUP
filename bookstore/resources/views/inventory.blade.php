<!DOCTYPE html>
<html lang="en" class="">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <!-- JQuery -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Our Scripts -->
  <script type="text/javascript" src="../js/requests.js"></script>

  <script>
      $(function(){
        console.log("Document Ready");

        //Number of items
        getMaterialItems(function(response) {
          total = 0;
          for(var i in response)
          {
            for(var j in response[i]["materialsItemWarehouses"])
            {
              total += response[i]["materialsItemWarehouses"][j].stockBalance;
            }
          }
          $('#numberItems').text(total);
        });

        //Value of items
        getMaterialItems(function(response) {
          total = 0;
          for(var i in response)
          {
            for(var j in response[i]["materialsItemWarehouses"])
            {
              total += response[i]["materialsItemWarehouses"][j].inventoryBalance["amount"];
            }
          }
          $('#valueItems').text(total + " €");
        });

      });
  </script>

  <!-- DATA -->

  <script>
    var requirejs = {
      onNodeCreated: function(node) {
        var src = node.getAttribute('src');
        var shouldIgnore = ['googletagmanager.com', 'google-analytics.com', 'googleadservices.com', 'doubleclick.net', 'connect.facebook.net'].some(function(domain) {
          return src.indexOf(domain) !== -1;
        });
        if (!shouldIgnore) {
          node.setAttribute('crossorigin', 'anonymous')
        }
      }
    }
  </script>

  <script>
    window.messageBuffer = [];
    window.messageHandler = function(event) {
      messageBuffer.push(event)
    };
    window.addEventListener('message', window.messageHandler, false);
  </script>


  <script async="" src="./Inventory _ bookstore_files/bolt-custom-elements.min.js.download" crossorigin="anonymous"></script>

  <style id="viewerMainStyle">
    a,
    abbr,
    acronym,
    address,
    applet,
    b,
    big,
    blockquote,
    body,
    button,
    caption,
    center,
    cite,
    code,
    dd,
    del,
    dfn,
    div,
    dl,
    dt,
    em,
    fieldset,
    font,
    footer,
    form,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    header,
    html,
    i,
    iframe,
    img,
    ins,
    kbd,
    label,
    legend,
    li,
    nav,
    object,
    ol,
    p,
    pre,
    q,
    s,
    samp,
    section,
    small,
    span,
    strike,
    strong,
    sub,
    sup,
    table,
    tbody,
    td,
    tfoot,
    th,
    thead,
    title,
    tr,
    tt,
    u,
    ul,
    var {
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      vertical-align: baseline;
      background: 0 0
    }

    body {
      font-size: 10px;
      font-family: Arial, Helvetica, sans-serif
    }

    input,
    select,
    textarea {
      font-family: Helvetica, Arial, sans-serif;
      box-sizing: border-box
    }

    ol,
    ul {
      list-style: none
    }

    blockquote,
    q {
      quotes: none
    }

    ins {
      text-decoration: none
    }

    del {
      text-decoration: line-through
    }

    table {
      border-collapse: collapse;
      border-spacing: 0
    }

    a {
      cursor: pointer;
      text-decoration: none
    }

    body,
    html {
      height: 100%
    }

    body {
      overflow-x: auto;
      overflow-y: scroll
    }

    body.overflowHidden {
      overflow: hidden
    }

    .testStyles {
      overflow-y: hidden
    }

    .reset-button {
      background: 0 0;
      border: 0;
      outline: 0;
      color: inherit;
      font: inherit;
      line-height: normal;
      overflow: visible;
      padding: 0;
      -webkit-appearance: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none
    }

    :focus {
      outline: 0
    }

    .SITE_ROOT {
      min-height: 100%;
      position: relative;
      margin: 0 auto
    }

    .POPUPS_ROOT {
      left: 0;
      top: 0;
      width: 100vw;
      height: 100%;
      overflow-x: auto;
      overflow-y: scroll;
      position: fixed;
      z-index: 99999
    }

    .POPUPS_ROOT.mobile {
      z-index: 1005;
      -webkit-overflow-scrolling: touch
    }

    .POPUPS_ROOT.responsive .POPUPS_WRAPPER {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%
    }

    .POPUPS_ROOT:not(.responsive) .POPUPS_WRAPPER {
      position: relative;
      overflow: auto
    }

    .POPUPS_ROOT:not(.responsive) .POPUPS_WRAPPER>div {
      margin: 0 auto
    }

    .auto-generated-link {
      color: inherit
    }

    .warmup .hidden-on-warmup {
      visibility: hidden
    }

    body:not([data-js-loaded]) [data-hide-prejs] {
      visibility: hidden
    }

    html.device-phone body {
      overflow-y: auto
    }

    html.device-mobile-optimized.device-android {
      margin-bottom: 1px
    }

    html.device-mobile-optimized.blockSiteScrolling>body {
      position: fixed;
      width: 100%
    }

    html.device-mobile-optimized.media-zoom-mode>body {
      touch-action: manipulation
    }

    html.device-mobile-optimized.media-zoom-mode>body>#SITE_CONTAINER {
      height: 100%;
      overflow: hidden
    }

    html.device-mobile-optimized.media-zoom-mode>body>#SITE_CONTAINER>.noop {
      height: 100%
    }

    html.device-mobile-optimized.media-zoom-mode>body>#SITE_CONTAINER>.noop>.siteAspectsContainer {
      height: 100%;
      z-index: 1005
    }

    .siteAspectsContainer {
      position: absolute;
      top: 0;
      margin: 0 auto;
      left: 0;
      right: 0
    }

    body.prewarmup #SITE_ROOT {
      overflow-x: hidden;
      overflow-y: hidden
    }

    body.device-mobile-optimized {
      overflow-x: hidden;
      overflow-y: scroll
    }

    body.device-mobile-optimized.qa-mode {
      overflow-y: auto
    }

    body.device-mobile-optimized #SITE_CONTAINER {
      width: 320px;
      overflow-x: visible;
      margin: 0 auto;
      position: relative
    }

    body.device-mobile-optimized>* {
      max-width: 100% !important
    }

    body.device-mobile-optimized .SITE_ROOT {
      overflow-x: hidden;
      overflow-y: hidden
    }

    body.device-mobile-non-optimized #SITE_CONTAINER>:not(.mobile-non-optimized-overflow) .SITE_ROOT {
      overflow-x: hidden;
      overflow-y: auto
    }

    body.device-mobile-non-optimized.fullScreenMode {
      background-color: #5f6360
    }

    body.device-mobile-non-optimized.fullScreenMode #MOBILE_ACTIONS_MENU,
    body.device-mobile-non-optimized.fullScreenMode #SITE_BACKGROUND,
    body.device-mobile-non-optimized.fullScreenMode .SITE_ROOT {
      visibility: hidden
    }

    body.fullScreenMode {
      overflow-x: hidden !important;
      overflow-y: hidden !important
    }

    body.fullScreenMode.device-mobile-optimized #TINY_MENU {
      opacity: 0;
      pointer-events: none
    }

    body.fullScreenMode-scrollable.device-mobile-optimized {
      overflow-x: hidden !important;
      overflow-y: auto !important
    }

    body.fullScreenMode-scrollable.device-mobile-optimized #masterPage,
    body.fullScreenMode-scrollable.device-mobile-optimized .SITE_ROOT {
      overflow-x: hidden !important;
      overflow-y: hidden !important
    }

    body.fullScreenMode-scrollable.device-mobile-optimized #SITE_BACKGROUND,
    body.fullScreenMode-scrollable.device-mobile-optimized #masterPage {
      height: auto !important
    }

    body.fullScreenMode-scrollable.device-mobile-optimized #masterPage.mesh-layout {
      height: 0 !important
    }

    .fullScreenOverlay {
      z-index: 1005;
      position: fixed;
      left: 0;
      top: -60px;
      right: 0;
      bottom: 0;
      display: -webkit-box;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      overflow-y: hidden
    }

    .fullScreenOverlay>.fullScreenOverlayContent {
      margin: 0 auto;
      position: absolute;
      right: 0;
      top: 60px;
      left: 0;
      bottom: 0;
      overflow: hidden;
      -webkit-transform: translateZ(0);
      transform: translateZ(0)
    }

    .mobile-actions-menu-wrapper {
      z-index: 1000
    }

    body[contenteditable] {
      overflow-x: auto;
      overflow-y: auto
    }

    .bold {
      font-weight: 700
    }

    .italic {
      font-style: italic
    }

    .underline {
      text-decoration: underline
    }

    .lineThrough {
      text-decoration: line-through
    }

    .singleLineText {
      white-space: nowrap;
      text-overflow: ellipsis
    }

    .alignLeft {
      text-align: left
    }

    .alignCenter {
      text-align: center
    }

    .alignRight {
      text-align: right
    }

    .alignJustify {
      text-align: justify
    }

    ol.font_100,
    ul.font_100 {
      color: #080808;
      font-family: 'Arial, Helvetica, sans-serif', serif;
      font-size: 10px;
      font-style: normal;
      font-variant: normal;
      font-weight: 400;
      margin: 0;
      text-decoration: none;
      line-height: normal;
      letter-spacing: normal
    }

    ol.font_100 li,
    ul.font_100 li {
      margin-bottom: 12px
    }

    letter {
      position: relative;
      display: inline-block
    }

    word {
      display: inline-block;
      white-space: nowrap
    }

    letter.space,
    word.space {
      display: inline
    }

    #popoverLayer {
      z-index: 100
    }

    .flex_display {
      display: -webkit-box;
      display: -webkit-flex;
      display: flex
    }

    .flex_vbox {
      box-sizing: border-box;
      padding-top: .01em;
      padding-bottom: .01em
    }

    .singleLine {
      white-space: nowrap;
      display: block;
      overflow: hidden;
      text-overflow: ellipsis;
      word-wrap: normal
    }

    [data-z-counter] {
      z-index: 0
    }

    [data-z-counter="0"] {
      z-index: auto
    }

    .circle-preloader {
      -webkit-animation: semi-rotate 1s 1ms linear infinite;
      animation: semi-rotate 1s 1ms linear infinite;
      height: 30px;
      left: 50%;
      margin-left: -15px;
      margin-top: -15px;
      overflow: hidden;
      position: absolute;
      top: 50%;
      -webkit-transform-origin: 100% 50%;
      transform-origin: 100% 50%;
      width: 15px
    }

    .circle-preloader::before {
      content: '';
      top: 0;
      left: 0;
      right: -100%;
      bottom: 0;
      border: 3px solid currentColor;
      border-color: currentColor transparent transparent currentColor;
      border-radius: 50%;
      position: absolute;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-animation: inner-rotate .5s 1ms linear infinite alternate;
      animation: inner-rotate .5s 1ms linear infinite alternate;
      color: #7fccf7
    }

    .circle-preloader::after {
      content: '';
      top: 0;
      left: 0;
      right: -100%;
      bottom: 0;
      border: 3px solid currentColor;
      border-color: currentColor transparent transparent currentColor;
      border-radius: 50%;
      position: absolute;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-animation: inner-rotate .5s 1ms linear infinite alternate;
      animation: inner-rotate .5s 1ms linear infinite alternate;
      color: #3899ec;
      opacity: 0
    }

    .circle-preloader.white::before {
      color: #f0f0f0
    }

    .circle-preloader.white::after {
      color: #dcdcdc
    }

    @-webkit-keyframes inner-rotate {
      to {
        opacity: 1;
        -webkit-transform: rotate(115deg);
        transform: rotate(115deg)
      }
    }

    @keyframes inner-rotate {
      to {
        opacity: 1;
        -webkit-transform: rotate(115deg);
        transform: rotate(115deg)
      }
    }

    @-webkit-keyframes semi-rotate {
      from {
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg)
      }

      45% {
        -webkit-transform: rotate(198deg);
        transform: rotate(198deg)
      }

      55% {
        -webkit-transform: rotate(234deg);
        transform: rotate(234deg)
      }

      to {
        -webkit-transform: rotate(540deg);
        transform: rotate(540deg)
      }
    }

    @keyframes semi-rotate {
      from {
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg)
      }

      45% {
        -webkit-transform: rotate(198deg);
        transform: rotate(198deg)
      }

      55% {
        -webkit-transform: rotate(234deg);
        transform: rotate(234deg)
      }

      to {
        -webkit-transform: rotate(540deg);
        transform: rotate(540deg)
      }
    }

    .hidden-comp-ghost-mode {
      opacity: .5
    }

    .collapsed-comp-mode::after {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      content: '';
      background: -webkit-repeating-linear-gradient(135deg, transparent, transparent 49%, #2b5672 40%, #2b5672 40%, transparent 51%);
      background: repeating-linear-gradient(-45deg, transparent, transparent 49%, #2b5672 40%, #2b5672 40%, transparent 51%);
      background-size: 6px 6px;
      background-repeat: repeat
    }

    .g-transparent-a:link,
    .g-transparent-a:visited {
      border-color: transparent
    }

    .transitioning-comp * {
      transition: inherit !important;
      -webkit-transition: inherit !important
    }

    .selectionSharerContainer {
      position: absolute;
      background-color: #fff;
      box-shadow: 0 4px 10px 0 rgba(57, 86, 113, .24);
      width: 142px;
      height: 45px;
      border-radius: 100px;
      text-align: center
    }

    .selectionSharerContainer:after {
      content: "";
      position: absolute;
      bottom: -10px;
      left: 42%;
      border-width: 10px 10px 0;
      border-style: solid;
      border-color: #fff transparent;
      display: block;
      width: 0
    }

    .selectionSharerContainer .selectionSharerOption {
      display: inline-block;
      cursor: pointer;
      vertical-align: top;
      padding: 13px 11px 11px 13px;
      margin: 1px;
      z-index: -1
    }

    .selectionSharerContainer .selectionSharerVerticalSeparator {
      margin-top: 9px;
      margin-bottom: 18px;
      background-color: #eaf7ff;
      height: 26px;
      width: 1px;
      display: inline-block
    }

    body.prewarmup .hidden-during-prewarmup {
      visibility: hidden
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] {
      display: -ms-grid;
      display: grid;
      -ms-grid-rows: max-content max-content min-content max-content;
      grid-template-rows: -webkit-max-content -webkit-max-content -webkit-min-content -webkit-max-content;
      grid-template-rows: max-content max-content min-content max-content;
      -ms-grid-columns: 100%;
      grid-template-columns: 100%;
      -webkit-box-align: start;
      -webkit-align-items: start;
      align-items: start;
      -webkit-box-pack: stretch;
      -webkit-justify-content: stretch;
      justify-content: stretch
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] #PAGES_CONTAINER,
    #masterPage.mesh-layout[data-mesh-layout=grid] #SITE_FOOTER,
    #masterPage.mesh-layout[data-mesh-layout=grid] #SITE_FOOTER-placeholder,
    #masterPage.mesh-layout[data-mesh-layout=grid] #SITE_HEADER,
    #masterPage.mesh-layout[data-mesh-layout=grid] #SITE_HEADER-placeholder,
    #masterPage.mesh-layout[data-mesh-layout=grid] #SOSP_CONTAINER_CUSTOM_ID[data-state~=mobileView],
    #masterPage.mesh-layout[data-mesh-layout=grid] #soapAfterPagesContainer,
    #masterPage.mesh-layout[data-mesh-layout=grid] #soapBeforePagesContainer {
      -ms-grid-column: 1;
      -ms-grid-row-align: start;
      -ms-grid-column-align: start
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] #SITE_HEADER,
    #masterPage.mesh-layout[data-mesh-layout=grid] #SITE_HEADER-placeholder {
      -ms-grid-row: 1;
      grid-area: 1/1/2/2
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] #SOSP_CONTAINER_CUSTOM_ID[data-state~=mobileView] {
      -ms-grid-row: 2;
      grid-area: 2/1/3/2
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] #PAGES_CONTAINER,
    #masterPage.mesh-layout[data-mesh-layout=grid] #soapAfterPagesContainer,
    #masterPage.mesh-layout[data-mesh-layout=grid] #soapBeforePagesContainer {
      -ms-grid-row: 3;
      grid-area: 3/1/4/2
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] #soapAfterPagesContainer,
    #masterPage.mesh-layout[data-mesh-layout=grid] #soapBeforePagesContainer {
      width: 100%
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] #PAGES_CONTAINER {
      -webkit-align-self: stretch;
      align-self: stretch
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] main#PAGES_CONTAINER {
      display: block
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] #SITE_FOOTER,
    #masterPage.mesh-layout[data-mesh-layout=grid] #SITE_FOOTER-placeholder {
      -ms-grid-row: 4;
      grid-area: 4/1/5/2
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] #PAGES_CONTAINERcenteredContent,
    #masterPage.mesh-layout[data-mesh-layout=grid] #PAGES_CONTAINERinlineContent,
    #masterPage.mesh-layout[data-mesh-layout=grid] #SITE_PAGES {
      height: 100%
    }

    #masterPage.mesh-layout.desktop>* {
      width: 100%
    }

    #masterPage.mesh-layout #PAGES_CONTAINER,
    #masterPage.mesh-layout #SITE_FOOTER,
    #masterPage.mesh-layout #SITE_HEADER,
    #masterPage.mesh-layout #SOSP_CONTAINER_CUSTOM_ID[data-state~=mobileView],
    #masterPage.mesh-layout #masterPageinlineContent {
      position: relative
    }

    #masterPage.mesh-layout #SITE_FOOTER-placeholder,
    #masterPage.mesh-layout #SITE_HEADER-placeholder {
      display: none
    }

    #masterPage.mesh-layout #SITE_HEADER[data-state~=fixedPosition]~#SITE_HEADER-placeholder {
      display: block
    }

    #masterPage.mesh-layout #SITE_FOOTER[data-state~=fixedPosition]~#SITE_FOOTER-placeholder {
      display: block
    }

    #masterPage.mesh-layout #SITE_PAGES {
      height: auto;
      position: relative
    }

    #SITE_ROOT img:not([src]) {
      visibility: hidden
    }

    #SITE_ROOT svg img:not([src]) {
      visibility: visible
    }
  </style>

  
  <script data-dapp-detection="">
    (function() {
      let alreadyInsertedMetaTag = false

      function __insertDappDetected() {
        if (!alreadyInsertedMetaTag) {
          const meta = document.createElement('meta')
          meta.name = 'dapp-detected'
          document.head.appendChild(meta)
          alreadyInsertedMetaTag = true
        }
      }

      if (window.hasOwnProperty('web3')) {
        // Note a closure can't be used for this var because some sites like
        // www.wnyc.org do a second script execution via eval for some reason.
        window.__disableDappDetectionInsertion = true
        // Likely oldWeb3 is undefined and it has a property only because
        // we defined it. Some sites like wnyc.org are evaling all scripts
        // that exist again, so this is protection against multiple calls.
        if (window.web3 === undefined) {
          return
        }
        if (!window.web3.currentProvider ||
          !window.web3.currentProvider.isMetaMask) {
          __insertDappDetected()
        }
      } else {
        var oldWeb3 = window.web3
        Object.defineProperty(window, 'web3', {
          configurable: true,
          set: function(val) {
            if (!window.__disableDappDetectionInsertion)
              __insertDappDetected()
            oldWeb3 = val
          },
          get: function() {
            if (!window.__disableDappDetectionInsertion)
              __insertDappDetected()
            return oldWeb3
          }
        })
      }
    })()
  </script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="main-r.min" src="./Inventory _ bookstore_files/main-r.min.js.download" crossorigin="anonymous"></script>
  <link rel="preload" href="./Inventory _ bookstore_files/bolt-main-r.init.js.download" as="script" crossorigin="anonymous">
  <link rel="preload" href="./Inventory _ bookstore_files/bolt-main-r.animations.js.download" as="script" crossorigin="anonymous">
  <link rel="preload" href="./Inventory _ bookstore_files/bolt-main-prod.js.download" as="script" crossorigin="anonymous">


  <title>Inventory | bookstore</title>

</head>


<body class="" data-js-loaded="true" style="">

  <script type="text/javascript">
    var htmlClassList = document.documentElement.classList;

    var clientSideRender = false;
  </script>






  <div id="SITE_CONTAINER">
    <style type="text/css" data-styleid="uploadedFonts"></style>
    <div>
      <style type="text/css" data-styleid="theme_fonts">
        .font_0 {
          font: normal normal normal 15px/1.4em brandon-grot-w01-light, sans-serif;
          color: #636363;
        }

        .font_1 {
          font: normal normal normal 16px/1.4em din-next-w01-light, din-next-w02-light, din-next-w10-light, sans-serif;
          color: #636363;
        }

        .font_2 {
          font: normal normal normal 29px/1.4em 'times new roman', times, serif;
          color: #414141;
        }

        .font_3 {
          font: normal normal normal 60px/1.4em brandon-grot-w01-light, sans-serif;
          color: #414141;
        }

        .font_4 {
          font: normal normal normal 40px/1.4em 'times new roman', times, serif;
          color: #414141;
        }

        .font_5 {
          font: normal normal normal 28px/1.4em 'times new roman', times, serif;
          color: #414141;
        }

        .font_6 {
          font: normal normal normal 29px/1.4em 'times new roman', times, serif;
          color: #414141;
        }

        .font_7 {
          font: normal normal normal 16px/1.4em 'times new roman', times, serif;
          color: #414141;
        }

        .font_8 {
          font: normal normal normal 15px/1.4em brandon-grot-w01-light, sans-serif;
          color: #414141;
        }

        .font_9 {
          font: normal normal normal 14px/1.4em brandon-grot-w01-light, sans-serif;
          color: #999999;
        }

        .font_10 {
          font: normal normal normal 12px/1.4em din-next-w01-light, din-next-w02-light, din-next-w10-light, sans-serif;
          color: #636363;
        }
      </style>
      <style type="text/css" data-styleid="theme_colors">
        .color_0 {
          color: #FFFFFF;
        }

        .backcolor_0 {
          background-color: #FFFFFF;
        }

        .color_1 {
          color: #FFFFFF;
        }

        .backcolor_1 {
          background-color: #FFFFFF;
        }

        .color_2 {
          color: #000000;
        }

        .backcolor_2 {
          background-color: #000000;
        }

        .color_3 {
          color: #ED1C24;
        }

        .backcolor_3 {
          background-color: #ED1C24;
        }

        .color_4 {
          color: #0088CB;
        }

        .backcolor_4 {
          background-color: #0088CB;
        }

        .color_5 {
          color: #FFCB05;
        }

        .backcolor_5 {
          background-color: #FFCB05;
        }

        .color_6 {
          color: #727272;
        }

        .backcolor_6 {
          background-color: #727272;
        }

        .color_7 {
          color: #B0B0B0;
        }

        .backcolor_7 {
          background-color: #B0B0B0;
        }

        .color_8 {
          color: #FFFFFF;
        }

        .backcolor_8 {
          background-color: #FFFFFF;
        }

        .color_9 {
          color: #727272;
        }

        .backcolor_9 {
          background-color: #727272;
        }

        .color_10 {
          color: #B0B0B0;
        }

        .backcolor_10 {
          background-color: #B0B0B0;
        }

        .color_11 {
          color: #FFFFFF;
        }

        .backcolor_11 {
          background-color: #FFFFFF;
        }

        .color_12 {
          color: #D6D6D4;
        }

        .backcolor_12 {
          background-color: #D6D6D4;
        }

        .color_13 {
          color: #999999;
        }

        .backcolor_13 {
          background-color: #999999;
        }

        .color_14 {
          color: #636363;
        }

        .backcolor_14 {
          background-color: #636363;
        }

        .color_15 {
          color: #414141;
        }

        .backcolor_15 {
          background-color: #414141;
        }

        .color_16 {
          color: #A0C2E8;
        }

        .backcolor_16 {
          background-color: #A0C2E8;
        }

        .color_17 {
          color: #709DD1;
        }

        .backcolor_17 {
          background-color: #709DD1;
        }

        .color_18 {
          color: #0D5EBA;
        }

        .backcolor_18 {
          background-color: #0D5EBA;
        }

        .color_19 {
          color: #093F7C;
        }

        .backcolor_19 {
          background-color: #093F7C;
        }

        .color_20 {
          color: #041F3E;
        }

        .backcolor_20 {
          background-color: #041F3E;
        }

        .color_21 {
          color: #F6CCB0;
        }

        .backcolor_21 {
          background-color: #F6CCB0;
        }

        .color_22 {
          color: #EEB188;
        }

        .backcolor_22 {
          background-color: #EEB188;
        }

        .color_23 {
          color: #E57022;
        }

        .backcolor_23 {
          background-color: #E57022;
        }

        .color_24 {
          color: #994B17;
        }

        .backcolor_24 {
          background-color: #994B17;
        }

        .color_25 {
          color: #4C250B;
        }

        .backcolor_25 {
          background-color: #4C250B;
        }

        .color_26 {
          color: #F1EEA7;
        }

        .backcolor_26 {
          background-color: #F1EEA7;
        }

        .color_27 {
          color: #E4DE7B;
        }

        .backcolor_27 {
          background-color: #E4DE7B;
        }

        .color_28 {
          color: #D6CC11;
        }

        .backcolor_28 {
          background-color: #D6CC11;
        }

        .color_29 {
          color: #8F880B;
        }

        .backcolor_29 {
          background-color: #8F880B;
        }

        .color_30 {
          color: #474406;
        }

        .backcolor_30 {
          background-color: #474406;
        }

        .color_31 {
          color: #ACE3B7;
        }

        .backcolor_31 {
          background-color: #ACE3B7;
        }

        .color_32 {
          color: #7FC68D;
        }

        .backcolor_32 {
          background-color: #7FC68D;
        }

        .color_33 {
          color: #2FAA47;
        }

        .backcolor_33 {
          background-color: #2FAA47;
        }

        .color_34 {
          color: #1F712F;
        }

        .backcolor_34 {
          background-color: #1F712F;
        }

        .color_35 {
          color: #103918;
        }

        .backcolor_35 {
          background-color: #103918;
        }
      </style>
    </div>
    <div id="CSS_CONTAINER"></div>
    <div data-aid="stylesContainer">
      <style type="text/css" data-styleid="pc1">
        .pc1screenWidthBackground {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .pc1[data-state~="fixedPosition"] {
          position: fixed !important;
          left: auto !important;
          z-index: 50;
        }

        .pc1[data-state~="fixedPosition"].pc1_footer {
          top: auto;
          bottom: 0;
        }

        .pc1bg {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .pc1inlineContent {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .pc1centeredContent {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }
      </style>
      <style type="text/css" data-styleid="siteBackground">
        .siteBackground {
          width: 100%;
          position: absolute;
        }

        .siteBackgroundbgBeforeTransition {
          position: absolute;
          top: 0;
        }

        .siteBackgroundbgAfterTransition {
          position: absolute;
          top: 0;
        }
      </style>
      <style type="text/css" data-styleid="style-k2t63ira">
        .style-k2t63irascreenWidthBackground {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .style-k2t63ira[data-state~="fixedPosition"] {
          position: fixed !important;
          left: auto !important;
          z-index: 50;
        }

        .style-k2t63ira[data-state~="fixedPosition"].style-k2t63ira_footer {
          top: auto;
          bottom: 0;
        }

        .style-k2t63irabg {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .style-k2t63irainlineContent {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .style-k2t63iracenteredContent {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }
      </style>
      <style type="text/css" data-styleid="style-k2t7ishf">
        .style-k2t7ishfscreenWidthBackground {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .style-k2t7ishf[data-state~="fixedPosition"] {
          position: fixed !important;
          left: auto !important;
          z-index: 50;
        }

        .style-k2t7ishf[data-state~="fixedPosition"].style-k2t7ishf_footer {
          top: auto;
          bottom: 0;
        }

        .style-k2t7ishfbg {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .style-k2t7ishfinlineContent {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .style-k2t7ishfcenteredContent {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }
      </style>
      <style type="text/css" data-styleid="lb1">
        .lb1[data-is-responsive~="false"] .lb1itemsContainer {
          position: absolute;
          width: 100%;
          height: 100%;
          white-space: nowrap;
        }

        .lb1[data-is-responsive~="false"][data-state~="mobileView"] .lb1itemsContainer {
          position: absolute;
          width: 100%;
          height: 100%;
          white-space: normal;
        }

        .lb1[data-is-responsive~="true"] {
          display: table;
        }

        .lb1[data-is-responsive~="true"] .lb1itemsContainer {
          display: -webkit-box;
          display: -webkit-flex;
          display: flex;
        }

        .lb1itemsContainer>li:last-child {
          margin: 0 !important;
        }

        .lb1 a {
          display: block;
          height: 100%;
        }

        .lb1imageItemlink {
          cursor: pointer;
        }

        .lb1imageItemimageimage {
          position: static;
          box-shadow: #000 0 0 0;
          user-select: none;
        }
      </style>
      <style type="text/css" data-styleid="style-j8lb5r6x2">
        .style-j8lb5r6x2>ul {
          display: table;
          width: 100%;
          box-sizing: border-box;
        }

        .style-j8lb5r6x2 li {
          display: table;
          width: 100%;
          width: calc(100% - (2 * 0px));
        }

        .style-j8lb5r6x2 a span {
          pointer-events: none;
        }

        .style-j8lb5r6x2_noLink {
          cursor: default !important;
        }

        .style-j8lb5r6x2_counter {
          margin: 0 10px;
          opacity: 0.6;
        }

        .style-j8lb5r6x2menuContainer {
          padding: 0;
          margin: 0;
          position: relative;
        }

        .style-j8lb5r6x2menuContainer .style-j8lb5r6x2_emptySubMenu {
          display: none !important;
        }

        .style-j8lb5r6x2_item {
          padding-left: 0px;
          padding-right: 0px;
          margin: 0;
          position: relative;
          display: block;
          cursor: pointer;
          list-style: none;
        }

        .style-j8lb5r6x2_item:last-child {
          border-bottom: 0;
        }

        .style-j8lb5r6x2_item.style-j8lb5r6x2_hover:not(.style-j8lb5r6x2_noLink)>.style-j8lb5r6x2_label {
          color: #414141;
        }

        .style-j8lb5r6x2_item.style-j8lb5r6x2_hover>.style-j8lb5r6x2_subMenu {
          opacity: 1;
          transition: all 0.4s ease 0s;
          display: block;
        }

        .style-j8lb5r6x2_item.style-j8lb5r6x2_selected>.style-j8lb5r6x2_label,
        .style-j8lb5r6x2_item.style-j8lb5r6x2_selectedContainer>.style-j8lb5r6x2_label {
          color: #414141;
        }

        .style-j8lb5r6x2_label {
          font: normal normal normal 15px/1.4em brandon-grot-w01-light, sans-serif;
          color: #636363;
          display: inline;
          white-space: nowrap;
          overflow: hidden;
        }

        .style-j8lb5r6x2_subMenu {
          z-index: 999;
          min-width: 100%;
          opacity: 0;
          display: none;
          position: absolute;
          transition: all 0.4s ease 0s;
          background-color: rgba(255, 255, 255, 1);
        }

        .style-j8lb5r6x2_subMenu .style-j8lb5r6x2_label {
          font: normal normal normal 14px/1.4em helvetica-w01-light, helvetica-w02-light, sans-serif;
        }

        .style-j8lb5r6x2_subMenu:before {
          content: " ";
          display: block;
          width: 0px;
          height: 100%;
          position: absolute;
          top: 0;
        }

        .style-j8lb5r6x2[data-state~="items-align-left"] .style-j8lb5r6x2_item {
          text-align: left;
        }

        .style-j8lb5r6x2[data-state~="items-align-center"] .style-j8lb5r6x2_item {
          text-align: center;
        }

        .style-j8lb5r6x2[data-state~="items-align-right"] .style-j8lb5r6x2_item {
          text-align: right;
        }

        .style-j8lb5r6x2[data-state~="subItems-align-left"] .style-j8lb5r6x2_subMenu>.style-j8lb5r6x2_item {
          text-align: left;
          padding-left: 0px;
          padding-right: 0px;
        }

        .style-j8lb5r6x2[data-state~="subItems-align-center"] .style-j8lb5r6x2_subMenu>.style-j8lb5r6x2_item {
          text-align: center;
          padding-left: 0px;
          padding-right: 0px;
        }

        .style-j8lb5r6x2[data-state~="subItems-align-right"] .style-j8lb5r6x2_subMenu>.style-j8lb5r6x2_item {
          text-align: right;
          padding-left: 0px;
          padding-right: 0px;
        }

        .style-j8lb5r6x2[data-state~="subMenuOpenSide-right"] .style-j8lb5r6x2_subMenu {
          left: 100%;
          float: left;
          margin-left: 0px;
        }

        .style-j8lb5r6x2[data-state~="subMenuOpenSide-right"] .style-j8lb5r6x2_subMenu:before {
          left: 0;
          margin-left: calc(-1 * 0px);
        }

        .style-j8lb5r6x2[data-state~="subMenuOpenSide-left"] .style-j8lb5r6x2_subMenu {
          right: 100%;
          float: right;
          margin-right: 0px;
        }

        .style-j8lb5r6x2[data-state~="subMenuOpenSide-left"] .style-j8lb5r6x2_subMenu:before {
          right: 0;
          margin-right: calc(-1 * 0px);
        }

        .style-j8lb5r6x2[data-open-direction~="subMenuOpenDir-down"] .style-j8lb5r6x2_subMenu {
          top: 0;
        }

        .style-j8lb5r6x2[data-open-direction~="subMenuOpenDir-up"] .style-j8lb5r6x2_subMenu {
          bottom: 0;
        }

        .style-j8lb5r6x2menuContainer_with-validation-indication select:not([data-preview~="focus"]):invalid {
          border-width: 2px;
          border-style: solid;
          border-color: rgba(249, 249, 249, 1);
          background-color: rgba(255, 255, 255, 1);
        }

        .style-j8lb5r6x2menuContainer {
          display: -webkit-box;
          display: -webkit-flex;
          display: flex;
          -webkit-box-orient: vertical;
          -webkit-box-direction: normal;
          -webkit-flex-direction: column;
          flex-direction: column;
        }

        .style-j8lb5r6x2menuContainer select {
          border-radius: 5px;
          -webkit-appearance: none;
          -moz-appearance: none;
          font: normal normal normal 15px/1.4em brandon-grot-w01-light, sans-serif;
          background-color: rgba(255, 255, 255, 1);
          color: #636363;
          border-width: 2px;
          border-style: solid;
          border-color: rgba(249, 249, 249, 1);
          margin: 0;
          padding: 0 45px;
          cursor: pointer;
          position: relative;
          max-width: 100%;
          min-width: 100%;
          min-height: 10px;
          height: 100%;
          text-overflow: ellipsis;
          white-space: nowrap;
          display: block;
        }

        .style-j8lb5r6x2menuContainer select option {
          text-overflow: ellipsis;
          white-space: nowrap;
          overflow: hidden;
        }

        .style-j8lb5r6x2menuContainer select.style-j8lb5r6x2menuContainer_placeholder-style {
          color: #414141;
        }

        .style-j8lb5r6x2menuContainer select.style-j8lb5r6x2menuContainer_extended-placeholder-style {
          color: #888888;
        }

        .style-j8lb5r6x2menuContainer select:-moz-focusring {
          color: transparent;
          text-shadow: 0 0 0 #000;
        }

        .style-j8lb5r6x2menuContainer select::-ms-expand {
          display: none;
        }

        .style-j8lb5r6x2menuContainer select:focus::-ms-value {
          background: transparent;
        }

        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection):hover,
        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection)[data-preview~="hover"] {
          border-width: 2px;
          border-style: solid;
          border-color: rgba(249, 249, 249, 1);
          background-color: rgba(255, 255, 255, 1);
        }

        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection):focus,
        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection)[data-preview~="focus"] {
          border-width: 2px;
          border-style: solid;
          border-color: rgba(249, 249, 249, 1);
          background-color: rgba(255, 255, 255, 1);
        }

        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection)[data-error="true"],
        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection)[data-preview~="error"] {
          border-width: 2px;
          border-style: solid;
          border-color: rgba(249, 249, 249, 1);
          background-color: rgba(255, 255, 255, 1);
        }

        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection):disabled,
        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection)[data-disabled="true"],
        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection)[data-preview~="disabled"] {
          border-width: 2px;
          border-color: rgba(204, 204, 204, 1);
          color: #FFFFFF;
          background-color: rgba(204, 204, 204, 1);
        }

        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection):disabled+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection)[data-disabled="true"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection)[data-preview~="disabled"]+.style-j8lb5r6x2menuContainerarrow {
          border-width: 2px;
          border-color: rgba(204, 204, 204, 1);
          color: #FFFFFF;
          border: none;
        }

        .style-j8lb5r6x2menuContainerarrow {
          position: absolute;
          pointer-events: none;
          top: 0;
          bottom: 0;
          box-sizing: border-box;
          padding-left: 20px;
          padding-right: 20px;
          height: inherit;
          display: -webkit-box;
          display: -webkit-flex;
          display: flex;
          -webkit-box-align: center;
          -webkit-align-items: center;
          align-items: center;
        }

        .style-j8lb5r6x2menuContainerarrow .style-j8lb5r6x2menuContainer_svg_container {
          width: 12px;
        }

        .style-j8lb5r6x2menuContainerarrow .style-j8lb5r6x2menuContainer_svg_container svg {
          height: 100%;
          fill: rgba(214, 214, 212, 1);
        }

        .style-j8lb5r6x2menuContainer_left-direction {
          text-align-last: left;
        }

        .style-j8lb5r6x2menuContainer_left-direction .style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_left-direction select:hover+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_left-direction select[data-preview~="hover"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_left-direction select:focus+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_left-direction select[data-preview~="focus"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_left-direction[data-preview~="focus"] .style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_left-direction select[data-error="true"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_left-direction select[data-preview~="error"]+.style-j8lb5r6x2menuContainerarrow {
          border-left: 0;
        }

        .style-j8lb5r6x2menuContainer_left-direction .style-j8lb5r6x2menuContainerarrow {
          right: 0;
        }

        .style-j8lb5r6x2menuContainer_right-direction {
          text-align-last: right;
          direction: rtl;
        }

        .style-j8lb5r6x2menuContainer_right-direction .style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_right-direction select:hover+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_right-direction select[data-preview~="hover"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_right-direction select:focus+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_right-direction select[data-preview~="focus"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_right-direction[data-preview~="focus"] .style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_right-direction select[data-error="true"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_right-direction select[data-preview~="error"]+.style-j8lb5r6x2menuContainerarrow {
          border-right: 0;
        }

        .style-j8lb5r6x2menuContainer_right-direction .style-j8lb5r6x2menuContainerarrow {
          left: 0;
        }

        .style-j8lb5r6x2menuContainer_center-direction {
          text-align-last: left;
          text-align-last: center;
        }

        .style-j8lb5r6x2menuContainer_center-direction .style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_center-direction select:hover+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_center-direction select[data-preview~="hover"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_center-direction select:focus+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_center-direction select[data-preview~="focus"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_center-direction[data-preview~="focus"] .style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_center-direction select[data-error="true"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_center-direction select[data-preview~="error"]+.style-j8lb5r6x2menuContainerarrow {
          border-left: 0;
        }

        .style-j8lb5r6x2menuContainer_center-direction .style-j8lb5r6x2menuContainerarrow {
          right: 0;
        }

        .style-j8lb5r6x2menuContainer_mobileMenuContainer {
          border: 0;
        }

        .style-j8lb5r6x2menuContainer_mobileMenuContainer .style-j8lb5r6x2menuContainerarrow .style-j8lb5r6x2menuContainer_svg_container .style-j8lb5r6x2menuContainericon {
          fill: #636363;
        }

        .style-j8lb5r6x2menuContainerlabel {
          font: normal normal normal 15px/1.4em brandon-grot-w01-light, sans-serif;
          color: #414141;
          word-break: break-word;
          display: inline-block;
          line-height: 1;
        }

        .style-j8lb5r6x2menuContainer_required .style-j8lb5r6x2menuContainerlabel::after {
          content: " *";
          color: transparent;
        }

        .style-j8lb5r6x2menuContainer_selector-wrapper {
          -webkit-box-flex: 1;
          -webkit-flex: 1;
          flex: 1;
          position: relative;
        }
      </style>
      <style type="text/css" data-styleid="style-jepv3jl2">
        .style-jepv3jl2 {
          box-sizing: border-box;
          border-top: 1px solid rgba(214, 214, 212, 1);
          height: 0;
        }
      </style>
      <style type="text/css" data-styleid="style-k2rzgxrr">
        .style-k2rzgxrr {
          -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .style-k2rzgxrrlink,
        .style-k2rzgxrrsvg {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .style-k2rzgxrr svg {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          width: 100%;
          height: 100%;
          margin: auto;
        }

        .style-k2rzgxrr_non-scaling-stroke * {
          vector-effect: non-scaling-stroke;
        }

        .style-k2rzgxrr_with-shadow svg {
          overflow: visible !important;
        }
      </style>
      <style type="text/css" data-styleid="txtNew">
        .txtNew {
          word-wrap: break-word;
          text-align: start;
        }

        .txtNew_override-left * {
          text-align: left !important;
        }

        .txtNew_override-right * {
          text-align: right !important;
        }

        .txtNew_override-center * {
          text-align: center !important;
        }

        .txtNew_override-justify * {
          text-align: justify !important;
        }

        .txtNew>* {
          pointer-events: auto;
        }

        .txtNew li {
          font-style: inherit;
          font-weight: inherit;
          line-height: inherit;
          letter-spacing: normal;
        }

        .txtNew ol,
        .txtNew ul {
          padding-left: 1.3em;
          padding-right: 0;
          margin-left: 0.5em;
          margin-right: 0;
          line-height: normal;
          letter-spacing: normal;
        }

        .txtNew ul {
          list-style-type: disc;
        }

        .txtNew ol {
          list-style-type: decimal;
        }

        .txtNew ul ul,
        .txtNew ol ul {
          list-style-type: circle;
        }

        .txtNew ul ul ul,
        .txtNew ol ul ul {
          list-style-type: square;
        }

        .txtNew ul ol ul,
        .txtNew ol ol ul {
          list-style-type: square;
        }

        .txtNew ul[dir="rtl"],
        .txtNew ol[dir="rtl"] {
          padding-left: 0;
          padding-right: 1.3em;
          margin-left: 0;
          margin-right: 0.5em;
        }

        .txtNew ul[dir="rtl"] ul,
        .txtNew ul[dir="rtl"] ol,
        .txtNew ol[dir="rtl"] ul,
        .txtNew ol[dir="rtl"] ol {
          padding-left: 0;
          padding-right: 1.3em;
          margin-left: 0;
          margin-right: 0.5em;
        }

        .txtNew p {
          margin: 0;
          line-height: normal;
          letter-spacing: normal;
        }

        .txtNew h1 {
          margin: 0;
          line-height: normal;
          letter-spacing: normal;
        }

        .txtNew h2 {
          margin: 0;
          line-height: normal;
          letter-spacing: normal;
        }

        .txtNew h3 {
          margin: 0;
          line-height: normal;
          letter-spacing: normal;
        }

        .txtNew h4 {
          margin: 0;
          line-height: normal;
          letter-spacing: normal;
        }

        .txtNew h5 {
          margin: 0;
          line-height: normal;
          letter-spacing: normal;
        }

        .txtNew h6 {
          margin: 0;
          line-height: normal;
          letter-spacing: normal;
        }

        .txtNew a {
          color: inherit;
        }
      </style>
      <style type="text/css" data-styleid="s_BIwzIGroupSkin">
        .s_BIwzIGroupSkin {
          pointer-events: none;
        }

        .s_BIwzIGroupSkin_ie10 {
          max-width: 0;
          max-height: 0;
        }

        .s_BIwzIGroupSkininlineContent {
          pointer-events: all;
        }
      </style>
      <style type="text/css" data-styleid="ca1">
        .ca1_zoomedin {
          cursor: url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.cur), auto;
          overflow: hidden;
          display: block;
        }

        .ca1_zoomedout {
          cursor: url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.cur), auto;
        }

        .ca1link {
          display: block;
          overflow: hidden;
        }

        .ca1img {
          overflow: hidden;
        }

        .ca1[data-is-responsive=true] .ca1link,
        .ca1[data-is-responsive=true] .ca1img,
        .ca1[data-is-responsive=true] wix-image {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .ca1imgimage {
          position: static;
          box-shadow: #000 0 0 0;
          user-select: none;
        }
      </style>
      <style type="text/css" data-styleid="style-k2t3i6qo1">
        .style-k2t3i6qo1 {
          -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .style-k2t3i6qo1link,
        .style-k2t3i6qo1svg {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .style-k2t3i6qo1 svg {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          width: 100%;
          height: 100%;
          margin: auto;
        }

        .style-k2t3i6qo1_non-scaling-stroke * {
          vector-effect: non-scaling-stroke;
        }

        .style-k2t3i6qo1_with-shadow svg {
          overflow: visible !important;
        }
      </style>
      <style type="text/css" data-styleid="style-k2t3ntfb">
        .style-k2t3ntfb_with-validation-indication select:not([data-preview~="focus"]):invalid {
          border-width: 1px;
          border-style: solid;
          border-color: rgba(255, 64, 64, 1);
          background-color: rgba(255, 255, 255, 1);
        }

        .style-k2t3ntfb {
          display: -webkit-box;
          display: -webkit-flex;
          display: flex;
          -webkit-box-orient: vertical;
          -webkit-box-direction: normal;
          -webkit-flex-direction: column;
          flex-direction: column;
        }

        .style-k2t3ntfb select {
          border-radius: 6px;
          -webkit-appearance: none;
          -moz-appearance: none;
          font: normal normal normal 16px/1.4em helvetica-w01-light, helvetica-w02-light, sans-serif;
          background-color: rgba(255, 255, 255, 1);
          color: #072D3E;
          border-width: 1px;
          border-style: solid;
          border-color: rgba(198, 226, 247, 1);
          margin: 0;
          padding: 0 45px;
          cursor: pointer;
          position: relative;
          max-width: 100%;
          min-width: 100%;
          min-height: 10px;
          height: 100%;
          text-overflow: ellipsis;
          white-space: nowrap;
          display: block;
        }

        .style-k2t3ntfb select option {
          text-overflow: ellipsis;
          white-space: nowrap;
          overflow: hidden;
        }

        .style-k2t3ntfb select.style-k2t3ntfb_placeholder-style {
          color: #072D3E;
        }

        .style-k2t3ntfb select.style-k2t3ntfb_extended-placeholder-style {
          color: #072D3E;
        }

        .style-k2t3ntfb select:-moz-focusring {
          color: transparent;
          text-shadow: 0 0 0 #000;
        }

        .style-k2t3ntfb select::-ms-expand {
          display: none;
        }

        .style-k2t3ntfb select:focus::-ms-value {
          background: transparent;
        }

        .style-k2t3ntfb select:not(.style-k2t3ntfb_mobileCollection):hover,
        .style-k2t3ntfb select:not(.style-k2t3ntfb_mobileCollection)[data-preview~="hover"] {
          border-width: 1px;
          border-style: solid;
          border-color: rgba(198, 226, 247, 1);
          background-color: rgba(234, 247, 255, 1);
        }

        .style-k2t3ntfb select:not(.style-k2t3ntfb_mobileCollection):focus,
        .style-k2t3ntfb select:not(.style-k2t3ntfb_mobileCollection)[data-preview~="focus"] {
          border-width: 1px;
          border-style: solid;
          border-color: rgba(0, 166, 255, 1);
          background-color: rgba(255, 255, 255, 1);
        }

        .style-k2t3ntfb select:not(.style-k2t3ntfb_mobileCollection)[data-error="true"],
        .style-k2t3ntfb select:not(.style-k2t3ntfb_mobileCollection)[data-preview~="error"] {
          border-width: 1px;
          border-style: solid;
          border-color: rgba(255, 64, 64, 1);
          background-color: rgba(255, 255, 255, 1);
        }

        .style-k2t3ntfb select:not(.style-k2t3ntfb_mobileCollection):disabled,
        .style-k2t3ntfb select:not(.style-k2t3ntfb_mobileCollection)[data-disabled="true"],
        .style-k2t3ntfb select:not(.style-k2t3ntfb_mobileCollection)[data-preview~="disabled"] {
          border-width: 2px;
          border-color: rgba(219, 219, 219, 1);
          color: #D4D4D4;
          background-color: rgba(255, 255, 255, 1);
        }

        .style-k2t3ntfb select:not(.style-k2t3ntfb_mobileCollection):disabled+.style-k2t3ntfbarrow,
        .style-k2t3ntfb select:not(.style-k2t3ntfb_mobileCollection)[data-disabled="true"]+.style-k2t3ntfbarrow,
        .style-k2t3ntfb select:not(.style-k2t3ntfb_mobileCollection)[data-preview~="disabled"]+.style-k2t3ntfbarrow {
          border-width: 2px;
          border-color: rgba(219, 219, 219, 1);
          color: #D4D4D4;
          border: none;
        }

        .style-k2t3ntfbarrow {
          position: absolute;
          pointer-events: none;
          top: 0;
          bottom: 0;
          box-sizing: border-box;
          padding-left: 20px;
          padding-right: 20px;
          height: inherit;
          display: -webkit-box;
          display: -webkit-flex;
          display: flex;
          -webkit-box-align: center;
          -webkit-align-items: center;
          align-items: center;
        }

        .style-k2t3ntfbarrow .style-k2t3ntfb_svg_container {
          width: 12px;
        }

        .style-k2t3ntfbarrow .style-k2t3ntfb_svg_container svg {
          height: 100%;
          fill: rgba(0, 166, 255, 1);
        }

        .style-k2t3ntfb_left-direction {
          text-align-last: left;
        }

        .style-k2t3ntfb_left-direction .style-k2t3ntfbarrow,
        .style-k2t3ntfb_left-direction select:hover+.style-k2t3ntfbarrow,
        .style-k2t3ntfb_left-direction select[data-preview~="hover"]+.style-k2t3ntfbarrow,
        .style-k2t3ntfb_left-direction select:focus+.style-k2t3ntfbarrow,
        .style-k2t3ntfb_left-direction select[data-preview~="focus"]+.style-k2t3ntfbarrow,
        .style-k2t3ntfb_left-direction[data-preview~="focus"] .style-k2t3ntfbarrow,
        .style-k2t3ntfb_left-direction select[data-error="true"]+.style-k2t3ntfbarrow,
        .style-k2t3ntfb_left-direction select[data-preview~="error"]+.style-k2t3ntfbarrow {
          border-left: 0;
        }

        .style-k2t3ntfb_left-direction .style-k2t3ntfbarrow {
          right: 0;
        }

        .style-k2t3ntfb_right-direction {
          text-align-last: right;
          direction: rtl;
        }

        .style-k2t3ntfb_right-direction .style-k2t3ntfbarrow,
        .style-k2t3ntfb_right-direction select:hover+.style-k2t3ntfbarrow,
        .style-k2t3ntfb_right-direction select[data-preview~="hover"]+.style-k2t3ntfbarrow,
        .style-k2t3ntfb_right-direction select:focus+.style-k2t3ntfbarrow,
        .style-k2t3ntfb_right-direction select[data-preview~="focus"]+.style-k2t3ntfbarrow,
        .style-k2t3ntfb_right-direction[data-preview~="focus"] .style-k2t3ntfbarrow,
        .style-k2t3ntfb_right-direction select[data-error="true"]+.style-k2t3ntfbarrow,
        .style-k2t3ntfb_right-direction select[data-preview~="error"]+.style-k2t3ntfbarrow {
          border-right: 0;
        }

        .style-k2t3ntfb_right-direction .style-k2t3ntfbarrow {
          left: 0;
        }

        .style-k2t3ntfb_center-direction {
          text-align-last: left;
          text-align-last: center;
        }

        .style-k2t3ntfb_center-direction .style-k2t3ntfbarrow,
        .style-k2t3ntfb_center-direction select:hover+.style-k2t3ntfbarrow,
        .style-k2t3ntfb_center-direction select[data-preview~="hover"]+.style-k2t3ntfbarrow,
        .style-k2t3ntfb_center-direction select:focus+.style-k2t3ntfbarrow,
        .style-k2t3ntfb_center-direction select[data-preview~="focus"]+.style-k2t3ntfbarrow,
        .style-k2t3ntfb_center-direction[data-preview~="focus"] .style-k2t3ntfbarrow,
        .style-k2t3ntfb_center-direction select[data-error="true"]+.style-k2t3ntfbarrow,
        .style-k2t3ntfb_center-direction select[data-preview~="error"]+.style-k2t3ntfbarrow {
          border-left: 0;
        }

        .style-k2t3ntfb_center-direction .style-k2t3ntfbarrow {
          right: 0;
        }

        .style-k2t3ntfb_mobileMenuContainer {
          border: 0;
        }

        .style-k2t3ntfb_mobileMenuContainer .style-k2t3ntfbarrow .style-k2t3ntfb_svg_container .style-k2t3ntfbicon {
          fill: #072D3E;
        }

        .style-k2t3ntfblabel {
          font: normal normal normal 14px/1.4em helvetica-w01-light, helvetica-w02-light, sans-serif;
          color: #00A6FF;
          word-break: break-word;
          display: inline-block;
          line-height: 1;
        }

        .style-k2t3ntfb_required .style-k2t3ntfblabel::after {
          content: " *";
          color: transparent;
        }

        .style-k2t3ntfb_selector-wrapper {
          -webkit-box-flex: 1;
          -webkit-flex: 1;
          flex: 1;
          position: relative;
        }
      </style>
      <style type="text/css" data-styleid="style-k2t643pb">
        .style-k2t643pbbg {
          overflow: hidden;
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          background-color: rgba(255, 255, 255, 1);
        }

        .style-k2t643pb[data-state~="mobileView"] .style-k2t643pbbg {
          left: 10px;
          right: 10px;
        }

        .style-k2t643pbinlineContent {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          bottom: 20px;
        }
      </style>
      <style type="text/css" data-styleid="style-k2t698kf">
        .style-k2t698kfbg {
          overflow: hidden;
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          background-color: rgba(255, 255, 255, 1);
        }

        .style-k2t698kf[data-state~="mobileView"] .style-k2t698kfbg {
          left: 10px;
          right: 10px;
        }

        .style-k2t698kfinlineContent {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          bottom: 20px;
        }
      </style>
    </div>

      <div id="SITE_ROOT" class="SITE_ROOT" style="width:100%;min-width:980px;padding-bottom:0;top:50px" aria-hidden="false">
        <div id="masterPage" class="mesh-layout" data-mesh-layout="grid">
          <header data-is-mobile="false" data-state="fixedPosition transition-allowed" data-site-width="980" data-header-top="0" style="position:fixed;margin-top:50px;top:0;left:0;margin-left:0;width:100%;min-width:980px;bottom:;right:;z-index:50" class="style-k2t7ishf" id="SITE_HEADER">
            <div style="left:0;width:100%" id="SITE_HEADERscreenWidthBackground" class="style-k2t7ishfscreenWidthBackground"></div>
            <div id="SITE_HEADERcenteredContent" class="style-k2t7ishfcenteredContent">
              <div style="margin-left:calc((100% - 980px) / 2);width:980px" id="SITE_HEADERbg" class="style-k2t7ishfbg"></div>
              <div id="SITE_HEADERinlineContent" class="style-k2t7ishfinlineContent">
                <style id="SITE_HEADER-mesh-styles">
                  #SITE_HEADERinlineContent {
                    height: auto;
                    width: 100%;
                    position: relative;
                  }

                  #SITE_HEADERinlineContent-gridWrapper {
                    pointer-events: none;
                  }

                  #SITE_HEADERinlineContent-gridContainer {
                    position: static;
                    display: grid;
                    height: auto;
                    width: 100%;
                    min-height: auto;
                    grid-template-rows: 1fr;
                    grid-template-columns: 100%;
                  }

                  #comp-k2t7em1t {
                    position: relative;
                    margin: 5px 0px 6px calc((100% - 980px) * 0.5);
                    left: -200px;
                    grid-area: 1 / 1 / 2 / 2;
                    justify-self: start;
                    align-self: start;
                  }

                  #SITE_HEADERcenteredContent {
                    position: relative;
                  }

                  #SITE_HEADERinlineContent-gridContainer>* {
                    pointer-events: auto;
                  }

                  #SITE_HEADERinlineContent-gridContainer>[id$="-rotated-wrapper"] {
                    pointer-events: none;
                  }

                  #SITE_HEADERinlineContent-gridContainer>[id$="-rotated-wrapper"]>* {
                    pointer-events: auto;
                  }
                </style>
                <div id="SITE_HEADERinlineContent-gridWrapper" data-mesh-internal="true">
                  <div id="SITE_HEADERinlineContent-gridContainer" data-mesh-internal="true">
                    <div style="width: 130px; height: 118px;" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="118" class="ca1" id="comp-k2t7em1t">
                      <div style="width: 130px; height: 118px;" id="comp-k2t7em1tlink" class="ca1link">
                        <wix-image style="width:130px;height:118px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-k2t7em3c&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;masterPage&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;70eda8_2ab2c2e6e5d043f5b0cf8514815f10d6~mv2_d_2000_2000_s_2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:2000,&quot;height&quot;:2000,&quot;alt&quot;:&quot;smartbook-01.png_fbclid=IwAR25id50fqxl5K&quot;,&quot;crop&quot;:{&quot;x&quot;:307,&quot;y&quot;:153,&quot;width&quot;:1373,&quot;height&quot;:1273,&quot;svgId&quot;:&quot;909695c1e003409ba70b5561666c7c4d.svg&quot;},&quot;name&quot;:&quot;smartbook-01.png_fbclid=IwAR25id50fqxl5K&quot;,&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-k2t7em1t&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-is-svg="true" id="comp-k2t7em1timg" class="ca1img" data-src="https://static.wixstatic.com/media/70eda8_2ab2c2e6e5d043f5b0cf8514815f10d6~mv2_d_2000_2000_s_2.png/v1/crop/x_307,y_153,w_1373,h_1273/fill/w_130,h_118,al_c,q_80,usm_0.66_1.00_0.01/smartbook-01_png_fbclid%3DIwAR25id50fqxl5K.webp"><svg id="svgcomp-k2t7em1timg" version="1.1" role="img" aria-label="smartbook-01.png_fbclid=IwAR25id50fqxl5K" width="130" height="118" viewBox="0 0 130 118">
                            <defs>
                              <style>
                                #mask-comp-k2t7em1timg-svg * {
                                  fill: #fff;
                                  stroke: #fff;
                                  stroke-width: 0;
                                }
                              </style>
                              <mask id="mask-comp-k2t7em1timg">
                                <use id="mask-comp-k2t7em1timg-svg-use" xlink:href="#mask-comp-k2t7em1timg-svg" width="100%" height="100%" x="0" y="0"></use>
                              </mask>
                              <svg id="mask-comp-k2t7em1timg-svg" preserveAspectRatio="none" data-bbox="20 20 160 160" viewBox="20 20 160 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img">
                                <g>
                                  <path d="M180 20v160H20V20h160z"></path>
                                </g>
                              </svg>

                            </defs>
                            <image width="130" height="118" x="0" y="0" transform="" preserveAspectRatio="xMidYMid slice" id="comp-k2t7em1timgimage" data-type="image" xlink:href="https://static.wixstatic.com/media/70eda8_2ab2c2e6e5d043f5b0cf8514815f10d6~mv2_d_2000_2000_s_2.png/v1/crop/x_307,y_153,w_1373,h_1273/fill/w_130,h_118,al_c,q_80,usm_0.66_1.00_0.01/smartbook-01_png_fbclid%3DIwAR25id50fqxl5K.webp" mask="url(#mask-comp-k2t7em1timg)" data-svg-mask="mask-comp-k2t7em1timg-svg" data-src=""></image>
                          </svg></wix-image>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <div id="SITE_HEADER-placeholder" style="height:129px;display:block"></div>
          <main tabindex="-1" data-is-mobile="false" data-is-mesh="true" data-site-width="980" style="left:0;margin-left:0;width:100%;min-width:980px;top:0;bottom:;right:;position:" class="pc1" data-state="" id="PAGES_CONTAINER">
            <div style="left:0" id="PAGES_CONTAINERscreenWidthBackground" class="pc1screenWidthBackground"></div>
            <div style="position:relative" id="PAGES_CONTAINERcenteredContent" class="pc1centeredContent">
              <div style="display:none" id="PAGES_CONTAINERbg" class="pc1bg"></div>
              <div style="position:relative" id="PAGES_CONTAINERinlineContent" class="pc1inlineContent">
                <div style="width:100%">
                  <div data-ismobile="false" data-is-mesh-layout="true" style="height: 100%; left: 0px; position: relative; display: none; max-height: 0px; visibility: hidden; overflow: hidden;" class="style-k2t643pb" id="dhhnr">
                    <div style="margin-left:calc((100% - 980px) / 2);width:980px" id="dhhnrbg" class="style-k2t643pbbg"></div>
                    <div class="style-k2t643pbinlineContent" id="dhhnrinlineContent">
                      <style id="dhhnr-mesh-styles">
                        #dhhnrinlineContent {
                          height: auto;
                          width: 100%;
                          min-height: 763px;
                          padding-bottom: 20px;
                          box-sizing: border-box;
                          position: relative;
                        }

                        #dhhnrcenteredContent {
                          position: relative;
                        }

                        #dhhnrinlineContent-gridWrapper {
                          pointer-events: none;
                        }

                        #dhhnrinlineContent-gridContainer>* {
                          pointer-events: auto;
                        }

                        #dhhnrinlineContent-gridContainer>[id$="-rotated-wrapper"] {
                          pointer-events: none;
                        }

                        #dhhnrinlineContent-gridContainer>[id$="-rotated-wrapper"]>* {
                          pointer-events: auto;
                        }
                      </style>
                    </div>
                  </div>
                  <div data-ismobile="false" data-is-mesh-layout="true" class="style-k2t698kf" id="xl20s" style="height: 100%; left: 0px; position: relative;">
                    <div id="xl20sbg" class="style-k2t698kfbg" style="margin-left: calc((100% - 980px) / 2); width: 980px;"></div>
                    <div class="style-k2t698kfinlineContent" id="xl20sinlineContent">
                      <style id="xl20s-mesh-styles">
                        #xl20sinlineContent {
                          height: auto;
                          width: 100%;
                          position: relative;
                        }

                        #xl20sinlineContent-gridWrapper {
                          pointer-events: none;
                        }

                        #xl20sinlineContent-gridContainer {
                          position: static;
                          display: grid;
                          height: auto;
                          width: 100%;
                          min-height: 500px;
                          grid-template-rows: min-content min-content min-content min-content min-content 1fr;
                          grid-template-columns: 100%;
                          padding-bottom: 20px;
                          box-sizing: border-box;
                        }

                        #comp-k2t3pic8 {
                          position: relative;
                          margin: 33px 0px 10px calc((100% - 980px) * 0.5);
                          left: 14px;
                          grid-area: 1 / 1 / 2 / 2;
                          justify-self: start;
                          align-self: start;
                        }

                        #comp-k2t3i6pj {
                          position: relative;
                          margin: 0px 0px 35px calc((100% - 980px) * 0.5);
                          left: 0px;
                          grid-area: 2 / 1 / 3 / 2;
                          justify-self: start;
                          align-self: start;
                        }

                        #comp-k2t3ikuv {
                          position: relative;
                          margin: 0px 0px 35px calc((100% - 980px) * 0.5);
                          left: 334px;
                          grid-area: 2 / 1 / 3 / 2;
                          justify-self: start;
                          align-self: start;
                        }

                        #comp-k2t3inr6 {
                          position: relative;
                          margin: 0px 0px 35px calc((100% - 980px) * 0.5);
                          left: 668px;
                          grid-area: 2 / 1 / 3 / 2;
                          justify-self: start;
                          align-self: start;
                        }

                        #comp-k2t3qpf7 {
                          position: relative;
                          margin: 0px 0px 16px calc((100% - 980px) * 0.5);
                          left: 14px;
                          grid-area: 3 / 1 / 4 / 2;
                          justify-self: start;
                          align-self: start;
                        }

                        #comp-k2t3nl09 {
                          position: relative;
                          margin: 0px 0px 12px calc((100% - 980px) * 0.5);
                          left: 14px;
                          grid-area: 4 / 1 / 5 / 2;
                          justify-self: start;
                          align-self: start;
                        }

                        #comp-k2t3smwr {
                          position: relative;
                          margin: 0px 0px 47px calc((100% - 980px) * 0.5);
                          left: 0px;
                          grid-area: 5 / 1 / 6 / 2;
                          justify-self: start;
                          align-self: start;
                        }

                        #comp-k2t3smx3 {
                          position: relative;
                          margin: 0px 0px 47px calc((100% - 980px) * 0.5);
                          left: 334px;
                          grid-area: 5 / 1 / 6 / 2;
                          justify-self: start;
                          align-self: start;
                        }

                        #comp-k2t3smxd {
                          position: relative;
                          margin: 0px 0px 47px calc((100% - 980px) * 0.5);
                          left: 668px;
                          grid-area: 5 / 1 / 6 / 2;
                          justify-self: start;
                          align-self: start;
                        }

                        #comp-k2t3u3ha {
                          position: relative;
                          margin: 0px 0px 0 calc((100% - 980px) * 0.5);
                          left: 130px;
                          grid-area: 6 / 1 / 7 / 2;
                          justify-self: start;
                          align-self: start;
                        }

                        #xl20scenteredContent {
                          position: relative;
                        }

                        #xl20sinlineContent-gridContainer>* {
                          pointer-events: auto;
                        }

                        #xl20sinlineContent-gridContainer>[id$="-rotated-wrapper"] {
                          pointer-events: none;
                        }

                        #xl20sinlineContent-gridContainer>[id$="-rotated-wrapper"]>* {
                          pointer-events: auto;
                        }
                      </style>
                      <div id="xl20sinlineContent-gridWrapper" data-mesh-internal="true">
                        <div id="xl20sinlineContent-gridContainer" data-mesh-internal="true">
                          <div data-packed="true" class="txtNew" id="comp-k2t3pic8" style="width: 374px; pointer-events: none;">
                            <h4 class="font_4">Total inventory</h4>
                          </div>
                          <div class="s_BIwzIGroupSkin" id="comp-k2t3i6pj" style="pointer-events: none;">
                            <div class="s_BIwzIGroupSkininlineContent" id="comp-k2t3i6pjinlineContent" style="pointer-events: none;">
                              <style id="comp-k2t3i6pj-mesh-styles">
                                #comp-k2t3i6pjinlineContent {
                                  height: auto;
                                  width: 312px;
                                  position: relative;
                                }

                                #comp-k2t3i6pjinlineContent-gridWrapper {
                                  pointer-events: none;
                                }

                                #comp-k2t3i6pjinlineContent-gridContainer {
                                  position: static;
                                  display: grid;
                                  height: auto;
                                  width: 100%;
                                  min-height: auto;
                                  grid-template-rows: min-content min-content 1fr;
                                  grid-template-columns: 100%;
                                }

                                #comp-k2t3i6qk {
                                  position: relative;
                                  margin: 0px 0px 0px 0;
                                  left: 0px;
                                  grid-area: 1 / 1 / 4 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3i6qz {
                                  position: relative;
                                  margin: 9px 0px 17px 0;
                                  left: 5px;
                                  grid-area: 1 / 1 / 2 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3i6rc {
                                  position: relative;
                                  margin: 0px 0px 22px 0;
                                  left: 79px;
                                  grid-area: 2 / 1 / 3 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3i6pjcenteredContent {
                                  position: relative;
                                }

                                #comp-k2t3i6pjinlineContent-gridContainer>* {
                                  pointer-events: auto;
                                }

                                #comp-k2t3i6pjinlineContent-gridContainer>[id$="-rotated-wrapper"] {
                                  pointer-events: none;
                                }

                                #comp-k2t3i6pjinlineContent-gridContainer>[id$="-rotated-wrapper"]>* {
                                  pointer-events: auto;
                                }
                              </style>
                              <div id="comp-k2t3i6pjinlineContent-gridWrapper" data-mesh-internal="true">
                                <div id="comp-k2t3i6pjinlineContent-gridContainer" data-mesh-internal="true">
                                  <div data-svg-id="1181dba727444047b53b4924eb63e3f0.svg" data-svg-type="shape" data-display-mode="stretch" data-strokewidth="0" data-viewbox="0 0 200 200" data-preserve-viewbox="ignore" class="style-k2t3i6qo1" id="comp-k2t3i6qk" style="width: 312px; height: 140px;">
                                    <div id="comp-k2t3i6qklink" class="style-k2t3i6qo1link">
                                      <div class="style-k2t3i6qo1_comp-k2t3i6qk style-k2t3i6qo1_non-scaling-stroke style-k2t3i6qo1_with-shadow style-k2t3i6qo1svg" id="comp-k2t3i6qksvg" style="stroke-width: 0; fill-opacity: 1; stroke: rgb(65, 65, 65); stroke-opacity: 1; fill: rgb(255, 255, 255);">
                                        <svg height="100%" width="100%">
                                          <defs>
                                            <filter x="-9" y="-9" width="334" height="162" filterUnits="userSpaceOnUse" id="comp-k2t3i6qk-shadow" color-interpolation-filters="sRGB">
                                              <fecomponenttransfer result="srcRGB"></fecomponenttransfer>
                                              <fegaussianblur stdDeviation="3" in="SourceAlpha"></fegaussianblur>
                                              <feoffset dx="4" dy="4"></feoffset>
                                              <fecolormatrix type="matrix" values="0 0 0 0 0
                                                                                   0 0 0 0 0
                                                                                   0 0 0 0 0
                                                                                   0 0 0 0.3 0"></fecolormatrix>
                                              <femerge>
                                                <femergenode></femergenode>
                                                <femergenode in="SourceGraphic"></femergenode>
                                              </femerge>
                                              <fecomponenttransfer></fecomponenttransfer>
                                            </filter>
                                          </defs>
                                          <g filter="url(#comp-k2t3i6qk-shadow)">
                                            <svg preserveAspectRatio="none" data-bbox="20 69 160 62" viewBox="20 69 160 62" height="100%" width="100%" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img">
                                              <g>
                                                <path d="M166.554 131H33.446C26.094 131 20 124.984 20 117.513V82.487C20 75.113 25.998 69 33.446 69h133.108C173.906 69 180 75.016 180 82.487v35.027c0 7.47-6.094 13.486-13.446 13.486z"></path>
                                              </g>
                                            </svg>

                                          </g>
                                        </svg>
                                      </div>
                                    </div>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3i6qz" style="width: 302px; pointer-events: none;">
                                    <h2 class="font_2" style="text-align:center;"><span style="color:#000000;"><span style="font-weight:bold;"><span style="font-family:avenir-lt-w01_35-light1475496,sans-serif;">Items in inventory</span></span></span></h2>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3i6rc" style="width: 154px; pointer-events: none;">
                                    <h2 class="font_2" id="numberItems" ><span class="color_14"></span></h2>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="s_BIwzIGroupSkin" id="comp-k2t3ikuv" style="pointer-events: none;">
                            <div class="s_BIwzIGroupSkininlineContent" id="comp-k2t3ikuvinlineContent" style="pointer-events: none;">
                              <style id="comp-k2t3ikuv-mesh-styles">
                                #comp-k2t3ikuvinlineContent {
                                  height: auto;
                                  width: 312px;
                                  position: relative;
                                }

                                #comp-k2t3ikuvinlineContent-gridWrapper {
                                  pointer-events: none;
                                }

                                #comp-k2t3ikuvinlineContent-gridContainer {
                                  position: static;
                                  display: grid;
                                  height: auto;
                                  width: 100%;
                                  min-height: auto;
                                  grid-template-rows: min-content min-content 1fr;
                                  grid-template-columns: 100%;
                                }

                                #comp-k2t3ikwe {
                                  position: relative;
                                  margin: 0px 0px 0px 0;
                                  left: 0px;
                                  grid-area: 1 / 1 / 4 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3ikwy {
                                  position: relative;
                                  margin: 9px 0px 17px 0;
                                  left: 5px;
                                  grid-area: 1 / 1 / 2 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3ikxf {
                                  position: relative;
                                  margin: 0px 0px 22px 0;
                                  left: 79px;
                                  grid-area: 2 / 1 / 3 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3ikuvcenteredContent {
                                  position: relative;
                                }

                                #comp-k2t3ikuvinlineContent-gridContainer>* {
                                  pointer-events: auto;
                                }

                                #comp-k2t3ikuvinlineContent-gridContainer>[id$="-rotated-wrapper"] {
                                  pointer-events: none;
                                }

                                #comp-k2t3ikuvinlineContent-gridContainer>[id$="-rotated-wrapper"]>* {
                                  pointer-events: auto;
                                }
                              </style>
                              <div id="comp-k2t3ikuvinlineContent-gridWrapper" data-mesh-internal="true">
                                <div id="comp-k2t3ikuvinlineContent-gridContainer" data-mesh-internal="true">
                                  <div data-svg-id="1181dba727444047b53b4924eb63e3f0.svg" data-svg-type="shape" data-display-mode="stretch" data-strokewidth="0" data-viewbox="0 0 200 200" data-preserve-viewbox="ignore" class="style-k2t3i6qo1" id="comp-k2t3ikwe" style="width: 312px; height: 140px;">
                                    <div id="comp-k2t3ikwelink" class="style-k2t3i6qo1link">
                                      <div class="style-k2t3i6qo1_comp-k2t3ikwe style-k2t3i6qo1_non-scaling-stroke style-k2t3i6qo1_with-shadow style-k2t3i6qo1svg" id="comp-k2t3ikwesvg" style="stroke-width: 0; fill-opacity: 1; stroke: rgb(65, 65, 65); stroke-opacity: 1; fill: rgb(255, 255, 255);">
                                        <svg height="100%" width="100%">
                                          <defs>
                                            <filter x="-9" y="-9" width="334" height="162" filterUnits="userSpaceOnUse" id="comp-k2t3ikwe-shadow" color-interpolation-filters="sRGB">
                                              <fecomponenttransfer result="srcRGB"></fecomponenttransfer>
                                              <fegaussianblur stdDeviation="3" in="SourceAlpha"></fegaussianblur>
                                              <feoffset dx="4" dy="4"></feoffset>
                                              <fecolormatrix type="matrix" values="0 0 0 0 0
     0 0 0 0 0
     0 0 0 0 0
     0 0 0 0.3 0"></fecolormatrix>
                                              <femerge>
                                                <femergenode></femergenode>
                                                <femergenode in="SourceGraphic"></femergenode>
                                              </femerge>
                                              <fecomponenttransfer></fecomponenttransfer>
                                            </filter>
                                          </defs>
                                          <g filter="url(#comp-k2t3ikwe-shadow)">
                                            <svg preserveAspectRatio="none" data-bbox="20 69 160 62" viewBox="20 69 160 62" height="100%" width="100%" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img">
                                              <g>
                                                <path d="M166.554 131H33.446C26.094 131 20 124.984 20 117.513V82.487C20 75.113 25.998 69 33.446 69h133.108C173.906 69 180 75.016 180 82.487v35.027c0 7.47-6.094 13.486-13.446 13.486z"></path>
                                              </g>
                                            </svg>

                                          </g>
                                        </svg>
                                      </div>
                                    </div>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3ikwy" style="width: 302px; pointer-events: none;">
                                    <h2 class="font_2" style="text-align:center;"><span style="color:#000000;"><span style="font-weight:bold;"><span style="font-family:avenir-lt-w01_35-light1475496,sans-serif;">Value of items</span></span></span></h2>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3ikxf" style="width: 154px; pointer-events: none;">
                                    <h2 class="font_2" id="valueItems" ><span class="color_14"></span></h2>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="s_BIwzIGroupSkin" id="comp-k2t3inr6" style="pointer-events: none;">
                            <div class="s_BIwzIGroupSkininlineContent" id="comp-k2t3inr6inlineContent" style="pointer-events: none;">
                              <style id="comp-k2t3inr6-mesh-styles">
                                #comp-k2t3inr6inlineContent {
                                  height: auto;
                                  width: 312px;
                                  position: relative;
                                }

                                #comp-k2t3inr6inlineContent-gridWrapper {
                                  pointer-events: none;
                                }

                                #comp-k2t3inr6inlineContent-gridContainer {
                                  position: static;
                                  display: grid;
                                  height: auto;
                                  width: 100%;
                                  min-height: auto;
                                  grid-template-rows: min-content min-content 1fr;
                                  grid-template-columns: 100%;
                                }

                                #comp-k2t3insx {
                                  position: relative;
                                  margin: 0px 0px 0px 0;
                                  left: 0px;
                                  grid-area: 1 / 1 / 4 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3intl {
                                  position: relative;
                                  margin: 9px 0px 17px 0;
                                  left: 5px;
                                  grid-area: 1 / 1 / 2 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3inu7 {
                                  position: relative;
                                  margin: 0px 0px 22px 0;
                                  left: 85px;
                                  grid-area: 2 / 1 / 3 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3inr6centeredContent {
                                  position: relative;
                                }

                                #comp-k2t3inr6inlineContent-gridContainer>* {
                                  pointer-events: auto;
                                }

                                #comp-k2t3inr6inlineContent-gridContainer>[id$="-rotated-wrapper"] {
                                  pointer-events: none;
                                }

                                #comp-k2t3inr6inlineContent-gridContainer>[id$="-rotated-wrapper"]>* {
                                  pointer-events: auto;
                                }
                              </style>
                              <div id="comp-k2t3inr6inlineContent-gridWrapper" data-mesh-internal="true">
                                <div id="comp-k2t3inr6inlineContent-gridContainer" data-mesh-internal="true">
                                  <div data-svg-id="1181dba727444047b53b4924eb63e3f0.svg" data-svg-type="shape" data-display-mode="stretch" data-strokewidth="0" data-viewbox="0 0 200 200" data-preserve-viewbox="ignore" class="style-k2t3i6qo1" id="comp-k2t3insx" style="width: 312px; height: 140px;">
                                    <div id="comp-k2t3insxlink" class="style-k2t3i6qo1link">
                                      <div class="style-k2t3i6qo1_comp-k2t3insx style-k2t3i6qo1_non-scaling-stroke style-k2t3i6qo1_with-shadow style-k2t3i6qo1svg" id="comp-k2t3insxsvg" style="stroke-width: 0; fill-opacity: 1; stroke: rgb(65, 65, 65); stroke-opacity: 1; fill: rgb(255, 255, 255);">
                                        <svg height="100%" width="100%">
                                          <defs>
                                            <filter x="-9" y="-9" width="334" height="162" filterUnits="userSpaceOnUse" id="comp-k2t3insx-shadow" color-interpolation-filters="sRGB">
                                              <fecomponenttransfer result="srcRGB"></fecomponenttransfer>
                                              <fegaussianblur stdDeviation="3" in="SourceAlpha"></fegaussianblur>
                                              <feoffset dx="4" dy="4"></feoffset>
                                              <fecolormatrix type="matrix" values="0 0 0 0 0
     0 0 0 0 0
     0 0 0 0 0
     0 0 0 0.3 0"></fecolormatrix>
                                              <femerge>
                                                <femergenode></femergenode>
                                                <femergenode in="SourceGraphic"></femergenode>
                                              </femerge>
                                              <fecomponenttransfer></fecomponenttransfer>
                                            </filter>
                                          </defs>
                                          <g filter="url(#comp-k2t3insx-shadow)">
                                            <svg preserveAspectRatio="none" data-bbox="20 69 160 62" viewBox="20 69 160 62" height="100%" width="100%" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img">
                                              <g>
                                                <path d="M166.554 131H33.446C26.094 131 20 124.984 20 117.513V82.487C20 75.113 25.998 69 33.446 69h133.108C173.906 69 180 75.016 180 82.487v35.027c0 7.47-6.094 13.486-13.446 13.486z"></path>
                                              </g>
                                            </svg>

                                          </g>
                                        </svg>
                                      </div>
                                    </div>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3intl" style="width: 302px; pointer-events: none;">
                                    <h2 class="font_2" style="text-align:center;"><span style="color:#000000;"><span style="font-weight:bold;"><span style="font-family:avenir-lt-w01_35-light1475496,sans-serif;">Days to first delivery</span></span></span></h2>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3inu7" style="width: 154px; pointer-events: none;">
                                    <h2 class="font_2" style="font-size:50px; text-align:center;"><span style="font-size:50px;"><span class="color_14">4 days</span></span></h2>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div data-packed="true" class="txtNew" id="comp-k2t3qpf7" style="width: 606px; pointer-events: none;">
                            <h4 class="font_4">Inventory per warehouse</h4>
                          </div>
                          <div class="style-k2t3ntfb_left-direction style-k2t3ntfb" data-disabled="false" data-state="valid" id="comp-k2t3nl09" style="width: 304px; min-height: 24px; height: 46px;"><label for="comp-k2t3nl09collection" id="comp-k2t3nl09label" class="style-k2t3ntfblabel" style="padding-left: 0px; padding-right: 20px; display: none; margin-bottom: 14px; text-align: left; direction: ltr;"></label>
                            <div class="style-k2t3ntfb_selector-wrapper"><select class="style-k2t3ntfb_extended-placeholder-style has-custom-focus  style-k2t3ntfbcollection" id="comp-k2t3nl09collection" style="padding-left: 18px;">
                                <option value="" default="" disabled="" style="display: none;">Choose your warehouse</option>
                                <option value="S. Catarina">S. Catarina</option>
                                <option value="NorteShop">NorteShop</option>
                                <option value="Matoshinos">Matoshinos</option>
                                <option value="Braga">Braga</option>
                                <option value="Coimbra">Coimbra</option>
                              </select>
                              <div id="comp-k2t3nl09arrow" class="style-k2t3ntfbarrow">
                                <div class="style-k2t3ntfb_svg_container"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.2828 4.89817" id="comp-k2t3nl09icon" class="style-k2t3ntfbicon">
                                    <defs></defs>
                                    <title>arrow&amp;amp;v</title>
                                    <path d="M4.64116,4.89817a.5001.5001,0,0,1-.34277-.13574L.15727.86448A.50018.50018,0,0,1,.84282.136L4.64116,3.71165,8.44.136a.50018.50018,0,0,1,.68555.72852L4.98393,4.76243A.5001.5001,0,0,1,4.64116,4.89817Z" class="style-k2t3ntfb_cls-1"></path>
                                  </svg></div>
                              </div>
                            </div>
                          </div>
                          <div class="s_BIwzIGroupSkin" id="comp-k2t3smwr" style="pointer-events: none;">
                            <div class="s_BIwzIGroupSkininlineContent" id="comp-k2t3smwrinlineContent" style="pointer-events: none;">
                              <style id="comp-k2t3smwr-mesh-styles">
                                #comp-k2t3smwrinlineContent {
                                  height: auto;
                                  width: 312px;
                                  position: relative;
                                }

                                #comp-k2t3smwrinlineContent-gridWrapper {
                                  pointer-events: none;
                                }

                                #comp-k2t3smwrinlineContent-gridContainer {
                                  position: static;
                                  display: grid;
                                  height: auto;
                                  width: 100%;
                                  min-height: auto;
                                  grid-template-rows: min-content min-content 1fr;
                                  grid-template-columns: 100%;
                                }

                                #comp-k2t3smzh {
                                  position: relative;
                                  margin: 0px 0px 0px 0;
                                  left: 0px;
                                  grid-area: 1 / 1 / 4 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3sn09 {
                                  position: relative;
                                  margin: 9px 0px 17px 0;
                                  left: 5px;
                                  grid-area: 1 / 1 / 2 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3sn0w {
                                  position: relative;
                                  margin: 0px 0px 22px 0;
                                  left: 79px;
                                  grid-area: 2 / 1 / 3 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3smwrcenteredContent {
                                  position: relative;
                                }

                                #comp-k2t3smwrinlineContent-gridContainer>* {
                                  pointer-events: auto;
                                }

                                #comp-k2t3smwrinlineContent-gridContainer>[id$="-rotated-wrapper"] {
                                  pointer-events: none;
                                }

                                #comp-k2t3smwrinlineContent-gridContainer>[id$="-rotated-wrapper"]>* {
                                  pointer-events: auto;
                                }
                              </style>
                              <div id="comp-k2t3smwrinlineContent-gridWrapper" data-mesh-internal="true">
                                <div id="comp-k2t3smwrinlineContent-gridContainer" data-mesh-internal="true">
                                  <div data-svg-id="1181dba727444047b53b4924eb63e3f0.svg" data-svg-type="shape" data-display-mode="stretch" data-strokewidth="0" data-viewbox="0 0 200 200" data-preserve-viewbox="ignore" class="style-k2t3i6qo1" id="comp-k2t3smzh" style="width: 312px; height: 140px;">
                                    <div id="comp-k2t3smzhlink" class="style-k2t3i6qo1link">
                                      <div class="style-k2t3i6qo1_comp-k2t3smzh style-k2t3i6qo1_non-scaling-stroke style-k2t3i6qo1_with-shadow style-k2t3i6qo1svg" id="comp-k2t3smzhsvg" style="stroke-width: 0; fill-opacity: 1; stroke: rgb(65, 65, 65); stroke-opacity: 1; fill: rgb(255, 255, 255);">
                                        <svg height="100%" width="100%">
                                          <defs>
                                            <filter x="-9" y="-9" width="334" height="162" filterUnits="userSpaceOnUse" id="comp-k2t3smzh-shadow" color-interpolation-filters="sRGB">
                                              <fecomponenttransfer result="srcRGB"></fecomponenttransfer>
                                              <fegaussianblur stdDeviation="3" in="SourceAlpha"></fegaussianblur>
                                              <feoffset dx="4" dy="4"></feoffset>
                                              <fecolormatrix type="matrix" values="0 0 0 0 0
     0 0 0 0 0
     0 0 0 0 0
     0 0 0 0.3 0"></fecolormatrix>
                                              <femerge>
                                                <femergenode></femergenode>
                                                <femergenode in="SourceGraphic"></femergenode>
                                              </femerge>
                                              <fecomponenttransfer></fecomponenttransfer>
                                            </filter>
                                          </defs>
                                          <g filter="url(#comp-k2t3smzh-shadow)">
                                            <svg preserveAspectRatio="none" data-bbox="20 69 160 62" viewBox="20 69 160 62" height="100%" width="100%" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img">
                                              <g>
                                                <path d="M166.554 131H33.446C26.094 131 20 124.984 20 117.513V82.487C20 75.113 25.998 69 33.446 69h133.108C173.906 69 180 75.016 180 82.487v35.027c0 7.47-6.094 13.486-13.446 13.486z"></path>
                                              </g>
                                            </svg>

                                          </g>
                                        </svg>
                                      </div>
                                    </div>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3sn09" style="width: 302px; pointer-events: none;">
                                    <h2 class="font_2" style="text-align:center;"><span style="color:#000000;"><span style="font-weight:bold;"><span style="font-family:avenir-lt-w01_35-light1475496,sans-serif;">Items in inventory</span></span></span></h2>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3sn0w" style="width: 154px; pointer-events: none;">
                                    <h2 class="font_2" style="font-size:50px; text-align:center;">1.2 k</h2>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="s_BIwzIGroupSkin" id="comp-k2t3smx3" style="pointer-events: none;">
                            <div class="s_BIwzIGroupSkininlineContent" id="comp-k2t3smx3inlineContent" style="pointer-events: none;">
                              <style id="comp-k2t3smx3-mesh-styles">
                                #comp-k2t3smx3inlineContent {
                                  height: auto;
                                  width: 312px;
                                  position: relative;
                                }

                                #comp-k2t3smx3inlineContent-gridWrapper {
                                  pointer-events: none;
                                }

                                #comp-k2t3smx3inlineContent-gridContainer {
                                  position: static;
                                  display: grid;
                                  height: auto;
                                  width: 100%;
                                  min-height: auto;
                                  grid-template-rows: min-content min-content 1fr;
                                  grid-template-columns: 100%;
                                }

                                #comp-k2t3sn2g {
                                  position: relative;
                                  margin: 0px 0px 0px 0;
                                  left: 0px;
                                  grid-area: 1 / 1 / 4 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3sn39 {
                                  position: relative;
                                  margin: 9px 0px 17px 0;
                                  left: 5px;
                                  grid-area: 1 / 1 / 2 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3sn3w {
                                  position: relative;
                                  margin: 0px 0px 22px 0;
                                  left: 79px;
                                  grid-area: 2 / 1 / 3 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3smx3centeredContent {
                                  position: relative;
                                }

                                #comp-k2t3smx3inlineContent-gridContainer>* {
                                  pointer-events: auto;
                                }

                                #comp-k2t3smx3inlineContent-gridContainer>[id$="-rotated-wrapper"] {
                                  pointer-events: none;
                                }

                                #comp-k2t3smx3inlineContent-gridContainer>[id$="-rotated-wrapper"]>* {
                                  pointer-events: auto;
                                }
                              </style>
                              <div id="comp-k2t3smx3inlineContent-gridWrapper" data-mesh-internal="true">
                                <div id="comp-k2t3smx3inlineContent-gridContainer" data-mesh-internal="true">
                                  <div data-svg-id="1181dba727444047b53b4924eb63e3f0.svg" data-svg-type="shape" data-display-mode="stretch" data-strokewidth="0" data-viewbox="0 0 200 200" data-preserve-viewbox="ignore" class="style-k2t3i6qo1" id="comp-k2t3sn2g" style="width: 312px; height: 140px;">
                                    <div id="comp-k2t3sn2glink" class="style-k2t3i6qo1link">
                                      <div class="style-k2t3i6qo1_comp-k2t3sn2g style-k2t3i6qo1_non-scaling-stroke style-k2t3i6qo1_with-shadow style-k2t3i6qo1svg" id="comp-k2t3sn2gsvg" style="stroke-width: 0; fill-opacity: 1; stroke: rgb(65, 65, 65); stroke-opacity: 1; fill: rgb(255, 255, 255);">
                                        <svg height="100%" width="100%">
                                          <defs>
                                            <filter x="-9" y="-9" width="334" height="162" filterUnits="userSpaceOnUse" id="comp-k2t3sn2g-shadow" color-interpolation-filters="sRGB">
                                              <fecomponenttransfer result="srcRGB"></fecomponenttransfer>
                                              <fegaussianblur stdDeviation="3" in="SourceAlpha"></fegaussianblur>
                                              <feoffset dx="4" dy="4"></feoffset>
                                              <fecolormatrix type="matrix" values="0 0 0 0 0
     0 0 0 0 0
     0 0 0 0 0
     0 0 0 0.3 0"></fecolormatrix>
                                              <femerge>
                                                <femergenode></femergenode>
                                                <femergenode in="SourceGraphic"></femergenode>
                                              </femerge>
                                              <fecomponenttransfer></fecomponenttransfer>
                                            </filter>
                                          </defs>
                                          <g filter="url(#comp-k2t3sn2g-shadow)">
                                            <svg preserveAspectRatio="none" data-bbox="20 69 160 62" viewBox="20 69 160 62" height="100%" width="100%" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img">
                                              <g>
                                                <path d="M166.554 131H33.446C26.094 131 20 124.984 20 117.513V82.487C20 75.113 25.998 69 33.446 69h133.108C173.906 69 180 75.016 180 82.487v35.027c0 7.47-6.094 13.486-13.446 13.486z"></path>
                                              </g>
                                            </svg>

                                          </g>
                                        </svg>
                                      </div>
                                    </div>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3sn39" style="width: 302px; pointer-events: none;">
                                    <h2 class="font_2" style="text-align:center;"><span style="color:#000000;"><span style="font-weight:bold;"><span style="font-family:avenir-lt-w01_35-light1475496,sans-serif;">Value of items</span></span></span></h2>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3sn3w" style="width: 154px; pointer-events: none;">
                                    <h2 class="font_2" style="font-size:50px; text-align:center;"><span style="font-size:50px;"><span class="color_14">1.479 €</span></span></h2>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="s_BIwzIGroupSkin" id="comp-k2t3smxd" style="pointer-events: none;">
                            <div class="s_BIwzIGroupSkininlineContent" id="comp-k2t3smxdinlineContent" style="pointer-events: none;">
                              <style id="comp-k2t3smxd-mesh-styles">
                                #comp-k2t3smxdinlineContent {
                                  height: auto;
                                  width: 312px;
                                  position: relative;
                                }

                                #comp-k2t3smxdinlineContent-gridWrapper {
                                  pointer-events: none;
                                }

                                #comp-k2t3smxdinlineContent-gridContainer {
                                  position: static;
                                  display: grid;
                                  height: auto;
                                  width: 100%;
                                  min-height: auto;
                                  grid-template-rows: min-content min-content 1fr;
                                  grid-template-columns: 100%;
                                }

                                #comp-k2t3sn5k {
                                  position: relative;
                                  margin: 0px 0px 0px 0;
                                  left: 0px;
                                  grid-area: 1 / 1 / 4 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3sn6g {
                                  position: relative;
                                  margin: 9px 0px 17px 0;
                                  left: 5px;
                                  grid-area: 1 / 1 / 2 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3sn77 {
                                  position: relative;
                                  margin: 0px 0px 22px 0;
                                  left: 85px;
                                  grid-area: 2 / 1 / 3 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3smxdcenteredContent {
                                  position: relative;
                                }

                                #comp-k2t3smxdinlineContent-gridContainer>* {
                                  pointer-events: auto;
                                }

                                #comp-k2t3smxdinlineContent-gridContainer>[id$="-rotated-wrapper"] {
                                  pointer-events: none;
                                }

                                #comp-k2t3smxdinlineContent-gridContainer>[id$="-rotated-wrapper"]>* {
                                  pointer-events: auto;
                                }
                              </style>
                              <div id="comp-k2t3smxdinlineContent-gridWrapper" data-mesh-internal="true">
                                <div id="comp-k2t3smxdinlineContent-gridContainer" data-mesh-internal="true">
                                  <div data-svg-id="1181dba727444047b53b4924eb63e3f0.svg" data-svg-type="shape" data-display-mode="stretch" data-strokewidth="0" data-viewbox="0 0 200 200" data-preserve-viewbox="ignore" class="style-k2t3i6qo1" id="comp-k2t3sn5k" style="width: 312px; height: 140px;">
                                    <div id="comp-k2t3sn5klink" class="style-k2t3i6qo1link">
                                      <div class="style-k2t3i6qo1_comp-k2t3sn5k style-k2t3i6qo1_non-scaling-stroke style-k2t3i6qo1_with-shadow style-k2t3i6qo1svg" id="comp-k2t3sn5ksvg" style="stroke-width: 0; fill-opacity: 1; stroke: rgb(65, 65, 65); stroke-opacity: 1; fill: rgb(255, 255, 255);">
                                        <svg height="100%" width="100%">
                                          <defs>
                                            <filter x="-9" y="-9" width="334" height="162" filterUnits="userSpaceOnUse" id="comp-k2t3sn5k-shadow" color-interpolation-filters="sRGB">
                                              <fecomponenttransfer result="srcRGB"></fecomponenttransfer>
                                              <fegaussianblur stdDeviation="3" in="SourceAlpha"></fegaussianblur>
                                              <feoffset dx="4" dy="4"></feoffset>
                                              <fecolormatrix type="matrix" values="0 0 0 0 0
     0 0 0 0 0
     0 0 0 0 0
     0 0 0 0.3 0"></fecolormatrix>
                                              <femerge>
                                                <femergenode></femergenode>
                                                <femergenode in="SourceGraphic"></femergenode>
                                              </femerge>
                                              <fecomponenttransfer></fecomponenttransfer>
                                            </filter>
                                          </defs>
                                          <g filter="url(#comp-k2t3sn5k-shadow)">
                                            <svg preserveAspectRatio="none" data-bbox="20 69 160 62" viewBox="20 69 160 62" height="100%" width="100%" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img">
                                              <g>
                                                <path d="M166.554 131H33.446C26.094 131 20 124.984 20 117.513V82.487C20 75.113 25.998 69 33.446 69h133.108C173.906 69 180 75.016 180 82.487v35.027c0 7.47-6.094 13.486-13.446 13.486z"></path>
                                              </g>
                                            </svg>

                                          </g>
                                        </svg>
                                      </div>
                                    </div>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3sn6g" style="width: 302px; pointer-events: none;">
                                    <h2 class="font_2" style="text-align:center;"><span style="color:#000000;"><span style="font-weight:bold;"><span style="font-family:avenir-lt-w01_35-light1475496,sans-serif;">Days to next delivery</span></span></span></h2>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3sn77" style="width: 154px; pointer-events: none;">
                                    <h2 class="font_2" style="font-size:50px; text-align:center;"><span style="font-size:50px;"><span class="color_14">6 days</span></span></h2>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="s_BIwzIGroupSkin" id="comp-k2t3u3ha" style="pointer-events: none;">
                            <div class="s_BIwzIGroupSkininlineContent" id="comp-k2t3u3hainlineContent" style="pointer-events: none;">
                              <style id="comp-k2t3u3ha-mesh-styles">
                                #comp-k2t3u3hainlineContent {
                                  height: auto;
                                  width: 719px;
                                  position: relative;
                                }

                                #comp-k2t3u3hainlineContent-gridWrapper {
                                  pointer-events: none;
                                }

                                #comp-k2t3u3hainlineContent-gridContainer {
                                  position: static;
                                  display: grid;
                                  height: auto;
                                  width: 100%;
                                  min-height: auto;
                                  grid-template-rows: min-content min-content min-content min-content min-content min-content min-content min-content 1fr;
                                  grid-template-columns: 100%;
                                }

                                #comp-k2t3u3j2 {
                                  position: relative;
                                  margin: 0px 0px 0px 0;
                                  left: 0px;
                                  grid-area: 1 / 1 / 10 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3u3k7 {
                                  position: relative;
                                  margin: 8px 0px 0 0;
                                  left: 239px;
                                  grid-area: 1 / 1 / 2 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3u3l7 {
                                  position: relative;
                                  margin: 0px 0px 7px 0;
                                  left: 33px;
                                  grid-area: 2 / 1 / 3 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3u3m4 {
                                  position: relative;
                                  margin: 0px 0px 6px 0;
                                  left: 21px;
                                  grid-area: 3 / 1 / 4 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3u3n2 {
                                  position: relative;
                                  margin: 0px 0px 8px 0;
                                  left: 21px;
                                  grid-area: 4 / 1 / 5 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3u3ny {
                                  position: relative;
                                  margin: 0px 0px 5px 0;
                                  left: 21px;
                                  grid-area: 5 / 1 / 6 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3u3ov {
                                  position: relative;
                                  margin: 0px 0px 5px 0;
                                  left: 21px;
                                  grid-area: 6 / 1 / 7 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3u3pr {
                                  position: relative;
                                  margin: 0px 0px 4px 0;
                                  left: 21px;
                                  grid-area: 7 / 1 / 8 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t3u3hacenteredContent {
                                  position: relative;
                                }

                                #comp-k2t3u3hainlineContent-gridContainer>* {
                                  pointer-events: auto;
                                }

                                #comp-k2t3u3hainlineContent-gridContainer>[id$="-rotated-wrapper"] {
                                  pointer-events: none;
                                }

                                #comp-k2t3u3hainlineContent-gridContainer>[id$="-rotated-wrapper"]>* {
                                  pointer-events: auto;
                                }
                              </style>
                              <div id="comp-k2t3u3hainlineContent-gridWrapper" data-mesh-internal="true">
                                <div id="comp-k2t3u3hainlineContent-gridContainer" data-mesh-internal="true">
                                  <div data-svg-id="1181dba727444047b53b4924eb63e3f0.svg" data-svg-type="shape" data-display-mode="stretch" data-strokewidth="0" data-viewbox="0 0 200 200" data-preserve-viewbox="ignore" class="style-k2t3i6qo1" id="comp-k2t3u3j2" style="width: 719px; height: 263px;">
                                    <div id="comp-k2t3u3j2link" class="style-k2t3i6qo1link">
                                      <div class="style-k2t3i6qo1_comp-k2t3u3j2 style-k2t3i6qo1_non-scaling-stroke style-k2t3i6qo1_with-shadow style-k2t3i6qo1svg" id="comp-k2t3u3j2svg" style="stroke-width: 0; fill-opacity: 1; stroke: rgb(65, 65, 65); stroke-opacity: 1; fill: rgb(255, 255, 255);">
                                        <svg height="100%" width="100%">
                                          <defs>
                                            <filter x="-9" y="-9" width="741" height="285" filterUnits="userSpaceOnUse" id="comp-k2t3u3j2-shadow" color-interpolation-filters="sRGB">
                                              <fecomponenttransfer result="srcRGB"></fecomponenttransfer>
                                              <fegaussianblur stdDeviation="3" in="SourceAlpha"></fegaussianblur>
                                              <feoffset dx="4" dy="4"></feoffset>
                                              <fecolormatrix type="matrix" values="0 0 0 0 0
     0 0 0 0 0
     0 0 0 0 0
     0 0 0 0.3 0"></fecolormatrix>
                                              <femerge>
                                                <femergenode></femergenode>
                                                <femergenode in="SourceGraphic"></femergenode>
                                              </femerge>
                                              <fecomponenttransfer></fecomponenttransfer>
                                            </filter>
                                          </defs>
                                          <g filter="url(#comp-k2t3u3j2-shadow)">
                                            <svg preserveAspectRatio="none" data-bbox="20 69 160 62" viewBox="20 69 160 62" height="100%" width="100%" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img">
                                              <g>
                                                <path d="M166.554 131H33.446C26.094 131 20 124.984 20 117.513V82.487C20 75.113 25.998 69 33.446 69h133.108C173.906 69 180 75.016 180 82.487v35.027c0 7.47-6.094 13.486-13.446 13.486z"></path>
                                              </g>
                                            </svg>

                                          </g>
                                        </svg>
                                      </div>
                                    </div>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3u3k7" style="width: 261px; pointer-events: none;">
                                    <h2 class="font_2" style="text-align:center;">List of products</h2>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3u3l7" style="width: 686px; pointer-events: none;">
                                    <h2 class="font_2" style="font-size:24px;"><span style="font-weight:bold;"><span style="font-size:24px;"><span style="color:rgb(99, 99, 99);">&nbsp;Name&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Price&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Quantity&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Total</span></span></span></h2>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3u3m4" style="width: 698px; pointer-events: none;">
                                    <h2 class="font_2" style="font-size:20px;"><span style="font-size:20px;"><span style="color:rgb(99, 99, 99);">&nbsp;Harry Potter&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;7.99€</span></span><span style="font-weight:bold;"><span style="font-size:24px;"><span style="color:rgb(99, 99, 99);">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 341<span style="font-weight:bold;"><span style="font-size:24px;"><span style="color:rgb(99, 99, 99);">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span></span>&nbsp;&nbsp;&nbsp;&nbsp; 2,724.59€&nbsp;</h2>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3u3n2" style="width: 698px; pointer-events: none;">
                                    <h2 class="font_2" style="font-size:20px;"><span style="font-size:20px;"><span style="color:rgb(99, 99, 99);">&nbsp;Moby Dick&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;8.99€</span></span><span style="font-weight:bold;"><span style="font-size:24px;"><span style="color:rgb(99, 99, 99);">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span></span>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 318<span style="font-weight:bold;"><span style="font-size:24px;"><span style="color:rgb(99, 99, 99);">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span></span>&nbsp;&nbsp;&nbsp;&nbsp; 2,858.82€</h2>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3u3ny" style="width: 698px; pointer-events: none;">
                                    <h2 class="font_2" style="font-size:20px;"><span style="font-size:20px;"><span style="color:rgb(99, 99, 99);">&nbsp;The Trial&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;9.99€</span></span><span style="font-weight:bold;"><span style="font-size:24px;"><span style="color:rgb(99, 99, 99);">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 297<span style="font-weight:bold;"><span style="font-size:24px;"><span style="color:rgb(99, 99, 99);">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2,967.03€</h2>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3u3ov" style="width: 698px; pointer-events: none;">
                                    <h2 class="font_2" style="font-size:20px;"><span style="font-size:20px;"><span style="color:rgb(99, 99, 99);">&nbsp;Emma&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;6.50€</span></span><span style="font-weight:bold;"><span style="font-size:24px;"><span style="color:rgb(99, 99, 99);">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 213<span style="font-weight:bold;"><span style="font-size:24px;"><span style="color:rgb(99, 99, 99);">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>1,384.50€</h2>
                                  </div>
                                  <div data-packed="true" class="txtNew" id="comp-k2t3u3pr" style="width: 698px; pointer-events: none;">
                                    <h2 class="font_2" style="font-size:20px;"><span style="font-size:20px;"><span style="color:rgb(99, 99, 99);">&nbsp;Dead Souls&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;11.99€ </span></span><span style="font-weight:bold;"><span style="font-size:24px;"><span style="color:rgb(99, 99, 99);">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 188<span style="font-weight:bold;"><span style="font-size:24px;"><span style="color:rgb(99, 99, 99);">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span></span>&nbsp;&nbsp;&nbsp;&nbsp; 2,254.12€</h2>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>
          <footer style="bottom:auto;left:0;margin-left:0;width:100%;min-width:980px;top:;right:;position:" class="style-k2t63ira_footer style-k2t63ira" tabindex="-1" data-site-width="980" data-fixedposition="false" data-isrunninginmobile="false" data-state=" " id="SITE_FOOTER">
            <div style="left:0;width:100%" id="SITE_FOOTERscreenWidthBackground" class="style-k2t63irascreenWidthBackground"></div>
            <div style="width:100%" id="SITE_FOOTERcenteredContent" class="style-k2t63iracenteredContent">
              <div style="margin-left:calc((100% - 980px) / 2);width:980px" id="SITE_FOOTERbg" class="style-k2t63irabg"></div>
              <div id="SITE_FOOTERinlineContent" class="style-k2t63irainlineContent">
                <style id="SITE_FOOTER-mesh-styles">
                  #SITE_FOOTERinlineContent {
                    height: auto;
                    width: 100%;
                    position: relative;
                  }

                  #SITE_FOOTERinlineContent-gridWrapper {
                    pointer-events: none;
                  }

                  #SITE_FOOTERinlineContent-gridContainer {
                    position: static;
                    display: grid;
                    height: auto;
                    width: 100%;
                    min-height: auto;
                    grid-template-rows: min-content 1fr;
                    grid-template-columns: 100%;
                  }

                  #comp-j8lcmr1n {
                    position: relative;
                    margin: 12px 0px 13px calc((100% - 980px) * 0.5);
                    left: 23px;
                    grid-area: 1 / 1 / 2 / 2;
                    justify-self: start;
                    align-self: start;
                  }

                  #comp-j8layux6 {
                    position: relative;
                    margin: 0px 0px 42px calc((100% - 980px) * 0.5);
                    left: 890px;
                    grid-area: 2 / 1 / 3 / 2;
                    justify-self: start;
                    align-self: start;
                  }

                  #SITE_FOOTERcenteredContent {
                    position: relative;
                  }

                  #SITE_FOOTERinlineContent-gridContainer>* {
                    pointer-events: auto;
                  }

                  #SITE_FOOTERinlineContent-gridContainer>[id$="-rotated-wrapper"] {
                    pointer-events: none;
                  }

                  #SITE_FOOTERinlineContent-gridContainer>[id$="-rotated-wrapper"]>* {
                    pointer-events: auto;
                  }
                </style>
            </div>
          </footer>
          <div id="pinnedAfterPAGES_CONTAINER" style="top:0;left:0;position:fixed;width:100%;height:calc(100% - 50px);margin-top:50px;z-index:50;display:grid;grid-template-columns:1fr;grid-template-rows:1fr;pointer-events:none">
            <style id="pinnedAfterPAGES_CONTAINER-style">
              #comp-j8lc2o2w {
                justify-self: start;
                margin-left: 64px;
                align-self: start;
                margin-top: 182px;
                position: absolute;
                grid-area: 1 / 1 / 2 / 2;
                pointer-events: auto;
              }
            </style>
            <nav aria-label="Site" style="height:;top:;bottom:;left:;right:;width:141px;z-index:50" class="style-j8lb5r6x2" data-state="subMenuOpenSide-right items-align-left subItems-align-left notMobile" id="comp-j8lc2o2w" data-param-border="0" data-param-separator="0" data-param-padding="0" data-open-direction="subMenuOpenDir-down">
              <ul class="style-j8lb5r6x2menuContainer">
                <li class="style-j8lb5r6x2_selected style-j8lb5r6x2_item style-j8lb5r6x2_itemWrapper " style="min-height:35px;height:35px" id="root0_"><a class=" style-j8lb5r6x2_label level0" style="line-height:35px" aria-haspopup="false" href="./overview" target="_self">Overview</a>
                  <ul style="margin-bottom:" class="style-j8lb5r6x2_subMenu  style-j8lb5r6x2_emptySubMenu"></ul>
                </li>
                <li class="style-j8lb5r6x2_item style-j8lb5r6x2_itemWrapper " style="min-height:35px;height:35px" id="root1_"><a class=" style-j8lb5r6x2_label level0" style="line-height:35px" aria-haspopup="false" href="./sales" target="_self">Sales</a>
                  <ul style="margin-bottom:" class="style-j8lb5r6x2_subMenu  style-j8lb5r6x2_emptySubMenu"></ul>
                </li>
                <li class="style-j8lb5r6x2_item style-j8lb5r6x2_itemWrapper " style="min-height:35px;height:35px" id="root2_"><a class=" style-j8lb5r6x2_label level0" style="line-height:35px" aria-haspopup="false" href="./finances" target="_self">Finances</a>
                  <ul style="margin-bottom:" class="style-j8lb5r6x2_subMenu  style-j8lb5r6x2_emptySubMenu"></ul>
                </li>
                <li class="style-j8lb5r6x2_item style-j8lb5r6x2_itemWrapper " style="min-height:35px;height:35px" id="root3_"><a class=" style-j8lb5r6x2_label level0" style="line-height:35px" aria-haspopup="false" href="./inventory" target="_self">Inventory</a>
                  <ul style="margin-bottom:" class="style-j8lb5r6x2_subMenu  style-j8lb5r6x2_emptySubMenu"></ul>
                </li>
                <li class="style-j8lb5r6x2_item style-j8lb5r6x2_itemWrapper " style="min-height:35px;height:35px" id="root4_"><a class=" style-j8lb5r6x2_label level0" style="line-height:35px" aria-haspopup="false" href="./logistics" target="_self">Logistics</a>
                  <ul style="margin-bottom:" class="style-j8lb5r6x2_subMenu  style-j8lb5r6x2_emptySubMenu"></ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
</body></html>
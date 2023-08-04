<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
    <meta name="theme-color" content="#d70018">
    <meta http-equiv="Content-Security-Policy" content="block-all-mixed-content">
    <meta name='revisit-after' content='2 days' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=yes">
    <title>@yield('title') / Gia Bảo Computor </title>
    <!-- ================= Page description ================== -->
    <meta name="description"
        content="Cấu hình core i5, core i7,Ryzen 5, Ryzen 7 Ram 4G,8G,16G,32G,64G Lưu trữ 120GB, 240GB, 512GB, 1TB">
    <link rel="preload" as="image"
        href="//bizweb.dktcdn.net/thumb/large/100/487/158/themes/913589/assets/slide-img1.png?1690883846775"
        media="screen and (max-width: 480px)">
    <link rel="preload" as="image"
        href="//bizweb.dktcdn.net/thumb/large/100/487/158/themes/913589/assets/slide-img2.png?1690883846775"
        media="screen and (max-width: 480px)">
    <link rel="preload" as="style" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        :root {
            --menuWidth: calc(100% - 20px);
            --leftColBackground: #fff;
            --lightLeftColBackground: #f3f3f3;
            /*+5%*/
            --darkLeftColBackground: #22272b;
            /*-5%*/
            --mainColor: #d70018;
            --mainColor2: #f2243b;
            --menuHover: #ffc107;
            --accentColor1: #929292;
            --accentColor2: #d80000;
            /*Màu giá*/
            --textColor: #4c4c4c;
            --toastSuccessBg: #d1e7dd;
            --toastSuccessCl: #0f5132;
            --toastWarningBg: #fff3cd;
            --toastWarningCl: #664d03;
            --toastErrorBg: #f8d7da;
            --toastErrorCl: #842029;
            --toastSystemBg: #d3d3d4;
            --toastSystemCl: #141619;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <link rel="preload" as="style"
        href="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/swiper.scss.css?1690883846775" type="text/css">
    <link rel="preload" as="style"
        href="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/mew_style_gb.scss.css?1690883846775" type="text/css">
    <link href="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/swiper.scss.css?1690883846775" rel="stylesheet">
    <link href="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/mew_style_gb.scss.css?1690883846775"
        rel="stylesheet">
    <link rel="preload" as="style"
        href="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/noindex.scss.css?1690883846775" type="text/css">
    <link href="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/noindex.scss.css?1690883846775" rel="stylesheet"
        type="text/css" media="all" />

    <link rel="preload" as="style"
        href="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/collection_style.scss.css?1690883846775"
        type="text/css">
    <link href="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/collection_style.scss.css?1690883846775"
        rel="stylesheet" type="text/css" media="all" />

    <link rel="preload" as="style"
        href="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/mew_noti.scss.css?1690883846775" type="text/css">
    <link href="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/mew_noti.scss.css?1690883846775" rel="stylesheet"
        type="text/css" media="all" />

    <link rel="preload" as="script"
        href="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/cash.min.js?1690883846775" />
    <script src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/cash.min.js?1690883846775"></script>
    <link rel="preload" as="script"
        href="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/axios.min.js?1690883846775" />
    <script src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/axios.min.js?1690883846775" type="text/javascript">
    </script>
 </head>
@yield('body')
<body>
    <!-- Start coding here -->


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

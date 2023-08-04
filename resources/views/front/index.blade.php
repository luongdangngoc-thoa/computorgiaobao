@extends('front.layout.master')
@section('title')Trang Chủ @endsection
@section('header_message') @endsection

@section('body')
<section>
<body id="body_m">
    <div class="page-body">
        <div class="hidden-md hidden-lg opacity_menu"></div>
        <div class="opacity_filter"></div>
        <div id="body_overlay" class="position-fixed d-none"></div>
        <div class="w-100 clearfix">
            <div
                class="menubar w-100 text-right d-flex d-lg-none position-fixed align-items-center scroll_down bg_no_index">
                <a href="/" title="Gia Bảo Computor" class="mr-auto ml-3">
                    <img alt="Gia Bảo Computor"
                        src="https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/296594553_582338043480204_5772334647727163365_n.jpg?_nc_cat=104&cb=99be929b-3346023f&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=1sZ2Bn5x1XMAX_vqRzB&_nc_ht=scontent-hkg4-2.xx&oh=00_AfDp_JH2G-SqPCGWP4nguYyfJU4of68tXa7I9os92-ciBg&oe=64CE1FF3"
                        class="img-fluid mb_logo">
                </a>
            </div>
            <div class="bg_head position-fixed w-100 scroll_down d-none"></div>
            <div class="col-left position-fixed d-flex flex-column pt-2 pb-2 pc">
                <div class="container position-relative">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-2 d-none d-lg-block">
                            <a href="/" title="Gia Bảo Computor" class="logo">
                                <img alt="Gia Bảo Computor"
                                    src="https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/296594553_582338043480204_5772334647727163365_n.jpg?_nc_cat=104&cb=99be929b-3346023f&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=1sZ2Bn5x1XMAX_vqRzB&_nc_ht=scontent-hkg4-2.xx&oh=00_AfDp_JH2G-SqPCGWP4nguYyfJU4of68tXa7I9os92-ciBg&oe=64CE1FF3"
                                    class="img-fluid" style="with : 200px, hight: 200px">
                            </a>
                        </div>
                        <div class="col-12 col-lg-10">
                            <div class="d-lg-flex align-items-center position-static pr-menu">
                                <div class="mr-2 mr-xl-3 level0 position-relative cls">
                                    <a href="he-thong-cua-hang" title="Hệ thống cửa hàng"
                                        class="align-items-center d-flex head_svg p-1 pl-xl-2 pr-xl-2 rounded-10">
                                        <small>Hệ thống cửa hàng
                                            {{-- <b class="d-block">(2 chi nhánh)</b> --}}
                                        </small>
                                    </a>
                                </div>
                                <div class="search-block mr-3">
                                    <form action="/search" method="get"
                                        class="js-search-form left-search position-relative mt-4 mt-lg-0 pt-2 pb-2 pt-lg-1 pb-lg-1">
                                        <input type="text" id="js-search-form" placeholder="Từ khoá..."
                                            value="" maxlength="70" name="query"
                                            class="rounded form-control pl-2 pl-lg-3 pr-5" autocomplete="off"
                                            required>
                                        <input type="submit" class="border-0 position-absolute p-0">
                                        <div class="w-100 position-absolute rounded searchResult px-2 d-none">
                                            <div class="overflow-auto search-result-warpper">
                                                <div
                                                    class="d-block text-left h6 searchResult_products_text mt-2 p-2 rounded text-white">
                                                    Sản phẩm (<span>0</span>)</div>
                                                <div class="searchResult_products"></div>
                                                <div
                                                    class="d-block text-left h6 searchResult_articles_text mt-2 p-2 rounded text-white">
                                                    Tin tức (<span>0</span>)</div>
                                                <div class="searchResult_articles"></div>
                                                <div
                                                    class="d-block text-left h6 searchResult_pages_text mt-2 p-2 rounded text-white">
                                                    Trang nội dung (<span>0</span>)</div>
                                                <div class="searchResult_pages"></div>

                                                <a href="/search?type=product&q="
                                                    class="btn border-0 rounded-0 w-100 my-0 all-result d-block mb-2 font-weight-bold">Xem
                                                    tất cả kết quả</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="blog-block">
                                    <div class="blog_head text-center d-flex align-items-center">

                                        <a class="pl-2 pl-xl-3 pr-2 pr-xl-3 d-inline-block position-relative"
                                            href="/tra-cuu-bao-hanh" title="Tra cứu bảo hành">Tra cứu bảo hành</a>
                                    </div>
                                </div>
                                <div class="info-block mr-3">
                                    <a href="tel:0935256476" title="0935256476" class="align-items-center d-flex">
                                        <span class="play0 d-none d-xl-block">
                                            <svg width="32" height="32">
                                                <use href="#svg-phone" />
                                            </svg>
                                        </span>
                                        <b><small>Gọi mua hàng</small> <br>0935256476</b>
                                    </a>
                                </div>
                                <div class="navigation-bottom mt-auto mt-lg-0">
                                    <div class="b_use d-none d-lg-flex align-items-stretch">

                                        <div id="js-login-toggle"
                                            class="btn-account d-none d-lg-flex align-items-center justify-content-center mr-3">
                                            <svg width="24" height="24" class="mr-2 d-none d-xl-block">
                                                <use href="#svg-account" />
                                            </svg>
                                            <div id="m_login" class="pop_login">
                                                <a href="/account/login"
                                                    class="item_login d-block font-weight-bold small"
                                                    title="Đăng nhập">Đăng nhập</a>
                                                <a href="/account/register"
                                                    class="item_login d-block font-weight-bold small"
                                                    title="Đăng ký">Đăng ký</a>
                                            </div>
                                        </div>
                                        <a class="p-1 btn-cart position-relative d-inline-flex head_svg justify-content-center align-items-center rounded-10"
                                            title="Giỏ hàng" href="/cart">
                                            <span
                                                class="b_ico_Cart text-center d-flex justify-content-center align-items-center position-relative">
                                                <svg width="20" height="20">
                                                    <use href="#svg-cart" />
                                                </svg>
                                                <span
                                                    class="btn-cart-indicator position-absolute d-none font-weight-bold text-center text-white"></span>
                                            </span>
                                            <small class="d-none d-xl-block ml-lg-1">Giỏ hàng</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navigation-block mr-lg-auto d-none d-lg-block">
                <div class="container">
                    <div class="position-relative main_fade">
                        <ul id="menu_pc" class="p-lg-0 px-lg-3 m-0 list-unstyled position-static d-lg-inline-flex">
                            <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                                <a href="/" title="Trang chủ"
                                    class="font-weight-bold d-block py-1  pr-lg-3 pr-2 position-relative ">
                                    Trang chủ
                                </a>
                            </li>
                            <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                                <a href="/gioi-thieu" title="Giới thiệu"
                                    class="font-weight-bold d-block py-1 pl-lg-3 pr-lg-3 pr-2 position-relative ">
                                    Giới thiệu
                                </a>
                            </li>
                            <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                                <a href="/laptop-all" title="Laptop"
                                    class="font-weight-bold d-block py-1 pl-lg-3 pr-4 js-checkMenu position-relative ">
                                    Laptop
                                    <i
                                        class="down_icon align-items-center justify-content-center position-absolute d-none d-lg-block mg"></i>
                                </a>
                                <i
                                    class="js-submenu down_icon d-flex align-items-center justify-content-center position-absolute d-lg-none"></i>
                                <ul class="lvdiv lv1 list-group p-0 list-unstyled rounded py-lg-2">
                                    <li class="no level1 pr-lg-2  pl-2 position-relative cls">
                                        <a href="/laptop-moi"
                                            class="py-1 py-lg-2 pr-5 position-relative  js-checkMenu"
                                            title="Laptop mới">
                                            Laptop mới
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2  pl-2 position-relative cls">
                                        <a href="/laptop-cu"
                                            class="py-1 py-lg-2 pr-5 position-relative active js-checkMenu"
                                            title="Laptop cũ">
                                            Laptop cũ
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2  pl-2 position-relative cls">
                                        <a href="/van-phong-hoc-tap"
                                            class="py-1 py-lg-2 pr-5 position-relative  js-checkMenu"
                                            title="Laptop văn phòng - Học tập">
                                            Laptop văn phòng - Học tập
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2  pl-2 position-relative cls">
                                        <a href="/do-hoa-lap-trinh"
                                            class="py-1 py-lg-2 pr-5 position-relative  js-checkMenu"
                                            title="Laptop đồ họa - Lập trình">
                                            Laptop đồ họa - Lập trình
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2  pl-2 position-relative cls">
                                        <a href="/laptop-gaming"
                                            class="py-1 py-lg-2 pr-5 position-relative  js-checkMenu"
                                            title="Laptop Gaming">
                                            Laptop Gaming
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                                <a href="/tivi" title="Tivi"
                                    class="font-weight-bold d-block py-1 pl-lg-3 pr-lg-3 pr-2 position-relative ">
                                    Tivi
                                </a>
                            </li>
                            <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                                <a href="/gia-dung-smarthome" title="Gia dụng, smarthome"
                                    class="font-weight-bold d-block py-1 pl-lg-3 pr-4 js-checkMenu position-relative ">
                                    Gia dụng, smarthome
                                    <i
                                        class="down_icon align-items-center justify-content-center position-absolute d-none d-lg-block mg"></i>
                                </a>
                                <i
                                    class="js-submenu down_icon d-flex align-items-center justify-content-center position-absolute d-lg-none"></i>
                                <ul class="lvdiv lv1 list-group p-0 list-unstyled rounded py-lg-2">
                                    <li class="no level1 pr-lg-2  pl-2 position-relative cls">
                                        <a href="/tu-lanh" class="py-1 py-lg-2 pr-5 position-relative  js-checkMenu"
                                            title="Tủ lạnh">
                                            Tủ lạnh
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2  pl-2 position-relative cls">
                                        <a href="/may-giat" class="py-1 py-lg-2 pr-5 position-relative  js-checkMenu"
                                            title="Máy giặt">
                                            Máy giặt
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2  pl-2 position-relative cls">
                                        <a href="/quat" class="py-1 py-lg-2 pr-5 position-relative  js-checkMenu"
                                            title="Quạt">
                                            Quạt
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2  pl-2 position-relative cls">
                                        <a href="/robot-hut-bui"
                                            class="py-1 py-lg-2 pr-5 position-relative  js-checkMenu"
                                            title="Robot hút bụi">
                                            Robot hút bụi
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                                <a href="/phu-kien-laptop" title="Phụ kiện laptop"
                                    class="font-weight-bold d-block py-1 pl-lg-3 pr-lg-3 pr-2 position-relative ">
                                    Phụ kiện laptop
                                </a>
                            </li>
                            <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                                <a href="/tin-tuc" title="Tin tức"
                                    class="font-weight-bold d-block py-1 pl-lg-3 pr-lg-3 pr-2 position-relative ">
                                    Tin tức
                                </a>
                            </li>
                            <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                                <a href="/lien-he" title="Liên hệ"
                                    class="font-weight-bold d-block py-1 pl-lg-3 pr-lg-3 pr-2 position-relative ">
                                    Liên hệ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-left position-fixed d-flex flex-column pt-lg-2 pb-lg-2 pt-0 pb-0 d-lg-none"
                id="col-left-mew">
                <div class="align-items-center menu_mobile h-100 position-relative">
                    <ul id="menu-mew" class="p-0 m-0 list-unstyled d-lg-flex justify-content-lg-end">

                        <li class="level0 d-block w-100 position-static">

                            <a href="/" title="Trang chủ"
                                class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-2">
                                <img class="lazy d-block pb-2 m-auto"
                                    src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                    data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/icon_menu_1.png?1690883846775"
                                    alt="Trang chủ">
                                <span class="line_1 line_2">Trang chủ</span>
                            </a>
                            <ul class="lv1 p-1 position-absolute h-100 waring">
                                <li class="level1 position-relative mb-1">
                                    <p class="text-center alert alert-warning">
                                        Danh mục trống
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="level0 d-block w-100 position-static">
                            <a href="/gioi-thieu" title="Giới thiệu"
                                class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-2">
                                <img class="lazy d-block pb-2 m-auto"
                                    src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                    data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/icon_menu_2.png?1690883846775"
                                    alt="Giới thiệu">
                                <span class="line_1 line_2">Giới thiệu</span>
                            </a>
                        </li>
                        <li class="level0 d-block w-100 position-static">
                            <a title="Laptop"
                                class="position-relative d-flex js-submenu flex-column justify-content-center align-items-center text-center p-2">
                                <img class="lazy d-block pb-2 m-auto"
                                    src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                    data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/icon_menu_3.png?1690883846775"
                                    alt="Laptop">
                                <span class="line_1 line_2">Laptop</span>
                            </a>
                            <ul class="lv1 p-0 list-unstyled position-absolute m_chill m-0">
                                <li class="level1 main position-sticky bg-white">
                                    <a href="/laptop-all"
                                        class="font-weight-bold d-flex pt-2 pb-2 border-bottom align-items-center w-100 justify-content-center text-main"
                                        title="Chi tiết danh mục">
                                        Chi tiết danh mục
                                    </a>
                                </li>
                                <li class="level1 position-relative">
                                    <a href="/laptop-moi"
                                        class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                        title="Laptop mới">
                                        Laptop mới
                                    </a>
                                    <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                                    </ul>
                                </li>
                                <li class="level1 position-relative">
                                    <a href="/laptop-cu"
                                        class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                        title="Laptop cũ">
                                        Laptop cũ
                                    </a>
                                    <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                                    </ul>
                                </li>
                                <li class="level1 position-relative">
                                    <a href="/van-phong-hoc-tap"
                                        class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                        title="Laptop văn phòng - Học tập">
                                        Laptop văn phòng - Học tập
                                    </a>
                                    <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                                    </ul>
                                </li>
                                <li class="level1 position-relative">
                                    <a href="/do-hoa-lap-trinh"
                                        class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                        title="Laptop đồ họa - Lập trình">
                                        Laptop đồ họa - Lập trình
                                    </a>
                                    <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                                    </ul>
                                </li>
                                <li class="level1 position-relative">
                                    <a href="/laptop-gaming"
                                        class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                        title="Laptop Gaming">
                                        Laptop Gaming
                                    </a>
                                    <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="level0 d-block w-100 position-static">

                            <a href="/tivi" title="Tivi"
                                class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-2">
                                <img class="lazy d-block pb-2 m-auto"
                                    src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                    data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/icon_menu_4.png?1690883846775"
                                    alt="Tivi">
                                <span class="line_1 line_2">Tivi</span>
                            </a>
                        </li>
                        <li class="level0 d-block w-100 position-static">
                            <a title="Gia dụng, smarthome"
                                class="position-relative d-flex js-submenu flex-column justify-content-center align-items-center text-center p-2">
                                <img class="lazy d-block pb-2 m-auto"
                                    src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                    data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/icon_menu_5.png?1690883846775"
                                    alt="Gia dụng, smarthome">
                                <span class="line_1 line_2">Gia dụng, smarthome</span>
                            </a>
                            <ul class="lv1 p-0 list-unstyled position-absolute m_chill m-0">
                                <li class="level1 main position-sticky bg-white">
                                    <a href="/gia-dung-smarthome"
                                        class="font-weight-bold d-flex pt-2 pb-2 border-bottom align-items-center w-100 justify-content-center text-main"
                                        title="Chi tiết danh mục">
                                        Chi tiết danh mục
                                    </a>
                                </li>
                                <li class="level1 position-relative">
                                    <a href="/tu-lanh"
                                        class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                        title="Tủ lạnh">
                                        Tủ lạnh
                                    </a>
                                    <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                                    </ul>
                                </li>
                                <li class="level1 position-relative">
                                    <a href="/may-giat"
                                        class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                        title="Máy giặt">
                                        Máy giặt
                                    </a>
                                    <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                                    </ul>
                                </li>
                                <li class="level1 position-relative">
                                    <a href="/quat"
                                        class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                        title="Quạt">
                                        Quạt
                                    </a>
                                    <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                                    </ul>
                                </li>
                                <li class="level1 position-relative">
                                    <a href="/robot-hut-bui"
                                        class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                        title="Robot hút bụi">
                                        Robot hút bụi
                                    </a>
                                    <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="level0 d-block w-100 position-static">

                            <a href="/phu-kien-laptop" title="Phụ kiện laptop"
                                class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-2">
                                <img class="lazy d-block pb-2 m-auto"
                                    src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                    data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/icon_menu_6.png?1690883846775"
                                    alt="Phụ kiện laptop">
                                <span class="line_1 line_2">Phụ kiện laptop</span>
                            </a>
                        </li>
                        <li class="level0 d-block w-100 position-static">

                            <a href="/tin-tuc" title="Tin tức"
                                class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-2">
                                <img class="lazy d-block pb-2 m-auto"
                                    src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                    data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/icon_menu_7.png?1690883846775"
                                    alt="Tin tức">
                                <span class="line_1 line_2">Tin tức</span>
                            </a>
                        </li>
                        <li class="level0 d-block w-100 position-static">

                            <a href="/lien-he" title="Liên hệ"
                                class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-2">
                                <img class="lazy d-block pb-2 m-auto"
                                    src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                    data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/icon_menu_8.png?1690883846775"
                                    alt="Liên hệ">
                                <span class="line_1 line_2">Liên hệ</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    let vW = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                    if (vW > 991) {
                        const slider = document.getElementById('menu_pc');
                        const dropDownMenus = document.querySelectorAll('.lvdiv');
                        const preventClick = (e) => {
                            e.preventDefault();
                            e.stopImmediatePropagation();
                        }
                        let isDown = false;
                        let isDragged = false;
                        let startX;
                        let scrollLeft;
                        let shouldScroll = slider.offsetWidth < slider.scrollWidth;
                        slider.addEventListener("mousedown", e => {
                            isDown = true;
                            slider.classList.add("active");
                            startX = e.pageX - slider.offsetLeft;
                            scrollLeft = slider.scrollLeft;
                        });
                        slider.addEventListener("mouseleave", () => {
                            isDown = false;
                            slider.classList.remove("active");
                        });
                        slider.addEventListener("mouseup", (e) => {
                            isDown = false;
                            const elements = document.querySelectorAll("a");
                            if (isDragged) {
                                for (let i = 0; i < elements.length; i++) {
                                    elements[i].addEventListener("click", preventClick);
                                }
                            } else {
                                for (let i = 0; i < elements.length; i++) {
                                    elements[i].removeEventListener("click", preventClick);
                                }
                            }
                            slider.classList.remove("active");
                            isDragged = false;
                            slider.querySelectorAll('.not-mega').forEach(function(item) {
                                item.querySelectorAll('.lvdiv').forEach(el => {
                                    el.style.left = item.getBoundingClientRect().left - slider
                                        .getBoundingClientRect().left + 'px';
                                });
                            });
                        });
                        let leftFirst = null;
                        dropDownMenus.forEach((menu) => {
                            const menuItem = menu.parentElement;
                            const menuItemLeft = menuItem.getBoundingClientRect().left;
                            leftFirst = Math.round(menuItemLeft);
                        });
                        slider.addEventListener("mousemove", e => {
                            if (!isDown) return;
                            isDragged = true;
                            e.preventDefault();
                            const x = e.pageX - slider.offsetLeft;
                            const walk = (x - startX) * 2;
                            slider.scrollLeft = scrollLeft - walk;
                            let leftC = null;
                            dropDownMenus.forEach((menu) => {
                                const menuItem = menu.parentElement;
                                const menuItemLeft = menuItem.getBoundingClientRect().left;
                                const leftLast = Math.round(menuItemLeft);
                                leftC = leftLast - leftFirst;
                                slider.style.left = leftC;
                            });
                            slider.querySelectorAll('.not-mega').forEach(function(item) {
                                item.querySelectorAll('.lvdiv').forEach(el => {
                                    el.style.left = item.getBoundingClientRect().left - slider
                                        .getBoundingClientRect().left + 'px';
                                });
                            });
                        });
                        slider.addEventListener("wheel", (e) => {
                            if (!shouldScroll) return;
                            if (e.target.closest('.mega .lvdiv')) {
                                return;
                            }
                            e.preventDefault();
                            const delta = e.wheelDelta / 120 || -e.deltaY / 3;
                            const maxScrollLeft = slider.scrollWidth - slider.clientWidth;

                            // Check if the slider is at the beginning or end of the menu
                            if (delta < 0 && slider.scrollLeft === maxScrollLeft) {
                                // If scrolling down and at the end of the menu, continue scrolling the page
                                e.stopPropagation();
                                window.scrollBy({
                                    top: 50,
                                    behavior: 'smooth'
                                });
                            } else if (delta > 0 && slider.scrollLeft === 0) {
                                // If scrolling up and at the beginning of the menu, continue scrolling the page
                                e.stopPropagation();
                                window.scrollBy({
                                    top: -50,
                                    behavior: 'smooth'
                                });
                            } else {
                                // If scrolling within the menu, continue scrolling the menu
                                isDragged = true;
                                slider.scrollLeft -= delta * 30;
                            }
                            let leftC = null;
                            dropDownMenus.forEach((menu) => {
                                const menuItem = menu.parentElement;
                                const menuItemLeft = menuItem.getBoundingClientRect().left;
                                const leftLast = Math.round(menuItemLeft);
                                leftC = leftLast - leftFirst;
                                slider.style.left = leftC;
                            });
                            slider.querySelectorAll('.not-mega').forEach(function(item) {
                                item.querySelectorAll('.lvdiv').forEach(el => {
                                    el.style.left = item.getBoundingClientRect().left - slider
                                        .getBoundingClientRect().left + parseInt(getComputedStyle(
                                            item).paddingLeft, 10) + 'px';
                                });
                            });
                        });
                    }
                });
            </script>
            <div class="col-right position-relative">
                <div class="contentWarp ">
                    <div class="opacity_filter"></div>
                    <div class="breadcrumbs bg-white">
                        <div class="container position-relative">
                            <ul class="breadcrumb align-items-center m-0 pl-0 pr-0 small pt-2 pb-2 bg-white">
                                <li class="home">
                                    <a href="/" title="Trang chủ">
                                        <svg width="12" height="10.633">
                                            <use href="#svg-home" />
                                        </svg>
                                        Trang chủ
                                    </a>
                                    <span class="slash-divider ml-2 mr-2">/</span>
                                </li>
                                <li> Laptop cũ</li>
                            </ul>
                        </div>
                    </div>
                    <section class="collection-layout mt-3 mb-3">
                        <div class="container">
                            <div class="rounded p-2 p-md-3 bg-white">
                                <div class="banner_collection mb-3 swiper-container position-relative">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide text-center effect-ming">
                                            <a href="/" title="Mew Mobile">
                                                <picture
                                                    class="rounded modal-open position-relative w-100 m-0 ratio1by6 d-block aspect sitdown">
                                                    <source media="(min-width: 1200px)"
                                                        srcset="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/banner_collec_1.jpg?1690883846775">
                                                    <source media="(min-width: 992px)"
                                                        srcset="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/banner_collec_1.jpg?1690883846775">
                                                    <source media="(min-width: 569px)"
                                                        srcset="//bizweb.dktcdn.net/thumb/large/100/487/158/themes/913589/assets/banner_collec_1.jpg?1690883846775">
                                                    <source media="(min-width: 480px)"
                                                        srcset="//bizweb.dktcdn.net/thumb/large/100/487/158/themes/913589/assets/banner_collec_1.jpg?1690883846775">
                                                    <img class="d-block img img-cover position-absolute"
                                                        src="//bizweb.dktcdn.net/thumb/large/100/487/158/themes/913589/assets/banner_collec_1.jpg?1690883846775"
                                                        alt="Mew Mobile" />
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="swiper-slide text-center effect-ming">
                                            <a href="/" title="Mew Mobile">
                                                <picture
                                                    class="rounded modal-open position-relative w-100 m-0 ratio1by6 d-block aspect sitdown">
                                                    <source media="(min-width: 1200px)"
                                                        srcset="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/banner_collec_2.jpg?1690883846775">
                                                    <source media="(min-width: 992px)"
                                                        srcset="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/banner_collec_2.jpg?1690883846775">
                                                    <source media="(min-width: 569px)"
                                                        srcset="//bizweb.dktcdn.net/thumb/large/100/487/158/themes/913589/assets/banner_collec_2.jpg?1690883846775">
                                                    <source media="(min-width: 480px)"
                                                        srcset="//bizweb.dktcdn.net/thumb/large/100/487/158/themes/913589/assets/banner_collec_2.jpg?1690883846775">
                                                    <img class="d-block img img-cover position-absolute"
                                                        src="//bizweb.dktcdn.net/thumb/large/100/487/158/themes/913589/assets/banner_collec_2.jpg?1690883846775"
                                                        alt="Mew Mobile" />
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="swiper-slide text-center effect-ming">
                                            <a href="/" title="MewYummy">
                                                <picture
                                                    class="rounded modal-open position-relative w-100 m-0 ratio1by6 d-block aspect sitdown">
                                                    <source media="(min-width: 1200px)"
                                                        srcset="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/banner_collec_3.jpg?1690883846775">
                                                    <source media="(min-width: 992px)"
                                                        srcset="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/banner_collec_3.jpg?1690883846775">
                                                    <source media="(min-width: 569px)"
                                                        srcset="//bizweb.dktcdn.net/thumb/large/100/487/158/themes/913589/assets/banner_collec_3.jpg?1690883846775">
                                                    <source media="(min-width: 480px)"
                                                        srcset="//bizweb.dktcdn.net/thumb/large/100/487/158/themes/913589/assets/banner_collec_3.jpg?1690883846775">
                                                    <img class="d-block img img-cover position-absolute"
                                                        src="//bizweb.dktcdn.net/thumb/large/100/487/158/themes/913589/assets/banner_collec_3.jpg?1690883846775"
                                                        alt="MewYummy" />
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-button-prev mbc_prev d-none d-md-flex"></div>
                                    <div class="swiper-button-next mbc_next d-none d-md-flex"></div>
                                </div>
                                <div class="aside-content d-none d-lg-block bg-main rounded-10 mb-3">
                                    <ul class="nav navbar-pills p-2">
                                        <li class="nav-item position-relative ">
                                            <a title="Trang chủ" class="nav-link font-weight-bold text-white"
                                                href="/">Trang chủ</a>
                                        </li>
                                        <li class="nav-item position-relative ">
                                            <a title="Giới thiệu" class="nav-link font-weight-bold text-white"
                                                href="/gioi-thieu">Giới thiệu</a>
                                        </li>
                                        <li class="nav-item position-relative  position-relative">
                                            <a title="Laptop" href="/laptop-all"
                                                class="nav-link align-items-center d-flex font-weight-bold text-white">
                                                Laptop
                                            </a>
                                            <ul class="menu_down" style="display:none;">
                                                <li class="nav-item">
                                                    <a title="Laptop mới" class="nav-link" href="/laptop-moi">Laptop
                                                        mới</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a title="Laptop cũ" class="nav-link" href="/laptop-cu">Laptop
                                                        cũ</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a title="Laptop văn phòng - Học tập" class="nav-link"
                                                        href="/van-phong-hoc-tap">Laptop văn phòng - Học tập</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a title="Laptop đồ họa - Lập trình" class="nav-link"
                                                        href="/do-hoa-lap-trinh">Laptop đồ họa - Lập trình</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a title="Laptop Gaming" class="nav-link"
                                                        href="/laptop-gaming">Laptop Gaming</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item position-relative ">
                                            <a title="Tivi" class="nav-link font-weight-bold text-white"
                                                href="/tivi">Tivi</a>
                                        </li>
                                        <li class="nav-item position-relative  position-relative">
                                            <a title="Gia dụng, smarthome" href="/gia-dung-smarthome"
                                                class="nav-link align-items-center d-flex font-weight-bold text-white">
                                                Gia dụng, smarthome
                                            </a>
                                            <ul class="menu_down" style="display:none;">
                                                <li class="nav-item">
                                                    <a title="Tủ lạnh" class="nav-link" href="/tu-lanh">Tủ lạnh</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a title="Máy giặt" class="nav-link" href="/may-giat">Máy
                                                        giặt</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a title="Quạt" class="nav-link" href="/quat">Quạt</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a title="Robot hút bụi" class="nav-link"
                                                        href="/robot-hut-bui">Robot hút bụi</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item position-relative ">
                                            <a title="Phụ kiện laptop" class="nav-link font-weight-bold text-white"
                                                href="/phu-kien-laptop">Phụ kiện laptop</a>
                                        </li>
                                        <li class="nav-item position-relative ">
                                            <a title="Tin tức" class="nav-link font-weight-bold text-white"
                                                href="/tin-tuc">Tin tức</a>
                                        </li>
                                        <li class="nav-item position-relative ">
                                            <a title="Liên hệ" class="nav-link font-weight-bold text-white"
                                                href="/lien-he">Liên hệ</a>
                                        </li>
                                    </ul>
                                </div>
                                <h1
                                    class="collection-name font-weight-bold mb-lg-3 text-uppercase pb-2 pt-2 mb-2 d-none">
                                    Laptop cũ
                                </h1>
                                <div class="row">
                                    <div class="col-12 col-lg-9 order-lg-2 pt-3 pt-lg-0">
                                        <div class="sortPagiBar pb-2 border-bottom">
                                            <ul
                                                class="aside-content filter-vendor list-unstyled mb-0 d-flex align-items-baseline gap-10">
                                                <li>
                                                    <span class="h6 title-head m-0 pt-2 pb-2 font-weight-bold">Sắp xếp:
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box">
                                                    <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                                                        <input type="radio" class="d-none sortby-default"
                                                            name="sortBy" onclick="sortby('default')">
                                                        <span class="fa2 px-2 py-1 rounded border">Mặc định</span>
                                                    </label>
                                                </li>
                                                <li class="filter-item filter-item--check-box">
                                                    <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                                                        <input type="radio" class="d-none sortby-alpha-asc"
                                                            name="sortBy" onclick="sortby('alpha-asc')">
                                                        <span class="fa2 px-2 py-1 rounded border">A → Z</span>
                                                    </label>
                                                </li>
                                                <li class="filter-item filter-item--check-box">
                                                    <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                                                        <input type="radio" class="d-none sortby-alpha-desc"
                                                            name="sortBy" onclick="sortby('alpha-desc')">
                                                        <span class="fa2 px-2 py-1 rounded border">Z → A</span>
                                                    </label>
                                                </li>
                                                <li class="filter-item filter-item--check-box">
                                                    <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                                                        <input type="radio" class="d-none sortby-price-asc"
                                                            name="sortBy" onclick="sortby('price-asc')">
                                                        <span class="fa2 px-2 py-1 rounded border">Giá tăng dần</span>
                                                    </label>
                                                </li>
                                                <li class="filter-item filter-item--check-box">
                                                    <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                                                        <input type="radio" class="d-none sortby-price-desc"
                                                            name="sortBy" onclick="sortby('price-desc')">
                                                        <span class="fa2 px-2 py-1 rounded border">Giá giảm dần</span>
                                                    </label>
                                                </li>
                                                <li class="filter-item filter-item--check-box">
                                                    <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                                                        <input type="radio" class="d-none sortby-created-asc"
                                                            name="sortBy" onclick="sortby('created-asc')">
                                                        <span class="fa2 px-2 py-1 rounded border">Mới nhất </span>
                                                    </label>
                                                </li>
                                                <li class="filter-item filter-item--check-box">
                                                    <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                                                        <input type="radio" class="d-none sortby-created-desc"
                                                            name="sortBy" onclick="sortby('created-desc')">
                                                        <span class="fa2 px-2 py-1 rounded border">Cũ nhất</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="collection">
                                            <div class="category-products position-relative mt-3 mb-3">
                                                <div class="row slider-items">
                                                    <div
                                                        class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 product-grid-item-lm mb-3 ">
                                                        <div
                                                            class="product-item position-relative p-2 rounded h-100 box_shadow">
                                                            <a href="/moi-99-dell-inspiron-7559-i5-6300hq-ram-8gb-ssd-128gb-hdd-500gb-nvidia-geforce-gtx-960m-15-6-inch-full-hd"
                                                                class="thumb d-block modal-open position-relative"
                                                                title="[Mới 99%] Dell Inspiron 7559 (i5-6300HQ | Ram 8GB | SSD 128GB + HDD 500GB | NVIDIA GeForce GTX 960M | 15,6 inch Full HD)">
                                                                <picture
                                                                    class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom d-block">
                                                                    <source media="(min-width: 1200px)"
                                                                        srcset="//bizweb.dktcdn.net/thumb/large/100/487/158/products/7559-jpeg.jpg?v=1690798536817">
                                                                    <source media="(min-width: 992px)"
                                                                        srcset="//bizweb.dktcdn.net/thumb/large/100/487/158/products/7559-jpeg.jpg?v=1690798536817">
                                                                    <source media="(min-width: 569px)"
                                                                        srcset="//bizweb.dktcdn.net/thumb/medium/100/487/158/products/7559-jpeg.jpg?v=1690798536817">
                                                                    <source media="(min-width: 480px)"
                                                                        srcset="//bizweb.dktcdn.net/thumb/medium/100/487/158/products/7559-jpeg.jpg?v=1690798536817">
                                                                    <img src="//bizweb.dktcdn.net/thumb/medium/100/487/158/products/7559-jpeg.jpg?v=1690798536817"
                                                                        decoding="async"
                                                                        class="d-block img img-cover position-absolute"
                                                                        alt="[Mới 99%] Dell Inspiron 7559 (i5-6300HQ | Ram 8GB | SSD 128GB + HDD 500GB | NVIDIA GeForce GTX 960M | 15,6 inch Full HD)">
                                                                </picture>
                                                            </a>
                                                            <div class="item-info mt-1 position-relative">
                                                                <h3 class="item-title font-weight-bold">
                                                                    <a class="line_2"
                                                                        href="/moi-99-dell-inspiron-7559-i5-6300hq-ram-8gb-ssd-128gb-hdd-500gb-nvidia-geforce-gtx-960m-15-6-inch-full-hd"
                                                                        title="[Mới 99%] Dell Inspiron 7559 (i5-6300HQ | Ram 8GB | SSD 128GB + HDD 500GB | NVIDIA GeForce GTX 960M | 15,6 inch Full HD)">
                                                                        [Mới 99%] Dell Inspiron 7559 (i5-6300HQ | Ram
                                                                        8GB | SSD 128GB + HDD 500GB | NVIDIA GeForce GTX
                                                                        960M | 15,6 inch Full HD)
                                                                    </a>
                                                                </h3>
                                                                <div class="item-price mb-1">
                                                                    <span
                                                                        class="regular-price font-weight-bold">10.190.000₫</span>
                                                                </div>
                                                                <div class="rte prd_sum">
                                                                    <ul>
                                                                        <li>CPU:&nbsp;Core i5-6300HQ(4 nhân 4
                                                                            luồng),Turbo 3.2 Ghz</li>
                                                                        <li>RAM:&nbsp;8 GB – DDR3L Buss 1600</li>
                                                                        <li>Đồ họa:&nbsp;Intel HD Graphics 530 và Nvidia
                                                                            GTX 960M- 4G</li>
                                                                        <li>Lưu trữ:&nbsp;SSD 128G và HDD 500G</li>
                                                                        <li>Màn hình:&nbsp;15.6 inch Full HD (1920 x
                                                                            1080)</li>
                                                                        <li>Trọng lượng: 2.5&nbsp;kg</li>
                                                                        <li>Hệ điều hành:&nbsp;Windows 10</li>
                                                                        <li>Pin:&nbsp;</li>
                                                                    </ul>
                                                                </div>
                                                                <label
                                                                    class="compare-label position-relative d-flex align-items-center m-0">
                                                                    <input type="checkbox"
                                                                        class="compare-checkbox d-none"
                                                                        value="/moi-99-dell-inspiron-7559-i5-6300hq-ram-8gb-ssd-128gb-hdd-500gb-nvidia-geforce-gtx-960m-15-6-inch-full-hd"
                                                                        data-type="Laptop gaming">
                                                                    <span
                                                                        class="compare-checkbox mr-1 rounded-circle"></span>
                                                                    So sánh
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 product-grid-item-lm mb-3 ">
                                                        <div
                                                            class="product-item position-relative p-2 rounded h-100 box_shadow">
                                                            <a href="/moi-99-dell-inspiron-5577-i5-7300hq-ram-8g-ssd-128g-hdd-500g-vga-nvidia-gtx-1050-4g-man-15-6-inch-full-hd"
                                                                class="thumb d-block modal-open position-relative"
                                                                title="[Mới 99%] Dell Inspiron 5577 ( i5-7300HQ, RAM 8G, SSD 128G + HDD 500G, VGA NVIDIA GTX 1050- 4G, màn 15.6 inch Full HD )">
                                                                <picture
                                                                    class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom d-block">
                                                                    <source media="(min-width: 1200px)"
                                                                        srcset="//bizweb.dktcdn.net/thumb/large/100/487/158/products/5577-jpeg.jpg?v=1690797744077">
                                                                    <source media="(min-width: 992px)"
                                                                        srcset="//bizweb.dktcdn.net/thumb/large/100/487/158/products/5577-jpeg.jpg?v=1690797744077">
                                                                    <source media="(min-width: 569px)"
                                                                        srcset="//bizweb.dktcdn.net/thumb/medium/100/487/158/products/5577-jpeg.jpg?v=1690797744077">
                                                                    <source media="(min-width: 480px)"
                                                                        srcset="//bizweb.dktcdn.net/thumb/medium/100/487/158/products/5577-jpeg.jpg?v=1690797744077">
                                                                    <img src="//bizweb.dktcdn.net/thumb/medium/100/487/158/products/5577-jpeg.jpg?v=1690797744077"
                                                                        decoding="async"
                                                                        class="d-block img img-cover position-absolute"
                                                                        alt="[Mới 99%] Dell Inspiron 5577 ( i5-7300HQ, RAM 8G, SSD 128G + HDD 500G, VGA NVIDIA GTX 1050- 4G, màn 15.6 inch Full HD )">
                                                                </picture>
                                                            </a>
                                                            <div class="item-info mt-1 position-relative">
                                                                <h3 class="item-title font-weight-bold">
                                                                    <a class="line_2"
                                                                        href="/moi-99-dell-inspiron-5577-i5-7300hq-ram-8g-ssd-128g-hdd-500g-vga-nvidia-gtx-1050-4g-man-15-6-inch-full-hd"
                                                                        title="[Mới 99%] Dell Inspiron 5577 ( i5-7300HQ, RAM 8G, SSD 128G + HDD 500G, VGA NVIDIA GTX 1050- 4G, màn 15.6 inch Full HD )">
                                                                        [Mới 99%] Dell Inspiron 5577 ( i5-7300HQ, RAM
                                                                        8G, SSD 128G + HDD 500G, VGA NVIDIA GTX 1050-
                                                                        4G, màn 15.6 inch Full HD )
                                                                    </a>
                                                                </h3>
                                                                <div class="item-price mb-1">
                                                                    <span
                                                                        class="regular-price font-weight-bold">11.890.000₫</span>
                                                                </div>
                                                                <div class="rte prd_sum">
                                                                    <ul>
                                                                        <li>CPU:&nbsp;Core i5-7300HQ (4 nhân 4 luồng),
                                                                            Turbo 3.5 Ghz</li>
                                                                        <li>RAM:&nbsp;8 GB – DDR4 Buss 2133</li>
                                                                        <li>Đồ họa:&nbsp;Intel HD Graphics 630 và Nvidia
                                                                            GTX 1050- 4G</li>
                                                                        <li>Lưu trữ:&nbsp;SSD 128G + 500G HDD</li>
                                                                        <li>Màn hình:&nbsp;15.6 inch Full HD TN (1920 x
                                                                            1080)</li>
                                                                        <li>Trọng lượng: 2.5&nbsp;kg</li>
                                                                        <li>Hệ điều hành:&nbsp;Windows 10</li>
                                                                        <li>Pin:&nbsp;4 cell</li>
                                                                    </ul>
                                                                </div>
                                                                <label
                                                                    class="compare-label position-relative d-flex align-items-center m-0">
                                                                    <input type="checkbox"
                                                                        class="compare-checkbox d-none"
                                                                        value="/moi-99-dell-inspiron-5577-i5-7300hq-ram-8g-ssd-128g-hdd-500g-vga-nvidia-gtx-1050-4g-man-15-6-inch-full-hd"
                                                                        data-type="Laptop gaming">
                                                                    <span
                                                                        class="compare-checkbox mr-1 rounded-circle"></span>
                                                                    So sánh
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 product-grid-item-lm mb-3 ">
                                                        <div
                                                            class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                                                            <a href="/moi-99-dell-xps-13-9350-i5-6200u-ram-8gb-ssd-256gb-13-3-inch-full-hd-vien-sieu-mong"
                                                                class="thumb d-block modal-open position-relative"
                                                                title="[Mới 99%] Dell xps 13 9350 (i5 6200U / Ram 8GB / SSD 256GB / 13,3 inch Full HD viền siêu mỏng)">
                                                                <div
                                                                    class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                                                    <img src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/487/158/products/9350-jpeg.jpg?v=1690797010917"
                                                                        decoding="async"
                                                                        class="d-block img img-cover position-absolute lazy"
                                                                        alt="[Mới 99%] Dell xps 13 9350 (i5 6200U / Ram 8GB / SSD 256GB / 13,3 inch Full HD viền siêu mỏng)">
                                                                </div>
                                                            </a>
                                                            <div class="item-info mt-1 position-relative">
                                                                <h3 class="item-title font-weight-bold">
                                                                    <a class="line_2"
                                                                        href="/moi-99-dell-xps-13-9350-i5-6200u-ram-8gb-ssd-256gb-13-3-inch-full-hd-vien-sieu-mong"
                                                                        title="[Mới 99%] Dell xps 13 9350 (i5 6200U / Ram 8GB / SSD 256GB / 13,3 inch Full HD viền siêu mỏng)">
                                                                        [Mới 99%] Dell xps 13 9350 (i5 6200U / Ram 8GB /
                                                                        SSD 256GB / 13,3 inch Full HD viền siêu mỏng)
                                                                    </a>
                                                                </h3>
                                                                <div class="item-price">
                                                                    <span
                                                                        class="regular-price font-weight-bold">10.300.000₫</span>
                                                                </div>
                                                                <div class="rte prd_sum">
                                                                    <ul>
                                                                        <li>CPU:&nbsp;Core i5-6200U (2 core 4 luồng),
                                                                            Turbo 2.8 GHz</li>
                                                                        <li>RAM:&nbsp;8GB – LPDDR3</li>
                                                                        <li>Đồ họa:&nbsp;Intel HD Graphics 520</li>
                                                                        <li>Lưu trữ:&nbsp;SSD 256 NVMe</li>
                                                                        <li>Màn hình:&nbsp;13.3 inch Full HD (1920 x
                                                                            1080), IPS, độ phủ màu 100% sRGB</li>
                                                                        <li>Trọng lượng:&nbsp;1.18 kg</li>
                                                                        <li>Hệ điều hành:&nbsp;Windows 10</li>
                                                                        <li>Pin:&nbsp;4 cell - 52 WHr</li>
                                                                    </ul>
                                                                </div>
                                                                <label
                                                                    class="compare-label position-relative d-flex align-items-center m-0">
                                                                    <input type="checkbox"
                                                                        class="compare-checkbox d-none"
                                                                        value="/moi-99-dell-xps-13-9350-i5-6200u-ram-8gb-ssd-256gb-13-3-inch-full-hd-vien-sieu-mong"
                                                                        data-type="Laptop cũ">
                                                                    <span
                                                                        class="compare-checkbox mr-1 rounded-circle"></span>
                                                                    So sánh
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 product-grid-item-lm mb-3 ">
                                                        <div
                                                            class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                                                            <div
                                                                class="sale-label sale-top-right position-absolute font-weight-bold">
                                                                Giảm
                                                                28%
                                                            </div>
                                                            <a href="/likenew-99-dell-latitude-e7250-i5-5300u-ram-4gb-ssd-128gb-12-5-hd"
                                                                class="thumb d-block modal-open position-relative"
                                                                title="[LikeNew 99%] Dell latitude E7250 (i5 - 5300U | Ram 4GB | SSD 128GB | 12.5 HD)">
                                                                <div
                                                                    class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                                                    <img src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/487/158/products/62ecee93945551cb47affffa-likenew-99-dell-latitude-e7250-i5-5300u-ram-4gb-ssd-128gb-125-hd-jpeg.jpg?v=1689218258957"
                                                                        decoding="async"
                                                                        class="d-block img img-cover position-absolute lazy"
                                                                        alt="[LikeNew 99%] Dell latitude E7250 (i5 - 5300U | Ram 4GB | SSD 128GB | 12.5 HD)">
                                                                </div>
                                                            </a>
                                                            <div class="item-info mt-1 position-relative">
                                                                <h3 class="item-title font-weight-bold">
                                                                    <a class="line_2"
                                                                        href="/likenew-99-dell-latitude-e7250-i5-5300u-ram-4gb-ssd-128gb-12-5-hd"
                                                                        title="[LikeNew 99%] Dell latitude E7250 (i5 - 5300U | Ram 4GB | SSD 128GB | 12.5 HD)">
                                                                        [LikeNew 99%] Dell latitude E7250 (i5 - 5300U |
                                                                        Ram 4GB | SSD 128GB | 12.5 HD)
                                                                    </a>
                                                                </h3>
                                                                <div class="item-price">
                                                                    <span
                                                                        class="special-price font-weight-bold">3.950.000₫</span>
                                                                    <del class="old-price"> 5.500.000₫</del>
                                                                </div>
                                                                <div class="rte prd_sum">
                                                                    <p>Khuyến mãi:</p>
                                                                    <ul>
                                                                        <li>Tặng Balo&nbsp;hoặc cặp xách chống thời
                                                                            trang chống sốc</li>
                                                                        <li>Tặng Voucher giảm giá đến 500.000đ</li>
                                                                        <li>Tặng gói cài đặt Windows, bảo dưỡng miễn phí
                                                                            trọn đời máy</li>
                                                                    </ul>
                                                                    <p>Bảo hành:&nbsp;</p>
                                                                    <ul>
                                                                        <li>Bảo hành 12 tháng, 1 đổi 1 trong vòng 15
                                                                            ngày - Xem chính sách</li>
                                                                        <li>GÓI BẢO HÀNH KIM CƯƠNG - Bảo hành 24 tháng
                                                                        </li>
                                                                    </ul>
                                                                    <p>MIỄN PHÍ GIAO HÀNG TẬN NHÀ</p>
                                                                    <ul>
                                                                        <li>Với đơn hàng &lt; 10.000.000 đồng: Miễn phí
                                                                            giao hàng cho đơn hàng &lt; 5km tính từ cửa
                                                                            hàng Giao Bảo Computor gần nhất</li>
                                                                        <li>Với đơn hàng &gt; 10.000.000 đồng: Miễn phí
                                                                            giao hàng (khách hàng chịu phí bảo hiểm hàng
                                                                            hóa nếu có)</li>
                                                                    </ul>
                                                                </div>
                                                                <label
                                                                    class="compare-label position-relative d-flex align-items-center m-0">
                                                                    <input type="checkbox"
                                                                        class="compare-checkbox d-none"
                                                                        value="/likenew-99-dell-latitude-e7250-i5-5300u-ram-4gb-ssd-128gb-12-5-hd"
                                                                        data-type="Laptop cũ">
                                                                    <span
                                                                        class="compare-checkbox mr-1 rounded-circle"></span>
                                                                    So sánh
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 product-grid-item-lm mb-3 ">
                                                        <div
                                                            class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                                                            <div
                                                                class="sale-label sale-top-right position-absolute font-weight-bold">
                                                                Giảm
                                                                14%
                                                            </div>
                                                            <a href="/dell-precision-5510-core-i7-6820hq-ram-8gb-ssd-256gb-man-15-6-inch-full-hd-nvidia-quadro-m1000"
                                                                class="thumb d-block modal-open position-relative"
                                                                title="Dell Precision 5510 (Core i7-6820HQ | Ram 8GB | SSD 256GB| Màn 15.6 inch Full HD | NVIDIA Quadro M1000)">
                                                                <div
                                                                    class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                                                    <img src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/487/158/products/632d2944db762993ca6148b8-dell-precision-5510-core-i7-6820hq-ram-8gb-ssd-256gb-mn-156-inch-full-hd-nvidia-quadro-m1000-jpeg.jpg?v=1689165126767"
                                                                        decoding="async"
                                                                        class="d-block img img-cover position-absolute lazy"
                                                                        alt="Dell Precision 5510 (Core i7-6820HQ | Ram 8GB | SSD 256GB| Màn 15.6 inch Full HD | NVIDIA Quadro M1000)">
                                                                </div>
                                                            </a>
                                                            <div class="item-info mt-1 position-relative">
                                                                <h3 class="item-title font-weight-bold">
                                                                    <a class="line_2"
                                                                        href="/dell-precision-5510-core-i7-6820hq-ram-8gb-ssd-256gb-man-15-6-inch-full-hd-nvidia-quadro-m1000"
                                                                        title="Dell Precision 5510 (Core i7-6820HQ | Ram 8GB | SSD 256GB| Màn 15.6 inch Full HD | NVIDIA Quadro M1000)">
                                                                        Dell Precision 5510 (Core i7-6820HQ | Ram 8GB |
                                                                        SSD 256GB| Màn 15.6 inch Full HD | NVIDIA Quadro
                                                                        M1000)
                                                                    </a>
                                                                </h3>
                                                                <div class="item-price">
                                                                    <span
                                                                        class="special-price font-weight-bold">10.200.000₫</span>
                                                                    <del class="old-price"> 11.900.000₫</del>
                                                                </div>
                                                                <div class="rte prd_sum">
                                                                    <ul>
                                                                        <li>-CPU:&nbsp;Intel i7-6820HQ (4 core 8 luồng
                                                                            Turbo 3.6 Ghz)</li>
                                                                        <li>-RAM:&nbsp;8GB DDR4 bus 2133</li>
                                                                        <li>-Đồ họa:&nbsp;Nvidia Quadro M1000M</li>
                                                                        <li>-Lưu trữ: 256&nbsp;SSD</li>
                                                                        <li>-Màn hình:&nbsp;15,6 Inch&nbsp;Full HD ips
                                                                        </li>
                                                                        <li>-Trọng lượng:&nbsp;1.8&nbsp;kg</li>
                                                                        <li>-&nbsp;Hệ điều hành:&nbsp;Windows 10</li>
                                                                        <li>-&nbsp;Pin: 8 cell</li>
                                                                    </ul>
                                                                </div>
                                                                <label
                                                                    class="compare-label position-relative d-flex align-items-center m-0">
                                                                    <input type="checkbox"
                                                                        class="compare-checkbox d-none"
                                                                        value="/dell-precision-5510-core-i7-6820hq-ram-8gb-ssd-256gb-man-15-6-inch-full-hd-nvidia-quadro-m1000"
                                                                        data-type="Đồ họa, lập trình">
                                                                    <span
                                                                        class="compare-checkbox mr-1 rounded-circle"></span>
                                                                    So sánh
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 product-grid-item-lm mb-3 ">
                                                        <div
                                                            class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                                                            <div
                                                                class="sale-label sale-top-right position-absolute font-weight-bold">
                                                                Giảm
                                                                17%
                                                            </div>
                                                            <a href="/moi-99-dell-xps-13-9360-core-i5-7200u-ram-8gb-ssd-256-gb-13-3-inch-full-hd-ips"
                                                                class="thumb d-block modal-open position-relative"
                                                                title="[Mới 99%] Dell XPS 13 9360 (Core i5-7200U | Ram 8Gb | SSD 256 GB | 13,3 inch Full HD ips)">
                                                                <div
                                                                    class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                                                    <img src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/487/158/products/632d289fdb762993ca61336c-mi-99-dell-xps-13-9360-core-i5-7200u-ram-8gb-ssd-256-gb-133-inch-full-hd-ips-jpeg.jpg?v=1689164733603"
                                                                        decoding="async"
                                                                        class="d-block img img-cover position-absolute lazy"
                                                                        alt="[Mới 99%] Dell XPS 13 9360 (Core i5-7200U | Ram 8Gb | SSD 256 GB | 13,3 inch Full HD ips)">
                                                                </div>
                                                            </a>
                                                            <div class="item-info mt-1 position-relative">
                                                                <h3 class="item-title font-weight-bold">
                                                                    <a class="line_2"
                                                                        href="/moi-99-dell-xps-13-9360-core-i5-7200u-ram-8gb-ssd-256-gb-13-3-inch-full-hd-ips"
                                                                        title="[Mới 99%] Dell XPS 13 9360 (Core i5-7200U | Ram 8Gb | SSD 256 GB | 13,3 inch Full HD ips)">
                                                                        [Mới 99%] Dell XPS 13 9360 (Core i5-7200U | Ram
                                                                        8Gb | SSD 256 GB | 13,3 inch Full HD ips)
                                                                    </a>
                                                                </h3>
                                                                <div class="item-price">
                                                                    <span
                                                                        class="special-price font-weight-bold">10.000.000₫</span>
                                                                    <del class="old-price"> 11.990.000₫</del>
                                                                </div>
                                                                <div class="rte prd_sum">
                                                                    <p>Khuyến mãi:</p>
                                                                    <ul>
                                                                        <li>Tặng Balo &nbsp;hoặc cặp xách chống thời
                                                                            trang chống sốc</li>
                                                                        <li>Tặng bộ vệ sinh laptop</li>
                                                                        <li>Tặng chuột không dây</li>
                                                                        <li>Tặng tấm lót di chuột</li>
                                                                        <li>Tặng Voucher giảm giá đến 500.000đ</li>
                                                                        <li>Tặng gói cài đặt Windows, bảo dưỡng miễn phí
                                                                            trọn đời máy</li>
                                                                        <li>Thu cũ đổi mới trợ giá đến 15% xem chi tiết
                                                                        </li>
                                                                    </ul>
                                                                    <p>Bảo hành:&nbsp;</p>
                                                                    <ul>
                                                                        <li>Bảo hành 12 tháng, 1 đổi 1 trong vòng 15
                                                                            ngày - Xem chính sách</li>
                                                                        <li>GÓI BẢO HÀNH KIM CƯƠNG - Bảo hành 24 tháng
                                                                        </li>
                                                                    </ul>
                                                                    <p>MIỄN PHÍ GIAO HÀNG TẬN NHÀ</p>
                                                                    <ul>
                                                                        <li>Với đơn hàng &lt; 10.000.000 đồng: Miễn phí
                                                                            giao hàng cho đơn hàng &lt; 5km tính từ cửa
                                                                            hàng Giao Bảo Computor gần nhất</li>
                                                                        <li>Với đơn hàng &gt; 10.000.000 đồng: Miễn phí
                                                                            giao hàng (khách hàng chịu phí bảo hiểm hàng
                                                                            hóa nếu có)</li>
                                                                    </ul>
                                                                </div>
                                                                <label
                                                                    class="compare-label position-relative d-flex align-items-center m-0">
                                                                    <input type="checkbox"
                                                                        class="compare-checkbox d-none"
                                                                        value="/moi-99-dell-xps-13-9360-core-i5-7200u-ram-8gb-ssd-256-gb-13-3-inch-full-hd-ips"
                                                                        data-type="Laptop cũ">
                                                                    <span
                                                                        class="compare-checkbox mr-1 rounded-circle"></span>
                                                                    So sánh
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 product-grid-item-lm mb-3 ">
                                                        <div
                                                            class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                                                            <a href="/moi-99-hp-spectre-pro-x360-g2-i5-6300u-ram-8gb-ssd-256gb-man-13-3-full-hd-cam-ung"
                                                                class="thumb d-block modal-open position-relative"
                                                                title="[Mới 99%] HP Spectre Pro X360 G2 (i5 6300U / Ram 8GB/ SSD 256GB/ màn 13,3"
                                                                Full HD cảm ứng)">
                                                                <div
                                                                    class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                                                    <img src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/487/158/products/640efe4c7101d4be09705ba4-mi-99-hp-spectre-pro-x360-g2-i5-6300u-ram-8gb-ssd-256gb-mn-133-full-hd-cm-ng-jpeg.jpg?v=1689164440053"
                                                                        decoding="async"
                                                                        class="d-block img img-cover position-absolute lazy"
                                                                        alt="[Mới 99%] HP Spectre Pro X360 G2 (i5 6300U / Ram 8GB/ SSD 256GB/ màn 13,3"
                                                                        Full HD cảm ứng)">
                                                                </div>
                                                            </a>
                                                            <div class="item-info mt-1 position-relative">
                                                                <h3 class="item-title font-weight-bold">
                                                                    <a class="line_2"
                                                                        href="/moi-99-hp-spectre-pro-x360-g2-i5-6300u-ram-8gb-ssd-256gb-man-13-3-full-hd-cam-ung"
                                                                        title="[Mới 99%] HP Spectre Pro X360 G2 (i5 6300U / Ram 8GB/ SSD 256GB/ màn 13,3"
                                                                        Full HD cảm ứng)">
                                                                        [Mới 99%] HP Spectre Pro X360 G2 (i5 6300U / Ram
                                                                        8GB/ SSD 256GB/ màn 13,3" Full HD cảm ứng)
                                                                    </a>
                                                                </h3>
                                                                <div class="item-price">
                                                                    <span
                                                                        class="regular-price font-weight-bold">7.990.000₫</span>
                                                                </div>
                                                                <div class="rte prd_sum">
                                                                    <p>Khuyến mãi:</p>
                                                                    <ul>
                                                                        <li>Tặng Balo &nbsp;hoặc cặp xách chống thời
                                                                            trang chống sốc</li>
                                                                        <li>Tặng bộ vệ sinh laptop</li>
                                                                        <li>Tặng chuột không dây</li>
                                                                        <li>Tặng tấm lót di chuột</li>
                                                                        <li>Tặng Voucher giảm giá đến 500.000đ</li>
                                                                        <li>Tặng gói cài đặt Windows, bảo dưỡng miễn phí
                                                                            trọn đời máy</li>
                                                                        <li>Thu cũ đổi mới trợ giá đến 15% xem chi tiết
                                                                        </li>
                                                                    </ul>
                                                                    <p>Bảo hành:&nbsp;</p>
                                                                    <ul>
                                                                        <li>Bảo hành 12 tháng, 1 đổi 1 trong vòng 15
                                                                            ngày - Xem chính sách</li>
                                                                        <li>GÓI BẢO HÀNH KIM CƯƠNG - Bảo hành 24 tháng
                                                                        </li>
                                                                    </ul>
                                                                    <p>MIỄN PHÍ GIAO HÀNG TẬN NHÀ</p>
                                                                    <ul>
                                                                        <li>Với đơn hàng &lt; 10.000.000 đồng: Miễn phí
                                                                            giao hàng cho đơn hàng &lt; 5km tính từ cửa
                                                                            hàng Giao Bảo Computor gần nhất</li>
                                                                        <li>Với đơn hàng &gt; 10.000.000 đồng: Miễn phí
                                                                            giao hàng (khách hàng chịu phí bảo hiểm hàng
                                                                            hóa nếu có)</li>
                                                                    </ul>
                                                                </div>
                                                                <label
                                                                    class="compare-label position-relative d-flex align-items-center m-0">
                                                                    <input type="checkbox"
                                                                        class="compare-checkbox d-none"
                                                                        value="/moi-99-hp-spectre-pro-x360-g2-i5-6300u-ram-8gb-ssd-256gb-man-13-3-full-hd-cam-ung"
                                                                        data-type="Laptop 2 in 1">
                                                                    <span
                                                                        class="compare-checkbox mr-1 rounded-circle"></span>
                                                                    So sánh
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div
                                                        class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 product-grid-item-lm mb-3 ">
                                                        <div
                                                            class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                                                            <div
                                                                class="sale-label sale-top-right position-absolute font-weight-bold">
                                                                Giảm
                                                                6%
                                                            </div>
                                                            <a href="/moi-99-dell-xps-9370-i5-8350u-ram-8-gb-ssd-256gb-man-13-3-inch-full-hd-ips"
                                                                class="thumb d-block modal-open position-relative"
                                                                title="[Laptop cũ] Dell XPS 9370 (i5 8350U / Ram 8 GB/ SSD 256GB/ màn 13.3 inch Full Hd ips)">
                                                                <div
                                                                    class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                                                    <img src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/487/158/products/6271f432685dab9c49036ad7-mi-99-dell-xps-9370-i5-8350u-ram-8-gb-ssd-256gb-mn-133-inch-full-hd-ips-jpeg.jpg?v=1689163787697"
                                                                        decoding="async"
                                                                        class="d-block img img-cover position-absolute lazy"
                                                                        alt="[Laptop cũ] Dell XPS 9370 (i5 8350U / Ram 8 GB/ SSD 256GB/ màn 13.3 inch Full Hd ips)">
                                                                </div>
                                                            </a>
                                                            <div class="item-info mt-1 position-relative">
                                                                <h3 class="item-title font-weight-bold">
                                                                    <a class="line_2"
                                                                        href="/moi-99-dell-xps-9370-i5-8350u-ram-8-gb-ssd-256gb-man-13-3-inch-full-hd-ips"
                                                                        title="[Laptop cũ] Dell XPS 9370 (i5 8350U / Ram 8 GB/ SSD 256GB/ màn 13.3 inch Full Hd ips)">
                                                                        [Laptop cũ] Dell XPS 9370 (i5 8350U / Ram 8 GB/
                                                                        SSD 256GB/ màn 13.3 inch Full Hd ips)
                                                                    </a>
                                                                </h3>
                                                                <div class="item-price">
                                                                    <span
                                                                        class="special-price font-weight-bold">11.500.000₫</span>
                                                                    <del class="old-price"> 12.290.000₫</del>
                                                                </div>
                                                                <div class="rte prd_sum">
                                                                    <p>Khuyến mãi:</p>
                                                                    <ul>
                                                                        <li>Tặng Balo &nbsp;hoặc cặp xách chống thời
                                                                            trang chống sốc</li>
                                                                        <li>Tặng bộ vệ sinh laptop</li>
                                                                        <li>Tặng chuột không dây</li>
                                                                        <li>Tặng tấm lót di chuột</li>
                                                                        <li>Tặng Voucher giảm giá đến 500.000đ</li>
                                                                        <li>Tặng gói cài đặt Windows, bảo dưỡng miễn phí
                                                                            trọn đời máy</li>
                                                                        <li>Thu cũ đổi mới trợ giá đến 15% xem chi tiết
                                                                        </li>
                                                                    </ul>
                                                                    <p>Bảo hành:&nbsp;</p>
                                                                    <ul>
                                                                        <li>Bảo hành 12 tháng, 1 đổi 1 trong vòng 15
                                                                            ngày - Xem chính sách</li>
                                                                        <li>GÓI BẢO HÀNH KIM CƯƠNG - Bảo hành 24 tháng
                                                                        </li>
                                                                    </ul>
                                                                    <p>MIỄN PHÍ GIAO HÀNG TẬN NHÀ</p>
                                                                    <ul>
                                                                        <li>Với đơn hàng &lt; 10.000.000 đồng: Miễn phí
                                                                            giao hàng cho đơn hàng &lt; 5km tính từ cửa
                                                                            hàng Giao Bảo Computor gần nhất</li>
                                                                        <li>Với đơn hàng &gt; 10.000.000 đồng: Miễn phí
                                                                            giao hàng (khách hàng chịu phí bảo hiểm hàng
                                                                            hóa nếu có)</li>
                                                                    </ul>
                                                                </div>
                                                                <label
                                                                    class="compare-label position-relative d-flex align-items-center m-0">
                                                                    <input type="checkbox"
                                                                        class="compare-checkbox d-none"
                                                                        value="/moi-99-dell-xps-9370-i5-8350u-ram-8-gb-ssd-256gb-man-13-3-inch-full-hd-ips"
                                                                        data-type="Laptop cũ">
                                                                    <span
                                                                        class="compare-checkbox mr-1 rounded-circle"></span>
                                                                    So sánh
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 product-grid-item-lm mb-3 ">
                                                        <div
                                                            class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                                                            <div
                                                                class="sale-label sale-top-right position-absolute font-weight-bold">
                                                                Giảm
                                                                20%
                                                            </div>
                                                            <a href="/dell-latitude-e7480-ultrabook-da-nang-core-i5-7200-ram-8gb-ssd-256gb-man-14-inch-hd"
                                                                class="thumb d-block modal-open position-relative"
                                                                title="DELL Latitude E7480 Ultrabook đa năng (Core i5 - 7200/ Ram 8Gb| SSD 256GB/ màn 14 inch HD)">
                                                                <div
                                                                    class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                                                    <img src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/487/158/products/620b856d584503485fd4cd04-dell-latitude-e7480-core-i5-6300-ram-8gb-ssd-256gb-14-full-hd-jpeg.jpg?v=1689163169503"
                                                                        decoding="async"
                                                                        class="d-block img img-cover position-absolute lazy"
                                                                        alt="DELL Latitude E7480 Ultrabook đa năng (Core i5 - 7200/ Ram 8Gb| SSD 256GB/ màn 14 inch HD)">
                                                                </div>
                                                            </a>
                                                            <div class="item-info mt-1 position-relative">
                                                                <h3 class="item-title font-weight-bold">
                                                                    <a class="line_2"
                                                                        href="/dell-latitude-e7480-ultrabook-da-nang-core-i5-7200-ram-8gb-ssd-256gb-man-14-inch-hd"
                                                                        title="DELL Latitude E7480 Ultrabook đa năng (Core i5 - 7200/ Ram 8Gb| SSD 256GB/ màn 14 inch HD)">
                                                                        DELL Latitude E7480 Ultrabook đa năng (Core i5 -
                                                                        7200/ Ram 8Gb| SSD 256GB/ màn 14 inch HD)
                                                                    </a>
                                                                </h3>
                                                                <div class="item-price">
                                                                    <span
                                                                        class="special-price font-weight-bold">5.500.000₫</span>
                                                                    <del class="old-price"> 6.900.000₫</del>
                                                                </div>
                                                                <div class="rte prd_sum">
                                                                    <p>Khuyến mãi:</p>
                                                                    <ul>
                                                                        <li>Tặng Balo&nbsp;hoặc cặp xách chống thời
                                                                            trang chống sốc</li>
                                                                        <li>Tặng Voucher giảm giá đến 500.000đ</li>
                                                                        <li>Tặng gói cài đặt Windows, bảo dưỡng miễn phí
                                                                            trọn đời máy</li>
                                                                    </ul>
                                                                    <p>Bảo hành:&nbsp;</p>
                                                                    <ul>
                                                                        <li>Bảo hành 12 tháng, 1 đổi 1 trong vòng 15
                                                                            ngày - Xem chính sách</li>
                                                                        <li>GÓI BẢO HÀNH KIM CƯƠNG - Bảo hành 24 tháng
                                                                        </li>
                                                                    </ul>
                                                                    <p>MIỄN PHÍ GIAO HÀNG TẬN NHÀ</p>
                                                                    <ul>
                                                                        <li>Với đơn hàng &lt; 10.000.000 đồng: Miễn phí
                                                                            giao hàng cho đơn hàng &lt; 5km tính từ cửa
                                                                            hàng Giao Bảo Computor gần nhất</li>
                                                                        <li>Với đơn hàng &gt; 10.000.000 đồng: Miễn phí
                                                                            giao hàng (khách hàng chịu phí bảo hiểm hàng
                                                                            hóa nếu có)</li>
                                                                    </ul>
                                                                </div>
                                                                <label
                                                                    class="compare-label position-relative d-flex align-items-center m-0">
                                                                    <input type="checkbox"
                                                                        class="compare-checkbox d-none"
                                                                        value="/dell-latitude-e7480-ultrabook-da-nang-core-i5-7200-ram-8gb-ssd-256gb-man-14-inch-hd"
                                                                        data-type="Laptop cũ">
                                                                    <span
                                                                        class="compare-checkbox mr-1 rounded-circle"></span>
                                                                    So sánh
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 product-grid-item-lm mb-3 ">
                                                        <div
                                                            class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                                                            <div
                                                                class="sale-label sale-top-right position-absolute font-weight-bold">
                                                                Giảm
                                                                15%
                                                            </div>
                                                            <a href="/like-new-99-hp-elitebook-840-g3-core-i5-6300u-8gb-ssd-256gb-14-inch-full-hd"
                                                                class="thumb d-block modal-open position-relative"
                                                                title="[Like new 99%] HP EliteBook 840 G3 (Core i5-6300U | 8Gb | SSD 256GB | 14 inch Full HD)">
                                                                <div
                                                                    class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                                                    <img src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/487/158/products/62ea3b22945551cb47a1ec92-like-new-99-hp-elitebook-840-g3-core-i5-6300u-8gb-ssd-256gb-14-inch-full-hd-jpeg.jpg?v=1689162469170"
                                                                        decoding="async"
                                                                        class="d-block img img-cover position-absolute lazy"
                                                                        alt="[Like new 99%] HP EliteBook 840 G3 (Core i5-6300U | 8Gb | SSD 256GB | 14 inch Full HD)">
                                                                </div>
                                                            </a>
                                                            <div class="item-info mt-1 position-relative">
                                                                <h3 class="item-title font-weight-bold">
                                                                    <a class="line_2"
                                                                        href="/like-new-99-hp-elitebook-840-g3-core-i5-6300u-8gb-ssd-256gb-14-inch-full-hd"
                                                                        title="[Like new 99%] HP EliteBook 840 G3 (Core i5-6300U | 8Gb | SSD 256GB | 14 inch Full HD)">
                                                                        [Like new 99%] HP EliteBook 840 G3 (Core
                                                                        i5-6300U | 8Gb | SSD 256GB | 14 inch Full HD)
                                                                    </a>
                                                                </h3>
                                                                <div class="item-price">
                                                                    <span
                                                                        class="special-price font-weight-bold">5.100.000₫</span>
                                                                    <del class="old-price"> 5.990.000₫</del>
                                                                </div>
                                                                <div class="rte prd_sum">
                                                                    <p>Khuyến mãi:</p>
                                                                    <ul>
                                                                        <li>Tặng Balo&nbsp;hoặc cặp xách chống thời
                                                                            trang chống sốc</li>
                                                                        <li>Tặng Voucher giảm giá đến 500.000đ</li>
                                                                        <li>Tặng gói cài đặt Windows, bảo dưỡng miễn phí
                                                                            trọn đời máy</li>
                                                                    </ul>
                                                                    <p>Bảo hành:&nbsp;</p>
                                                                    <ul>
                                                                        <li>Bảo hành 12 tháng, 1 đổi 1 trong vòng 15
                                                                            ngày - Xem chính sách</li>
                                                                        <li>GÓI BẢO HÀNH KIM CƯƠNG - Bảo hành 24 tháng
                                                                        </li>
                                                                    </ul>
                                                                    <p>MIỄN PHÍ GIAO HÀNG TẬN NHÀ</p>
                                                                    <ul>
                                                                        <li>Với đơn hàng &lt; 10.000.000 đồng: Miễn phí
                                                                            giao hàng cho đơn hàng &lt; 5km tính từ cửa
                                                                            hàng Giao Bảo Computor gần nhất</li>
                                                                        <li>Với đơn hàng &gt; 10.000.000 đồng: Miễn phí
                                                                            giao hàng (khách hàng chịu phí bảo hiểm hàng
                                                                            hóa nếu có)</li>
                                                                    </ul>
                                                                </div>
                                                                <label
                                                                    class="compare-label position-relative d-flex align-items-center m-0">
                                                                    <input type="checkbox"
                                                                        class="compare-checkbox d-none"
                                                                        value="/like-new-99-hp-elitebook-840-g3-core-i5-6300u-8gb-ssd-256gb-14-inch-full-hd"
                                                                        data-type="Laptop cũ">
                                                                    <span
                                                                        class="compare-checkbox mr-1 rounded-circle"></span>
                                                                    So sánh
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 product-grid-item-lm mb-3 ">
                                                        <div
                                                            class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                                                            <div
                                                                class="sale-label sale-top-right position-absolute font-weight-bold">
                                                                Giảm
                                                                11%
                                                            </div>
                                                            <a href="/moi-99-hp-elitebook-x360-1030-g2-sieu-pham-xoay-gap-360-do-i5-7200u-ram-8gb-ssd-256-gb-man-hinh-13-3-fhd-cam-ung"
                                                                class="thumb d-block modal-open position-relative"
                                                                title="[Laptop cũ] HP Elitebook X360 1030 G2 - Siêu phẩm xoay gập 360 độ (i5 7200U / RAM 8GB / SSD 256 GB / Màn hình 13.3 FHD Cảm ứng)">
                                                                <div
                                                                    class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                                                    <img src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/487/158/products/632d297cdb762993ca6150ad-mi-99-hp-elitebook-x360-1030-g2-siu-phm-xoay-gp-360-i5-7200u-ram-8gb-ssd-256-gb-mn-hnh-133-fhd-cm-ng-jpeg.jpg?v=1689156574863"
                                                                        decoding="async"
                                                                        class="d-block img img-cover position-absolute lazy"
                                                                        alt="[Laptop cũ] HP Elitebook X360 1030 G2 - Siêu phẩm xoay gập 360 độ (i5 7200U / RAM 8GB / SSD 256 GB / Màn hình 13.3 FHD Cảm ứng)">
                                                                </div>
                                                            </a>
                                                            <div class="item-info mt-1 position-relative">
                                                                <h3 class="item-title font-weight-bold">
                                                                    <a class="line_2"
                                                                        href="/moi-99-hp-elitebook-x360-1030-g2-sieu-pham-xoay-gap-360-do-i5-7200u-ram-8gb-ssd-256-gb-man-hinh-13-3-fhd-cam-ung"
                                                                        title="[Laptop cũ] HP Elitebook X360 1030 G2 - Siêu phẩm xoay gập 360 độ (i5 7200U / RAM 8GB / SSD 256 GB / Màn hình 13.3 FHD Cảm ứng)">
                                                                        [Laptop cũ] HP Elitebook X360 1030 G2 - Siêu
                                                                        phẩm xoay gập 360 độ (i5 7200U / RAM 8GB / SSD
                                                                        256 GB / Màn hình 13.3 FHD Cảm ứng)
                                                                    </a>
                                                                </h3>
                                                                <div class="item-price">
                                                                    <span
                                                                        class="special-price font-weight-bold">8.490.000₫</span>
                                                                    <del class="old-price"> 9.500.000₫</del>
                                                                </div>
                                                                <div class="rte prd_sum">
                                                                    <p>Khuyến mãi:</p>
                                                                    <ul>
                                                                        <li>Tặng Balo &nbsp;hoặc cặp xách chống thời
                                                                            trang chống sốc</li>
                                                                        <li>Tặng bộ vệ sinh laptop</li>
                                                                        <li>Tặng chuột không dây</li>
                                                                        <li>Tặng tấm lót di chuột</li>
                                                                        <li>Tặng Voucher giảm giá đến 500.000đ</li>
                                                                        <li>Tặng gói cài đặt Windows, bảo dưỡng miễn phí
                                                                            trọn đời máy</li>
                                                                        <li>Thu cũ đổi mới trợ giá đến 15% xem chi tiết
                                                                        </li>
                                                                    </ul>
                                                                    <p>Bảo hành:&nbsp;</p>
                                                                    <ul>
                                                                        <li>Bảo hành 12 tháng, 1 đổi 1 trong vòng 15
                                                                            ngày - Xem chính sách</li>
                                                                        <li>GÓI BẢO HÀNH KIM CƯƠNG - Bảo hành 24 tháng
                                                                        </li>
                                                                    </ul>
                                                                    <p>MIỄN PHÍ GIAO HÀNG TẬN NHÀ</p>
                                                                    <ul>
                                                                        <li>Với đơn hàng &lt; 10.000.000 đồng: Miễn phí
                                                                            giao hàng cho đơn hàng &lt; 5km tính từ cửa
                                                                            hàng Giao Bảo Computor gần nhất</li>
                                                                        <li>Với đơn hàng &gt; 10.000.000 đồng: Miễn phí
                                                                            giao hàng (khách hàng chịu phí bảo hiểm hàng
                                                                            hóa nếu có)</li>
                                                                    </ul>
                                                                </div>
                                                                <label
                                                                    class="compare-label position-relative d-flex align-items-center m-0">
                                                                    <input type="checkbox"
                                                                        class="compare-checkbox d-none"
                                                                        value="/moi-99-hp-elitebook-x360-1030-g2-sieu-pham-xoay-gap-360-do-i5-7200u-ram-8gb-ssd-256-gb-man-hinh-13-3-fhd-cam-ung"
                                                                        data-type="Laptop 2 in 1">
                                                                    <span
                                                                        class="compare-checkbox mr-1 rounded-circle"></span>
                                                                    So sánh
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3 order-lg-1">
                                        <div class="sidebar sidebar_mobi m-0 p-2 p-lg-0 mt-lg-1 d-flex flex-column">
                                            <script src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/search_filter.js?1690883846775"
                                                type="text/javascript"></script>

                                            <div class="heading d-none">
                                                <div
                                                    class="h2 title-head font-weight-bold big text-uppercase mt-2 mb-0">
                                                    Bộ lọc sản phẩm
                                                </div>
                                                <p class="font-italic pt-2 pb-2 mb-0">Giúp lọc nhanh sản phẩm bạn tìm
                                                    kiếm</p>
                                            </div>
                                            <div
                                                class="aside-filter mb-3 modal-open w-100 pr-0 pr-md-2 order-lg-3 clearfix">
                                                <div class="filter-container row">
                                                    <aside
                                                        class="aside-item filter-price mb-3 col-12 col-sm-6 col-lg-12">
                                                        <div class="h2 title-head m-0 pt-2 pb-2 font-weight-bold">Lọc
                                                            giá</div>

                                                        <div class="aside-content filter-group">
                                                            <ul class="list-unstyled m-0">

                                                                <li class="filter-item filter-item--check-box ">
                                                                    <label
                                                                        class="d-flex align-items-baseline pt-1 pb-1 m-0"
                                                                        for="filter-duoi-500-000d">
                                                                        <input type="checkbox"
                                                                            id="filter-duoi-500-000d" class="d-none"
                                                                            onchange="toggleFilter(this);"
                                                                            data-group="Khoảng giá"
                                                                            data-field="price_min" value="(<500000)"
                                                                            data-operator="OR">
                                                                        <i class="fa position-relative mr-2"></i> Dưới
                                                                        500.000đ
                                                                    </label>
                                                                </li>

                                                                <li class="filter-item filter-item--check-box ">
                                                                    <label
                                                                        class="d-flex align-items-baseline pt-1 pb-1 m-0"
                                                                        for="filter-500-000d-1-000-000d">
                                                                        <input type="checkbox"
                                                                            id="filter-500-000d-1-000-000d"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="Khoảng giá"
                                                                            data-field="price_min"
                                                                            value="(>499999 AND <1000001)"
                                                                            data-operator="OR">
                                                                        <i class="fa position-relative mr-2"></i>
                                                                        500.000đ - 1.000.000đ
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box ">
                                                                    <label
                                                                        class="d-flex align-items-baseline pt-1 pb-1 m-0"
                                                                        for="filter-1-000-000d-5-000-000d">
                                                                        <input type="checkbox"
                                                                            id="filter-1-000-000d-5-000-000d"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="Khoảng giá"
                                                                            data-field="price_min"
                                                                            value="(>999999 AND <5000001)"
                                                                            data-operator="OR">
                                                                        <i class="fa position-relative mr-2"></i>
                                                                        1.000.000đ - 5.000.000đ
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box ">
                                                                    <label
                                                                        class="d-flex align-items-baseline pt-1 pb-1 m-0"
                                                                        for="filter-5-000-000d-10-000-000d">
                                                                        <input type="checkbox"
                                                                            id="filter-5-000-000d-10-000-000d"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="Khoảng giá"
                                                                            data-field="price_min"
                                                                            value="(>4999999 AND <10000001)"
                                                                            data-operator="OR">
                                                                        <i class="fa position-relative mr-2"></i>
                                                                        5.000.000đ - 10.000.000đ
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box ">
                                                                    <label
                                                                        class="d-flex align-items-baseline pt-1 pb-1 m-0"
                                                                        for="filter-10-000-000d-15-000-000d">
                                                                        <input type="checkbox"
                                                                            id="filter-10-000-000d-15-000-000d"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="Khoảng giá"
                                                                            data-field="price_min"
                                                                            value="(>9999999 AND <15000001)"
                                                                            data-operator="OR">
                                                                        <i class="fa position-relative mr-2"></i>
                                                                        10.000.000đ - 15.000.000đ
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box ">
                                                                    <label
                                                                        class="d-flex align-items-baseline pt-1 pb-1 m-0"
                                                                        for="filter-15-000-000d-20-000-000d">
                                                                        <input type="checkbox"
                                                                            id="filter-15-000-000d-20-000-000d"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="Khoảng giá"
                                                                            data-field="price_min"
                                                                            value="(>14999999 AND <20000001)"
                                                                            data-operator="OR">
                                                                        <i class="fa position-relative mr-2"></i>
                                                                        15.000.000đ - 20.000.000đ
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box ">
                                                                    <label
                                                                        class="d-flex align-items-baseline pt-1 pb-1 m-0"
                                                                        for="filter-20-000-000d-25-000-000d">
                                                                        <input type="checkbox"
                                                                            id="filter-20-000-000d-25-000-000d"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="Khoảng giá"
                                                                            data-field="price_min"
                                                                            value="(>19999999 AND <25000001)"
                                                                            data-operator="OR">
                                                                        <i class="fa position-relative mr-2"></i>
                                                                        20.000.000đ - 25.000.000đ
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box ">
                                                                    <label
                                                                        class="d-flex align-items-baseline pt-1 pb-1 m-0"
                                                                        for="filter-25-000-000d-30-000-000d">
                                                                        <input type="checkbox"
                                                                            id="filter-25-000-000d-30-000-000d"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="Khoảng giá"
                                                                            data-field="price_min"
                                                                            value="(>24999999 AND <30000001)"
                                                                            data-operator="OR">
                                                                        <i class="fa position-relative mr-2"></i>
                                                                        25.000.000đ - 30.000.000đ
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box ">
                                                                    <label
                                                                        class="d-flex align-items-baseline pt-1 pb-1 m-0"
                                                                        for="filter-tren-30-000-000d">
                                                                        <input type="checkbox"
                                                                            id="filter-tren-30-000-000d"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="Khoảng giá"
                                                                            data-field="price_min"
                                                                            value="(>30000000)" data-operator="OR">
                                                                        <i class="fa position-relative mr-2"></i> Trên
                                                                        30.000.000đ
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </aside>
                                                    <aside
                                                        class="aside-item filter-vendor mb-3 col-12 col-sm-4 col-lg-12">
                                                        <div class="h2 title-head m-0 pt-2 pb-2 font-weight-bold">
                                                            Thương hiệu</div>
                                                        <div class="aside-content filter-group">
                                                            <ul class="filter-vendor filter-grid list-unstyled m-0">
                                                                <li class="filter-item filter-item--check-box  ">
                                                                    <label
                                                                        class="d-flex align-items-baseline m-0 dell"
                                                                        data-filter="dell" for="filter-dell">
                                                                        <input type="checkbox" id="filter-dell"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="Hãng" data-field="vendor"
                                                                            value="(DELL)" data-operator="OR">
                                                                        <span
                                                                            class="fa2 px-2 py-1 rounded border">DELL</span>
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box  ">
                                                                    <label class="d-flex align-items-baseline m-0 hp"
                                                                        data-filter="hp" for="filter-hp">
                                                                        <input type="checkbox" id="filter-hp"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="Hãng" data-field="vendor"
                                                                            value="(HP)" data-operator="OR">
                                                                        <span
                                                                            class="fa2 px-2 py-1 rounded border">HP</span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </aside>
                                                    <aside
                                                        class="aside-item filter-type mb-3 col-12 col-sm-4 col-lg-12">
                                                        <div class="h2 title-head m-0 pt-2 pb-2 font-weight-bold">Loại
                                                        </div>
                                                        <div class="aside-content filter-group">
                                                            <ul
                                                                class="filter-type d-flex flex-wrap gap_8 list-unstyled m-0">
                                                                <li class="filter-item filter-item--check-box">
                                                                    <label class="d-flex align-items-baseline m-0"
                                                                        data-filter="đồ họa, lập trình"
                                                                        for="filter-do-hoa-lap-trinh">
                                                                        <input type="checkbox"
                                                                            id="filter-do-hoa-lap-trinh"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="Loại"
                                                                            data-field="product_type"
                                                                            value="(Đồ họa, lập trình)"
                                                                            data-operator="OR">
                                                                        <span class="fa2 px-2 py-1 rounded border">Đồ
                                                                            họa, lập trình</span>
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box">
                                                                    <label class="d-flex align-items-baseline m-0"
                                                                        data-filter="laptop 2 in 1"
                                                                        for="filter-laptop-2-in-1">
                                                                        <input type="checkbox"
                                                                            id="filter-laptop-2-in-1" class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="Loại"
                                                                            data-field="product_type"
                                                                            value="(Laptop 2 in 1)"
                                                                            data-operator="OR">
                                                                        <span
                                                                            class="fa2 px-2 py-1 rounded border">Laptop
                                                                            2 in 1</span>
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box">
                                                                    <label class="d-flex align-items-baseline m-0"
                                                                        data-filter="laptop cũ"
                                                                        for="filter-laptop-cu">
                                                                        <input type="checkbox" id="filter-laptop-cu"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="Loại"
                                                                            data-field="product_type"
                                                                            value="(Laptop cũ)" data-operator="OR">
                                                                        <span
                                                                            class="fa2 px-2 py-1 rounded border">Laptop
                                                                            cũ</span>
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box">
                                                                    <label class="d-flex align-items-baseline m-0"
                                                                        data-filter="laptop gaming"
                                                                        for="filter-laptop-gaming">
                                                                        <input type="checkbox"
                                                                            id="filter-laptop-gaming" class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="Loại"
                                                                            data-field="product_type"
                                                                            value="(Laptop gaming)"
                                                                            data-operator="OR">
                                                                        <span
                                                                            class="fa2 px-2 py-1 rounded border">Laptop
                                                                            gaming</span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </aside>
                                                    <aside
                                                        class="aside-item filter-tag-style-1 tag-filtster mb-3 col-12 col-sm-4 col-lg-12">
                                                        <div class="h2 title-head m-0 pt-2 pb-2 font-weight-bold">Cấu
                                                            hình</div>
                                                        <div class="aside-content filter-group">
                                                            <ul class="d-flex flex-wrap gap_8 list-unstyled m-0">

                                                                <li class="filter-item filter-item--check-box">
                                                                    <label class="d-flex align-items-baseline m-0"
                                                                        for="filter-core-i5">
                                                                        <input type="checkbox" id="filter-core-i5"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="tag1" data-field="tags"
                                                                            value="(core i5)" data-operator="OR">
                                                                        <span
                                                                            class="fa2 px-2 py-1 rounded border">core
                                                                            i5</span>
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box">
                                                                    <label class="d-flex align-items-baseline m-0"
                                                                        for="filter-core-i7">
                                                                        <input type="checkbox" id="filter-core-i7"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="tag1" data-field="tags"
                                                                            value="(core i7)" data-operator="OR">
                                                                        <span
                                                                            class="fa2 px-2 py-1 rounded border">core
                                                                            i7</span>
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box">
                                                                    <label class="d-flex align-items-baseline m-0"
                                                                        for="filter-ryzen-5">
                                                                        <input type="checkbox" id="filter-ryzen-5"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="tag1" data-field="tags"
                                                                            value="(Ryzen 5)" data-operator="OR">
                                                                        <span
                                                                            class="fa2 px-2 py-1 rounded border">Ryzen
                                                                            5</span>
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box">
                                                                    <label class="d-flex align-items-baseline m-0"
                                                                        for="filter-ryzen-7">
                                                                        <input type="checkbox" id="filter-ryzen-7"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="tag1" data-field="tags"
                                                                            value="(Ryzen 7)" data-operator="OR">
                                                                        <span
                                                                            class="fa2 px-2 py-1 rounded border">Ryzen
                                                                            7</span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </aside>
                                                    <aside
                                                        class="aside-item filter-tag-style-2 tag-filtster mb-3 col-12 col-sm-4 col-lg-12">
                                                        <div class="h2 title-head m-0 pt-2 pb-2 font-weight-bold">Ram
                                                        </div>
                                                        <div class="aside-content filter-group">
                                                            <ul class="d-flex flex-wrap gap_8 list-unstyled m-0">

                                                                <li class="filter-item filter-item--check-box">
                                                                    <label class="d-flex align-items-baseline m-0"
                                                                        for="filter-4g">
                                                                        <input type="checkbox" id="filter-4g"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="tag2" data-field="tags"
                                                                            value="(4G)" data-operator="OR">
                                                                        <span
                                                                            class="fa2 px-2 py-1 rounded border">4G</span>
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box">
                                                                    <label class="d-flex align-items-baseline m-0"
                                                                        for="filter-8g">
                                                                        <input type="checkbox" id="filter-8g"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="tag2" data-field="tags"
                                                                            value="(8G)" data-operator="OR">
                                                                        <span
                                                                            class="fa2 px-2 py-1 rounded border">8G</span>
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box">
                                                                    <label class="d-flex align-items-baseline m-0"
                                                                        for="filter-16g">
                                                                        <input type="checkbox" id="filter-16g"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="tag2" data-field="tags"
                                                                            value="(16G)" data-operator="OR">
                                                                        <span
                                                                            class="fa2 px-2 py-1 rounded border">16G</span>
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box">
                                                                    <label class="d-flex align-items-baseline m-0"
                                                                        for="filter-32g">
                                                                        <input type="checkbox" id="filter-32g"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="tag2" data-field="tags"
                                                                            value="(32G)" data-operator="OR">
                                                                        <span
                                                                            class="fa2 px-2 py-1 rounded border">32G</span>
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box">
                                                                    <label class="d-flex align-items-baseline m-0"
                                                                        for="filter-64g">
                                                                        <input type="checkbox" id="filter-64g"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="tag2" data-field="tags"
                                                                            value="(64G)" data-operator="OR">
                                                                        <span
                                                                            class="fa2 px-2 py-1 rounded border">64G</span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </aside>
                                                    <aside
                                                        class="aside-item filter-tag-style-3 tag-filtster mb-3 col-12 col-sm-4 col-lg-12">
                                                        <div class="h2 title-head m-0 pt-2 pb-2 font-weight-bold">Lưu
                                                            trữ</div>
                                                        <div class="aside-content filter-group">
                                                            <ul class="d-flex flex-wrap gap_8 list-unstyled m-0">

                                                                <li class="filter-item filter-item--check-box">
                                                                    <label class="d-flex align-items-baseline m-0"
                                                                        for="filter-120gb">
                                                                        <input type="checkbox" id="filter-120gb"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="tag3" data-field="tags"
                                                                            value="(120GB)" data-operator="OR">
                                                                        <span
                                                                            class="fa2 px-2 py-1 rounded border">120GB</span>
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box">
                                                                    <label class="d-flex align-items-baseline m-0"
                                                                        for="filter-240gb">
                                                                        <input type="checkbox" id="filter-240gb"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="tag3" data-field="tags"
                                                                            value="(240GB)" data-operator="OR">
                                                                        <span
                                                                            class="fa2 px-2 py-1 rounded border">240GB</span>
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box">
                                                                    <label class="d-flex align-items-baseline m-0"
                                                                        for="filter-512gb">
                                                                        <input type="checkbox" id="filter-512gb"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="tag3" data-field="tags"
                                                                            value="(512GB)" data-operator="OR">
                                                                        <span
                                                                            class="fa2 px-2 py-1 rounded border">512GB</span>
                                                                    </label>
                                                                </li>
                                                                <li class="filter-item filter-item--check-box">
                                                                    <label class="d-flex align-items-baseline m-0"
                                                                        for="filter-1tb">
                                                                        <input type="checkbox" id="filter-1tb"
                                                                            class="d-none"
                                                                            onchange="toggleFilter(this)"
                                                                            data-group="tag3" data-field="tags"
                                                                            value="(1TB)" data-operator="OR">
                                                                        <span
                                                                            class="fa2 px-2 py-1 rounded border">1TB</span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </aside>
                                                </div>
                                            </div>
                                            <div
                                                class="filter-container__selected-filter position-relative d-none order-lg-2 rounded-10 p-2 mb-3">
                                                <div
                                                    class="filter-container__selected-filter-header d-flex clearfix pt-1 pb-1">
                                                    <b
                                                        class="filter-container__selected-filter-header-title text-white position-relative">Lọc
                                                        theo:</b>
                                                </div>
                                                <ul
                                                    class="filter-container__selected-filter-list pl-0 m-0 list-unstyled d-block w-100 position-relative clearfix">
                                                </ul>
                                            </div>
                                            <div class="aside-item mb-2 pt-2 order-3 d-none d-lg-block ">
                                                <a class="h2 title-head font-weight-bold big text-uppercase d-inline-block mb-2 px-3 py-2 box_shadow position-relative"
                                                    href="tin-tuc" title="Mẹo hay cho bạn">
                                                    Mẹo hay cho bạn
                                                </a>
                                                <div class="list-blogs">
                                                    <article
                                                        class="d-flex blog-item blog-item-list clearfix border-bottom pt-2 pb-2">
                                                        <div class="img_art thumb_img_blog_list">
                                                            <a href="/cach-ve-sinh-he-thong-may-tinh-pc-cua-ban"
                                                                title="Cách vệ sinh hệ thống máy tính PC của bạn"
                                                                class="effect-ming">
                                                                <div
                                                                    class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect rounded">
                                                                    <img src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/487/158/articles/ktc-hero-solutions-gaming-how-to-clean-your-pc-system-lg.jpg?v=1689068026373"
                                                                        class="lazy d-block img img-cover position-absolute"
                                                                        alt="Cách vệ sinh hệ thống máy tính PC của bạn">
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <h3 class="blog-item-name pl-3 m-0 position-relative">
                                                            <a class="line_3"
                                                                href="/cach-ve-sinh-he-thong-may-tinh-pc-cua-ban"
                                                                title="C&#225;ch vệ sinh hệ thống m&#225;y t&#237;nh PC của bạn">C&#225;ch
                                                                vệ sinh hệ thống m&#225;y t&#237;nh PC của bạn</a>
                                                        </h3>
                                                    </article>
                                                    <article
                                                        class="d-flex blog-item blog-item-list clearfix border-bottom pt-2 pb-2">
                                                        <div class="img_art thumb_img_blog_list">
                                                            <a href="/huong-dan-su-dung-va-bao-quan-laptop-hieu-qua"
                                                                title="Hướng dẫn sử dụng và bảo quản laptop hiệu quả"
                                                                class="effect-ming">
                                                                <div
                                                                    class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect rounded">
                                                                    <img src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/487/158/articles/3.jpg?v=1689067870163"
                                                                        class="lazy d-block img img-cover position-absolute"
                                                                        alt="Hướng dẫn sử dụng và bảo quản laptop hiệu quả">
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <h3 class="blog-item-name pl-3 m-0 position-relative">
                                                            <a class="line_3"
                                                                href="/huong-dan-su-dung-va-bao-quan-laptop-hieu-qua"
                                                                title="Hướng dẫn sử dụng v&#224; bảo quản laptop hiệu quả">Hướng
                                                                dẫn sử dụng v&#224; bảo quản laptop hiệu quả</a>
                                                        </h3>
                                                    </article>
                                                    <article
                                                        class="d-flex blog-item blog-item-list clearfix border-bottom pt-2 pb-2">
                                                        <div class="img_art thumb_img_blog_list">
                                                            <a href="/nguyen-nhan-cach-khac-phuc-laptop-khong-bat-duoc-wifi-tu-dien-thoai"
                                                                title="Nguyên nhân & cách khắc phục laptop không bắt được wifi từ điện thoại"
                                                                class="effect-ming">
                                                                <div
                                                                    class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect rounded">
                                                                    <img src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/487/158/articles/637426923983764497-windows10-wifi-problems.jpg?v=1689067719513"
                                                                        class="lazy d-block img img-cover position-absolute"
                                                                        alt="Nguyên nhân & cách khắc phục laptop không bắt được wifi từ điện thoại">
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <h3 class="blog-item-name pl-3 m-0 position-relative">
                                                            <a class="line_3"
                                                                href="/nguyen-nhan-cach-khac-phuc-laptop-khong-bat-duoc-wifi-tu-dien-thoai"
                                                                title="Nguy&#234;n nh&#226;n &amp; c&#225;ch khắc phục laptop kh&#244;ng bắt được wifi từ điện thoại">Nguy&#234;n
                                                                nh&#226;n &amp; c&#225;ch khắc phục laptop kh&#244;ng
                                                                bắt được wifi từ điện thoại</a>
                                                        </h3>
                                                    </article>
                                                    <article
                                                        class="d-flex blog-item blog-item-list clearfix border-bottom pt-2 pb-2">
                                                        <div class="img_art thumb_img_blog_list">
                                                            <a href="/huong-dan-chinh-do-sang-man-hinh-may-tinh-ban-cuc-nhanh"
                                                                title="Hướng dẫn chỉnh độ sáng màn hình máy tính bàn cực nhanh"
                                                                class="effect-ming">
                                                                <div
                                                                    class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect rounded">
                                                                    <img src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/487/158/articles/2.jpg?v=1689067628590"
                                                                        class="lazy d-block img img-cover position-absolute"
                                                                        alt="Hướng dẫn chỉnh độ sáng màn hình máy tính bàn cực nhanh">
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <h3 class="blog-item-name pl-3 m-0 position-relative">
                                                            <a class="line_3"
                                                                href="/huong-dan-chinh-do-sang-man-hinh-may-tinh-ban-cuc-nhanh"
                                                                title="Hướng dẫn chỉnh độ s&#225;ng m&#224;n h&#236;nh m&#225;y t&#237;nh b&#224;n cực nhanh">Hướng
                                                                dẫn chỉnh độ s&#225;ng m&#224;n h&#236;nh m&#225;y
                                                                t&#237;nh b&#224;n cực nhanh</a>
                                                        </h3>
                                                    </article>
                                                    <article
                                                        class="d-flex blog-item blog-item-list clearfix pt-2 pb-2">
                                                        <div class="img_art thumb_img_blog_list">
                                                            <a href="/tong-hop-cac-cach-chon-laptop-chat-luong-ben-bi-dung-nhu-cau"
                                                                title="Tổng hợp các cách chọn laptop chất lượng, bền bỉ, đúng nhu cầu"
                                                                class="effect-ming">
                                                                <div
                                                                    class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect rounded">
                                                                    <img src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/487/158/articles/1.jpg?v=1689067375603"
                                                                        class="lazy d-block img img-cover position-absolute"
                                                                        alt="Tổng hợp các cách chọn laptop chất lượng, bền bỉ, đúng nhu cầu">
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <h3 class="blog-item-name pl-3 m-0 position-relative">
                                                            <a class="line_3"
                                                                href="/tong-hop-cac-cach-chon-laptop-chat-luong-ben-bi-dung-nhu-cau"
                                                                title="Tổng hợp c&#225;c c&#225;ch chọn laptop chất lượng, bền bỉ, đ&#250;ng nhu cầu">Tổng
                                                                hợp c&#225;c c&#225;ch chọn laptop chất lượng, bền bỉ,
                                                                đ&#250;ng nhu cầu</a>
                                                        </h3>
                                                    </article>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        var colId = 3183593;
                        var selectedViewData = 'data';
                        var isFilterRange = false;
                    </script>
                </div>
                <footer class="bg-white pt-5">
                    <div class="foo_mid mb-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 footer-left">
                                    <a href="/" title="Giao Bảo Computor" class="logo_foo d-block mb-2">
                                        <img alt="Logo Giao Bảo Computor" class="lazy"
                                            src="https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/296594553_582338043480204_5772334647727163365_n.jpg?_nc_cat=104&cb=99be929b-3346023f&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=1sZ2Bn5x1XMAX_vqRzB&_nc_ht=scontent-hkg4-2.xx&oh=00_AfDp_JH2G-SqPCGWP4nguYyfJU4of68tXa7I9os92-ciBg&oe=64CE1FF3"
                                            data-src="https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/296594553_582338043480204_5772334647727163365_n.jpg?_nc_cat=104&cb=99be929b-3346023f&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=1sZ2Bn5x1XMAX_vqRzB&_nc_ht=scontent-hkg4-2.xx&oh=00_AfDp_JH2G-SqPCGWP4nguYyfJU4of68tXa7I9os92-ciBg&oe=64CE1FF3">
                                    </a>
                                    <address class="vcard mb-4">

                                        <p class="adr"><b>Cơ sở 1: </b> K500 TIỂU LA - HÀ LAM - THĂNG BÌNH - QUẢNG
                                            NAM
                                        </p>
                                        <p><b>Tư vấn bán hàng: </b><a href="tel: 0935256476"
                                                title="0935256476">0935256476</a></p>
                                        <p class="mb-2"><b>Hỗ trợ kỹ thuật, bảo hành: </b><a href="tel:0935256476"
                                                title="0935256476">0935256476</a></p>
                                        <p class="mb-2"><b>Hotline: </b><a href="tel:0935256476"
                                                title="0935256476">0935256476</a></p>
                                        <p><b>Email: </b><a
                                                href="https://www.nguyenduclaptop.com/cdn-cgi/l/email-protection#244d4a424b0a4a43515d414a405147484554504b54644349454d480a474b49"
                                                title="luongdangngocthoa010595@gmail.com"><span class="__cf_email__"
                                                    data-cfemail="620b0c040d4c0c05171b070c0617010e0312160d1222050f030b0e4c010d0f">luongdangngocthoa010595@gmail.com</span></a>
                                        </p>

                                        {{-- <p>Mã Số Thuế: 01D8014542. Cấp lần đầu ngày 25/08/2008
                                            Nơi cấp: Sở kế hoạch đầu tư TP Hà Nội</p> --}}

                                    </address>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 footer-left">
                                    <h3 class="footer-title mb-2 position-relative font-weight-bold">Hướng dẫn</h3>
                                    <ul class="links">
                                        <li><a href="/chinh-sach-bao-hanh-doi-tra"
                                                title="Chính sách bảo hành & Đổi trả">Chính sách bảo hành & Đổi
                                                trả</a></li>
                                        <li><a href="/huong-dan-mua-hang" title="Hướng dẫn mua hàng">Hướng dẫn mua
                                                hàng</a></li>

                                        <li><a href="/huong-dan-thanh-toan" title="Hướng dẫn giao nhận">Hướng dẫn
                                                giao nhận</a></li>

                                        <li><a href="/dieu-khoan" title="Điều khoản dịch vụ">Điều khoản dịch vụ</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 footer-left">
                                    <h3 class="footer-title mb-2 position-relative font-weight-bold">Kết nối với chúng
                                        tôi</h3>
                                    <div class="social position-relative pb-2">
                                        <a href="https://www.facebook.com/profile.php?id=100063703104435"
                                            target="_blank"
                                            class="position-relative iso sitdown modal-open d-inline-block facebook mr-1"
                                            title="Facebook">
                                            <img class="lazy"
                                                src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/facebook.png?1690883846775"
                                                alt="facebook" width=32 height=32>
                                        </a>
                                        <a href="" target="_blank"
                                            class="position-relative iso sitdown modal-open d-inline-block twitter mr-1"
                                            title="Twitter">
                                            <img class="lazy"
                                                src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/twitter.png?1690883846775"
                                                alt="twitter" width=32 height=32>
                                        </a>
                                        <a href="" target="_blank"
                                            class="position-relative iso sitdown modal-open d-inline-block instagram mr-1"
                                            title="Instagram+">
                                            <img class="lazy"
                                                src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/instagram.png?1690883846775"
                                                alt="instagram" width=32 height=32>
                                        </a>
                                        <a href="https://www.youtube.com/@laptopnguyenduc" target="_blank"
                                            class="position-relative iso sitdown modal-open d-inline-block youtube mr-1"
                                            title="Youtube">
                                            <img class="lazy"
                                                src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/youtube.png?1690883846775"
                                                alt="youtube" width=32 height=32>
                                        </a>
                                        <a href="https://shopee.vn/nguyenduclaptop" target="_blank"
                                            class="position-relative iso sitdown modal-open d-inline-block shopee mr-1"
                                            title="Shopee">
                                            <img class="lazy"
                                                src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/shopee.png?1690883846775"
                                                alt="Shopee" width=32 height=32>
                                        </a>
                                        <a href="" target="_blank"
                                            class="position-relative iso sitdown modal-open d-inline-block lazada mr-1"
                                            title="Lazada">
                                            <img class="lazy"
                                                src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/lazada.jpg?1690883846775"
                                                alt="Lazada" width=32 height=32>
                                        </a>
                                    </div>
                                    <p class="mb-3 position-relative">Phương thức thanh toán</p>
                                    <div class="footer-column-1 mb-3">
                                        <div class="payment-accept">
                                            <img class="first lazy"
                                                src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/payment-1.png?1690883846775"
                                                alt="payment-1">
                                            <img class="lazy"
                                                src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/payment-2.png?1690883846775"
                                                alt="payment-2">
                                            <img class="lazy"
                                                src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/payment-3.png?1690883846775"
                                                alt="payment-3">
                                            <img class="lazy"
                                                src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                                data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/payment-4.png?1690883846775"
                                                alt="payment-4">
                                        </div>
                                    </div>
                                    <a href="http://online.gov.vn/Home/WebDetails/91317"><img class="lazy"
                                            src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/placeholder_1x1.png?1690883846775"
                                            data-src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/bct_img.png?1690883846775"
                                            alt="bct"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="foo_mid border-top pt-4 pb-4">
                            <ul class="links_sm list-unstyled row mb-0">
                                <li class="col-6 col-sm-4 col-md-3 col-lg-2 m-0"><a href="/"
                                        title="Trang chủ">Trang chủ</a></li>
                                <li class="col-6 col-sm-4 col-md-3 col-lg-2 m-0"><a href="/gioi-thieu"
                                        title="Giới thiệu">Giới thiệu</a></li>
                                <li class="col-6 col-sm-4 col-md-3 col-lg-2 m-0"><a href="/laptop-all"
                                        title="Laptop">Laptop</a></li>
                                <li class="col-6 col-sm-4 col-md-3 col-lg-2 m-0"><a href="/tivi"
                                        title="Tivi">Tivi</a></li>
                                <li class="col-6 col-sm-4 col-md-3 col-lg-2 m-0"><a href="/gia-dung-smarthome"
                                        title="Gia dụng, smarthome">Gia dụng, smarthome</a></li>
                                <li class="col-6 col-sm-4 col-md-3 col-lg-2 m-0"><a href="/phu-kien-laptop"
                                        title="Phụ kiện laptop">Phụ kiện laptop</a></li>
                                <li class="col-6 col-sm-4 col-md-3 col-lg-2 m-0"><a href="/tin-tuc"
                                        title="Tin tức">Tin tức</a></li>
                                <li class="col-6 col-sm-4 col-md-3 col-lg-2 m-0"><a href="/lien-he"
                                        title="Liên hệ">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="foo_bot pt-2 pb-2 border-top">
                        <div class="container">
                            <div class="row bgk align-items-center">
                                <div class="col-12">
                                    <div class="coppyright">Bản quyền thuộc về <a rel="nofollow noopener"
                                            href="https://www.facebook.com/mewtheme/" title="MewTheme"
                                            target="_blank">MewTheme</a>. Cung cấp bởi Sapo.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div onclick="scrollToTop(100);"
            class="back_top d-flex position-fixed justify-content-center align-items-center">
            <img alt="Lên đầu trang"
                src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/to-top-arrow2.png?1690883846775">
        </div>
        <div class="fix-phone p-1 p-lg-2 pt-lg-3 pb-lg-3 active" id="mb_bar">
            <a href="tel:0334868868" title="Hà Nội"
                class="mt-lg-1 ml-1 mb-lg-1 mr-1 ml-lg-0 mr-lg-0 phone-box d-flex align-items-center justify-content-center">
                <svg width="24" height="24" class="play0">
                    <use href="#svg-phone" />
                </svg>
                <span>Hà Nội</span>
            </a>
            <a href="tel:0359525555" title="Hải Dương"
                class="mt-lg-1 ml-1 mb-lg-1 mr-1 ml-lg-0 mr-lg-0 phone-box d-flex align-items-center justify-content-center">
                <svg width="24" height="24" class="play0">
                    <use href="#svg-phone" />
                </svg>
                <span>Hải Dương</span>
            </a>
            <a href="https://m.me/nguyenduclaptop2021" title="Chat Facebook" target="_blank"
                class="mt-lg-1 ml-1 mb-lg-1 mr-1 ml-lg-0 mr-lg-0 fb-box d-flex align-items-center justify-content-center rounded-circle">
                <svg width="28" height="28">
                    <use href="#svg-messenger" />
                </svg>
                <span>Messenger</span>
            </a>
            <a href="https://zalo.me/0334868868" title="Chat Zalo" target="_blank"
                class="mt-lg-1 ml-1 mb-lg-1 mr-1 ml-lg-0 mr-lg-0 zalo-box d-flex align-items-center justify-content-center">
                <svg width="32" height="32">
                    <use href="#svg-zalo" />
                </svg>
                <span>Zalo</span>
            </a>
            <a href="/so-sanh-san-pham" title="So sánh sản phẩm"
                class="d-none d-lg-flex mt-lg-1 ml-1 mb-lg-1 mr-1 ml-lg-0 mr-lg-0 js-compare-button js-notify-container zalo-box align-items-center justify-content-center">
                <svg width="24" height="24">
                    <use href="#svg-compare" />
                </svg>
                <span class="position-absolute rounded-circle text-center font-weight-bold count">0</span>
            </a>
            <a href="javascript:;" title="Chia sẻ kết quả so sánh này"
                class="d-none d-lg-flex mt-lg-1 ml-1 mb-lg-1 mr-1 ml-lg-0 mr-lg-0 js-compare-share zalo-box align-items-center justify-content-center">
                <svg width="19" height="19">
                    <use href="#svg-shareCompare" />
                </svg>
            </a>
        </div>

        <div class="mew_mobi_bar d-lg-none position-fixed d-flex">
            <a id="js-menu-toggle" href="javascript:;" title="Danh mục"
                class="item align-content-center d-flex flex-column h-100 justify-content-center">
                <svg width="20" height="20">
                    <use href="#svg-menu" />
                </svg>
                <span class="tit d-block font-weight-bold text-center pr-1 pr-sm-2 pl-1 pl-sm-2 pt-1">Danh mục</span>
            </a>
            <a href="/so-sanh-san-pham" title="So sánh"
                class="item align-content-center d-flex flex-column h-100 justify-content-center js-notify-container">
                <svg width="20" height="20">
                    <use href="#svg-compare" />
                </svg>
                <span class="tit font-weight-bold d-block text-center pr-1 pr-sm-2 pl-1 pl-sm-2 pt-1">So sánh <b
                        class="js-compare-button"><span class="tit">0</span></b></span>
            </a>
            <a href="javascript:;" title="Liên hệ"
                class="item align-content-center d-flex flex-column h-100 justify-content-center"
                id="js-contact-toggle">
                <svg width="20" height="20">
                    <use href="#svg-phone" />
                </svg>
                <span class="tit d-block font-weight-bold text-center pr-1 pr-sm-2 pl-1 pl-sm-2 pt-1">Liên hệ</span>
            </a>
            <a href="/tra-cuu-bao-hanh" title="Tra cứu bảo hành"
                class="item align-content-center d-flex flex-column h-100 justify-content-center js-notify-container">
                <img src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/guarantee.png?1690883846775"
                    alt="Bảo hành" width="20" height="20" class="d-block mx-auto">
                <span class="tit font-weight-bold d-block text-center pr-1 pr-sm-2 pl-1 pl-sm-2 pt-1">Bảo hành</span>
            </a>
            <a href="/account/login" title="Tài khoản"
                class="item align-content-center d-flex flex-column h-100 justify-content-center ">
                <svg width="20" height="20">
                    <use href="#svg-user" />
                </svg>
                <span class="tit d-block font-weight-bold text-center pr-1 pr-sm-2 pl-1 pl-sm-2 pt-1">Tài khoản</span>
            </a>
            <a class="item d-flex flex-column p-1 align-items-center justify-content-center btn-cart position-relative  "
                title="Giỏ hàng" href="/cart">
                <span class="position-relative flex-column d-flex">
                    <svg width="20" height="20">
                        <use href="#svg-cart" />
                    </svg>
                    <span class="tit d-block font-weight-bold text-center pr-1 pr-sm-2 pl-1 pl-sm-2 pt-1">Giỏ
                        hàng</span>
                    <span class="btn-cart-indicator position-absolute d-none text-center"></span>
                </span>
            </a>
        </div>
        <div class="toast-container"></div>
        <template id="cart-item-template">
            <div class="d-flex cart__basket__item product mb-4 rounded ux-card position-relative clearfix">
                <img src="" class="js-img position-absolute bk-product-image" />
                <div class="col-12 d-flex p-0">
                    <p class="item-title clearfix mb-2">
                        <a href="" title="" class="js-titlte font-weight-bold bk-product-name"></a>
                        <span class="js-variant-titlte d-block bk-product-property"></span>
                    </p>
                    <span class="js-price-hide d-none bk-product-price"></span>
                    <span class="js-price price font-weight-bold ml-auto text-right clearfix"></span>
                </div>
                <div class="js-number-input number-input d-inline-flex rounded">
                    <button class="position-relative m-0 border-0 step-down-qty js-step-qty"></button>
                    <input class="js-quantity text-center bk-product-qty" readonly="" min="1"
                        name="Lines" value="" size="2" type="number" data-variantid="">
                    <button class="position-relative m-0 border-0 step-up-qty js-step-qty plus"></button>
                </div>
                <button class="btn btn-outline-danger remove ml-auto js-remove-item-cart" title=""
                    data-variantid=""></button>
            </div>
        </template>
        <link rel="preload" as="script"
            href="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/mew_service.js?1690883846775" />
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/mew_service.js?1690883846775" defer></script>
        <script src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/mew_cart.js?1690883846775" defer></script>
        <template id="quick-search-result-template">
            <div class="w-100">
                <a href="" title=""
                    class="d-flex align-items-start w-100 py-2 result-item border-bottom align-item js-link">
                    <div class="result-item_image d-flex h-100 align-items-center justify-content-center">
                        <img alt="" src="" class="result-item_image img-fluid js-img">
                    </div>
                    <div class="result-item_detail px-2">
                        <h3 class="result-item_name mb-1 font-weight-bold js-title"></h3>
                        <div class="result-item_price overflow-hidden font-weight-bold d-inline js-price"></div>
                        <s
                            class="result-item_compare-price font-weight-normal ms-2 d-inline d-none js-compare-price"></s>
                    </div>
                </a>
            </div>
        </template>
        <template id="quick-search-article-result-template">
            <div class="w-100">
                <a href="" title=""
                    class="d-flex align-items-start w-100 py-2 result-item border-bottom align-item js-link">
                    <div class="result-item_image d-flex h-100 align-items-center justify-content-center">
                        <img alt="" src="" class="img-fluid js-img">
                    </div>
                    <div class="result-item_detail px-2">
                        <h3 class="result-item_name mb-1 font-weight-bold js-title"></h3>
                        <p class="m-0 result-item_content js-content"></p>
                    </div>
                </a>
            </div>
        </template>
        <script>
            let use_quick_search_article = true;
            let use_quick_search_page = true;
        </script>
        <script src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/mew_search.js?1690883846775" defer></script>
        <script src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/mew_noti.js?1690883846775" defer></script>
        <script>
            window.cartStrings = {
                error: 'Đã có lỗi xảy ra khi cập nhật số lượng. Vui lòng thử lại.',
                quantityError: `You can only add [quantity] of this item to your cart.`,
                delete: 'Xoá'
            }
            window.variantStrings = {
                addToCart: 'Thêm vào giỏ',
                soldOut: 'Hết hàng',
                avaiable: 'Còn hàng',
                unAvailable: '',
                allowBuyWhenSoldOut: 'Tạm hết hàng',
                noPrice: 'Liên hệ',
                giftPrice: 'Quà tặng'
            }
            window.toastString = {
                toastAddSuccessTitle: 'Thành công',
                toastAddErrorTitle: 'Thất bại',
                toastAddSuccessMessage: 'Sản phẩm đã được thêm vào giỏ hàng',
                toastAddErrorMessage: 'Không thể thêm sản phẩm vào giỏ hàng',
                toastInventoryExccedTitle: 'Cảnh báo',
                toastInventoryExccedMessage: 'Sản phẩm đã đạt giới hạn tồn kho',
                toastInventoryMaxTitle: 'Cảnh báo',
                toastInventoryMaxMessage: 'Số lượng vượt quá giới hạn tồn kho',
                toastInventoryUnavaiTitle: 'Cảnh báo',
                toastInventoryUnavaiMessage: 'Sản phẩm không khả dụng',
                toastValidatePhoneTitle: 'Lỗi',
                toastValidatePhoneMessage: 'Số điện thoại không định dạng'
            }
        </script>
        <link rel="preload" as="script"
            href="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/mew_plugin.js?1690883846775" />
        <script src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/mew_plugin.js?1690883846775" type="text/javascript">
        </script>
        <script>
            const formatStoreCurrency = new Intl.NumberFormat(currencies['VND'], {
                style: 'currency',
                currency: 'VND'
            });
        </script>
        <link rel="preload" as="script"
            href="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/swiper.js?1690883846775" />
        <script src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/swiper.js?1690883846775" defer></script>
        <script src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/global.js?1690883846775" defer></script>
        <script src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/mew_content.js?1690883846775" defer></script>
        <script src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/mew_compare.js?1690883846775" defer></script>
        <script>
            let compareSettings = {
                searchDefaultUrl: '/so-sanh-san-pham',
                searchPlaceholder: 'Tìm kiếm sản phẩm',
                searchNoResult: 'Không có kết quả',
                notifyAddTitle: 'Thêm vào so sánh',
                notifyAddContent: 'Sản phẩm đã được thêm vào danh sách so sánh',
                notifyRemoveTitle: 'Loại bỏ',
                notifyRemoveContent: 'Đã xoá sản phẩm khỏi danh sách so sánh',
                notifyMaxTitle: 'Cảnh báo',
                notifyMaxContent: 'Chỉ có thể so sánh 02 sản phẩm 1 lúc',
                notifyErrTitle: 'Lỗi',
                notifyErrContent: 'Đã có lỗi xảy ra',
                notifyCopyTitle: 'Đã sao chép',
                notifyCopyContent: 'Liên kết đã được sao chép',
                notifyCopyErrTitle: 'Lỗi',
                notifyCopyErrContent: 'Bạn chưa so sánh sản phẩm nào',
                notifyNotSameTypeContent: 'Sản phẩm không cùng loại, vẫn thêm?',
                notifyNotExistTitle: 'Sản phẩm so sánh không tồn tại',
                notifyNotExistContent: 'Sản phẩm bị ẩn/ xoá hoặc không tồn tại',
                price: 'Giá',
                vendor: 'Hãng',
                type: 'Loại',
                sameType: true
            };
            document.addEventListener("DOMContentLoaded", function() {
                mewCompare.init();
            });
        </script>
        <script src="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/mew_collection_script.js?1690883846775" defer>
        </script>
        <svg class=d-none>
            <defs>
                <symbol id="svg-search">
                    <path
                        d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5zm-4.5 8h4v-4h1v4h4v1h-4v4h-1v-4h-4v-1z" />
                </symbol>
                <symbol id="svg-phone" viewbox="0 0 473.806 473.806">
                    <path
                        d="M374.456,293.506c-9.7-10.1-21.4-15.5-33.8-15.5c-12.3,0-24.1,5.3-34.2,15.4l-31.6,31.5c-2.6-1.4-5.2-2.7-7.7-4    c-3.6-1.8-7-3.5-9.9-5.3c-29.6-18.8-56.5-43.3-82.3-75c-12.5-15.8-20.9-29.1-27-42.6c8.2-7.5,15.8-15.3,23.2-22.8    c2.8-2.8,5.6-5.7,8.4-8.5c21-21,21-48.2,0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5c-6-6.2-12.3-12.6-18.8-18.6    c-9.7-9.6-21.3-14.7-33.5-14.7s-24,5.1-34,14.7c-0.1,0.1-0.1,0.1-0.2,0.2l-34,34.3c-12.8,12.8-20.1,28.4-21.7,46.5    c-2.4,29.2,6.2,56.4,12.8,74.2c16.2,43.7,40.4,84.2,76.5,127.6c43.8,52.3,96.5,93.6,156.7,122.7c23,10.9,53.7,23.8,88,26    c2.1,0.1,4.3,0.2,6.3,0.2c23.1,0,42.5-8.3,57.7-24.8c0.1-0.2,0.3-0.3,0.4-0.5c5.2-6.3,11.2-12,17.5-18.1c4.3-4.1,8.7-8.4,13-12.9    c9.9-10.3,15.1-22.3,15.1-34.6c0-12.4-5.3-24.3-15.4-34.3L374.456,293.506z M410.256,398.806    C410.156,398.806,410.156,398.906,410.256,398.806c-3.9,4.2-7.9,8-12.2,12.2c-6.5,6.2-13.1,12.7-19.3,20    c-10.1,10.8-22,15.9-37.6,15.9c-1.5,0-3.1,0-4.6-0.1c-29.7-1.9-57.3-13.5-78-23.4c-56.6-27.4-106.3-66.3-147.6-115.6    c-34.1-41.1-56.9-79.1-72-119.9c-9.3-24.9-12.7-44.3-11.2-62.6c1-11.7,5.5-21.4,13.8-29.7l34.1-34.1c4.9-4.6,10.1-7.1,15.2-7.1    c6.3,0,11.4,3.8,14.6,7c0.1,0.1,0.2,0.2,0.3,0.3c6.1,5.7,11.9,11.6,18,17.9c3.1,3.2,6.3,6.4,9.5,9.7l27.3,27.3    c10.6,10.6,10.6,20.4,0,31c-2.9,2.9-5.7,5.8-8.6,8.6c-8.4,8.6-16.4,16.6-25.1,24.4c-0.2,0.2-0.4,0.3-0.5,0.5    c-8.6,8.6-7,17-5.2,22.7c0.1,0.3,0.2,0.6,0.3,0.9c7.1,17.2,17.1,33.4,32.3,52.7l0.1,0.1c27.6,34,56.7,60.5,88.8,80.8    c4.1,2.6,8.3,4.7,12.3,6.7c3.6,1.8,7,3.5,9.9,5.3c0.4,0.2,0.8,0.5,1.2,0.7c3.4,1.7,6.6,2.5,9.9,2.5c8.3,0,13.5-5.2,15.2-6.9    l34.2-34.2c3.4-3.4,8.8-7.5,15.1-7.5c6.2,0,11.3,3.9,14.4,7.3c0.1,0.1,0.1,0.1,0.2,0.2l55.1,55.1    C420.456,377.706,420.456,388.206,410.256,398.806z" />
                    <path
                        d="M256.056,112.706c26.2,4.4,50,16.8,69,35.8s31.3,42.8,35.8,69c1.1,6.6,6.8,11.2,13.3,11.2c0.8,0,1.5-0.1,2.3-0.2    c7.4-1.2,12.3-8.2,11.1-15.6c-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3,3.7-15.6,11    S248.656,111.506,256.056,112.706z" />
                    <path
                        d="M473.256,209.006c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2,3.7-15.5,11    c-1.2,7.4,3.7,14.3,11.1,15.6c46.6,7.9,89.1,30,122.9,63.7c33.8,33.8,55.8,76.3,63.7,122.9c1.1,6.6,6.8,11.2,13.3,11.2    c0.8,0,1.5-0.1,2.3-0.2C469.556,223.306,474.556,216.306,473.256,209.006z" />
                </symbol>
                <symbol id="svg-home" viewbox="0 0 511 511.999">
                    <path xmlns="http://www.w3.org/2000/svg"
                        d="m498.699219 222.695312c-.015625-.011718-.027344-.027343-.039063-.039062l-208.855468-208.847656c-8.902344-8.90625-20.738282-13.808594-33.328126-13.808594-12.589843 0-24.425781 4.902344-33.332031 13.808594l-208.746093 208.742187c-.070313.070313-.144532.144531-.210938.214844-18.28125 18.386719-18.25 48.21875.089844 66.558594 8.378906 8.382812 19.441406 13.234375 31.273437 13.746093.484375.046876.96875.070313 1.457031.070313h8.320313v153.695313c0 30.417968 24.75 55.164062 55.167969 55.164062h81.710937c8.285157 0 15-6.71875 15-15v-120.5c0-13.878906 11.292969-25.167969 25.171875-25.167969h48.195313c13.878906 0 25.167969 11.289063 25.167969 25.167969v120.5c0 8.28125 6.714843 15 15 15h81.710937c30.421875 0 55.167969-24.746094 55.167969-55.164062v-153.695313h7.71875c12.585937 0 24.421875-4.902344 33.332031-13.8125 18.359375-18.367187 18.367187-48.253906.027344-66.632813zm-21.242188 45.421876c-3.238281 3.238281-7.542969 5.023437-12.117187 5.023437h-22.71875c-8.285156 0-15 6.714844-15 15v168.695313c0 13.875-11.289063 25.164062-25.167969 25.164062h-66.710937v-105.5c0-30.417969-24.746094-55.167969-55.167969-55.167969h-48.195313c-30.421875 0-55.171875 24.75-55.171875 55.167969v105.5h-66.710937c-13.875 0-25.167969-11.289062-25.167969-25.164062v-168.695313c0-8.285156-6.714844-15-15-15h-22.328125c-.234375-.015625-.464844-.027344-.703125-.03125-4.46875-.078125-8.660156-1.851563-11.800781-4.996094-6.679688-6.679687-6.679688-17.550781 0-24.234375.003906 0 .003906-.003906.007812-.007812l.011719-.011719 208.847656-208.839844c3.234375-3.238281 7.535157-5.019531 12.113281-5.019531 4.574219 0 8.875 1.78125 12.113282 5.019531l208.800781 208.796875c.03125.03125.066406.0625.097656.09375 6.644531 6.691406 6.632813 17.539063-.03125 24.207032zm0 0" />
                </symbol>
                <symbol id="svg-store" viewBox="0 0 24 24">
                    <path
                        d="M18 0c-3.148 0-6 2.553-6 5.702 0 4.682 4.783 5.177 6 12.298 1.217-7.121 6-7.616 6-12.298 0-3.149-2.852-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm-12-3c-2.099 0-4 1.702-4 3.801 0 3.121 3.188 3.451 4 8.199.812-4.748 4-5.078 4-8.199 0-2.099-1.901-3.801-4-3.801zm0 5.333c-.737 0-1.333-.597-1.333-1.333s.596-1.333 1.333-1.333 1.333.596 1.333 1.333-.596 1.333-1.333 1.333zm6 5.775l-3.215-1.078c.365-.634.777-1.128 1.246-1.687l1.969.657 1.92-.64c.388.521.754 1.093 1.081 1.75l-3.001.998zm12 7.892l-6.707-2.427-5.293 2.427-5.581-2.427-6.419 2.427 3.62-8.144c.299.76.554 1.776.596 3.583l-.443.996 2.699-1.021 4.809 2.091.751-3.725.718 3.675 4.454-2.042 3.099 1.121-.461-1.055c.026-.392.068-.78.131-1.144.144-.84.345-1.564.585-2.212l3.442 7.877z" />
                </symbol>
                <symbol id="svg-account" viewBox="0 0 512 512">
                    <path
                        d="m437.019531 74.980469c-48.351562-48.351563-112.640625-74.980469-181.019531-74.980469s-132.667969 26.628906-181.019531 74.980469c-48.351563 48.351562-74.980469 112.640625-74.980469 181.019531s26.628906 132.667969 74.980469 181.019531c48.351562 48.351563 112.640625 74.980469 181.019531 74.980469s132.667969-26.628906 181.019531-74.980469c48.351563-48.351562 74.980469-112.640625 74.980469-181.019531s-26.628906-132.667969-74.980469-181.019531zm-325.914062 354.316406c8.453125-72.734375 70.988281-128.890625 144.894531-128.890625 38.960938 0 75.597656 15.179688 103.15625 42.734375 23.28125 23.285156 37.964844 53.6875 41.742188 86.152344-39.257813 32.878906-89.804688 52.707031-144.898438 52.707031s-105.636719-19.824219-144.894531-52.703125zm144.894531-159.789063c-42.871094 0-77.753906-34.882812-77.753906-77.753906 0-42.875 34.882812-77.753906 77.753906-77.753906s77.753906 34.878906 77.753906 77.753906c0 42.871094-34.882812 77.753906-77.753906 77.753906zm170.71875 134.425782c-7.644531-30.820313-23.585938-59.238282-46.351562-82.003906-18.4375-18.4375-40.25-32.269532-64.039063-40.9375 28.597656-19.394532 47.425781-52.160157 47.425781-89.238282 0-59.414062-48.339844-107.753906-107.753906-107.753906s-107.753906 48.339844-107.753906 107.753906c0 37.097656 18.84375 69.875 47.464844 89.265625-21.886719 7.976563-42.140626 20.308594-59.566407 36.542969-25.234375 23.5-42.757812 53.464844-50.882812 86.347656-34.410157-39.667968-55.261719-91.398437-55.261719-147.910156 0-124.617188 101.382812-226 226-226s226 101.382812 226 226c0 56.523438-20.859375 108.265625-55.28125 147.933594zm0 0">
                    </path>
                </symbol>
                <symbol id="svg-cart" viewBox="0 0 511 511.99913">
                    <path
                        d="m512.496094 172v80c0 11.046875-8.953125 20-20 20h-13.152344l-8.425781 74.988281c-1.148438 10.21875-9.804688 17.765625-19.851563 17.769531-.746094 0-1.496094-.042968-2.257812-.128906-10.976563-1.230468-18.875-11.132812-17.640625-22.105468l10.421875-92.753907c1.136718-10.117187 9.691406-17.769531 19.875-17.769531h11.035156v-40h-432v40h341c11.046875 0 20 8.957031 20 20 0 11.046875-8.953125 20-20 20h-307.226562l19.75 164.761719c2.40625 20.089843 19.480468 35.238281 39.714843 35.238281h247.125c20.382813 0 37.472657-15.277344 39.75-35.535156 1.230469-10.976563 11.128907-18.871094 22.105469-17.640625 10.976562 1.234375 18.875 11.132812 17.644531 22.109375-4.554687 40.511718-38.730469 71.066406-79.5 71.066406h-247.125c-40.46875 0-74.617187-30.300781-79.433593-70.480469l-20.316407-169.519531h-13.488281c-11.046875 0-20-8.953125-20-20v-80c0-11.046875 8.953125-20 20-20h70.9375l105.683594-143.839844c6.539062-8.898437 19.054687-10.816406 27.957031-4.273437 8.902344 6.539062 10.816406 19.054687 4.277344 27.957031l-88.28125 120.15625h231.589843l-88.285156-120.15625c-6.539062-8.902344-4.625-21.417969 4.277344-27.957031 8.902344-6.542969 21.417969-4.628907 27.960938 4.273437l105.679687 143.839844h70.199219c11.046875 0 20 8.957031 20 20zm-275.996094 160v80c0 11.046875 8.953125 20 20 20 11.042969 0 20-8.953125 20-20v-80c0-11.046875-8.957031-20-20-20-11.046875 0-20 8.953125-20 20zm80 0v80c0 11.046875 8.953125 20 20 20 11.042969 0 20-8.953125 20-20v-80c0-11.046875-8.957031-20-20-20-11.046875 0-20 8.953125-20 20zm-160 0v80c0 11.046875 8.953125 20 20 20 11.042969 0 20-8.953125 20-20v-80c0-11.046875-8.957031-20-20-20-11.046875 0-20 8.953125-20 20zm0 0">
                    </path>
                </symbol>

                <symbol id="svg-menu" viewBox="0 0 24 24">
                    <path d="M3 5H11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M3 12H16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M3 19H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </symbol>
                <symbol id="svg-user" viewBox="0 0 512 512.001">
                    <path xmlns="http://www.w3.org/2000/svg"
                        d="m210.351562 246.632812c33.882813 0 63.21875-12.152343 87.195313-36.128906 23.96875-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.128906 87.195312 23.980469 23.96875 53.316406 36.125 87.191406 36.125zm-65.972656-189.292968c18.394532-18.394532 39.972656-27.335938 65.972656-27.335938 25.996094 0 47.578126 8.941406 65.976563 27.335938 18.394531 18.398437 27.339844 39.980468 27.339844 65.972656 0 26-8.945313 47.578125-27.339844 65.976562-18.398437 18.398438-39.980469 27.339844-65.976563 27.339844-25.992187 0-47.570312-8.945312-65.972656-27.339844-18.398437-18.394531-27.34375-39.976562-27.34375-65.976562 0-25.992188 8.945313-47.574219 27.34375-65.972656zm0 0"
                        fill="#000000" data-original="#000000" style="" />
                    <path xmlns="http://www.w3.org/2000/svg"
                        d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.3125-10.339844-7.808594-20.550781-13.375-30.335938-5.769532-10.15625-12.550782-19-20.160157-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.042969 5.339844-10.96875 0-22.085937-1.796876-33.042968-5.339844-11.210938-3.621094-20.300782-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.753906-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.609375 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.0625 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.777344-1.023438 19.953125-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.4375 23.730469 65.066406 23.730469h246.53125c26.621094 0 48.511719-7.984375 65.0625-23.730469 16.757813-15.945312 25.253906-37.589843 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm-44.90625 72.828125c-10.933594 10.40625-25.449218 15.464844-44.378906 15.464844h-246.527344c-18.933594 0-33.449218-5.058594-44.378906-15.460938-10.722656-10.207031-15.933594-24.140625-15.933594-42.585937 0-9.59375.316406-19.066407.949219-28.160157.617187-8.921874 1.878906-18.722656 3.75-29.136718 1.847656-10.285156 4.199219-19.9375 6.996094-28.675782 2.683593-8.378906 6.34375-16.675781 10.882812-24.667968 4.332031-7.617188 9.316407-14.152344 14.816407-19.417969 5.144531-4.925781 11.628906-8.957031 19.269531-11.980469 7.066406-2.796875 15.007812-4.328125 23.628906-4.558594 1.050781.558594 2.921875 1.625 5.953125 3.601563 6.167969 4.019531 13.277344 8.605469 21.136719 13.625 8.859375 5.648437 20.273437 10.75 33.910156 15.152344 13.941406 4.507812 28.160156 6.796875 42.273437 6.796875 14.113282 0 28.335938-2.289063 42.269532-6.792969 13.648437-4.410156 25.058594-9.507813 33.929687-15.164063 8.042969-5.140624 14.953125-9.59375 21.121094-13.617187 3.03125-1.972656 4.902344-3.042969 5.953125-3.601563 8.625.230469 16.566406 1.761719 23.636719 4.558594 7.636719 3.023438 14.121093 7.058594 19.265625 11.980469 5.5 5.261719 10.484375 11.796875 14.816406 19.421875 4.542969 7.988281 8.207031 16.289062 10.886719 24.660156 2.800781 8.75 5.15625 18.398438 7 28.675782 1.867187 10.433593 3.132812 20.238281 3.75 29.144531v.007812c.636719 9.058594.957031 18.527344.960937 28.148438-.003906 18.449219-5.214844 32.378906-15.9375 42.582031zm0 0"
                        fill="#000000" data-original="#000000" />
                </symbol>
                <symbol id="svg-minus" viewBox="0 0 409.6 409.6">
                    <path
                        d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467
					 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" />
                </symbol>
                <symbol id="svg-plus" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M 11 2 L 11 11 L 2 11 L 2 13 L 11 13 L 11 22 L 13 22 L 13 13 L 22 13 L 22 11 L 13 11 L 13 2 Z">
                    </path>
                </symbol>
                <symbol id="svg-tick" viewBox="0 0 12 12">
                    <path
                        d="m5.2 10.9c-.2 0-.5-.1-.7-.2l-4.2-3.7c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l3.4 3 5.1-7c .3-.4 1-.5 1.4-.2s.5 1 .2 1.4l-5.7 7.9c-.2.2-.4.4-.7.4 0-.1 0-.1-.1-.1z">
                    </path>
                </symbol>
                <symbol id="svg-close" viewBox="0 0 24 24">
                    <path
                        d="M12 11.293l10.293-10.293.707.707-10.293 10.293 10.293 10.293-.707.707-10.293-10.293-10.293 10.293-.707-.707 10.293-10.293-10.293-10.293.707-.707 10.293 10.293z" />
                </symbol>
                <symbol id="quote" viewBox="0 0 475.082 475.081">
                    <path
                        d="M164.45,219.27h-63.954c-7.614,0-14.087-2.664-19.417-7.994c-5.327-5.33-7.994-11.801-7.994-19.417v-9.132
					 c0-20.177,7.139-37.401,21.416-51.678c14.276-14.272,31.503-21.411,51.678-21.411h18.271c4.948,0,9.229-1.809,12.847-5.424
					 c3.616-3.617,5.424-7.898,5.424-12.847V54.819c0-4.948-1.809-9.233-5.424-12.85c-3.617-3.612-7.898-5.424-12.847-5.424h-18.271
					 c-19.797,0-38.684,3.858-56.673,11.563c-17.987,7.71-33.545,18.132-46.68,31.267c-13.134,13.129-23.553,28.688-31.262,46.677
					 C3.855,144.039,0,162.931,0,182.726v200.991c0,15.235,5.327,28.171,15.986,38.834c10.66,10.657,23.606,15.985,38.832,15.985
					 h109.639c15.225,0,28.167-5.328,38.828-15.985c10.657-10.663,15.987-23.599,15.987-38.834V274.088
					 c0-15.232-5.33-28.168-15.994-38.832C192.622,224.6,179.675,219.27,164.45,219.27z">
                    </path>
                    <path
                        d="M459.103,235.256c-10.656-10.656-23.599-15.986-38.828-15.986h-63.953c-7.61,0-14.089-2.664-19.41-7.994
					 c-5.332-5.33-7.994-11.801-7.994-19.417v-9.132c0-20.177,7.139-37.401,21.409-51.678c14.271-14.272,31.497-21.411,51.682-21.411
					 h18.267c4.949,0,9.233-1.809,12.848-5.424c3.613-3.617,5.428-7.898,5.428-12.847V54.819c0-4.948-1.814-9.233-5.428-12.85
					 c-3.614-3.612-7.898-5.424-12.848-5.424h-18.267c-19.808,0-38.691,3.858-56.685,11.563c-17.984,7.71-33.537,18.132-46.672,31.267
					 c-13.135,13.129-23.559,28.688-31.265,46.677c-7.707,17.987-11.567,36.879-11.567,56.674v200.991
					 c0,15.235,5.332,28.171,15.988,38.834c10.657,10.657,23.6,15.985,38.828,15.985h109.633c15.229,0,28.171-5.328,38.827-15.985
					 c10.664-10.663,15.985-23.599,15.985-38.834V274.088C475.082,258.855,469.76,245.92,459.103,235.256z">
                    </path>
                </symbol>
                <symbol id="svg-filter" viewBox="0 0 25 25">
                    <g>
                        <g>
                            <path
                                d="M2.54,5H15v.5A1.5,1.5,0,0,0,16.5,7h2A1.5,1.5,0,0,0,20,5.5V5h2.33a.5.5,0,0,0,0-1H20V3.5A1.5,1.5,0,0,0,18.5,2h-2A1.5,1.5,0,0,0,15,3.5V4H2.54a.5.5,0,0,0,0,1ZM16,3.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z">
                            </path>
                            <path
                                d="M22.4,20H18v-.5A1.5,1.5,0,0,0,16.5,18h-2A1.5,1.5,0,0,0,13,19.5V20H2.55a.5.5,0,0,0,0,1H13v.5A1.5,1.5,0,0,0,14.5,23h2A1.5,1.5,0,0,0,18,21.5V21h4.4a.5.5,0,0,0,0-1ZM17,21.5a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5v-2a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5Z">
                            </path>
                            <path
                                d="M8.5,15h2A1.5,1.5,0,0,0,12,13.5V13H22.45a.5.5,0,1,0,0-1H12v-.5A1.5,1.5,0,0,0,10.5,10h-2A1.5,1.5,0,0,0,7,11.5V12H2.6a.5.5,0,1,0,0,1H7v.5A1.5,1.5,0,0,0,8.5,15ZM8,11.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z">
                            </path>
                        </g>
                    </g>
                </symbol>
                <symbol id="svg-option" viewBox="0 0 24 24">
                    <path
                        d="M24 14.187v-4.374c-2.148-.766-2.726-.802-3.027-1.529-.303-.729.083-1.169 1.059-3.223l-3.093-3.093c-2.026.963-2.488 1.364-3.224 1.059-.727-.302-.768-.889-1.527-3.027h-4.375c-.764 2.144-.8 2.725-1.529 3.027-.752.313-1.203-.1-3.223-1.059l-3.093 3.093c.977 2.055 1.362 2.493 1.059 3.224-.302.727-.881.764-3.027 1.528v4.375c2.139.76 2.725.8 3.027 1.528.304.734-.081 1.167-1.059 3.223l3.093 3.093c1.999-.95 2.47-1.373 3.223-1.059.728.302.764.88 1.529 3.027h4.374c.758-2.131.799-2.723 1.537-3.031.745-.308 1.186.099 3.215 1.062l3.093-3.093c-.975-2.05-1.362-2.492-1.059-3.223.3-.726.88-.763 3.027-1.528zm-4.875.764c-.577 1.394-.068 2.458.488 3.578l-1.084 1.084c-1.093-.543-2.161-1.076-3.573-.49-1.396.581-1.79 1.693-2.188 2.877h-1.534c-.398-1.185-.791-2.297-2.183-2.875-1.419-.588-2.507-.045-3.579.488l-1.083-1.084c.557-1.118 1.066-2.18.487-3.58-.579-1.391-1.691-1.784-2.876-2.182v-1.533c1.185-.398 2.297-.791 2.875-2.184.578-1.394.068-2.459-.488-3.579l1.084-1.084c1.082.538 2.162 1.077 3.58.488 1.392-.577 1.785-1.69 2.183-2.875h1.534c.398 1.185.792 2.297 2.184 2.875 1.419.588 2.506.045 3.579-.488l1.084 1.084c-.556 1.121-1.065 2.187-.488 3.58.577 1.391 1.689 1.784 2.875 2.183v1.534c-1.188.398-2.302.791-2.877 2.183zm-7.125-5.951c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3zm0-2c-2.762 0-5 2.238-5 5s2.238 5 5 5 5-2.238 5-5-2.238-5-5-5z" />
                </symbol>
                <symbol id="svg-right" viewBox="0 0 451.846 451.847">
                    <path
                        d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744   L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284   c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                    </path>
                </symbol>
                <symbol id="svg-compare" viewBox="0 0 24 24">
                    <path
                        d="m7.46967 1.96967c.29289-.29289.76777-.29289 1.06066 0l4.49997 4.5c.2929.29289.2929.76777 0 1.06066s-.7677.29289-1.0606 0l-3.9697-3.96967-3.96967 3.96967c-.29289.29289-.76777.29289-1.06066 0s-.29289-.76777 0-1.06066z">
                    </path>
                    <path
                        d="m7.99585 1.75c.41421 0 .75.33579.75.75v13c0 .4142-.33579.75-.75.75s-.75-.3358-.75-.75v-13c0-.41421.33579-.75.75-.75z">
                    </path>
                    <path
                        d="m11.4697 16.4697c.2929-.2929.7677-.2929 1.0606 0l3.9697 3.9696 3.9697-3.9696c.2929-.2929.7677-.2929 1.0606 0s.2929.7677 0 1.0606l-4.5 4.5c-.2929.2929-.7677.2929-1.0606 0l-4.5-4.5c-.2929-.2929-.2929-.7677 0-1.0606z">
                    </path>
                    <path
                        d="m16.4958 7.75c.4143 0 .75.33579.75.75v13c0 .4142-.3357.75-.75.75-.4142 0-.75-.3358-.75-.75v-13c0-.41421.3358-.75.75-.75z">
                    </path>
                </symbol>
                <symbol id="svg-shareCompare" viewBox="0 0 512 512.00102">
                    <path
                        d="m361.824219 344.394531c-24.53125 0-46.632813 10.59375-61.972657 27.445313l-137.972656-85.453125c3.683594-9.429688 5.726563-19.671875 5.726563-30.386719 0-10.71875-2.042969-20.960938-5.726563-30.386719l137.972656-85.457031c15.339844 16.851562 37.441407 27.449219 61.972657 27.449219 46.210937 0 83.804687-37.59375 83.804687-83.804688 0-46.210937-37.59375-83.800781-83.804687-83.800781-46.210938 0-83.804688 37.59375-83.804688 83.804688 0 10.714843 2.046875 20.957031 5.726563 30.386718l-137.96875 85.453125c-15.339844-16.851562-37.441406-27.449219-61.972656-27.449219-46.210938 0-83.804688 37.597657-83.804688 83.804688 0 46.210938 37.59375 83.804688 83.804688 83.804688 24.53125 0 46.632812-10.59375 61.972656-27.449219l137.96875 85.453125c-3.679688 9.429687-5.726563 19.671875-5.726563 30.390625 0 46.207031 37.59375 83.800781 83.804688 83.800781 46.210937 0 83.804687-37.59375 83.804687-83.800781 0-46.210938-37.59375-83.804688-83.804687-83.804688zm-53.246094-260.589843c0-29.359376 23.886719-53.246094 53.246094-53.246094s53.246093 23.886718 53.246093 53.246094c0 29.359374-23.886718 53.246093-53.246093 53.246093s-53.246094-23.886719-53.246094-53.246093zm-224.773437 225.441406c-29.363282 0-53.25-23.886719-53.25-53.246094s23.886718-53.246094 53.25-53.246094c29.359374 0 53.242187 23.886719 53.242187 53.246094s-23.882813 53.246094-53.242187 53.246094zm224.773437 118.949218c0-29.359374 23.886719-53.246093 53.246094-53.246093s53.246093 23.886719 53.246093 53.246093c0 29.359376-23.886718 53.246094-53.246093 53.246094s-53.246094-23.886718-53.246094-53.246094zm0 0">
                    </path>
                </symbol>
                <symbol id="svg-messenger" viewBox="0 0 32 32">
                    <path
                        d="M 16 4 C 9.410156 4 4 9.136719 4 15.5 C 4 18.890625 5.570313 21.902344 8 24 L 8 28.625 L 12.4375 26.40625 C 13.566406 26.746094 14.746094 27 16 27 C 22.589844 27 28 21.863281 28 15.5 C 28 9.136719 22.589844 4 16 4 Z M 16 6 C 21.558594 6 26 10.265625 26 15.5 C 26 20.734375 21.558594 25 16 25 C 14.804688 25 13.664063 24.773438 12.59375 24.40625 L 12.1875 24.28125 L 10 25.375 L 10 23.125 L 9.625 22.8125 C 7.40625 21.0625 6 18.441406 6 15.5 C 6 10.265625 10.441406 6 16 6 Z M 14.875 12.34375 L 8.84375 18.71875 L 14.25 15.71875 L 17.125 18.8125 L 23.09375 12.34375 L 17.8125 15.3125 Z" />
                </symbol>
                <symbol id="svg-zalo" viewBox="0 0 44 44">
                    <g>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.274 34.0907C15.7773 34.0856 16.2805 34.0804 16.783 34.0804C16.7806 34.0636 16.7769 34.0479 16.7722 34.0333C16.777 34.0477 16.7808 34.0632 16.7832 34.0798C16.8978 34.0798 17.0124 34.0854 17.127 34.0965H25.4058C26.0934 34.0965 26.7809 34.0977 27.4684 34.0989C28.8434 34.1014 30.2185 34.1039 31.5935 34.0965H31.6222C33.5357 34.0798 35.0712 32.5722 35.0597 30.7209V27.4784C35.0597 27.4582 35.0612 27.4333 35.0628 27.4071C35.0676 27.3257 35.0731 27.2325 35.0368 27.2345C34.9337 27.2401 34.7711 27.2757 34.7138 27.3311C34.2744 27.6145 33.8483 27.924 33.4222 28.2335C32.57 28.8525 31.7179 29.4715 30.7592 29.8817C27.0284 31.0993 23.7287 31.157 20.2265 30.3385C20.0349 30.271 19.9436 30.2786 19.7816 30.292C19.6773 30.3007 19.5436 30.3118 19.3347 30.3068C19.3093 30.3077 19.2829 30.3085 19.2554 30.3093C18.9099 30.3197 18.4083 30.3348 17.8088 30.6877C16.4051 31.1034 14.5013 31.157 13.5175 31.0147C13.522 31.0245 13.5247 31.0329 13.5269 31.0407C13.5236 31.0341 13.5204 31.0275 13.5173 31.0208C13.5036 31.0059 13.4864 30.9927 13.4696 30.98C13.4163 30.9393 13.3684 30.9028 13.46 30.8268C13.4867 30.8102 13.5135 30.7929 13.5402 30.7757C13.5937 30.7412 13.6472 30.7067 13.7006 30.6771C14.4512 30.206 15.1559 29.6905 15.6199 28.9311C16.2508 28.1911 15.9584 27.9025 15.4009 27.3524L15.3799 27.3317C12.6639 24.6504 11.8647 21.8054 12.148 17.9785C12.486 15.8778 13.4829 14.0708 14.921 12.4967C15.7918 11.5433 16.8288 10.7729 17.9632 10.1299C17.9796 10.1198 17.9987 10.1116 18.0182 10.1032C18.0736 10.0793 18.1324 10.0541 18.1408 9.98023C18.1475 9.92191 18.0507 9.90264 18.0163 9.90264C17.3698 9.90264 16.7316 9.89705 16.0964 9.89148C14.8346 9.88043 13.5845 9.86947 12.3041 9.90265C10.465 9.95254 8.78889 11.1779 8.81925 13.3614C8.82689 17.2194 8.82435 21.0749 8.8218 24.9296C8.82053 26.8567 8.81925 28.7835 8.81925 30.7104C8.81925 32.5007 10.2344 34.0028 12.085 34.0749C13.1465 34.1125 14.2107 34.1016 15.274 34.0907ZM13.5888 31.1403C13.5935 31.1467 13.5983 31.153 13.6032 31.1594C13.7036 31.2455 13.8031 31.3325 13.9021 31.4202C13.8063 31.3312 13.7072 31.2423 13.6035 31.1533C13.5982 31.1487 13.5933 31.1444 13.5888 31.1403ZM16.5336 33.8108C16.4979 33.7885 16.4634 33.7649 16.4337 33.7362C16.4311 33.7358 16.4283 33.7352 16.4254 33.7345C16.4281 33.7371 16.4308 33.7397 16.4335 33.7423C16.4632 33.7683 16.4978 33.79 16.5336 33.8108Z"
                            fill="white" />
                        <path
                            d="M17.6768 21.6754C18.5419 21.6754 19.3555 21.6698 20.1633 21.6754C20.6159 21.6809 20.8623 21.8638 20.9081 22.213C20.9597 22.6509 20.6961 22.9447 20.2034 22.9502C19.2753 22.9613 18.3528 22.9558 17.4247 22.9558C17.1554 22.9558 16.8919 22.9669 16.6226 22.9502C16.2903 22.9336 15.9637 22.8671 15.8033 22.5345C15.6429 22.2019 15.7575 21.9026 15.9752 21.631C16.8575 20.5447 17.7455 19.4527 18.6336 18.3663C18.6851 18.2998 18.7367 18.2333 18.7883 18.1723C18.731 18.0781 18.6508 18.1224 18.582 18.1169C17.9633 18.1114 17.3388 18.1169 16.72 18.1114C16.5768 18.1114 16.4335 18.0947 16.296 18.067C15.9695 17.995 15.7689 17.679 15.8434 17.3686C15.895 17.158 16.0669 16.9862 16.2846 16.9363C16.4221 16.903 16.5653 16.8864 16.7085 16.8864C17.7284 16.8809 18.7539 16.8809 19.7737 16.8864C19.9571 16.8809 20.1347 16.903 20.3123 16.9474C20.7019 17.0749 20.868 17.4241 20.7133 17.7899C20.5758 18.1058 20.3581 18.3774 20.1404 18.649C19.3899 19.5747 18.6393 20.4948 17.8888 21.4093C17.8258 21.4814 17.7685 21.5534 17.6768 21.6754Z"
                            fill="white" />
                        <path
                            d="M24.3229 18.7604C24.4604 18.5886 24.6036 18.4279 24.8385 18.3835C25.2911 18.2948 25.7151 18.5775 25.7208 19.021C25.738 20.1295 25.7323 21.2381 25.7208 22.3467C25.7208 22.6349 25.526 22.8899 25.2453 22.973C24.9588 23.0783 24.6322 22.9952 24.4432 22.7568C24.3458 22.6404 24.3057 22.6183 24.1682 22.7236C23.6468 23.1338 23.0567 23.2058 22.4207 23.0063C21.4009 22.6848 20.9827 21.9143 20.8681 20.9776C20.7478 19.9632 21.0973 19.0986 22.0369 18.5664C22.816 18.1175 23.6067 18.1563 24.3229 18.7604ZM22.2947 20.7836C22.3061 21.0275 22.3863 21.2603 22.5353 21.4543C22.8447 21.8534 23.4348 21.9365 23.8531 21.6372C23.9218 21.5873 23.9848 21.5263 24.0421 21.4543C24.363 21.033 24.363 20.3402 24.0421 19.9189C23.8817 19.7027 23.6296 19.5752 23.3603 19.5697C22.7301 19.5309 22.289 20.002 22.2947 20.7836ZM28.2933 20.8168C28.2474 19.3923 29.2157 18.3281 30.5907 18.2893C32.0517 18.245 33.1174 19.1928 33.1632 20.5785C33.209 21.9808 32.321 22.973 30.9517 23.106C29.4563 23.2502 28.2704 22.2026 28.2933 20.8168ZM29.7313 20.6838C29.7199 20.961 29.8058 21.2326 29.9777 21.4598C30.2928 21.8589 30.8829 21.9365 31.2955 21.6261C31.3585 21.5818 31.41 21.5263 31.4616 21.4709C31.7939 21.0496 31.7939 20.3402 31.4673 19.9189C31.3069 19.7083 31.0548 19.5752 30.7855 19.5697C30.1668 19.5364 29.7313 19.991 29.7313 20.6838ZM27.7891 19.7138C27.7891 20.573 27.7948 21.4321 27.7891 22.2912C27.7948 22.6848 27.474 23.0118 27.0672 23.0229C26.9985 23.0229 26.924 23.0174 26.8552 23.0007C26.5688 22.9287 26.351 22.6349 26.351 22.2857V17.8791C26.351 17.6186 26.3453 17.3636 26.351 17.1031C26.3568 16.6763 26.6375 16.3992 27.0615 16.3992C27.4969 16.3936 27.7891 16.6708 27.7891 17.1142C27.7948 17.9789 27.7891 18.8491 27.7891 19.7138Z"
                            fill="white" />
                        <path
                            d="M22.2947 20.7828C22.289 20.0013 22.7302 19.5302 23.3547 19.5634C23.6239 19.5745 23.876 19.702 24.0364 19.9181C24.3573 20.3339 24.3573 21.0322 24.0364 21.4535C23.7271 21.8526 23.1369 21.9357 22.7187 21.6364C22.65 21.5865 22.5869 21.5255 22.5296 21.4535C22.3864 21.2595 22.3062 21.0267 22.2947 20.7828ZM29.7314 20.683C29.7314 19.9957 30.1668 19.5357 30.7856 19.569C31.0549 19.5745 31.307 19.7075 31.4674 19.9181C31.794 20.3394 31.794 21.0544 31.4617 21.4701C31.1408 21.8636 30.545 21.9302 30.1382 21.6198C30.0752 21.5754 30.0236 21.52 29.9778 21.459C29.8059 21.2318 29.7257 20.9602 29.7314 20.683Z"
                            fill="transparent" />
                    </g>
                </symbol>
                <symbol id="svg-shopping-cart" viewBox="0 0 446.843 446.843">
                    <path
                        d="M444.09,93.103c-2.698-3.699-7.006-5.888-11.584-5.888H109.92c-0.625,0-1.249,0.038-1.85,0.119l-13.276-38.27
					 c-1.376-3.958-4.406-7.113-8.3-8.646L19.586,14.134c-7.374-2.887-15.695,0.735-18.591,8.1c-2.891,7.369,0.73,15.695,8.1,18.591
					 l60.768,23.872l74.381,214.399c-3.283,1.144-6.065,3.663-7.332,7.187l-21.506,59.739c-1.318,3.663-0.775,7.733,1.468,10.916
					 c2.24,3.183,5.883,5.078,9.773,5.078h11.044c-6.844,7.616-11.044,17.646-11.044,28.675c0,23.718,19.298,43.012,43.012,43.012
					 s43.012-19.294,43.012-43.012c0-11.029-4.2-21.059-11.044-28.675h93.776c-6.847,7.616-11.048,17.646-11.048,28.675
					 c0,23.718,19.294,43.012,43.013,43.012c23.718,0,43.012-19.294,43.012-43.012c0-11.029-4.2-21.059-11.043-28.675h13.433
					 c6.599,0,11.947-5.349,11.947-11.948c0-6.599-5.349-11.947-11.947-11.947H143.647l13.319-36.996
					 c1.72,0.724,3.578,1.152,5.523,1.152h210.278c6.234,0,11.751-4.027,13.65-9.959l59.739-186.387
					 C447.557,101.567,446.788,96.802,444.09,93.103z M169.659,409.807c-10.543,0-19.116-8.573-19.116-19.116
					 s8.573-19.117,19.116-19.117s19.116,8.574,19.116,19.117S180.202,409.807,169.659,409.807z M327.367,409.807
					 c-10.543,0-19.117-8.573-19.117-19.116s8.574-19.117,19.117-19.117c10.542,0,19.116,8.574,19.116,19.117
					 S337.909,409.807,327.367,409.807z M402.52,148.149h-73.161V115.89h83.499L402.52,148.149z M381.453,213.861h-52.094v-37.038
					 h63.967L381.453,213.861z M234.571,213.861v-37.038h66.113v37.038H234.571z M300.684,242.538v31.064h-66.113v-31.064H300.684z
					 M139.115,176.823h66.784v37.038h-53.933L139.115,176.823z M234.571,148.149V115.89h66.113v32.259H234.571z M205.898,115.89v32.259
					 h-76.734l-11.191-32.259H205.898z M161.916,242.538h43.982v31.064h-33.206L161.916,242.538z M329.359,273.603v-31.064h42.909
					 l-9.955,31.064H329.359z" />
                </symbol>
            </defs>
        </svg>
        <link rel="preload" as="style"
            href="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/fonts.css?1690883846775" type="text/css">
        <link href="//bizweb.dktcdn.net/100/487/158/themes/913589/assets/fonts.css?1690883846775" rel="stylesheet"
            type="text/css" media="all" />
    </div>
</body>
</section>
@endsection

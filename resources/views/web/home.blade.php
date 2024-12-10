@extends('web.layouts.index')

@push('main')
    <main>
        <section class="header-video">
            <div id="hero_video">
                <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                    <div class="intro_title">
                        <h3 class="animated fadeInDown">Du lịch <span>Strasbourg</span></h3>
                        <p class="animated fadeInDown" style="text-transform: none;">Cung cấp thông tin & chia sẻ kinh nghiệm du lịch cho người Việt tại Strasbourg</p>
                    </div>
                </div>
            </div>
            <img src="img/video_fix.png" alt="Image" class="header-video--media" data-video-src=""
                data-teaser-source="web/video/strasbourg" data-provider="" data-video-width="854" data-video-height="480">
        </section>
        <!-- End Header video -->

        <div class="white_bg">
            <div class="container margin_60">
                <div class="row small-gutters categories_grid">
                    <div class="col-sm-12 col-md-6">
                        <a href="all_tours_list.html">
                            <img src="web/img/img_cat_home_1.jpg" alt="" class="img-fluid">
                            <div class="wrapper">
                                <h2>Về Strasbourg</h2>
                                <p>Sự kiện và địa danh</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="row small-gutters mt-md-0 mt-sm-2">
                            <div class="col-sm-6">
                                <a href="all_tours_list.html">
                                    <img src="web/img/img_cat_home_2.jpg" alt="" class="img-fluid">
                                    <div class="wrapper">
                                        <h2>Tour</h2>
                                        <p>2 Gợi ý</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="all_hotels_list.html">
                                    <img src="web/img/img_cat_home_3.jpg" alt="" class="img-fluid">
                                    <div class="wrapper">
                                        <h2>Nhà hàng Việt</h2>
                                        <p>3 địa điểm</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-12 mt-sm-2">
                                <a href="all_restaurants_list.html">
                                    <img src="web/img/img_cat_home_4.jpg" alt="" class="img-fluid">
                                    <div class="wrapper">
                                        <h2>Homestay</h2>
                                        <p>23 Địa điểm</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/categories_grid-->
            </div>
            <!-- /container -->
            </div>

    </main>
@endpush

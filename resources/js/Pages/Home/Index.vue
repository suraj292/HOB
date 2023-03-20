<template>
    <Header></Header>
    <navigation></navigation>
    <Video></Video>
    <Trending></Trending>
    <div class="product-bg-area section-padding-2 bg-img wow shortfadeInUp custom-delay-200" style="background-image:url(assets/images/bg/bg-2.jpg);">
        <div class="container-fluid">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6 col-md-7">
                    <div class="product-phn-content text-center">
                        <h2 class=" wow shortfadeInUp custom-delay-500">Iphone 11 Promax</h2>
                        <p class=" wow shortfadeInUp custom-delay-600">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
<!--                        <div class="btn-style-4 wow shortfadeInUp custom-delay-700">-->
<!--                            <a class="animated padding-dec-2" href="product-details.html">Shop now </a>-->
<!--                        </div>-->
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="product-phn-img wow shortfadeInUp custom-delay-300">
                        <img src="/assets/images/product/hm-electronic-pro-21.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-bg-area-2 section-padding-2 bg-img wow shortfadeInUp custom-delay-200" style="background-image:url(assets/images/bg/bg-3.jpg);">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <div class="product-radio-content text-center">
                        <h2 class="wow shortfadeInUp custom-delay-400">Bush DAB Bluetooth Wooden Radio</h2>
<!--                        <div class="btn-style-4 wow shortfadeInUp custom-delay-500">-->
<!--                            <a class="animated padding-dec-2" href="product-details.html">Shop now </a>-->
<!--                        </div>-->
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="product-radio-img wow shortfadeInUp custom-delay-300">
                        <img src="/assets/images/product/hm-electronic-pro-30.png" alt="product">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer></Footer>
</template>

<script>

import Header from "@/Pages/Home/Header.vue";
import Footer from "@/Pages/Home/Footer.vue";
import Video from "@/Pages/Home/Video.vue";
import Navigation from "@/Pages/Component/Navigation.vue";
import Trending from "@/Pages/Home/Trending.vue";

export default {
    name: "Index",
    components: {Trending, Navigation, Video, Footer, Header},
    mounted() {
        /*=====================================
           Video Background JS
        ======================================*/
        var videoBg = $(".video-bg");

        videoBg.each(function (index, elem) {
            var element = $(elem),
                videoUrl = element.data('url');

            videoBg.YTPlayer({
                videoURL: videoUrl,
                startAt: 2,
                showControls: false,
                showYTLogo: false,
                mute: true,
                quality: 'highres',
                containment: '.video-bg-content-wrap'
            });
        });
        /*====== Search active ======*/
        function sidebarSearch() {
            var searchTrigger = $('.search-active'),
                endTriggersearch = $('.search2-close'),
                container = $('.main-search-active');

            searchTrigger.on('click', function(e) {
                e.preventDefault();
                container.addClass('search-visible');
            });

            endTriggersearch.on('click', function() {
                container.removeClass('search-visible');
            });

        };
        sidebarSearch();

        /*====== QuickInfo ======*/
        function quickInfo() {
            var searchTrigger = $('.header-aside-button'),
                endTriggersearch = $('.aside-close'),
                container = $('.header-aside-active');
            searchTrigger.on('click', function(e) {
                e.preventDefault();
                container.addClass('inside');
            });
            endTriggersearch.on('click', function() {
                container.removeClass('inside');
            });
        };
        quickInfo();

        /*====== MobileMenu ======*/
        function mobileMenu() {
            var navbarTrigger = $('.mobile-menu-button'),
                endTrigger = $('.mobile-menu-close'),
                container = $('.mobile-menu-active'),
                wrapper3 = $('.main-wrapper-2');

            wrapper3.prepend('<div class="body-overlay-2"></div>');

            navbarTrigger.on('click', function(e) {
                e.preventDefault();
                container.addClass('inside');
                wrapper3.addClass('overlay-active-2');
            });

            endTrigger.on('click', function() {
                container.removeClass('inside');
                wrapper3.removeClass('overlay-active-2');
            });

            $('.body-overlay-2').on('click', function() {
                container.removeClass('inside');
                wrapper3.removeClass('overlay-active-2');
            });
        };
        mobileMenu();

        /*---------------------
            Mobile menu
        --------------------- */
        var $offCanvasNav = $('.mobile-menu , .widget-categories-active'),
            $offCanvasNavSubMenu = $offCanvasNav.find('.dropdown');

        /*Add Toggle Button With Off Canvas Sub Menu*/
        $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i></i></span>');

        /*Close Off Canvas Sub Menu*/
        $offCanvasNavSubMenu.slideUp();
        /*====== SidebarCart ======*/
        function miniCart() {
            var navbarTrigger = $('.cart-active'),
                endTrigger = $('.cart-close'),
                container = $('.sidebar-cart-active'),
                wrapper2 = $('.main-wrapper');

            wrapper2.prepend('<div class="body-overlay"></div>');

            navbarTrigger.on('click', function(e) {
                e.preventDefault();
                container.addClass('inside');
                wrapper2.addClass('overlay-active');
            });

            endTrigger.on('click', function() {
                container.removeClass('inside');
                wrapper2.removeClass('overlay-active');
            });

            $('.body-overlay').on('click', function() {
                container.removeClass('inside');
                wrapper2.removeClass('overlay-active');
            });
        };
        miniCart();
    }
}
</script>

<style scoped>
.wow{
    margin-bottom: 20px;
}
</style>

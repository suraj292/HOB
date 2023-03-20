<template>
    <header class="header-area section-padding-1 position-relative">
        <div class="header-large-device">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-3">
                        <div class="logo logo-width-1">
                            <router-link :to="{ name: 'home' }">
                                <h1>BHAVANA</h1>
                            </router-link>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-6 position-static">
                        <div class="main-menu main-menu-dropdown-style main-menu-padding-3 main-menu-lh-4 main-menu-hover-yellow main-menu-color-change text-center">
                            <nav>
                                <ul>
                                    <li class="position-static"><router-link :to="{ name: 'home' }">Home</router-link>
                                    </li>
                                    <li class="position-static"><a href="#">Products <i class="lastudioicon-down-arrow"></i></a>
                                        <ul class="mega-menu-style-2">
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="#">Shop Layout</a>
                                                        <ul>
                                                            <li><router-link :to="{ name: 'product', params: { category: 123, subCategory: 233 } }">Product</router-link></li>
<!--                                                            <li><router-link :to="{name:'productDetail', }">Product Detail</router-link></li>-->
                                                            <li><router-link :to="{name:'loginRegister'}">Login Register</router-link></li>
                                                            <li><router-link :to="{name:'myAccount'}">My Account</router-link></li>
                                                            <li><router-link :to="{name:'about'}">About</router-link></li>
                                                            <li><router-link :to="{name:'blog'}">Blog</router-link></li>
                                                            <li><router-link :to="{name:'blogDetail'}">Blog Detail</router-link></li>
                                                            <li><router-link :to="{name:'contact'}">Contact us</router-link></li>
                                                            <li><router-link :to="{name:'cart'}">Cart</router-link></li>
                                                            <li><router-link :to="{name:'checkout'}">Checkout</router-link></li>
                                                            <li><router-link :to="{name:'wishlist'}">Wishlist</router-link></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Products Layout</a>
                                                        <ul>
                                                            <li><a href="product-details.html">Simple 01</a></li>
                                                            <li><a href="cart.html">Shopping Cart</a></li>
                                                            <li><a href="product-details-2.html">Simple 02</a></li>
                                                            <li><a href="checkout.html">Check Out</a></li>
                                                            <li><a href="product-details-configurable.html">Product Variable</a></li>
                                                            <li><a href="my-account.html">My Account</a></li>
                                                            <li><a href="product-details-group.html">Product Grouped</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="product-details-affiliate.html">Product Affiliate</a></li>
                                                            <li><a href="compare.html">Compare</a></li>
                                                            <li><a href="product-details-sticky.html">Product Sticky</a></li>
                                                            <li><a href="order-tracking.html">Order Tracking</a></li>
                                                            <li><a href="product-details-thumbnail.html">Product Thumbnail</a></li>
                                                            <li><a href="login-register.html">Login Register</a></li>
                                                            <li><a href="product-details-custom-style.html">Product Custom Style</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Hot Promotions</a>
                                                        <div class="menu-banner-wrap">
                                                            <div class="menu-banner-1-wrap">
                                                                <a href="product-details.html"><img src="/assets/images/menu/menu-banner-1.jpg" alt=""></a>
                                                                <div class="menu-banner-content-1">
                                                                    <span>Graphic Tees</span>
                                                                    <h4>Save up to 50%</h4>
                                                                    <a href="product-details.html">Shop Now</a>
                                                                </div>
                                                            </div>
                                                            <div class="menu-banner-2-wrap">
                                                                <a href="product-details.html"><img src="/assets/images/menu/menu-banner-2.jpg" alt=""></a>
                                                                <div class="menu-banner-content-2">
                                                                    <span>Belt shirt dress</span>
                                                                    <h4>Spring Summer</h4>
                                                                    <a href="product-details.html">Shop Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><router-link :to="{name:'blog'}">Blog</router-link></li>
                                    <li><router-link :to="{name:'contact'}">Contact Us</router-link></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3">
                        <div class="header-action-wrap header-action-flex header-action-mrg-1">
                            <div class="same-style same-style-black search-icon">
                                <a class="search-active yellow" href="#"><i class="lastudioicon-zoom-1"></i></a>
                            </div>
                            <div class="same-style same-style-black header-cart">
                                <a class="cart-active yellow" href="#">
                                    <i class="lastudioicon-bag-20"></i>
                                    <span class="yellow">{{ cart.length || 0 }}</span>
                                </a>
                            </div>
                            <div class="same-style same-style-black header-login">
                                <router-link class="yellow" :to="{name:'loginRegister'}"><i class="lastudioicon-single-01-2"></i></router-link>
                            </div>
                            <div class="same-style same-style-black main-menu-icon">
                                <a class="header-aside-button yellow" href="#"><i class="lastudioicon-menu-4-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-small-device small-device-ptb-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="mobile-logo mobile-logo-width">
                            <router-link :to="{name:'home'}">
                                <h1>BHAVANA</h1>
                            </router-link>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="header-action-wrap header-action-flex header-action-mrg-1">
                            <div class="same-style same-style-black header-cart">
                                <a class="cart-active" href="#">
                                    <i class="lastudioicon-bag-20"></i>
                                    <span class="yellow">02</span>
                                </a>
                            </div>
                            <div class="same-style same-style-black header-login">
                                <router-link :to="{name:'loginRegister'}"><i class="lastudioicon-single-01-2"></i></router-link>
                            </div>
                            <div class="same-style same-style-black main-menu-icon">
                                <a class="mobile-menu-button" href="#"><i class="lastudioicon-menu-4-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
import {mapState} from "pinia";
import {StoreCart} from "@/StoreCart";
export default {
    name: "Header2",
    computed:{
        ...mapState(StoreCart, ['cart'])
    },
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

</style>

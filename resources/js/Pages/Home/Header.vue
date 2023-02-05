<template>
    <header class="header-area section-padding-1 transparent-bar">
        <div class="header-large-device">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-1">
                        <div class="header-action-wrap">
                            <div class="same-style main-menu-icon">
                                <a class="header-aside-button" href="#"><i class="lastudioicon-menu-4-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9 position-static">
                        <div class="main-menu-dropdown-style main-menu-style-2 main-menu-2-center main-menu-padding-2 main-menu-lh-2">
                            <nav>
                                <ul>
                                    <li class="position-static"><router-link :to="{ name: 'home' }">Home</router-link>
                                    </li>
                                    <li class="position-static"><a href="#">Products<i class="lastudioicon-down-arrow"></i></a>
                                        <ul class="mega-menu-style-2">
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="#">Shop Layout</a>
                                                        <ul>
                                                            <li><router-link :to="{ name: 'product' }">Product</router-link></li>
                                                            <li><router-link :to="{name:'productDetail'}">Product Detail</router-link></li>
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
                            <div class="leather-logo">
                                <router-link :to="{name:'home'}"><img src="/assets/images/logo/leather-logo-white.png" alt="logo"></router-link>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <div class="header-action-wrap header-action-flex header-action-mrg-1">
                            <div class="same-style search-icon">
                                <a class="search-active" href="#"><i class="lastudioicon-zoom-1"></i></a>
                            </div>
                            <div class="same-style header-cart">
                                <a class="cart-active" href="#">
                                    <i class="lastudioicon-bag-20"></i>
                                    <span class="yellow">02</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-small-device small-device-ptb-1">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="mobile-logo mobile-logo-width">
                            <router-link :to="{name:'home'}">
                                <img alt="" src="/assets/images/logo/leather-logo-white.png">
                            </router-link>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="header-action-wrap header-action-flex header-action-mrg-1">
                            <div class="same-style header-cart">
                                <a class="cart-active" href="#">
                                    <i class="lastudioicon-bag-20"></i>
                                    <span class="yellow">02</span>
                                </a>
                            </div>
                            <div class="same-style main-menu-icon">
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
export default {
    name: "Header",
}
</script>

<style scoped>

</style>

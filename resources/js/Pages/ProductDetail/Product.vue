<template>
    <div class="product-details-area section-padding-1 padding-60-row-col-2 pt-120 pb-115">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-details-tab">
                        <div class="product-dec-right" style="position: relative">
                            <div class="cn f a j">
                                <div class="wp f">
                                    <aside>
                                        <div class="zoom">
                                            <div class="original">
                                                <img :src="images[currentIndex]" id="target" >
                                            </div>
                                            <div class="viewer">
                                                <img :src="images[currentIndex]">
                                            </div>
                                            <div class="magnifier"></div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                            <div class="outOfStock" v-if="outOfStock">
                                <h1>Out Of Stock</h1>
                            </div>
                        </div>
                        <div class="product-dec-left product-dec-slider-small-2 product-dec-small-style2">
                            <div class="product-dec-small active" v-for="(image, index) in images" :key="index" :class="{ 'active': index === currentIndex }" @click="imageSwitch(index)">
                                <img :src="image" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details-content">
                        <h3>{{ product.title }}</h3>
                        <div class="pro-details-price-rating-wrap">
                            <div class="pro-details-price">
                                <h4 v-if="product.offer_price != null">₹{{ product.offer_price }} <del style="color: orangered;">₹{{ product.price }}</del></h4>
                                <h4 v-else>₹49.00</h4>
                            </div>
                        </div>
                        <div class="product-details-peragraph">
                            <p class="font-inc">
                                {{ product.description }}
                            </p>
                        </div>
                        <div class="configurable-wrap">
                            <div class="configurable-size">
                                <span>Size</span>
                                {{ product.size }}
                            </div>
                            <div class="configurable-color sidebar-widge-color">
                                <span>Color</span>
                                <ul>
                                    <li v-for="(color, index) in product.image" :key="index">
                                        <div style="cursor: pointer;" @click="switchColor(color.id)">
                                            <img :src="color.color_icon" width="25" class="rounded">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details-action-wrap">
                            <div class="product-details-action-top">
                                <div class="product-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="number" step="1" min="1" value="1">
                                    </div>
                                </div>
                                <div class="product-details-cart" v-if="!outOfStock">
                                    <a title="Add to cart" @click="addToCart(product)">Add to cart</a>
                                </div>
                            </div>
                            <div class="product-details-action-bottom" >
                                <div class="pro-details-wishlist-compare">
                                    <a title="Add to wishlist" href="#"><i class="lastudioicon-heart-2"></i>Add to wishlist</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-details-meta">
<!--                            <span>SKU: REF. LA-140</span>-->
                            <span>Categories: <a href="#">Fashions</a>, <a href="#">Main 01</a>, <a href="#">Main 02</a></span>
                            <span>Tags: <a href="#">Bikini</a>, <a href="#">Hot Trend</a>, <a href="#">Underwear</a></span>
                        </div>
                        <div class="social-icon-style-2">
                            <a href="#"><i class="lastudioicon-b-facebook"></i></a>
                            <a href="#"><i class="lastudioicon-b-twitter"></i></a>
                            <a href="#"><i class="lastudioicon-b-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Http from "@/Connection/http-connection";
import {StoreCart} from "@/StoreCart";
export default {
    name: "Product",
    props: ['id'],
    data(){
      return {
          product: '',
          images: '',
          currentIndex: 0,
          outOfStock: false,
          productColorId:null,
          productColorIcon:null,
      }
    },
    methods: {
        getProduct(){
            Http.get('product/'+this.id)
                .then(res => {
                    this.product = res.data.Product
                    this.images = this.product.image[0].product_images.split(',')
                    if (this.product.image[0].stock === 0){
                        this.outOfStock = true;
                        console.log(this.outOfStock)
                    }
                    this.productColorId = res.data.Product.image[0].id
                    this.productColorIcon = res.data.Product.image[0].color_icon
                })
                .catch(err => {
                    console.log(err.response)
                })
        },
        addToCart(product){
            const user = JSON.parse(localStorage.getItem('user'));
            const data = {
                user_id: user.id ?? null,
                id: product.id,
                product_color_id: this.productColorId,
                color: this.productColorIcon,
                title: product.title,
                image: this.product.image[0].product_images.split(',')[0],
                price: product.price,
                offer: product.offer_price,
                quantity: 1
            }
            StoreCart().addProduct(data)
        },
        switchColor(id){
            Http.get('product-image/'+id)
                .then(res => {
                    this.images = res.data.productImage.product_images.split(',')
                    this.outOfStock = res.data.productImage.stock === 0;
                    this.productColorId = res.data.productImage.id
                    this.productColorIcon = res.data.productImage.color_icon
                })
                .catch(err => {
                    console.log(err.response)
                })
        },
        imageSwitch(index){
            this.currentIndex = index
        }
    },
    mounted() {
        this.getProduct()
        // console.log()

        var l = $('#target').zoom(2);

        $('input[type="range"]').on('change', function () {

            l.setZoom(this.value);

        });

        // Instantiate EasyZoom instances
        var $easyzoom = $('.easyzoom').easyZoom();
        /*-------------------------------------
            Product details big image slider
        ---------------------------------------*/
        $('.pro-dec-big-img-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            draggable: false,
            fade: false,
            asNavFor: '.product-dec-slider-small , .product-dec-slider-small-2',
        });
        /*--------------------------------
        Shop carousel active
        -----------------------------------*/
        $('.shop-carousel-active').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            loop: true,
            dots: true,
            arrows: false,
            rows: 2,
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 410,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
        /*---------------------------------------
            Product details small image slider
        -----------------------------------------*/
        $('.product-dec-slider-small').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.pro-dec-big-img-slider',
            dots: false,
            focusOnSelect: true,
            fade: false,
            prevArrow: '<span class="pro-dec-prev"><i class="lastudioicon-left-arrow"></i></span>',
            nextArrow: '<span class="pro-dec-next"><i class="lastudioicon-right-arrow"></i></span>',
            responsive: [{
                breakpoint: 767,
                settings: {

                }
            },
                {
                    breakpoint: 575,
                    settings: {
                        autoplay: true,
                        slidesToShow: 4,
                    }
                }
            ]
        });
        /*----------------------------------------
            Product details small image slider 2
        ------------------------------------------*/
        $('.product-dec-slider-small-2').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            vertical: true,
            asNavFor: '.pro-dec-big-img-slider',
            dots: false,
            focusOnSelect: true,
            fade: false,
            prevArrow: '<span class="pro-dec-prev"><i class="lastudioicon-up-arrow"></i></span>',
            nextArrow: '<span class="pro-dec-next"><i class="lastudioicon-down-arrow"></i></span>',
            responsive: [{
                breakpoint: 1365,
                settings: {
                    slidesToShow: 3,
                }
            },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 2,
                    }
                }
            ]
        });

        /*--------------------------------
            Shop custom layout active
        -----------------------------------*/
        $('.shop-custom-layout-active').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            fade: false,
            loop: true,
            dots: false,
            arrows: true,
            prevArrow: '<span class="shop-prev"><i class="lastudioicon-left-arrow"></i></span>',
            nextArrow: '<span class="shop-next"><i class="lastudioicon-right-arrow"></i></span>',
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 420,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });

        /*--------------------------------
            Product details custom slider
        -----------------------------------*/
        $('.product-details-custom-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            fade: false,
            loop: true,
            dots: false,
            arrows: true,
            prevArrow: '<span class="pro-dec-custom-icon pro-details-prev"><i class="lastudioicon-left-arrow"></i></span>',
            nextArrow: '<span class="pro-dec-custom-icon pro-details-next"><i class="lastudioicon-right-arrow"></i></span>',
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });

    }
}
</script>

<style scoped>
.draggable{
    height: auto !important;
}
.slick-list{
    height: auto !important;
}
.outOfStock{
    position: absolute;
    height: 100%;
    width: 100%;
    background: transparent;
    top: 0;
}
.outOfStock > h1 {
    position: absolute;
    color: white;
    text-shadow: 0px 0px 2px #5a5a5a;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    transform:rotate(-45deg);
    left: 30%;
    top: 30%;
}
</style>

<template>
    <div class="related-product pt-120 pb-115 bg-gray">
        <div class="container">
            <div class="section-title-18 mb-60 text-center">
                <h1>Related Products</h1>
            </div>
            <div class="related-product-slider">
                <div class="related-product-plr">
                    <div class="product-wrap">
                        <div class="product-img mb-15">
                            <router-link :to="{ name: 'productDetail' }">
                                <img class="default-img" src="/assets/images/product/hm-fashion-pro5-1.jpg" alt="">
                                <img class="hover-img" src="/assets/images/product/hm-fashion-pro5-2.jpg" alt="">
                            </router-link>
                            <div class="product-action-wrap">
                                <button data-bs-toggle="tooltip" data-original-title="Add to Cart"><i class="lastudioicon-shopping-cart-3"></i></button>
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="lastudioicon-eye"></i><span>Quick View</span></button>
                                <button data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="lastudioicon-heart-2"></i></button>
                                <button data-bs-toggle="tooltip" data-original-title="Add to Compare"><i class="lastudioicon-compare"></i></button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><router-link :to="{ name: 'productDetail' }">Midi printed dress</router-link></h4>
                            <div class="product-price">
                                <span>$49.99</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "RelatedProduct",
    mounted() {
        /*--------------------------------
            Related product slider
        -----------------------------------*/
        $('.related-product-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            fade: false,
            loop: true,
            dots: false,
            arrows: false,
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
                        slidesToShow: 3,
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
    }
}
</script>

<style scoped>

</style>

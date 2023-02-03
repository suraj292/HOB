<template>
    <div class="col-lg-9">
        <div class="shop-pl-35">
            <div class="shop-top-bar">
                <div class="shop-top-bar-left">
                    <div class="shop-top-show">
                        <span>Showing 1–12 of 39 results</span>
                    </div>
                </div>
                <div class="shop-top-bar-right">
                    <div class="shop-short-by">
                        <span>Show 24 <i class="lastudioicon-down-arrow angle-down"></i> <i class="lastudioicon-up-arrow angle-up"></i></span>
                        <ul class="wd-1">
                            <li><a href="#">Show 24</a></li>
                            <li><a href="#">Show 12</a></li>
                            <li><a href="#">Show 15</a></li>
                            <li><a href="#">Show 30</a></li>
                        </ul>
                    </div>
                    <div class="shop-short-by ml-50">
                        <span>Sort by Default <i class="lastudioicon-down-arrow angle-down"></i> <i class="lastudioicon-up-arrow angle-up"></i></span>
                        <ul class="wd-2">
                            <li class="active"><a href="#">Sort by Default</a></li>
                            <li><a href="#">Sort by Popularity</a></li>
                            <li><a href="#">Sort by Rated</a></li>
                            <li><a href="#">Sort by Latest</a></li>
                            <li><a href="#">Sort by Price: <i class="lastudioicon-arrow-up"></i></a></li>
                            <li><a href="#">Sort by Price: <i class="lastudioicon-arrow-down"></i></a></li>
                        </ul>
                    </div>
                    <div class="shop-tab nav ml-50">
                        <a href="#shop-1" class="active" data-bs-toggle="tab"><i class="lastudioicon-microsoft"></i></a>
                    </div>
                </div>
            </div>
            <div class="tab-content padding-60-row-col-2">
                <div id="shop-1" class="tab-pane active">
                    <div class="row product-responsive">
                        <!-- product loop starts -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-35">
                                <div class="product-img mb-15">
                                    <a href="/product/detail">
                                        <img class="default-img" src="/assets/images/product/hm-fashion-pro1-1.jpg" alt="">
                                        <img class="hover-img" src="/assets/images/product/hm-fashion-pro1-2.jpg" alt="">
                                    </a>
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
                                        <span>₹49.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product loop ends -->
                    </div>
                </div>

                <!-- pagination -->
                <div class="pro-pagination-style text-center">
                    <ul>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="lastudioicon-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "AllProduct"
}
</script>

<style scoped>

</style>

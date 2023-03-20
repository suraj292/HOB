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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" v-for="(product, index) in products" :key="index">
                            <div class="product-wrap mb-35">
                                <div class="product-img mb-15">
                                    <router-link :to="{name:'productDetail', params: { id: product.id }}">
                                        <img class="default-img" :src=" product.image[0].product_images.split(',')[0] " alt="">
                                        <img class="hover-img" :src=" product.image[0].product_images.split(',')[1] " alt="">
                                    </router-link>
                                    <div class="product-action-wrap">
<!--                                        <button data-bs-toggle="tooltip" data-original-title="Add to Cart"><i class="lastudioicon-shopping-cart-3"></i></button>-->
<!--                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="lastudioicon-eye"></i><span>Quick View</span></button>-->
<!--                                        <button data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="lastudioicon-heart-2"></i></button>-->
<!--                                        <button data-bs-toggle="tooltip" data-original-title="Add to Compare"><i class="lastudioicon-compare"></i></button>-->
                                    </div>
                                </div>
                                <div class="product-content">
<!--                                    <h4>{{ product.image[0].product_images.split(',')[0] }}</h4>-->
                                    <h4>
                                        <router-link class="uppercase" :to="{name:'productDetail', params: { id: product.id }}">{{ product.title }}</router-link>
                                    </h4>
                                    <div class="row">
                                        <div class="col-1" v-for="color in product.image">
                                            <img :src="color.color_icon" alt="" width="25" class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="product-price" v-if="product.offer_price">
                                        <span>₹{{ product.offer_price }}&nbsp;</span>
                                        <del style="color: orangered;"> ₹{{ product.price }}</del>
                                    </div>
                                    <div class="product-price" v-else>
                                        <span>₹{{ product.price }}</span>
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
import Http from './../../Connection/http-connection';
export default {
    name: "AllProduct",
    data(){
        return {
            cateId: this.$route.params.category != null ? this.$route.params.category: null,
            subId: this.$route.params.subCategory != null ? this.$route.params.subCategory: null,
            products: null,
        }
    },
    methods:{
        getProduct(){
            Http.get('productSubCategory?category='+this.cateId+'&subcategory='+this.subId)
                .then(res => {
                    this.products = res.data.Product
                    console.log(res.data.Product)
                })
                .catch(err => {
                    console.log(err)
                })
            // console.log('cat :' + this.$route.params.category + ' //// ' + 'sub :' + this.$route.params.subCategory)
        },
    },
    mounted() {
        this.getProduct()
    }
}
</script>

<style scoped>

</style>

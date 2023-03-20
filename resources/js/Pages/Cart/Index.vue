<template>
    <breadcrumb :category="null" :title="'Cart'"></breadcrumb>
    <!-- cart start -->
    <div class="cart-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="cart-free-shipping">
                                    <span><img class="injectable" src="/assets/images/icon-img/shipping.svg" alt=""> Spend $100.02 to get Free Shipping</span>
                                </div>
                                <div class="table-content table-responsive cart-table-content">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>Product</th>
                                            <th> Price</th>
                                            <th>Quantity</th>
                                            <th>total</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr v-for="(product, index) in cart" :key="index">
                                            <td class="product-remove">
                                                <a href="#"><i class="lastudioicon-e-remove"></i></a>
                                            </td>
                                            <td class="product-img">
                                                <a href="#"><img :src="product.image" alt=""></a>
                                            </td>
                                            <td class="product-title">
                                                <a href="#">
                                                    {{ product.title }}
                                                </a>
                                            </td>
<!--                                            <td class="product-name"><a href="#">Midi printed dress</a><span>Vendor: HasTech</span></td>-->
                                            <td class="product-price">
                                                <span class="amount" v-if="product.offer !== null">₹{{ product.offer }}</span>
                                                <span class="amount" v-else>₹{{ product.price }}</span>
                                            </td>
                                            <td class="cart-quality">
                                                <div class="product-details-quality quality-border-none">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="number" step="1" min="1"  @change="quantityUpdate(product)" v-model="product.quantity">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-total">
<!--                                                <span>₹110.00</span>-->
                                                <span v-if="product.offer !== null">₹{{ product.offer * product.quantity }}</span>
                                                <span v-else>₹{{ product.price * product.quantity }}</span>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart-shiping-update-wrapper" >
                                    <div class="discount-code">
                                        <form @submit.prevent="couponSubmit">
                                            <input type="text" required="" placeholder="Coupon code">
                                            <button class="coupon-btn" type="submit">Apply coupon</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="grand-total-wrap">
                                    <h4>Cart totals</h4>
                                    <div class="grand-total-content">
                                        <div class="single-grand-total">
                                            <div class="single-grand-total-left">
                                                <span>Subtotal</span>
                                            </div>
                                            <div class="single-grand-total-right">
                                                <span>₹{{ cartTotalAmount() }}</span>
                                            </div>
                                        </div>
<!--                                        <div class="single-grand-total">-->
<!--                                            <div class="single-grand-total-left">-->
<!--                                                <span>Shipping</span>-->
<!--                                            </div>-->
<!--                                            <div class="single-grand-total-right">-->
<!--                                                <ul>-->
<!--                                                    <li>Flat rate: ₹{{ cod=40 }}</li>-->
<!--                                                    <li>Shipping to <span>Victoria</span></li>-->
<!--                                                    <li><a href="#">Change address</a></li>-->
<!--                                                </ul>-->
<!--                                            </div>-->
<!--                                        </div>-->
                                    </div>
                                    <div class="cart-total-wrap">
                                        <div class="single-cart-total-left">
                                            <span>Total</span>
                                        </div>
                                        <div class="single-cart-total-right">
                                            <span>₹{{ cartTotalAmount() }}</span>
                                        </div>
                                    </div>
                                    <div class="grand-btn">
                                        <router-link :to="{ name: 'checkout' }">Proceed to checkout</router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Breadcrumb from "@/Pages/Component/Breadcrumb.vue";
import {mapState} from "pinia";
import {StoreCart} from "@/StoreCart";
export default {
    name: "Index",
    components: {Breadcrumb},
    data(){
      return {
          quantity: '',
      }
    },
    computed:{
        ...mapState(StoreCart, ['cart'])
    },
    methods:{
        cartTotalAmount() {
            let total = 0;
            for (let item in this.cart) {
                if (this.cart[item].offer){
                    var amount =  this.cart[item].offer
                }else {
                    var amount =  this.cart[item].price
                }
                total = total + (this.cart[item].quantity * amount)
            }
            return total;
        },
        couponSubmit(){

        },
        quantityUpdate(product){
            const user = JSON.parse(localStorage.getItem('user'));
            const data = {
                user_id: user.id ?? null,
                id: product.id,
                product_color_id: product.product_color_id,
                color: product.color,
                title: product.title,
                image: product.image,
                price: product.price,
                offer: product.offer_price,
                quantity: product.quantity
            }
            StoreCart().updateProduct(data)
            // console.log(data)
        }
    },
    mounted() {
        console.log(this.cart)
    }
}
</script>

<style scoped>
.product-title{
    width: 200px;
}
</style>

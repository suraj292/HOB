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
                                        <tr>
                                            <td class="product-remove">
                                                <a href="#"><i class="lastudioicon-e-remove"></i></a>
                                            </td>
                                            <td class="product-img">
                                                <a href="product-details.html"><img src="/assets/images/cart/cart-3.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Midi printed dress</a><span>Vendor: HasTech</span></td>
                                            <td class="product-price"><span class="amount">$26.00</span></td>
                                            <td class="cart-quality">
                                                <div class="product-details-quality quality-border-none">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="number" step="1" min="1" value="1">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-total"><span>$110.00</span></td>
                                        </tr>
                                        <tr>
                                            <td class="product-remove">
                                                <a href="#"><i class="lastudioicon-e-remove"></i></a>
                                            </td>
                                            <td class="product-img">
                                                <a href="product-details.html"><img src="/assets/images/cart/cart-4.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Midi printed dress</a><span>Vendor: HasTech</span></td>
                                            <td class="product-price"><span class="amount">$26.00</span></td>
                                            <td class="cart-quality">
                                                <div class="product-details-quality quality-border-none">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="number" step="1" min="1" value="1">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-total"><span>$110.00</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart-shiping-update-wrapper">
                                    <div class="discount-code">
                                        <input type="text" required="" name="name" placeholder="Coupon code">
                                        <button class="coupon-btn" type="submit">Apply coupon</button>
                                    </div>
                                    <div class="cart-clear">
                                        <a href="#">Update cart</a>
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
                                                <span>$47.98</span>
                                            </div>
                                        </div>
                                        <div class="single-grand-total">
                                            <div class="single-grand-total-left">
                                                <span>Shipping</span>
                                            </div>
                                            <div class="single-grand-total-right">
                                                <ul>
                                                    <li>Flat rate: $10.00</li>
                                                    <li>Shipping to <span>Victoria</span></li>
                                                    <li><a href="#">Change address</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-total-wrap">
                                        <div class="single-cart-total-left">
                                            <span>Total</span>
                                        </div>
                                        <div class="single-cart-total-right">
                                            <span>$109.98</span>
                                        </div>
                                    </div>
                                    <div class="grand-btn">
                                        <a href="#">Proceed to checkout</a>
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

export default {
    name: "Index",
    components: {Breadcrumb}
}
</script>

<style scoped>

</style>

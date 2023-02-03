<template>
    <breadcrumb :category="null" :title="'Checkout'"></breadcrumb>
    <!-- checkout start -->
    <div class="checkout-main-area">
        <div class="container">
            <div class="customer-zone">
                <h4 class="cart-page-title">Have a coupon? <a class="checkout-click-2" href="#">Click here to enter your code</a></h4>
                <div class="checkout-login-info-2">
                    <p>If you have a coupon code, please apply it below.</p>
                    <form action="#">
                        <input type="text" placeholder="Coupon code">
                        <input type="submit" value="Apply Coupon">
                    </form>
                </div>
            </div>
            <div class="checkout-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="billing-info-wrap">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-25">
                                        <label>First name <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-25">
                                        <label>Last name <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-25">
                                        <label>Company name (optional) <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-select mb-25">
                                        <label>Country <abbr class="required" title="required">*</abbr></label>
                                        <select class="select-active">
                                            <option>Azerbaijan</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>Bangladesh</option>
                                            <option>Barbados</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-25">
                                        <label>Street address <abbr class="required" title="required">*</abbr></label>
                                        <input class="billing-address" placeholder="House number and street name" type="text">
                                        <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-25">
                                        <label>Town / City <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-select mb-25">
                                        <label>District <abbr class="required" title="required">*</abbr></label>
                                        <select class="select-active">
                                            <option>Azerbaijan</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>Bangladesh</option>
                                            <option>Barbados</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="billing-info mb-25">
                                        <label>Postcode / ZIP (optional) <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="billing-info mb-25">
                                        <label>Phone <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="billing-info mb-25">
                                        <label>Email Address <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-account">
                                <input class="checkout-ship" type="checkbox">
                                <span>Ship to a different address?</span>
                            </div>
                            <div class="different-address checkout-ship-open mt-30">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-25">
                                            <label>First name <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-25">
                                            <label>Last name <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-25">
                                            <label>Company name (optional) <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-select mb-25">
                                            <label>Country <abbr class="required" title="required">*</abbr></label>
                                            <select class="select-active">
                                                <option>Azerbaijan</option>
                                                <option>Bahamas</option>
                                                <option>Bahrain</option>
                                                <option>Bangladesh</option>
                                                <option>Barbados</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-25">
                                            <label>Street address <abbr class="required" title="required">*</abbr></label>
                                            <input class="billing-address" placeholder="House number and street name" type="text">
                                            <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-25">
                                            <label>Town / City <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-select mb-25">
                                            <label>District <abbr class="required" title="required">*</abbr></label>
                                            <select class="select-active">
                                                <option>Azerbaijan</option>
                                                <option>Bahamas</option>
                                                <option>Bahrain</option>
                                                <option>Bangladesh</option>
                                                <option>Barbados</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-25">
                                            <label>Postcode / ZIP (optional) <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="additional-info-wrap">
                                <label>Order notes (optional)</label>
                                <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="your-order-area">
                            <h3>Your order</h3>
                            <div class="your-order-wrap gray-bg-4">
                                <div class="your-order-info-wrap">
                                    <div class="your-order-info">
                                        <ul>
                                            <li class="order-info-product">Product <span>Subtotal</span></li>
                                        </ul>
                                    </div>
                                    <div class="your-order-middle">
                                        <div class="single-order-middle">
                                            <div class="single-order-content">
                                                <h5>Detachable belt dress <span> × 1</span></h5>
                                                <span>Vendor:HasTech</span>
                                            </div>
                                            <div class="single-order-price">
                                                <span> $89.99	</span>
                                            </div>
                                        </div>
                                        <div class="single-order-middle">
                                            <div class="single-order-content">
                                                <h5>Detachable belt dress <span class="blod"> × 1</span></h5>
                                                <span>Vendor:HasTech</span>
                                            </div>
                                            <div class="single-order-price">
                                                <span> $89.99	</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="your-order-info order-subtotal">
                                        <ul>
                                            <li>Subtotal <span>$329 </span></li>
                                        </ul>
                                    </div>
                                    <div class="checkout-shipping-content">
                                        <div class="shipping-content-left">
                                            <span>Shipping</span>
                                        </div>
                                        <div class="shipping-content-right">
                                            <ul>
                                                <li>Flat rate: $10.00 </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="your-order-info order-total">
                                        <ul>
                                            <li>Total <span>$273.00 </span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="pay-top sin-payment">
                                        <input id="payment_method_1" class="input-radio" type="radio" value="cheque" checked="checked" name="payment_method">
                                        <label for="payment_method_1"> Direct Bank Transfer </label>
                                        <div class="payment-box payment_method_bacs">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                    <div class="pay-top sin-payment">
                                        <input id="payment-method-2" class="input-radio" type="radio" value="cheque" name="payment_method">
                                        <label for="payment-method-2">Check payments</label>
                                        <div class="payment-box payment_method_bacs">
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                    <div class="pay-top sin-payment">
                                        <input id="payment-method-3" class="input-radio" type="radio" value="cheque" name="payment_method">
                                        <label for="payment-method-3">Cash on delivery </label>
                                        <div class="payment-box payment_method_bacs">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="condition-wrap">
                                    <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#">privacy policy</a>.</p>
                                </div>
                            </div>
                            <div class="Place-order">
                                <a href="#">Place Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Breadcrumb from "@/Pages/Component/Breadcrumb.vue";

export default {
    name: "Index",
    components: {Breadcrumb},
    mounted() {
        /*-------------------------
        Checkout toggle function
        --------------------------*/
        var checked = $( '.sin-payment input:checked' )
        if(checked){
            $(checked).siblings( '.payment-box' ).slideDown(900);
        };
        $( '.sin-payment input' ).on('change', function() {
            $( '.payment-box' ).slideUp(900);
            $(this).siblings( '.payment-box' ).slideToggle(900);
        });
        /*----------------------------
        Create an account toggle
        -----------------------------*/
        $('.checkout-ship').on('click', function() {
            $('.checkout-ship-open').slideToggle(1000);
        });
    }
}
</script>

<style scoped>

</style>

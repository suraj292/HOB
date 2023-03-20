<template>
    <breadcrumb :category="null" :title="'Checkout'"></breadcrumb>
    <!-- checkout start -->
    <div class="checkout-main-area">
        <div class="container">
<!--            <div class="customer-zone">-->
<!--                <h4 class="cart-page-title">Have a coupon? <a class="checkout-click-2" href="#">Click here to enter your code</a></h4>-->
<!--                <div class="checkout-login-info-2">-->
<!--                    <p>If you have a coupon code, please apply it below.</p>-->
<!--                    <form action="#">-->
<!--                        <input type="text" placeholder="Coupon code">-->
<!--                        <input type="submit" value="Apply Coupon">-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
            <div class="checkout-wrap">
                <div class="row">
                    <div class="col-lg-12">

                        <div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Saved Address
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div style="margin-left: 20px; margin-top: 20px">
                                            <keep-alive>
                                            <div class="mb-3 form-check" v-for="address in addresses" :key="address.id">
                                                <input type="radio" name="address" class="form-check-input" :checked="address.default" @click="getUserAddress(address.id)">
                                                <label class="form-check-label">
                                                    {{ address.user_name + ' | ' + address.mobile + ' | '+address.address + ' | (' + address.pin_code + ')' }}
                                                </label>
                                            </div>
                                            </keep-alive>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" @click="getState">
                                            Add new address
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="billing-info-wrap mx-5 pt-5">
                                            <h3>Billing Details</h3>

                                            <form @submit.prevent="addAddress">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info mb-25">
                                                            <label>Name <abbr class="required" title="required">*</abbr></label>
                                                            <input type="text" v-model="newAddress.name">
                                                            <span class="text-danger" v-if="addressErrors && addressErrors.user_name">{{ addressErrors.user_name[0] }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info mb-25">
                                                            <label>Mobile <abbr class="required" title="required">*</abbr></label>
                                                            <input type="text" v-model="newAddress.mobile">
                                                            <span class="text-danger" v-if="addressErrors && addressErrors.mobile">{{ addressErrors.mobile[0] }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="billing-select mb-25">
                                                            <label>Country <abbr class="required" title="required">*</abbr></label>
                                                            <select class="select-active" disabled>
                                                                <option selected>India</option>
                                                            </select>
                                                            <span class="text-danger" v-if="addressErrors && addressErrors.country">{{ addressErrors.country[0] }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="billing-select mb-25">
                                                            <label>State <abbr class="required" title="required">*</abbr></label>
                                                            <select class="select-active" @change="stateOnChange" v-model="selectedState">
                                                                <option selected value="null"> -- Select State -- </option>
                                                                <option v-for="state in states" :value="state.id">
                                                                    {{ state.state_name }}
                                                                </option>
                                                            </select>
                                                            <span class="text-danger" v-if="addressErrors && addressErrors.state">{{ addressErrors.state[0] }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="billing-info mb-25">
                                                            <label>Postcode / ZIP <abbr class="required" title="required">*</abbr></label>
                                                            <input class="billing-address" placeholder="House number and street name" type="number" @change="getPincode" v-model="newAddress.pincode">
                                                            <span class="text-danger" v-if="addressErrors && addressErrors.pin_code">{{ addressErrors.pin_code[0] }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="billing-select mb-25">
                                                            <label>City <abbr class="required" title="required">*</abbr></label>
                                                            <select class="select-active" v-if="cityId">
                                                                <option selected value="{{cityId.city_id}}"> {{ cityId.city_name }} </option>
                                                            </select>
                                                            <select class="select-active" v-else>
                                                                <option selected value="null"> -- Select City -- </option>
                                                                <option v-for="city in cities" :value="city.id">
                                                                    {{ city.city_name }}
                                                                </option>
                                                            </select>
                                                            <span class="text-danger" v-if="addressErrors && addressErrors.city">{{ addressErrors.city[0] }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="billing-info mb-25">
                                                            <label>Address <abbr class="required" title="required">*</abbr></label>
                                                            <input type="text" placeholder="House number and street name" v-model="newAddress.address">
                                                            <span class="text-danger" v-if="addressErrors && addressErrors.address">{{ addressErrors.address[0] }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="billing-info mb-25">
                                                            <label>Landmark </label>
                                                            <input placeholder="Apartment, suite, unit etc. (optional)" type="text" v-model="newAddress.landmark">
                                                            <span class="text-danger" v-if="addressErrors && addressErrors.landmark">{{ addressErrors.landmark[0] }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="cart-checkout-btn mb-4">
                                                        <input type="submit" value="Apply Coupon">
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>
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
                                        <keep-alive>
                                        <div class="single-order-middle" v-for="(product, index) in cart" :key="index">
                                            <div class="single-order-content">
                                                <h5>{{ product.title }} <span> × {{ product.quantity }}</span></h5>
                                            </div>
                                            <div class="single-order-price">
                                                <span v-if="product.offer !== null"> ₹{{ product.offer * product.quantity }}	</span>
                                                <span v-else> ₹{{ product.price * product.quantity }}	</span>
                                            </div>
                                        </div>
                                        </keep-alive>
                                    </div>
                                    <div class="your-order-info order-subtotal">
                                        <ul>
                                            <li>Subtotal <span>₹{{ cartTotalAmount() }} </span></li>
                                        </ul>
                                    </div>
                                    <div class="checkout-shipping-content" v-if="paymentMode === 'cod'">
                                        <div class="shipping-content-left">
                                            <span>Shipping</span>
                                        </div>
                                        <div class="shipping-content-right">
                                            <ul>
                                                <li>COD Charges: ₹{{ cod = cartTotalAmount() * 2.5/100 }} </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="your-order-info order-total">
                                        <ul>
                                            <li v-if="paymentMode === 'cod'">Total <span>₹{{ cartTotalAmount() + cod }} </span></li>
                                            <li v-else>Total <span>₹{{ total = cartTotalAmount() }} </span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="pay-top sin-payment">
                                        <input id="payment_method_1" class="input-radio" type="radio" value="cheque" checked="checked" name="payment_method" @click="paymentMethod('prepaid')">
                                        <label for="payment_method_1"> Direct Bank Transfer </label>
                                        <div class="payment-box payment_method_bacs">
                                            <p>
                                                Cards, UPI, Net banking, Wallet
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pay-top sin-payment">
                                        <input id="payment-method-3" class="input-radio" type="radio" value="cheque" name="payment_method" @click="paymentMethod('cod')">
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
                                <a href="#" v-if="paymentMode === 'cod'">Place Order</a>
                                <a v-else @click="payNow" id="rzp-button1" >Pay Now</a>
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
import "https://checkout.razorpay.com/v1/checkout.js";
import Http from "@/Connection/http-connection";
import {mapState} from "pinia";
import {StoreCart} from "@/StoreCart";
import {StoreUser} from "@/StoreUser";

export default {
    name: "Index",
    components: {Breadcrumb},
    computed:{
        ...mapState(StoreCart, ['cart']),
        ...mapState(StoreUser, ['user']),
    },
    data(){
      return {
          paymentMode: null,
          addresses: null,
          newAddress: [],
          dAddress: null,
          addressErrors: null,
          states: null,
          selectedState: null,
          cities: null,
          cityId:'',
          getUserAddressId: null,
          razorPay: null,
      }
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
        paymentMethod(mode = 'prepaid'){
            this.paymentMode = mode
            // console.log(this.paymentMode)
        },
        getAddress(){
            const user = JSON.parse(this.user)
            Http.get('user_address?id='+user.id)
                .then(res => {
                    this.addresses = res.data.Address
                    const x = this.addresses.filter(d => d.default === 1)
                    localStorage.setItem('deliveryAddress', x[0].id)
                })
                .catch(err => {
                    console.log(err.response)
                })
            Http.get('address/'+localStorage.getItem('deliveryAddress'))
                .then(res => {
                    this.dAddress = res.data.Address;
                })
                .catch(err => {
                    console.log(err)
                })
        },
        addAddress(){
            const data = {
                user_name: this.newAddress.name,
                mobile: this.newAddress.mobile,
                address: this.newAddress.address,
                pin_code: this.newAddress.pincode,
                landmark: this.newAddress.landmark,
                city: this.cityId.city_name,
                state: this.cityId.state_name,
                country: 'India'
            }
            const user = JSON.parse(this.user)
            Http.post('address?id='+user.id, data)
                .then(res => {
                    this.addresses.push(res.data.address)
                    this.newAddress = []
                    this.cityId = ''
                    var myCollapse = document.getElementsByClassName('collapse')[0];
                    var bsCollapse = new bootstrap.Collapse(myCollapse, {
                        toggle: true
                    });
                    document.body.scrollTop = 500;
                    document.documentElement.scrollTop = 500;
                })
                .catch(err => {
                    this.addressErrors = err.response.data.errors
                    console.log(err.response.data)
                })
        },
        getState(){
            Http.post('logistics/state')
                .then(res => {
                    this.states = res.data.state.data
                })
                .catch(err => {
                    console.log(err)
                })
        },
        getCity(){
          Http.post('logistics/city/'+this.selectedState)
              .then(res => {
                  this.cities = res.data.state
              })
              .catch(err => {
                  console.log(err)
              })
        },
        getPincode(){
            var pincode = this.newAddress.pincode;
            Http.post('logistics/pincode/'+pincode)
                .then(res => {
                    if (res.data.state.status === "error"){
                        console.log(res.data.state.status)
                    }else{
                        // console.log(res.data.state.data[pincode].city_id)
                        this.cityId = res.data.state.data[pincode]
                    }
                })
                .catch(err => {
                    console.log('error :' + err)
                })
        },
        stateOnChange(){
            Http.post('logistics/city/'+this.selectedState)
                .then(res => {
                    this.cities = res.data.state.data
                    // console.log(this.cities)
                })
                .catch(err => {
                    console.log(err)
                })
        },
        getUserAddress(id){
            this.getUserAddressId = id
            localStorage.setItem('deliveryAddress',id)
            Http.get('address/'+id)
                .then(res => {
                    this.dAddress = res.data.Address;
                })
                .catch(err => {
                    console.log(err)
                })
        },
        razorPayId(){
            if (this.cartTotalAmount() !== 0) {
                Http.post('razorpay', {
                    "amount": this.cartTotalAmount(),
                })
                    .then(res => {
                        this.razorPay = res.data.response
                        // console.log(res.data.response)
                        localStorage.setItem('razorpay', JSON.stringify(this.razorPay))
                    })
                    .catch(err => {
                        console.log(err)
                    })
            }else {
                window.location.href = "/";
            }
        },
        payNow(){
            var options = {
                "key": 'rzp_test_YDGmj84Wk6nipa', // Enter the Key ID generated from the Dashboard
                "amount": this.razorPay.amount, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                "currency": "INR",
                "name": "House Of Bhavana", //your business name
                // "description": "Test Transaction",
                "order_id": this.razorPay.id, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                "callback_url": "https://5b132c947f4e3087ba8b3215aaf9c8dc.m.pipedream.net",
                "prefill": {
                    "name": this.dAddress.user_name, //your customer's name
                    // "email": "gaurav.kumar@example.com",
                    "contact": this.dAddress.mobile
                },
                "theme": {
                    "color": "#3399cc"
                }
            };
            const rzp1 = new Razorpay(options);
            document.getElementById('rzp-button1').onclick = function(e){
                rzp1.open();
                e.preventDefault();
                // localStorage.setItem('paymentMode', this.paymentMode)
                // window.location.href = "/success";
            }
            // window.location.href = "/success";
        }
    },
    mounted() {
        this.getAddress()
        // this.getState()
        this.razorPayId()

        // console.log(JSON.parse(this.user))
        // console.log(typeof this.user)
        // console.log(this.selectedState)
        // console.log(this.cart)
        // this.iThinkLogistics()
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
.accordion-button:focus{
    box-shadow: none !important;
}
.accordion-button:not(.collapsed){
    background-color: #e9e9e9 !important;
    color: #323232 !important;
}
</style>

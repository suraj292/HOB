<template>
    <breadcrumb :category="'Category'" :title="'Title'"></breadcrumb>
    <div class="login-register-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10 ms-auto me-auto">
                    <div class="login-register-mrg">
                        <div class="login-register-wrap">
                            <h3 class="login-active"><i class="lastudioicon-a-check"></i> Login</h3>
                            <div class="login-register-form login-form">
                                <form @submit.prevent="login">
                                    <div class="sin-login-register">
                                        <label>Username or email address * </label>
                                        <input type="text" name="user-name" v-model="loginData.email">
                                        <span class="text-danger" v-if="errors && errors.email">{{ errors.email[0] }}</span>
                                    </div>
                                    <div class="sin-login-register">
                                        <label>Password * </label>
                                        <input type="password" v-model="loginData.password">
                                        <span class="text-danger" v-if="errors && errors.password">{{ errors.password[0] }}</span>
                                    </div>
<!--                                    <div class="login-register-remember">-->
<!--                                        <input type="checkbox">-->
<!--                                        <label>Remember me</label>-->
<!--                                    </div>-->
                                    <div class="login-register-btn">
                                        <button type="submit">Log in</button>
                                    </div>
                                    <div class="lost-password">
                                        <a href="#">Lost your password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="login-register-wrap register-wrap">
                            <h3 class="register-active"><i class="lastudioicon-a-add"></i> Register</h3>
                            <div class="login-register-form register-form">
                                <form action="#">
                                    <div class="sin-login-register">
                                        <label>Email address <span>*</span></label>
                                        <input type="email" name="user-name">
                                    </div>
                                    <div class="sin-login-register">
                                        <label>Password <span>*</span></label>
                                        <input type="password">
                                    </div>
                                    <div class="vendor-customar-active">
                                        <div class="sin-login-register">
                                            <label>First Name <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="sin-login-register">
                                            <label>Last Name <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="sin-login-register">
                                            <label>Shop Name <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="sin-login-register">
                                            <label>Shop URL <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="sin-login-register">
                                            <label>Phone Number <span>*</span></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="vendor-customar-wrap">
                                        <label class="radio vendor-close"><input type="radio" name="role" value="customer">I am a customer </label>
                                        <label class="radio vendor-active"><input type="radio" name="role" value="seller" checked="checked">I am a vendor </label>
                                    </div>
                                    <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">privacy policy.</a></p>
                                    <div class="login-register-btn">
                                        <button type="submit">Register</button>
                                    </div>
                                </form>
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
import Http from "@/Connection/http-connection";
import {mapState} from "pinia";
import {StoreUser} from "@/StoreUser";

export default {
    name: "Index",
    components: {Breadcrumb},
    data(){
      return {
          loginData: [],
          errors: null,
      }
    },
    methods:{
      login(){
          Http.post('login', {
              email: this.loginData.email,
              password: this.loginData.password
          })
              .then(res => {
                  StoreUser().setUser(res.data.token, JSON.stringify(res.data.user))
                  window.location.href = "";
                  // console.log(res.data)
              })
              .catch(err => {
                  this.errors = err.response.data.errors
                  console.log(err.response.data.message)
              })
      }
    },
    mounted() {
        // console.log(StoreUser().getUser)
        /*-----------------------
        Login register active
    ------------------------- */
        $('.vendor-close').on('click', function() {
            $('.vendor-customar-active').slideDown('fast');
        });
        $('.vendor-active').on('click', function() {
            $('.vendor-customar-active').slideUp(400);
        });

        /*-------------------------
        Create an account toggle
        --------------------------*/
        $('.login-active').on('click', function() {
            $('.login-form').slideToggle(400);
        });
        $('.register-active').on('click', function() {
            $('.register-form').slideToggle(400);
        });
    }
}
</script>

<style scoped>

</style>

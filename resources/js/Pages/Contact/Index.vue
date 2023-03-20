<template>
    <breadcrumb :category="null" :title="'Contact us'"></breadcrumb>
    <div class="contact-us-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-63-contact">
                    <div class="contact-form-wrap-2">
                        <div class="contact-form-title">
                            <h1>Get In Touch</h1>
                            <p>Comments, questions? Drop us a note, and we’ll get back with you shortly!</p>
                        </div>
                        <form class="contact-form-style-2 " id="contact-form" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <input name="first_name" type="text" placeholder="Your name*">
                                </div>
                                <div class="col-lg-6 col-md-12 col-12">
                                    <input name="email_address" type="email" placeholder="Email address">
                                </div>
                                <div class="col-lg-6 col-md-12 col-12">
                                    <input name="phone" type="text" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <select name="contact_subject" class="select-img">
                                        <option value="Inquiry Type">Inquiry Type</option>
                                        <option value="Inquiry 1">General</option>
                                        <option value="Inquiry 2">Sales</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <button class="submit" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
                <div class="col-36-contact">
                    <div class="contact-info-area">
                        <ul>
<!--                            <li><i class="lastudioicon-phone-call-2"></i><span> +55 858 5858 68</span></li>-->
                            <li><i class="lastudioicon-email"></i> <span>care@houseofbhavana.in</span></li>
<!--                            <li><a href="#"><i class="lastudioicon-b-comment"></i> <span>Live chat with us</span></a></li>-->
<!--                            <li><i class="lastudioicon-pin-3-2"></i> <span>PO Box 16122 Collins Street West Victoria 8007 Australia</span></li>-->
                        </ul>
                        <div class="contact-info-social">
                            <a href="#"><i class="lastudioicon-b-facebook"></i></a>
                            <a href="#"><i class="lastudioicon-b-twitter"></i></a>
                            <a href="#"><i class="lastudioicon-b-pinterest-circled"></i></a>
                            <a href="#"><i class="lastudioicon-b-youtube-play"></i></a>
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
    components: {Breadcrumb}
}
</script>

<style scoped>
.contact-form-style-2{
    margin-bottom: 50px;
}
</style>

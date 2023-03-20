<template>
<!--    <breadcrumb :category="'customer\'s login'" :title="'Login'"></breadcrumb>-->
    <BreadcrumbImage :image="'breadcrumb-bg-1.jpg'"></BreadcrumbImage>
    <div class="shop-area section-padding-1 pb-110">
        <div class="container-fluid">
            <ProductVendorContact></ProductVendorContact>
            <div class="row flex-row-reverse shop-vendor-pt-85">
                <AllProduct></AllProduct>
                <ProductFilter></ProductFilter>
            </div>
        </div>
    </div>
</template>

<script>
import BreadcrumbImage from "@/Pages/Component/BreadcrumbImage.vue";
import AllProduct from "@/Pages/Product/AllProduct.vue";
import ProductFilter from "@/Pages/Product/ProductFilter.vue";
import ProductVendorContact from "@/Pages/Product/ProductVendorContact.vue";

export default {
    name: "Product",
    components: {ProductVendorContact, ProductFilter, AllProduct, BreadcrumbImage},
    mounted() {
        /*---------------------
        Mobile menu
    --------------------- */
        var $offCanvasNav = $('.mobile-menu , .widget-categories-active'),
            $offCanvasNavSubMenu = $offCanvasNav.find('.dropdown');

        /*Add Toggle Button With Off Canvas Sub Menu*/
        $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i></i></span>');

        /*Close Off Canvas Sub Menu*/
        $offCanvasNavSubMenu.slideUp();

        /*Category Sub Menu Toggle*/
        $offCanvasNav.on('click', 'li a, li .menu-expand', function(e) {
            var $this = $(this);
            if ( ($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand')) ) {
                e.preventDefault();
                if ($this.siblings('ul:visible').length){
                    $this.parent('li').removeClass('active');
                    $this.siblings('ul').slideUp();
                } else {
                    $this.parent('li').addClass('active');
                    $this.closest('li').siblings('li').removeClass('active').find('li').removeClass('active');
                    $this.closest('li').siblings('li').find('ul:visible').slideUp();
                    $this.siblings('ul').slideDown();
                }
            }
        });

        /*--- language currency active ----*/
        $('.mobile-language-active').on('click', function(e) {
            e.preventDefault();
            $('.lang-dropdown-active').slideToggle(900);
        });
        $('.mobile-currency-active').on('click', function(e) {
            e.preventDefault();
            $('.curr-dropdown-active').slideToggle(900);
        });

        /*---------------------
            Price slider
        --------------------- */
        var sliderrange = $('#slider-range');
        var amountprice = $('#amount');
        $(function() {
            sliderrange.slider({
                range: true,
                min: 16,
                max: 400,
                values: [0, 300],
                slide: function(event, ui) {
                    amountprice.val("₹" + ui.values[0] + " - ₹" + ui.values[1]);
                }
            });
            amountprice.val("₹" + sliderrange.slider("values", 0) +
                " - ₹" + sliderrange.slider("values", 1));
        });

        /*-----------------------
            Shop filter active
        ------------------------- */
        $('.shop-filter-active').on('click', function(e) {
            e.preventDefault();
            $('.product-filter-wrapper').slideToggle();
        })
        var shopFiltericon = $('.shop-filter-active');
        shopFiltericon.on('click', function() {
            $('.shop-filter-active').toggleClass('active');
        })

        /*--
            Magnific Popup
        ------------------------*/
        $('.img-popup').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    }
}
</script>

<style scoped>

</style>

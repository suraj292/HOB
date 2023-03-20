<template>
    <breadcrumb :category="null" :title="product.title"></breadcrumb>
    <product :id="productId"></product>
    <ProductDitail :id="productId"></ProductDitail>
<!--    <RelatedProduct></RelatedProduct>-->
</template>

<script>
import Http from './../../Connection/http-connection';
import Breadcrumb from "@/Pages/Component/Breadcrumb.vue";
import Product from "@/Pages/ProductDetail/Product.vue";
import RelatedProduct from "@/Pages/ProductDetail/RelatedProduct.vue";
import ProductDitail from "@/Pages/ProductDetail/ProductDitail.vue";

export default {
    name: "Index",
    components: {ProductDitail, Product, RelatedProduct, Breadcrumb},
    data(){
      return {
          productId: this.$route.params.id,
          product: '',
      }
    },
    methods:{
      getProduct(){
        Http.get('product-detail/'+this.productId)
            .then(res => {
                this.product = res.data.Product
            })
            .catch(err => {
                console.log(err.response)
            })
      },
    },
    mounted() {
        this.getProduct()
    }
}
</script>

<style scoped>

</style>

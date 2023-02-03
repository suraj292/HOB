<template>
    <breadcrumb :category="'Category'" :title="'Title'"></breadcrumb>
    <product></product>
    <ProductDitail></ProductDitail>
<!--    <RelatedProduct></RelatedProduct>-->
</template>

<script>
import Breadcrumb from "@/Pages/Component/Breadcrumb.vue";
import Product from "@/Pages/ProductDetail/Product.vue";
import RelatedProduct from "@/Pages/ProductDetail/RelatedProduct.vue";
import ProductDitail from "@/Pages/ProductDetail/ProductDitail.vue";

export default {
    name: "Index",
    components: {ProductDitail, Product, RelatedProduct, Breadcrumb},
    mounted() {

    }
}
</script>

<style scoped>

</style>

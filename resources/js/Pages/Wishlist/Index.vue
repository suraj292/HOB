<template>
    <breadcrumb :category="null" :title="'Wishlist'"></breadcrumb>
    <!-- cart start -->
    <div class="wishlist-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive wishlist-table-content">
                            <table>
                                <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Product</th>
                                    <th> Stock Status</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="product-remove-2">
                                        <a href="#"><i class="lastudioicon-e-remove"></i></a>
                                    </td>
                                    <td class="product-img-2">
                                        <a href="product-details.html"><img src="/assets/images/cart/cart-3.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name-2"><a href="#">Midi printed dress</a></td>
                                    <td class="product-stock"><span class="stock">In Stock</span></td>
                                    <td class="product-price-2"><span class="amount">$26.00</span></td>
                                    <td class="product-wishlist-cart"><a href="#">Add to cart</a></td>
                                </tr>
                                <tr>
                                    <td class="product-remove-2">
                                        <a href="#"><i class="lastudioicon-e-remove"></i></a>
                                    </td>
                                    <td class="product-img-2">
                                        <a href="product-details.html"><img src="/assets/images/cart/cart-4.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name-2"><a href="#">Midi printed dress</a></td>
                                    <td class="product-stock"><span class="stock">In Stock</span></td>
                                    <td class="product-price-2"><span class="amount">$26.00</span></td>
                                    <td class="product-wishlist-cart"><a href="#">Add to cart</a></td>
                                </tr>
                                </tbody>
                            </table>
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

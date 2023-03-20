
import {createRouter, createWebHistory} from "vue-router";
import {StoreUser} from "@/StoreUser";

import Home from './Pages/Home/Index.vue';
import Product from './Pages/Product/Index.vue';
import ProductDetail from './Pages/ProductDetail/Index.vue';
import LoginRegister from './Pages/Account/Index.vue';
import MyAccount from './Pages/MyAccount/index.vue';
import About from './Pages/About/Index.vue';
import Blog from './Pages/Blog/Index.vue';
import BlogDetail from './Pages/BlogDetail/Index.vue';
import Contact from './Pages/Contact/Index.vue';
import Cart from './Pages/Cart/Index.vue';
import Checkout from './Pages/Checkout/Index.vue';
import Wishlist from './Pages/Wishlist/Index.vue';
import Success from './Pages/Component/Success.vue';
import NotFound from './Pages/Component/404.vue';

const routes = [
    { path:'/', name: 'home', component:Home },
    { path:'/product/:category/:subCategory', name: 'product', component:Product, props:true },
    { path:'/product-detail/:id', name: 'productDetail', component:ProductDetail },
    { path:'/login-register', name: 'loginRegister', component:LoginRegister, meta: {Auth: false} },
    { path:'/my-account', name: 'myAccount', component:MyAccount, meta: {Auth: true} },
    { path:'/about', name: 'about', component:About },
    { path:'/blog', name: 'blog', component:Blog },
    { path:'/blog-detail', name: 'blogDetail', component:BlogDetail },
    { path:'/cart', name: 'cart', component:Cart },
    { path:'/checkout', name: 'checkout', component:Checkout, meta: {Auth: true} },
    { path:'/wishlist', name: 'wishlist', component:Wishlist },
    { path:'/contact-us', name: 'contact', component:Contact },
    { path:'/success', name: 'success', component:Success },
    { path: '/:pathMatch(.*)', name: 'notFound', component: NotFound },
];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
});
router.beforeEach((to, from, next) => {
    if (to.meta.Auth === false && StoreUser().token) {
        next('')
    }
    if (to.meta.Auth && !StoreUser().token) {
        next('loginRegister');
    } else {
        next();
    }
});
export default router;

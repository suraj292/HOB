
import {createRouter, createWebHistory} from "vue-router";

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
import NotFound from './Pages/Component/404.vue';

const routes = [
    { path:'/', name: 'home', component:Home },
    { path:'/product', name: 'product', component:Product },
    { path:'/product/detail', name: 'productDetail', component:ProductDetail },
    { path:'/login-register', name: 'loginRegister', component:LoginRegister },
    { path:'/my-account', name: 'myAccount', component:MyAccount },
    { path:'/about', name: 'about', component:About },
    { path:'/blog', name: 'blog', component:Blog },
    { path:'/blog-detail', name: 'blogDetail', component:BlogDetail },
    { path:'/cart', name: 'cart', component:Cart },
    { path:'/checkout', name: 'checkout', component:Checkout },
    { path:'/wishlist', name: 'wishlist', component:Wishlist },
    { path:'/contact-us', name: 'contact', component:Contact },
    // { path: '/:pathMatch(.*)', name: 'notFound', component: NotFound },
];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
});

export default router;

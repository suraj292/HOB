<template>
    <Header2></Header2>
    <navigation></navigation>
    <router-view :key="$route.fullPath"></router-view>
    <Footer></Footer>
</template>

<script>
import Header2 from "@/Pages/Component/Header2.vue";
import Navigation from "@/Pages/Component/Navigation.vue";
import Footer from "@/Pages/Component/Footer.vue";

export default {
    name: "PageLayout",
    components: {Footer, Navigation, Header2}
}
</script>

<style scoped>

</style>

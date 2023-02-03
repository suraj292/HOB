<template>
<!--    <h1 v-show="$route.name==='home'">Home</h1>-->
<!--    <h1 v-show="$route.name!=='home'">other</h1>-->
    <index v-if="$route.name==='home'"></index>
    <PageLayout v-else></PageLayout>
</template>

<script>
import Index from "@/Pages/Home/Index.vue";
import PageLayout from "@/Pages/PageLayout.vue";

export default {
    name: "App",
    components: {PageLayout, Index},
    data(){
        return {
            home: null,
        }
    },
    methods: {
    },
    mounted() {

    }
}
</script>

<style scoped>

</style>

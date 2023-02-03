<template>
    <div class="breadcrumb-area breadcrumb-ptb-2 breadcrumb-bg-1" v-bind:style="{ backgroundImage: 'url('+ imageUrl + image + ')' }"></div>
</template>

<script>
export default {
    name: "BreadcrumbImage",
    props: ['image'],
    data(){
        return{
            imageUrl: '/assets/images/bg/',
        }
    },

}
</script>

<style scoped>

</style>

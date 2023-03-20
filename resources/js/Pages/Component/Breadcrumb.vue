<template>
    <div class="breadcrumb-area breadcrumb-ptb-1 bg-gray">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <router-link :to="{ name: 'home'}">Home </router-link>
                    </li>
                    <li v-if="category===null">
                        <span >Product </span>
                    </li>
                    <li v-if="category!=null">
                        <span >{{category}} </span>
                    </li>
                    <li class="active">{{ title }}</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Breadcrumb",
    props: ['category', 'title']
}
</script>

<style scoped>

</style>

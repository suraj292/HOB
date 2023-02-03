<template>
    <div class="error-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-content text-center">
                        <img src="/assets/images/banner/404.png" alt="error">
                        <h1>Page Cannot Be Found!</h1>
                        <div class="error-btn">
                            <router-link :to="{name:'home'}"> Back to home</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "404"
}
</script>

<style scoped>

</style>

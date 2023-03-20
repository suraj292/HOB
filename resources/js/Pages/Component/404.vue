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
    name: "404",
    methods:{
        // getPin(){
        //     axios.post('https://my.ithinklogistics.com/api_v3/pincode/check.json', {
        //         "data": {
        //             "pincode" : "201005",
        //             "access_token": "ad22463c66a3718e3a2fc3d9f83ff108",
        //             "secret_key": "dd993a668718a340e67cd16b247ee53a"
        //         }
        //     })
        //         .then(res=> {
        //             console.log('success')
        //         })
        //         .catch(err => {
        //             console.log('failed')
        //         })
        // }
    },
    mounted() {
        this.getPin()
    }
}
</script>

<style scoped>

</style>

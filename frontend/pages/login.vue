<template>
    <div>
        <h4 class="text-lg font-bold text-gray-600 pb-2 my-2 border-b border-gray-400 text-center">Login</h4>
        <p>{{ $auth.loggedIn }}</p>
        <form @submit.prevent="onSubmit">
            <div class="mb-3">
                <label for="email" class="block">Email :</label>
                <input type="email" class="form-control border-2 border-gray-700 rounded w-full text-md py-1 px-1 "   name="email" aria-describedby="descriptionHelp" v-model="User.email" required>
            </div>
            <div class="mb-3">
                <label for="password" class=" block">Password : </label>
                <input type="password" class="form-control border-2 border-gray-700 rounded w-full text-md py-1 px-1"  name="password"  v-model="User.password" required>
            </div>
            <div class="flex">
                <button type="submit" class="flex-auto rounded-md text-white bg-indigo-600 hover:bg-indigo-900 py-1 mt-1 text-md px-2">Login</button>
            </div>
        </form> 

    </div>
</template>
<script>
    export default {
        layout: 'login',
        data() {
            return {
                User: {
                    email: '',
                    password: ''
                }
            }
        },
        methods: {
            async onSubmit() {

                // await this.$axios.setHeader('Content-Type',  'application/json', [
                // 'post'
                // ])
                // await this.$auth.loginWith('laravelSanctum',  {data: { email: this.User.email, password: this.User.password}});

                // let axiosConfig = {
                //     headers: {
                //         'Content-Type': 'application/json;charset=UTF-8',
                //         "Access-Control-Allow-Origin": "*",
                //     }
                // };

                //   await this.$axios.$get('sanctum/csrf-cookie')
             
                await this.$auth.loginWith('laravelSanctum',  {data: { email: this.User.email, password: this.User.password} })
                    .then(resp => {
                        console.log(resp);

                        this.$router.push({path: '/item'})
                    

                    }).catch(error => console.log(error));


            //    await this.$auth.loginWith('local',  {data: { email: this.User.email, password: this.User.password} })
            //         .then(resp => {
            //             console.log(resp);

            //             this.$router.push({path: '/item'})

            //     }).catch(error => console.log(error));
                        
            }
        },
        mounted() {
          
        }
    }
</script>
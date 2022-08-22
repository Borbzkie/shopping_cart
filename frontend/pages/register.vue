<template>
    <div>
       
        <template v-if="message != '' ">
            <div  class="text-center ">
                <p >{{ message }}. Please Login</p>
                <a href="#" @click.prevent="login" class="flex-auto rounded-md text-white bg-indigo-600 hover:bg-indigo-900 py-1 mt-1 text-md px-2 w-full block">Go to Login</a>
            </div>
            
        </template>

        <template v-if="message == '' ">
            <h4 class="text-lg font-bold text-gray-600 pb-2 my-2 border-b border-gray-400 text-center">Register</h4>
            <form @submit.prevent="onSubmit">
                <div class="mb-3">
                    <label for="name" class="block">Name :</label>
                    <input type="text" class="form-control border-2 border-gray-700 rounded w-full text-md py-1 px-1 "   name="name" aria-describedby="descriptionHelp" v-model="User.name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="block">Email :</label>
                    <input type="email" class="form-control border-2 border-gray-700 rounded w-full text-md py-1 px-1 "   name="email" aria-describedby="descriptionHelp" v-model="User.email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class=" block">Password : </label>
                    <input type="password" class="form-control border-2 border-gray-700 rounded w-full text-md py-1 px-1"  name="password"  v-model="User.password" required>
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class=" block">Confirm Password : </label>
                    <input type="password" class="form-control border-2 border-gray-700 rounded w-full text-md py-1 px-1"  name="password_confirmation"  v-model="User.password_confirmation" required>
                </div>
                <div class="flex">
                    <button type="submit" class="flex-auto rounded-md text-white bg-indigo-600 hover:bg-indigo-900 py-1 mt-1 text-md px-2">Submit</button>
                </div>
            </form> 
        </template>
    </div>
</template>
<script>
    export default {
        layout: 'login',
        data() {
            return {
                User: {
                   name: '',
                   email: '',
                   password: '',
                   password_confirmation: ''
                },
                message : ''
            }
        },
        auth: false,
        methods: {
            async onSubmit() {

                console.log(this.User);
                await this.$axios.$post('/api/register', this.User )
                      .then( resp => {
                          console.log(resp)
                          if (resp.status) {
                             this.message = resp.message
                          }
                      }).catch(error => {
                          console.log(error);
                      })
                
            }, 
            login(){
                this.$router.push('/login')
            }
        },
        mounted() {
            this.$axios.$get('/sanctum/csrf-cookie')
        }
    }
</script>
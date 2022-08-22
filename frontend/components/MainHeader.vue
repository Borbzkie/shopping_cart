<template>
        <header class="lg:flex lg:items-center lg:justify-between  bg-cyan-900 w-full p-4 ">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7  sm:text-3xl sm:tracking-tight sm:truncate text-white">Shopping Cart</h2>
            </div>
            <div class="flex-1 text-end">
                 <a class="bg-gray-10 text-red-500 text-lg text-right   w-64" href="#" @click.prevent="logout">{{ user.name }} |</a>
                <a class="bg-gray-10 text-white text-lg text-right   w-64" href="#" @click.prevent="logout">Logout</a>
            </div>
        </header>
</template>

<script>
export default {
    data() {
        return {
            user: this.$auth.user.data
        }   
        
    },
    methods: {
         async logout() {
            await this.$auth.logout()
            this.$router.push('/login')
        }
    },

   
}
</script>

<style>
  
</style>
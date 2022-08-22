<template>
        <header class="lg:flex lg:items-center lg:justify-between  bg-cyan-900 w-full p-4 ">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7  sm:text-3xl sm:tracking-tight sm:truncate text-white">Shopping Cart</h2>
                
            </div>
            <div class="flex-1">
                <a class="text-white text-lg" href="#" @click.prevent="logout">Logout</a>
            </div>
        </header>
</template>

<script>
export default {
    methods: {
         async logout() {
            await this.$auth.logout()
            this.$router.push('/login')
        }
    }
}
</script>

<style>
  
</style>
<template>
  <div class="bg-gray-100 h-screen">
      <MainHeader />
      <div class="flex flex-row h-5/6">
            <Sidebar />
            <main class="flex-auto  card  m-4 p-4 bg-gray-200 w-auto">
                 <Nuxt />
            </main>
      </div>
      <Footer />
  </div>
</template>

<script>
export default {
    name: 'default'
}
</script>

<style >
    
</style>
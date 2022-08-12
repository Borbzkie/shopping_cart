<template>
  <div>
      <MainHeader />
      <Sidebar />
      <section>
           <Nuxt />
      </section>
      <Footer />
  </div>
</template>

<script>
export default {
    name: 'default'
}
</script>

<style>
    section {
         display: inline-block;
         width: 500px;
         vertical-align: top;
    }
</style>
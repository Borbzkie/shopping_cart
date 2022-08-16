<template>
  <div>
      <MainHeader />
      <div class="container-fluid">
        <div class="row">
            <Sidebar />
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                 <Nuxt />
            </main>
            <Footer />
        </div>
        
      </div>
      
  </div>
</template>

<script>
export default {
    name: 'default'
}
</script>

<style>
    /* section {
         display: inline-block;
         width: 500px;
         vertical-align: top;
    } */
</style>
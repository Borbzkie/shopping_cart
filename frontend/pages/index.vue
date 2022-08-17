<template>
  <div>
     <h1 class="basis-3/6 font-bold text-2xl text-gray-700">{{ title }} Page</h1> 
  </div>
</template>

<script>
export default {
  name: 'IndexPage',
  data (){
    return {
      title: 'Home'
    }
  },
  mounted() {
    console.log( process.env.BASE_URL)
  }
}
</script>

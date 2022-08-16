<template>
  <div>
    <h1>{{ title }} page</h1>

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

<template>
  <div>
     <h1 class="basis-3/6 font-bold text-2xl text-gray-700">{{ title }} Page</h1> 
     <h2> {{ user.name }}</h2>
  </div>
</template>

<script>
export default {
  name: 'IndexPage',
  data (){
    return {
      title: 'Home',
      user: this.$auth.user.data
    }
  },
  mounted() {
  }
}
</script>

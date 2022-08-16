<template>
  <div>
    <h1>{{ title }} page</h1>
    <button type="button" class="btn btn-primary">Test</button>
  </div>
</template>

<script>
export default {
  name: 'IndexPage',
  data (){
    return {
      title: 'Home'
    }
  }
}
</script>

<template>
    <div class="grid justify-items-center">
          <div class="card w-96 mt-20">
            <h4 class="text-lg font-bold text-gray-600 pb-2 my-2 border-b border-gray-400">Edit Item</h4>
            <form @submit.prevent="updateItem">
                <div class="mb-3">
                    <label for="description"  class="block">Description</label>
                    <input type="text" class="form-control border-2 border-gray-700 rounded w-full text-md py-1 px-1" id="description" name="description" aria-describedby="descriptionHelp"  v-model="Item.description" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="block" >Price</label>
                    <input type="number"  class="form-control border-2 border-gray-700 rounded w-full text-md py-1 px-1" name="price" id="price"  v-model="Item.price" required>
                </div>
                <button type="submit" class="rounded-md text-white bg-indigo-600 hover:bg-indigo-900 py-1 mt-1 text-md px-2">Update</button>
                <nuxt-link to="/item/" class="rounded-md text-white bg-gray-600 hover:bg-gray-900 py-1 mt-1 text-md px-2">Cancel</nuxt-link>
            </form> 
           
        </div>
    </div>
</template>

<script>
    export default  {
        data() {
            return {
                Item : {
                    id: '',
                    description: '',
                    price: ''
                }
            }
        },
        methods: {
            async updateItem() {
         
                await this.$axios.put('/api/items/' + this.Item.id, this.Item)
                .then( resp => {
                       console.log(resp.data.success)
                       console.log(resp.status);
                       
                        if (resp.data.success === true && resp.status === 200) {
                           alert("Item updated successfully")
                           return this.$router.push({path: '/item'})
                        }
                    }
                );
            
            }
        },
        mounted() {
           this.$axios.get('/api/items/' + this.$route.params.id).then( resp => {
               return this.Item = resp.data.data
           })

        }
    }
</script>
<template>
    <div class="grid justify-items-center">
         <div class="card w-96 mt-20">   
            <h4 class="text-lg font-bold text-gray-600 pb-2 my-2 border-b border-gray-400">New Item Entry</h4>
            <form @submit.prevent="onSubmit">
                <div class="mb-3">
                    <label for="description" class="block">Description :</label>
                    <input type="text" class="form-control border-2 border-gray-700 rounded w-full text-md py-1 px-1 "  id="description" name="description" aria-describedby="descriptionHelp" v-model="description" required>
                </div>
                <div class="mb-3">
                    <label for="price" class=" block">Price : </label>
                    <input type="number" class="form-control border-2 border-gray-700 rounded w-full text-md py-1 px-1"  name="price" id="price" v-model="price" required>
                </div>
                <button type="submit" class="rounded-md text-white bg-indigo-600 hover:bg-indigo-900 py-1 mt-1 text-md px-2">Save</button>
                <nuxt-link to="/item" class="rounded-md text-white bg-gray-600 hover:bg-gray-900 py-1 mt-1 text-md px-2">Cancel</nuxt-link>
            </form> 
        </div>
    </div>
   
</template>


<script>
    export default  {
        data() {
            return {
                description: '',
                price: ''
            }
        },
        methods: {
            async onSubmit() {
        
                const item = {
                    description: this.description,
                    price : this.price
                }       
                
                await this.$axios.post('/api/items', item)
                .then( resp => {
                       
                        if (resp.data.success === true && resp.status === 200) {
                           return this.$router.push({path: '/item'})
                        }
                    }
                );
            
            }
        }

        

    }
</script>
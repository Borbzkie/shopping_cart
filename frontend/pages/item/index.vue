<template>
    
    <div>    
        <div class="flex flex-row ">
            <h1 class="basis-3/6 font-bold text-2xl text-gray-700">{{ title }}</h1>
            {{ $auth.loggedIn }}
            <div class="basis-4/12">
                <form @submit.prevent="searchItem" class="" role="form">
                    <input type="text" name="item" class="form-input rounded text-lg px-4 py-1 m-1" v-model="item" required>
                    <button type="submit" class="rounded-md text-white bg-indigo-600 hover:bg-indigo-700 py-2 mt-1 text-md px-4" >Search</button>
                </form>
            </div>
            
            <div class="basis-/5 mt-3">
                <nuxt-link to="/item/add-item"  class="rounded-md text-white bg-green-600 hover:bg-green-700 py-2 text-md px-4">
                    <button type="button" >Add Item</button>
                </nuxt-link>
            </div>
          
        </div>
        <div class="">
            
            <table class="w-full mt-2">
                <thead class="bg-gray-300 border-b-2 border-gray-400">
                    <tr>
                        <th class="p-2 text-sm text-left">#</th>
                        <th class="p-2 text-sm text-left">Description</th>
                        <th class="p-2 text-sm text-left">Price</th>
                        <th class="p-2 text-sm text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="item in items" :key="item.id" class="bg-white hover:bg-gray-400  border-b border-gray-200" >   
                        <td class="p-2 text-sm text-left text-gray-700 ">{{ item.id }}</td>
                        <td>{{ item.description }}</td>
                        <td>{{ item.price }}</td>
                        <td>
                            <nuxt-link :to="'/item/' + item.id"  class="rounded-md text-white bg-indigo-600 hover:bg-indigo-900 py-1 mt-1 text-sm px-2" >Edit</nuxt-link>
                            <button type="button" class="rounded-md text-white bg-red-600 hover:bg-red-400 py-1 mt-1 text-sm px-2" v-on:click="deleteItem(item.id)">Delete</button>
                            
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        
        
    </div>
</template>

<script>
    export default {
        // middleware: 'auth',
        name: "itemPage",
        data () {
            return { 
                title: 'Items',
                items: [],
                item : ''
            }
        },
        methods: {
            async deleteItem(id) {
              
                const deleteIt = confirm("Are you sure you want to delete the item ?")
                if( deleteIt === true ) {
                   await this.$axios.delete('/api/items/' + id )
                   .then(resp => {

                       if ( resp.data.success === 1) {
                            alert("Item successfully deleted.")
                            this.getItems()
                       }
                   })
                }
            },

            async getItems() {
                await this.$axios.get('/api/items/')
                .then(resp => {
                    this.items = resp.data.data
                    return this.items
                })    
            },

            async searchItem() {
               
                await this.$axios.get('/api/items/search/' + this.item )
                .then( resp => {
                   
                    const items = resp.data.data

                    if (items === null) {
                        alert("Please enter item name to search")
                        this.getItems()
                    }
                   
                    if (items.length > 0) {
                        return this.items = items
                    } else {
                       alert("No items found")
    
                    }
                });
            }
        },
        mounted() {
           this.getItems()
        //    this.$axios.$get('/sanctum/csrf-cookie')
        }
        
    }
</script>
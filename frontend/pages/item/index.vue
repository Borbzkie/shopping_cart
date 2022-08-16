<template>
    
    <div>    
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ title }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <form @submit.prevent="searchItem" class="d-flex" role="form">
                    <input type="text" name="item" class="form-control" v-model="item">
                    <button type="submit" class="btn btn-sm btn-info mx-2">Search</button>
                </form>
                <nuxt-link to="/item/add-item" >
                    <button class="btn btn-primary">Add Item</button>
                </nuxt-link>
            </div>
        </div>
        <div class="table-responsive">
            
            <table class="table table-striped table-md">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="item in items" :key="item.id">   
                        <td>{{ item.id }}</td>
                        <td>{{ item.description }}</td>
                        <td>{{ item.price }}</td>
                        <td>
                            <nuxt-link :to="'/item/' + item.id "   class="btn btn-info btn-sm" >Edit</nuxt-link>
                            <button type="button" class="btn btn-danger btn-sm" v-on:click="deleteItem(item.id)">Delete</button>
                            
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        
        
    </div>
</template>

<script>
    export default {
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
                   await this.$axios.delete('/items/' + id )
                   .then(resp => {

                       if ( resp.data.success === 1) {
                            alert("Item successfully deleted.")
                            this.getItems()
                       }
                   })
                }
            },

            async getItems() {
                await this.$axios.get('items')
                .then(resp => {
                    this.items = resp.data.data
                    return this.items
                })    
            },

            async searchItem() {
               
                await this.$axios.get('/items/search/' + this.item )
                .then( resp => {
                   
                    const items = resp.data.data
                     
                    if (items.length > 0) {
                       console.log('searching');
                        return this.items = items
                    } else {
                       alert("No items found")
                    }
                });
            }
        },
        mounted() {
           this.getItems()
        }
        
    }
</script>
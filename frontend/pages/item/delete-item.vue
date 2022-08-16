<template>
    <div class="m-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4>Delete tem</h4>
                            <form @submit.prevent="updateItem">
                                <div class="mb-3">
                                    <label for="description" class="form-label text-start">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" aria-describedby="descriptionHelp"  v-model="Item.description">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" class="form-control" name="price" id="price"  v-model="Item.price">
                                      <input type="hidden" class="form-control" name="id" id="id"  v-model="Item.id">
                                </div>
                                <button type="submit" class="btn btn-primary">Delete</button>
                            </form> 
                        </div>
                    </div>
                </div>
                
            </div>
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
         
                // await this.$axios.put('/items/' + this.Item.id, this.Item)
                // .then( resp => {
                //        console.log(resp.data.success)
                //        console.log(resp.status);
                       
                //         if (resp.data.success === true && resp.status === 200) {
                //            alert("Item updated successfully")
                //            return this.$router.push({path: '/item'})
                //         }
                //     }
                // );
            
            }
        },
        mounted() {
           this.$axios.get('/items/' + this.$route.params.id).then( resp => {
              console.log(this.Item = resp.data.data)
           })

        }
    }
</script>
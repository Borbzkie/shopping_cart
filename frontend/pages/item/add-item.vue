<template>
    <div class="m-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4>New Item Entry</h4>
                            <form @submit.prevent="onSubmit">
                                <div class="mb-3">
                                    <label for="description" class="form-label text-start">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" aria-describedby="descriptionHelp" v-model="description">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" class="form-control" name="price" id="price" v-model="price">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                                <nuxt-link to="/item/" class="btn btn-default text-bg-secondary">Cancel</nuxt-link>
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
                
                await this.$axios.post('http://127.0.0.1:8000/api/items', item)
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
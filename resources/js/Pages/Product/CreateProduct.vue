<template>

    <div class="max-w-md mx-auto p-6 bg-base-100 shadow-xl rounded-xl my-[200px]">
      <h2 class="text-2xl font-bold mb-4">Create Product</h2>
      <form class="space-y-4" @submit.prevent="submit">

        <div class="form-control">
         <label class="label" v-show="form.errors.name">{{ form.errors.name }}</label>
          <label class="label">
            <span class="label-text">Product Name</span>
          </label>
          <input type="text" v-model="form.name" placeholder="Enter product name" class="input input-bordered w-full" />
        </div>

        <div class="form-control">
          <label class="label" v-show="form.errors.price">{{ form.errors.price }}</label>
          <label class="label">
            <span class="label-text">Price</span>
          </label>
          <input type="number" step="any" v-model="form.price" placeholder="Enter price" class="input input-bordered w-full" />
        </div>

        <div class="form-control">
            <label class="label" v-show="form.errors.description">{{ form.errors.description }}</label>
          <label class="label">
            <span class="label-text">Description</span>
          </label>
          <textarea class="textarea textarea-bordered w-full" v-model="form.description" placeholder="Enter product description"></textarea>
        </div>

        <div class="form-control mt-6">
          <button :disabled="form.processing" type="submit" class="btn btn-primary w-full">Create Product</button>
        </div>
        <Link href="/products" class="btn btn-secondary ms-[130px]"> ⬅️ Back To Products</Link>
      </form>
    </div>


    </template>
<script>
import { useForm } from '@inertiajs/inertia-vue3';




export default {
setup(){
    let form=useForm({
        name:'',
        price:'',
        description:''

    })

    let submit=function(){
         form.post('/products')
         form.reset()
    }

    return {form,submit}
}
}
</script>


<style >

</style>

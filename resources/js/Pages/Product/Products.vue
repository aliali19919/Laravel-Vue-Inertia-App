<template >
   <div class="overflow-x-auto">
    <Link href="products/create" class="btn btn-primary m-[20px] w-[200px]">Create Product</Link>
    <Link href="/" class="btn btn-accent m-[20px] w-[200px]">🏠 Home</Link>
  <table class="table">
    <!-- head -->
    <thead>
      <tr>

        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr v-for="product in products.data">
        <th>{{product.name}}</th>
        <td>{{ product.price }}$</td>
        <td>{{ product.description }}</td>
        <td class="flex gap-[10px]">
            <Link :href="`products/${product.id}`" class="btn btn-info">View</Link>
            <Link :href="`products/${product.id}/edit`" class="btn btn-primary">Edit Product</Link>
            <Link :href="`products/${product.id}`" method="delete" class="btn btn-error">Delete</Link></td>

      </tr>

    </tbody>
  </table>
  <div class="join flex justify-center my-[20px]">

  <Link class="join-item btn" v-for="link in products.links" :href="link.url || false" v-html="link.label" ></Link>

</div>
</div>

</template>
<script>





export default {
props:["products"],
setup(){



    return{}
}

}
</script>
<style >

</style>

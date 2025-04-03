<template >
   <div class="overflow-x-auto">
    <Link href="products/create" class="btn btn-primary m-[20px] w-[200px]">Create Product</Link>
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
      <tr v-for="product in products">
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

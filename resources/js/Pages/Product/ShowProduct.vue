<template >
      <div class="card w-fit bg-base-100 shadow-xl mx-auto my-[300px]">

      <div class="card-body">
        <h2 class="card-title">{{ product.name }}</h2>
        <p class="text-sm text-gray-500">{{ product.description }}</p>
        <div class="flex justify-between items-center mt-4">
          <span class="text-lg font-bold">{{ product.price }} $</span>

        </div>
      </div>
    </div>
  </template>

<script>
export default {
props:['product']
}
</script>
<style lang="">

</style>

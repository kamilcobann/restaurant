<template>
  <Filters :categories="categories" :filters="filters"/>
  <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-6 mx-auto xl:w-3/4 xl:my-10 p-3">
    <!-- <FoodSlider :product-list="products"/> -->
    <MenuItem v-for="product in products.data" :key="product.id" :product="product"/>
  </div>

  <div v-if="products.data.length" class="w-full flex justify-center my-6">
    <Pagination :links="products.links"/>
  </div>
</template>

<script setup>
// import FoodSlider from '@/Components/FoodSlider.vue';
import Filters from '@/Components/Filters.vue';
import MenuItem from '@/Components/UI/MenuItem.vue'
import Pagination from '@/Components/UI/Pagination.vue';
// import { Link } from '@inertiajs/vue3'
defineProps({ message: String, products:Object, categories:Array, filters:Object})
</script>
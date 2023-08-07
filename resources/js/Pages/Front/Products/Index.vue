<template>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
    <MenuItem v-for="product in products" :key="product.id" :product="product"/>
  </div>
</template>

<script setup>
import MenuItem from '@/Components/UI/MenuItem.vue'
import { Link } from '@inertiajs/vue3'
defineProps({ message: String, products:Array})
</script>
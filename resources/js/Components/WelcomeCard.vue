<template>
<div class="bg-local bg-cover bg-center bg-main-asset bg-no-repeat h-64 md:h-96  text-center">
  <div class="bg-gray-600 bg-opacity-50 h-full w-full ">
    <div class="flex items-center justify-center h-full">
      <div class="text-white">
        <h2 class="text-3xl mb-2">Shish&Go Steakhouse</h2>
        <h4 class="text-lg mb-2">2010'dan beri hizmetinizde olan Shish&Go Steakhouse'un özel menülerini keşfedin</h4>
        <Link :href="route('product.index')" as="button" class="border px-4 py-2 hover:bg-yellow-50 hover:text-black rounded-md"> Menü </Link>
      </div>
    </div>
  </div>
</div>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
</script>
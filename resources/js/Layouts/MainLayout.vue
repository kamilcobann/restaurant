<template>
<header class="border-b border-gray-200 bg-white w-full">
  <div class="container mx-auto">
    <nav class="p-4 flex items-center justify-center">
      <div class="text-lg">
        <Link href="/product">Products</Link>
      </div>
    </nav>
  </div>
</header>
<main class="container mx-auto p-4 w-full">
  <!-- <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
            {{ flashSuccess }}
  </div> -->
  <slot>
    Default
  </slot>
</main>

<footer>
  <div class="grid grid-cols-3">
    <div class="flex justify-center items-center">
      Location
    </div>
    <div class="flex justify-center items-center">
      Open Hours
    </div>
    <div class="flex justify-center items-center">
      On Holidays
    </div>
  </div>
  <div class="flex items-center justify-evenly gap-4">
    <div>Logo</div>
    <div>Socials</div>
    <div>Contact Us</div>
  </div>
</footer>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
// import { computed } from 'vue';
// const flashSuccess = computed(
//   () => usePage().props.flash.success
// )
</script>
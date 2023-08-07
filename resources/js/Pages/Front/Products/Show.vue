<template>
  <div>Index</div>
  <Link href="/product">Show Page</Link>
  <div class="bg-indigo-800">
    The message is {{ message }}
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
defineProps({ message: String})
</script>
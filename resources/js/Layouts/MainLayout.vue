<script setup>
import {Link, usePage} from '@inertiajs/vue3';
import { computed } from "vue";
import Footer from '@/Components/UI/Footer.vue';
// const flashSuccess = computed(
//   () => usePage().props.flash.success
// )

const user = computed(() => usePage().props.user)

console.log(usePage().props.user)

</script>

<template>
  <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 w-full">
      <div class="container mx-auto">
          <nav class="p-4 flex items-center justify-between">
              <div class="text-lg">
                  <Link :href="route('product.index')" class="text-white">Menü</Link>
              </div>
              <div class="text-xl text-indigo-600 dark:text-indigo-300 font-bold text-center">
                  <Link :href="route('homepage')">LOGO</Link>
              </div>
              <div v-if="user" class="flex items-center gap-4">
                  <Link href="#" class="text-sm text-gray-500">{{ user.name }}</Link>
                  <Link :href="route('product.create')" class="button-primary">+ Ürün Ekle</Link>
                  <Link :href="route('logout')" method="delete" as="button" class="text-sm text-gray-500 hover:text-gray-300" >Çıkış Yap</Link>
              </div>
              <div v-else class="flex items-center gap-3 text-white">
                  <Link :href="route('login')">Giriş Yap</Link>
              </div>
          </nav>
      </div>
  </header>

  <main class="container mx-auto  w-full">
      <!-- <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
          {{ flashSuccess }}
      </div> -->
      <slot>
          Default
      </slot>

  </main>
  <Footer/>
</template>


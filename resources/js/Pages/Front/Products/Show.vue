<!-- <template>
  <div>Index</div>
  <Link href="/product">Show Page</Link>
  <div class="bg-indigo-800">
    The message is {{ message }}
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
defineProps({ message: String})
</script> -->

<!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    theme: {
      extend: {
        gridTemplateRows: {
          '[auto,auto,1fr]': 'auto auto 1fr',
        },
      },
    },
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<template>
    <div class="bg-white">
        <div class="pt-6">
            <nav aria-label="Breadcrumb">
                <ol
                    role="list"
                    class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8"
                >
                    <li
                        v-for="breadcrumb in product.breadcrumbs"
                        :key="breadcrumb.id"
                    >
                        <div class="flex items-center">
                            <a
                                :href="breadcrumb.href"
                                class="mr-2 text-sm font-medium text-gray-900"
                                >{{ breadcrumb.name }}</a
                            >
                            <svg
                                width="16"
                                height="20"
                                viewBox="0 0 16 20"
                                fill="currentColor"
                                aria-hidden="true"
                                class="h-5 w-4 text-gray-300"
                            >
                                <path
                                    d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z"
                                />
                            </svg>
                        </div>
                    </li>
                    <li class="text-sm">
                        <a
                            :href="route('product.show', $props.product.id)"
                            aria-current="page"
                            class="font-medium text-gray-500 hover:text-gray-600"
                            >{{ product.title }}</a
                        >
                    </li>
                </ol>
            </nav>

            <!-- Image gallery -->
            <!-- <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
        <div class="aspect-h-3 aspect-w-3 hidden overflow-hidden rounded-lg lg:block">
          <img :src="product.images[0].src" :alt="product.images[0].alt" class="h-full w-full object-cover object-center" />
        </div>
        <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
          <div class="aspect-h-3 aspect-w-3 overflow-hidden rounded-lg">
            <img :src="product.images[1].src" :alt="product.images[1].alt" class="h-full w-full object-cover object-center" />
          </div>
          <div class="aspect-h-3 aspect-w-3 overflow-hidden rounded-lg">
            <img :src="product.images[2].src" :alt="product.images[2].alt" class="h-full w-full object-cover object-center" />
          </div>
        </div>
        <div class="aspect-h-3 aspect-w-3 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
          <img :src="product.images[3].src" :alt="product.images[3].alt" class="h-full w-full object-cover object-center" />
        </div>
      </div> -->
            <div
                class="snap-x snap-mandatory overflow-x-scroll no-scrollbar scroll whitespace-nowrap scroll-smooth flex flex-row no-scrollbar mx-auto w-full md:w-1/2"
            >
                <div
                    class="snap-center"
                    v-for="image in product.images"
                    :key="image"
                >
                    <img
                        :src="image.src"
                        :alt="image.alt"
                        class="shadow-md rounded-md mx-4 h-60 lg:h-80 max-w-fit"
                    />
                </div>
            </div>
            <!-- Product info -->

            <div
                class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16"
            >
                <div
                    class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8"
                >
                    <h1
                        class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl"
                    >
                        {{ product.title }}
                    </h1>
                </div>

                <!-- Options -->
                <div class="mt-4 lg:row-span-3 lg:mt-0">
                    <h2 class="sr-only">Product information</h2>
                    <p class="text-3xl tracking-tight text-gray-900">
                        {{ product.portion_price }}₺ - 1 Porsiyon
                    </p>
                    <p class="text-xl tracking-tight text-gray-900">
                        {{ product.kilogram_price }}₺ - 1 Kg
                    </p>
                </div>

                <div
                    class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6"
                >
                    <!-- Description and details -->
                    <div>
                        <h3 class="sr-only">Description</h3>

                        <div class="space-y-6">
                            <p class="text-base text-gray-900">
                                {{ product.description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import FoodSlider from "@/Components/FoodSlider.vue";

const props = defineProps({ message: String, product: Object });

const product = {
    title: props.product.title,
    portion_price: props.product.portion_price,
    kilogram_price: props.product.kilogram_price,
    href: "#",
    breadcrumbs: [
        { id: 1, name: "Menü", href: route("product.index") },
        {
            id: 2,
            name:
                props.product.category.name == null
                    ? ""
                    : props.product.category.name,
            href: "/product?category=".concat(props.product.category.id),
        },
    ],
    images: props.product.images,

    description: props.product.description,
};
console.log("asd")

console.log(props.product.category.name == null)
</script>

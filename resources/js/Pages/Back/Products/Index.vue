<template>
    <div class="">
        <Filters :categories="categories" :filters="filters"/>
        <table class="table-auto w-1/2 border-separate  border-spacing-y-1 border-spacing-x-0 mx-auto border-slate-500">
            <TableHeader/>
            <tbody>
                <TableRow v-for="product in products.data" :key="product.id" :product="product"/>
            </tbody>
        </table>
  <div v-if="products.data.length" class="w-full flex justify-center my-6">
    <Pagination :links="products.links"/>
  </div>
    </div>
</template>

<script setup>
import TableRow from '@/Components/Admin/TableRow.vue'
import TableHeader from '@/Components/Admin/TableHeader.vue'
import Pagination from '@/Components/UI/Pagination.vue';
import Filters from '@/Components/Filters.vue';
defineProps({
    products:Object,filters:Object,categories:Array
})
</script>

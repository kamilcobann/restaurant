<template>
    <div class="mt-4">
        <div class="flex justify-around">
            <Filters :categories="categories" :filters="filters" class="" />

            <Link :href="route('admin.product.create')" class="button-primary"
                >Ürün Ekle</Link
            >
        </div>
        <table
            class="table-auto w-1/2 border-separate border-spacing-y-1 border-spacing-x-0 mx-auto border-slate-500"
        >
            <TableHeader :headers="tableHeaders" />
            <tbody>
                <TableRow
                    v-for="product in products.data"
                    :key="product.id"
                    :product="product"
                />
            </tbody>
        </table>
        <div
            v-if="products.data.length"
            class="w-full flex justify-center my-6"
        >
            <Pagination :links="products.links" />
        </div>
    </div>
</template>

<script setup>
import TableRow from "@/Components/Admin/TableRow.vue";
import TableHeader from "@/Components/Admin/TableHeader.vue";
import Pagination from "@/Components/UI/Pagination.vue";
import Filters from "@/Components/Filters.vue";
import { Link } from "@inertiajs/vue3";
defineProps({
    products: Object,
    filters: Object,
    categories: Array,
});

const tableHeaders = ["ID","Ürün Adı","KG Fiyatı","Por. Fiyatı","İşlemler"]
</script>

<template>
    <div class="flex justify-around my-4">
        <div class=""></div>

        <Link :href="route('admin.category.create')" class="button-primary"
            >Kategori Ekle</Link
        >
    </div>
    <div class="w-full mx-auto">
        <table
            class="table-auto w-1/2 border-separate border-spacing-y-1 border-spacing-x-0 mx-auto border-slate-500"
        >
            <TableHeader :headers="tableHeaders" />
            <tbody>
                <CategoryRow
                    v-for="item in categories.data"
                    :key="item.id"
                    :category="item"
                />
            </tbody>
        </table>
        <div class="flex justify-center my-4">
            <Pagination :links="categories.links" />
        </div>
    </div>
</template>

<script setup>
import {
    PencilIcon,
    ShieldCheckIcon,
    TrashIcon,
} from "@heroicons/vue/24/outline";
import { Link } from "@inertiajs/vue3";
import TableHeader from "@/Components/Admin/TableHeader.vue";
import CategoryRow from "@/Components/UI/CategoryRow.vue";
import Pagination from "@/Components/UI/Pagination.vue";
const tableHeaders = ["ID", "Kategori Adı", "Ürün Sayısı", "İşlemler"];
defineProps({
    categories: Object,
});
</script>

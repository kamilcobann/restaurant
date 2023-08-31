<template>
    <form @submit.prevent="filter" class="flex items-center justify-center ">
        <div class="flex">
            <div class="">
                <select class="input-filter-box-left" v-model="filterForm.category">
                    <option :value="null">Kategori</option>
                    <option v-for="category in props.categories" :key="category.id" :value="category.id">
                        {{ category.name }}
                    </option>
                </select>
            </div>
            <button type="submit" @click="clear" class="placeholder:text-gray-400 border border-l-0 border-gray-200
             text-sm font-medium
        text-gray-600  w-20">Sıfırla</button>
            <button type="submit" class=" input-filter-box-right">Ara</button>
        </div>
    </form>
</template>

<script setup>
import { computed } from 'vue';
import { useForm,usePage } from '@inertiajs/vue3';
const props = defineProps({categories : Array, filters: Object})

const user = computed(() => usePage().props.user)

const filterForm = useForm({
    category: props.filters.category ?? null
})


const filter = () => {
    const routeName = user.value ? 'admin.product.index' : 'product.index';

    filterForm.get(
        
        route(routeName),
        {
            preserveState: true,
            preserveScroll: true
        }
    )
}

const clear = () => {
    filterForm.category = null
    filter()
}
</script>
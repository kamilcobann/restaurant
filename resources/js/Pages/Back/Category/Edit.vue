<template>
    <form @submit.prevent="update" class="">
        <div class="text-center text-3xl mt-4">Kategori Güncelle</div>
        <div class="grid grid-cols-4 gap-4 mx-4 mt-4">
            <div class="col-span-4">
                <label for="name" class="label"> Kategori Adı </label>
                <input type="text" id="name" class="input" v-model="form.name"/>
                <div v-if="form.errors.name" class="">
                    {{ form.errors.name }}
                </div>
            </div>
        </div>
        <div class="m-4">
            <button type="submit" class="button-primary w-full">
                Kategori Güncelle
            </button>
        </div>
    </form>
</template>
<script setup>
import { useForm } from "@inertiajs/vue3";

const props = defineProps({
    message: String,
    category: Object,
});

const form = useForm({
    name: props.category.name,
});

const update = () => {
    form.put(route("admin.category.update", { category: props.category.id }));
};
</script>

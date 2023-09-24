<template>
    <form @submit.prevent="create">
        <div class="grid grid-cols-4 gap-4 mx-4 mt-4">
            <div class="col-span-4">
                <label for="name" class="label">Kategori Adı</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    class="input"
                    v-model="form.name"
                />
                <div class="" v-if="form.errors.name">
                    {{ form.errors.name }}
                </div>
            </div>
        </div>
        <div class="m-4">
            <button type="submit" class="button-primary w-full">
                Kategori Ekle
            </button>
        </div>
    </form>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";
defineProps({ message: String });
const form = useForm({
    name: null,
});
const create = () => form.post(route("admin.category.store"));
</script>

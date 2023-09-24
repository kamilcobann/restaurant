<template>
    <form @submit.prevent="create" class="w-3/4 md:w-2/3 mx-auto">
        <div class="text-center text-3xl mt-4">Ürün Ekle</div>
        <div class="grid grid-cols-6 gap-4 mx-4 mt-4">
            <div class="col-span-6">
                <label for="title" class="label"> Ürün Adı </label>
                <input
                    type="text"
                    id="title"
                    v-model="form.title"
                    class="input"
                />
                <div v-if="form.errors.title" class="">
                    {{ form.errors.title }}
                </div>
            </div>
            <div class="col-span-6">
                <label for="description" class="label"> Ürün Açıklaması </label>
                <input
                    type="text"
                    id="description"
                    v-model="form.description"
                    class="input"
                />
                <div v-if="form.errors.description" class="">
                    {{ form.errors.description }}
                </div>
            </div>
            <div class="col-span-2">
                <label for="category" class="label"> Kategori </label>
                <select
                    name="category"
                    id="category"
                    class="w-full"
                    v-model="form.category"
                >
                    <option
                        v-for="category in categories"
                        :key="category.id"
                        :value="category.id"
                    >
                        {{ category.name }}
                    </option>
                </select>
                <div v-if="form.errors.kilogram_price" class="">
                    {{ form.errors.kilogram_price }}
                </div>
            </div>
            <div class="col-span-2">
                <label for="portion_price" class="label">
                    Porsiyon Fiyatı
                </label>
                <input
                    type="text"
                    id="portion_price"
                    v-model.number="form.portion_price"
                    class="input"
                />
                <div v-if="form.errors.portion_price" class="">
                    {{ form.errors.portion_price }}
                </div>
            </div>
            <div class="col-span-2">
                <label for="kilogram_price" class="label"> KG Fiyatı </label>
                <input
                    type="text"
                    id="kilogram_price"
                    v-model="form.kilogram_price"
                    class="input"
                />
                <div v-if="form.errors.kilogram_price" class="">
                    {{ form.errors.kilogram_price }}
                </div>
            </div>
        </div>

        <div class="m-4">
            <button type="submit" class="button-primary w-full">
                Ürün Ekle
            </button>
        </div>
    </form>
</template>

<script setup>
import { useForm, Link } from "@inertiajs/vue3";
defineProps({ message: String, categories: Object });

const form = useForm({
    title: null,
    description: null,
    portion_price: null,
    kilogram_price: null,
    category: null
});

const create = () => form.post(route("admin.product.store"));
</script>

<template>
    <form @submit.prevent="login">
        <div class="md:w-1/4 w-2/3 mx-auto">
            <div class="text-center text-3xl mt-4">Giriş Yap</div>
            <div class="mt-4">
                <label for="email" class="label">E-posta</label>
                <input
                    type="text"
                    id="email"
                    class="input"
                    v-model="form.email"
                />
                <div v-if="form.errors.email" class="input-error">
                    {{ form.errors.email }}
                </div>
            </div>
            <div class="mt-4">
                <label for="password" class="label">Şifre</label>
                <input
                    type="password"
                    id="password"
                    class="input"
                    v-model="form.password"
                />
                <div v-if="form.errors.password" class="input-error">
                    {{ form.errors.password }}
                </div>
            </div>
            <div class="my-4">
                <button class="button-primary w-full" type="submit">
                    Giriş Yap
                </button>
                <div v-if="!count" class="mt-2 text-center">
                    <Link
                        :href="route('user-account.create')"
                        class="text-sm text-gray-500 hover:text-gray-200"
                    >
                        Hesap Oluştur
                    </Link>
                </div>
            </div>
        </div>
    </form>
</template>

<script setup>
import { useForm, Link } from "@inertiajs/vue3";
defineProps({
    count: Number,
});
const form = useForm({
    email: null,
    password: null,
});

const login = () => form.post(route("login.store"));
</script>

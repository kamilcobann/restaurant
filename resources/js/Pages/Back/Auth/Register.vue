<template>
    <form @submit.prevent="register">
        <div class="w-2/3 md:w-1/4 mx-auto">
            <div class="text-center text-3xl mt-4">Kayıt Ol</div>
            <div class="mt-4">
                <label for="name" class="label">Adınız</label>
                <input type="text" id="name" class="input" v-model="form.name"/>
            </div>
            <div class="">
                <label for="phone" class="label">Telefon Numarası</label>
                <input type="text" id="phone" class="input" v-model="form.phone"/>
                <div v-if="form.errors.phone" class="input-error">{{ form.errors.phone }}</div>
            </div>
            <div class="">
                <label for="email" class="label">E-Posta</label>
                <input type="text" id="email" class="input" v-model="form.email"/>
                <div v-if="form.errors.email" class="input-error">{{ form.errors.email }}</div>
            </div>
            <div class="mt-4">
                <label for="password" class="label">Şifre</label>
                <input type="password" id="password" class="input" v-model="form.password"/>
                <div v-if="form.errors.password" class="input-error">{{ form.errors.password }}</div>
            </div>
            <div class="mt-4">
                <label for="password_confirmation" class="label">Şifrenizi Tekrarlayın</label>
                <input type="password" id="password_confirmation" class="input" v-model="form.password_confirmation"/>
            </div>
            <div class="mt-4">
                <button class="button-primary w-full" type="submit">Kayıt Ol</button>
                <div class="mt-2 text-center">
                     <Link :href="route('login')" class="text-sm text-gray-500 hover:text-gray-200">
                        Hesabım zaten var
                    </Link>
                </div>
            </div>
        </div>
    </form>
</template>

<script setup>
import { useForm,Link } from '@inertiajs/vue3';

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
    phone: null,
});

const register = () => form.post(route('user-account.store'))
</script>

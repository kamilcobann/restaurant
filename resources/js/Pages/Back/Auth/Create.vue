<template>
<form @submit.prevent="register">
<div class="w-1/2 mx-auto">
    <div class="">
        <label class="label" for="name">İsminiz</label>
        <input type="text" class="input" name="name" id="name" v-model="form.name">
        <div v-if="form.errors" class="">{{ form.errors.name }}</div>
    </div>
    <div class="mt-2">
        <label class="label" for="phone">Telefon Numaranız</label>
        <input class="input" type="text" name="phone" id="phone" v-model="form.phone">
        <div v-if="form.errors" class="">{{ form.errors.phone }}</div>
    </div>
    <div class="mt-2">
        <label class="label" for="email">Eposta Adresi</label>
        <input class="input" type="text" name="email" id="email" v-model="form.email">
        <div v-if="form.errors" class="">{{ form.errors.email }}</div>
    </div>
    <div class="mt-2">
        <label class="label" for="password">Şifreniz</label>
        <input class="input" type="password" name="password" id="password" v-model="form.password">
        <div v-if="form.errors" class="">{{ form.errors.password }}</div>
    </div>
    <div class="mt-2">
        <label class="label" for="password_confirmation">Şifrenizi Tekrarlayın</label>
        <input class="input" type="password" name="password_confirmation" id="password_confirmation" v-model="form.password_confirmation">
    </div>
    <div class="mt-2">
        <button type="submit" class="button-primary w-full mb-2">Kayıt Ol</button>
        <a :href="route('login')" class="w-full mx-auto mb-2" >Zaten hesabım var</a>
    </div>
</div>
</form>
</template>

<script setup>
import {useForm, Link} from '@inertiajs/vue3'

const form = useForm({
    name: null,
    email: null,
    phone: null,
    password: null,
    password_confirmation: null,
})

const register = () => form.post(route('user-account.store'))
</script>

<template>
    <Disclosure as="nav" class="bg-gray-800 sticky top-0" v-slot="{ open }">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div
                    class="absolute inset-y-0 left-0 flex items-center sm:hidden"
                >
                    <!-- Mobile menu button-->
                    <DisclosureButton
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    >
                        <span class="absolute -inset-0.5" />
                        <span class="sr-only">Open main menu</span>
                        <Bars3Icon
                            v-if="!open"
                            class="block h-6 w-6"
                            aria-hidden="true"
                        />
                        <XMarkIcon
                            v-else
                            class="block h-6 w-6"
                            aria-hidden="true"
                        />
                    </DisclosureButton>
                </div>
                <div
                    class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start"
                >
                    <div class="flex flex-shrink-0 items-center">
                        <Link :href="route('homepage')" class="text-white">
                            <div class="bg-local  p-6 bg-cover bg-center bg-no-repeat bg-logo block">

                            </div>
                        </Link>
                    </div>
                    <div class="hidden sm:ml-6 sm:block ">
                        <div class="flex space-x-4 mt-2">
                            <a
                                v-if="!user"
                                v-for="item in navigation"
                                :key="item.name"
                                :href="item.href"
                                :class="[
                                    item.current
                                        ? 'bg-gray-900 text-white'
                                        : 'text-gray-300 hover:bg-gray-700 hover:text-white',
                                    'rounded-md px-3 py-2 text-sm font-medium',
                                ]"
                                :aria-current="
                                    item.current ? 'page' : undefined
                                "
                                >{{ item.name }}</a
                            >
                            <a
                                v-if="user"
                                v-for="item in admin_navigation"
                                :key="item.name"
                                :href="item.href"
                                :class="[
                                    item.current
                                        ? 'bg-gray-900 text-white'
                                        : 'text-gray-300 hover:bg-gray-700 hover:text-white',
                                    'rounded-md px-3 py-2 text-sm font-medium',
                                ]"
                                :aria-current="
                                    item.current ? 'page' : undefined
                                "
                                >{{ item.name }}</a>
                        </div>
                    </div>
                </div>
                <div
                    v-if="user"
                    class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0"
                >
                    <!-- <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <span class="absolute -inset-1.5" />
            <span class="sr-only">View notifications</span>
            <BellIcon class="h-6 w-6" aria-hidden="true" />
          </button> -->

                    <!-- Profile dropdown -->
                    <Menu as="div" class="relative ml-3">
                        <div>
                            <MenuButton
                                class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            >
                                <span class="absolute -inset-1.5" />
                                <span class="sr-only">Open user menu</span>
                                <img
                                    class="h-8 w-8 rounded-full"
                                    src="https://w7.pngwing.com/pngs/922/214/png-transparent-computer-icons-avatar-businessperson-interior-design-services-corporae-building-company-heroes-thumbnail.png"
                                    alt=""
                                />
                            </MenuButton>
                        </div>
                        <transition
                            enter-active-class="transition ease-out duration-100"
                            enter-from-class="transform opacity-0 scale-95"
                            enter-to-class="transform opacity-100 scale-100"
                            leave-active-class="transition ease-in duration-75"
                            leave-from-class="transform opacity-100 scale-100"
                            leave-to-class="transform opacity-0 scale-95"
                        >
                            <MenuItems
                                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            >
                                <!-- <MenuItem v-slot="{ active }">
                  <a href="#" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Your Profile</a>
                </MenuItem>
                <MenuItem v-slot="{ active }">
                  <a href="#" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Settings</a>
                </MenuItem> -->
                                <MenuItem v-slot="{ active }">
                                    <Link
                                        :href="route('logout')"
                                        method="DELETE"
                                        as="a"
                                        :class="[
                                            active ? 'bg-gray-100' : '',
                                            'block px-4 py-2 text-sm text-gray-700',
                                        ]"
                                        >Çıkış Yap</Link
                                    >
                                </MenuItem>
                            </MenuItems>
                        </transition>
                    </Menu>
                </div>
                <div v-else>
                    <Link
                        :href="route('login')"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"
                        as="button"
                    >
                        Giriş Yap
                    </Link>
                </div>
            </div>
        </div>

        <DisclosurePanel class="sm:hidden">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <DisclosureButton
                    v-for="item in navigation"
                    :key="item.name"
                    as="a"
                    :href="item.href"
                    :class="[
                        item.current
                            ? 'bg-gray-900 text-white'
                            : 'text-gray-300 hover:bg-gray-700 hover:text-white',
                        'block rounded-md px-3 py-2 text-base font-medium',
                    ]"
                    :aria-current="item.current ? 'page' : undefined"
                    >{{ item.name }}</DisclosureButton
                >
                <DisclosureButton
                    v-if="user"
                    as="a"
                    :href="route('admin.product.index')"
                    :class="'  text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium'"
                    >Yönetici Paneli</DisclosureButton
                >
            </div>
        </DisclosurePanel>
    </Disclosure>

    <main class="container mx-auto p-4 w-full">
        <div
            v-if="flashSuccess"
            class="mb-4 border rounded-md shadow-sm border-green-300 bg-green-50 p-2"
        >
            {{ flashSuccess }}
        </div>
        <slot> Default </slot>
    </main>
    <Footer></Footer>
</template>

<script setup>
import {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
} from "@headlessui/vue";
import { Bars3Icon, BellIcon, XMarkIcon } from "@heroicons/vue/24/outline";
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";
import Footer from "@/Components/UI/Footer.vue";
const flashSuccess = computed(() => usePage().props.flash.success);

const user = computed(() => usePage().props.user);

const navigation = [
    { name: "Anasayfa", href: route("homepage") /*current: false */ },
    { name: "Ürünler", href: route("product.index") /*current: false */ },
];

const admin_navigation = [
    { name: "Kategori", href: route("admin.category.index") /*current: false */ },
    { name: "Ürünler", href: route("admin.product.index") /*current: false */ },
];


</script>

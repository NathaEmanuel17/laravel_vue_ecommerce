<template>
    <div class="w-[200px]  transition-all bg-indigo-700 text-white py-4 px-2">
        <router-link :to="{name: 'app.dashboard'}" class="flex items-center p-2 rounded transition-colors hover:bg-black/30 font-light">
            <span class="mr-2 text-gray-300">
                <HomeIcon class="w-5"/>
            </span>
            <span class="text-xs">
                Dashboard
            </span>
        </router-link>
        <router-link :to="{name: 'app.products'}" class="flex items-center p-2 rounded transition-colors hover:bg-black/30 font-light">
            <span class="mr-2 text-gray-300">
                <ListBulletIcon class="w-5"/>
            </span>
            <span class="text-xs">
                Products
            </span>
        </router-link>
        <router-link :to="{name: 'app.dashboard'}" class="flex items-center p-2 rounded transition-colors hover:bg-black/30 font-light">
            <span class="mr-2 text-gray-300">
                <UserIcon class="w-5"/>
            </span>
            <span class="text-xs">
                Users
            </span>
        </router-link>
        <router-link :to="{name: 'app.dashboard'}" class="flex items-center p-2 rounded transition-colors hover:bg-black/30 font-light">
            <span class="mr-2 text-gray-300">
                <ChartBarIcon class="w-5"/>
            </span>
            <span class="text-xs">
                Reports
            </span>
        </router-link>
    </div>
</template>


<script setup>
import {HomeIcon, UserIcon, ListBulletIcon, ChartBarIcon} from '@heroicons/vue/24/outline/index.js'
</script>

<style scoped>
</style>

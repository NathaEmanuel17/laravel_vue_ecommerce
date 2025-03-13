<template>
    <div class="min-h-full bg-gray-200 flex">

        <div class="w-[200px] bg-indigo-700">
            <sidebar/>
        </div>

        <!-- Sidebar -->
        <div class="flex-1">
            <header class="h-8 shadow bg-white">
                Header
            </header>
            <!-- Content -->

            <main>
                <router-view></router-view>
            </main>
        </div>
        <!-- Content -->
    </div>
</template>


<script setup>

import Sidebar from "./Sidebar.vue";

const {title} = defineProps({
    title: String
})
</script>

<style scoped>
</style>

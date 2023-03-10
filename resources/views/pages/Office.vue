<template layout>
    <div class="p-8">
        <h1 class="text-4xl flex justify-center mb-3">Offices</h1>
        <table class="mx-auto table-auto mt-4">
            <tr>
                <th class="font-bold p-2 border-b text-center bg-indigo-600 text-white">Office ID</th>
                <th class="font-bold p-2 border-b bg-indigo-600 text-white">Name</th>
                <th class="font-bold p-2 border-b text-center bg-indigo-600 text-white">Office Head</th>
                <th class="font-bold p-2 border-b text-center bg-indigo-600 text-white">Building</th>
            </tr>
            <tr v-for="office of offices" class="bg-gray-100 hover:bg-slate-200">
                <td class="p-3 border-b border-l">{{ ('00000' + office.id).slice(-5) }}</td>
                <td class="p-3 border-b border-l">{{ office.name }}</td>
                <td class="p-3 border-b border-l">{{ office.user.fullname }}</td>
                <td class="p-3 border-b border-l">{{ office.building }}</td>
            </tr>
        </table>
    </div>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'

defineProps({
    'offices': Array
})

</script>

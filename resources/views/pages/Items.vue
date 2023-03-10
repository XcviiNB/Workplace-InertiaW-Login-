<template layout>
    <div class="p-8">
        <h1 class="text-4xl flex justify-center mb-3">Items</h1>
        <table class="mx-auto table-auto mt-4">
            <tr>
                <th class="font-bold p-2 border-b text-center bg-indigo-600 text-white">Office ID</th>
                <th class="font-bold p-2 border-b bg-indigo-600 text-white">Name</th>
                <th class="font-bold p-2 border-b text-center bg-indigo-600 text-white">Description</th>
                <th class="font-bold p-2 border-b text-center bg-indigo-600 text-white">Value</th>
                <th class="font-bold p-2 border-b text-center bg-indigo-600 text-white">Status</th>
                <th class="font-bold p-2 border-b text-center bg-indigo-600 text-white">Date Updated</th>
            </tr>
            <tr v-for="item of items" class="bg-gray-100 hover:bg-slate-200">
                <td class="p-3 border-b border-l">{{ ('000000' + item.office_id).slice(-6) }}</td>
                <td class="p-3 border-b border-l">{{ item.name }}</td>
                <td class="p-3 border-b border-l">{{ item.description }}</td>
                <td class="p-3 border-b border-l">{{ item.value }}</td>
                <td class="p-3 border-b border-l text-center">{{ item.status }}</td>
                <td class="p-3 border-b border-l text-center">{{ item.date_acquired }}</td>
            </tr>
        </table>
    </div>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'

defineProps({
    'items': Array
})

</script>

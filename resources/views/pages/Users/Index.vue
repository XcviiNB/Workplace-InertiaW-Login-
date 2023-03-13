<template layout>
    <div class="p-8">
        <h1 class="text-4xl flex justify-center mb-3">Users</h1>

        <table class="mx-auto table-auto mt-4">
            <tr>
                <th class="font-bold p-2 border-b text-center bg-indigo-600 text-white">User ID</th>
                <th class="font-bold p-2 border-b bg-indigo-600 text-white">Full Name</th>
                <th class="font-bold p-2 border-b text-center bg-indigo-600 text-white">Designation</th>
                <th class="font-bold p-2 border-b text-center bg-indigo-600 text-white">Department</th>
                <th class="font-bold p-2 border-b text-center bg-indigo-600 text-white">Options</th>
            </tr>
            <tr v-for="user of users" class="bg-gray-100 hover:bg-slate-200">
                <td class="p-3 border-b border-l">{{ ('0000' + user.id).slice(-4) }}</td>
                <td class="p-3 border-b border-l">{{ user.fullname }}</td>
                <td class="p-3 border-b border-l">{{ user.designation }}</td>
                <td class="p-3 border-b border-l">{{ user.department }}</td>
                <td class="p-3 border-b border-l text-center">
                    <Link :href=" '/users/edit/' + user.id" class="bg-amber-400 hover:bg-amber-500 border-r rounded"><i class="fa-solid fa-user-pen"></i></Link>
                </td>
            </tr>
        </table>

        <div class="flex mt-3">
            <Link href="/users/create" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded mx-auto">Add User</Link>
        </div>

    </div>
</template>

<script setup>
    import {Link} from '@inertiajs/inertia-vue3'

    defineProps({
        'users': Array
    })
</script>

<template layout="default">

    <h1 class="text-2xl font-bold mb-4 text-center">Create User</h1>
    <hr>

    <div class="max-w-md mx-auto shadow p-4 mt-4">
        <form @submit.prevent="submit">
            <div class="mb-4">
                <label for="username" class="block font-medium text-gray-700 mb-2">User Name</label>
                <input v-model="form.username" type="text" id="username" name="username" class="w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" />
                <div class="text-sm text-red-500 italic mt-1" v-if="form.errors.username">{{ form.errors.username }}</div>
            </div>
            <div class="mb-4">
                <label for="password" class="block font-medium text-gray-700 mb-2">Password</label>
                <input v-model="form.password" type="password" id="password" name="password" class="w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" />
                <div class="text-sm text-red-500 italic mt-1" v-if="form.errors.password">{{ form.errors.password }}</div>
            </div>
            <div class="mb-4">
                <label for="fullname" class="block font-medium text-gray-700 mb-2">Full Name</label>
                <input v-model="form.fullname" type="text" id="fullname" name="fullname" class="w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" />
                <div class="text-sm text-red-500 italic mt-1" v-if="form.errors.fullname">{{ form.errors.fullname }}</div>
            </div>
            <div class="mb-4">
                <label for="designation" class="block font-medium text-gray-700 mb-2">Designation</label>
                <input v-model="form.designation" type="text" id="designation" name="designation" class="w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" />
                <div class="text-sm text-red-500 italic mt-1" v-if="form.errors.designation">{{ form.errors.designation }}</div>
            </div>
            <div class="mb-4">
                <label for="department" class="block font-medium text-gray-700 mb-2">Department</label>
                <input v-model="form.department" type="text" id="department" name="department" class="w-full border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" />
                <div class="text-sm text-red-500 italic mt-1" v-if="form.errors.department">{{ form.errors.department }}</div>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Create User
                </button>
            </div>
        </form>
    </div>

</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3'

let form = useForm({
    username:'',
    password:'',
    fullname:'',
    designation:'',
    department:''
})

const submit = () => {
    form.post('/users')
}

</script>

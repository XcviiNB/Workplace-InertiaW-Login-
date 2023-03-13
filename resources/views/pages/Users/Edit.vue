<template layout>
    <h1 class="text-2xl font-bold mb-4 text-center">Edit User : {{ user.fullname }} </h1>
    <hr>

    <div class="max-w-md mx-auto shadow p-4 mt-4 bg-white">
        <form @submit.prevent="submit">
            <div class="mb-4">
                <label for="username" class="block font-medium text-black mb-2">User Name</label>
                <input v-model="form.username" type="text" id="username" name="username" class="w-full border border-gray-400 rounded-sm shadow-sm" />
                <div class="text-sm text-red-500 italic mt-1" v-if="form.errors.username">{{ form.errors.username }}</div>
            </div>
            <div class="mb-4">
                <label for="fullname" class="block font-medium text-black mb-2">Full Name</label>
                <input v-model="form.fullname" type="text" id="fullname" name="fullname" class="w-full border border-gray-400 rounded-md shadow-sm" />
                <div class="text-sm text-red-500 italic mt-1" v-if="form.errors.fullname">{{ form.errors.fullname }}</div>
            </div>
            <div class="mb-4">
                <label for="designation" class="block font-medium text-black mb-2">Designation</label>
                <input v-model="form.designation" type="text" id="designation" name="designation" class="w-full border border-gray-400 rounded-md shadow-sm" />
                <div class="text-sm text-red-500 italic mt-1" v-if="form.errors.designation">{{ form.errors.designation }}</div>
            </div>
            <div class="mb-4">
                <label for="department" class="block font-medium text-black mb-2">Department</label>
                <input v-model="form.department" type="text" id="department" name="department" class="w-full border border-gray-400 rounded-md shadow-sm" />
                <div class="text-sm text-red-500 italic mt-1" v-if="form.errors.department">{{ form.errors.department }}</div>
            </div>
            <div class="flex justify-evenly">
                <Link href="/users" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-black bg-slate-400 hover:bg-slate-500">Cancel</Link>
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-black bg-blue-500 hover:bg-blue-700">
                    Update User
                </button>
            </div>
        </form>
    </div>
</template>

<script setup>
    import { useForm, usePage, Link } from '@inertiajs/inertia-vue3'
    import { setTransitionHooks } from 'vue';


    const props = defineProps({
        user: Object
    })

    let form = useForm({
        username: props.user.username,
        fullname: props.user.fullname,
        designation: props.user.designation,
        department: props.user.department
    })

    const submit = () => {
        form.put('/users/' + props.user.id)
    }
</script>

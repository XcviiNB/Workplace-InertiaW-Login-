<template>
    <section class="bg-primary">
        <nav class="bg-blue-800 p-5">
            <div class="container mx-auto flex items-center justify-between">
                <Link href="/" class="text-white font-bold text-xl">WorkPlace</Link>

                <div class="flex items-center">
                    <Link v-if="user" href="/users" class="py-4 text-green-100 font-semibold hover:bg-[#2046d0] duration-300 px-2">Users</Link>
                    <Link v-if="user" href="/offices" class="py-4 text-green-100 font-semibold hover:bg-[#2046d0] duration-300 px-2">Offices</Link>
                    <Link v-if="user" href="/items" class="py-4 text-green-100 font-semibold hover:bg-[#2046d0] duration-300 px-2">Items</Link>

                    <div>
                        <Link v-if="!user" class="py-4 text-green-100 font-semibold hover:bg-[#2046d0] duration-300 px-2" href="/login">Log In</Link>
                        <Link v-if="user" class="py-4 text-green-100 font-semibold hover:bg-[#2046d0] duration-300 px-2" href="/logout" method="post" as="button">Log Out {{":" + " " + user.fullname}} </Link>
                    </div>
                </div>
            </div>
        </nav>
    </section>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3'
    import { defineProps } from 'vue'

    defineProps({
        user: ''
    })

</script>

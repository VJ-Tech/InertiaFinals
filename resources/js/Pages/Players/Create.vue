<script setup>
import { useForm } from '@inertiajs/vue3';
import Homelayout from '@/Layouts/Homelayout.vue';

defineOptions({
    layout: Homelayout
});

const form = useForm({
    imageUrl: '',
    player_id: '',
    username: '',
    email: '',
    password: '',
});

const submit = () => {
    form.submit('post', '/Record');
};
</script>

<template>
    <main id="page-trans" class="bg-gray-100 py-8">
        <header class="text-4xl font-bold py-4 text-center text-gray-800">Add a Person</header>
        <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
            <form @submit.prevent="submit">
                <div class="mb-4">
                    <label for="player_id" class="block text-gray-700 font-bold mb-2">Person ID:</label>
                    <input type="number" id="player_id" class="w-full px-3 py-2 border rounded-lg" v-model="form.player_id" required>
                </div>
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 font-bold mb-2">Username:</label>
                    <input type="text" id="username" class="w-full px-3 py-2 border rounded-lg" v-model="form.username" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" id="email" class="w-full px-3 py-2 border rounded-lg" v-model="form.email" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Password:</label>
                    <input type="password" id="password" class="w-full px-3 py-2 border rounded-lg" v-model="form.password" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200">Save</button>
            </form>
        </div>
    </main>
</template>

<style scoped>
header {
    font-family: 'Arial', sans-serif;
}

.bg-gray-100 {
    background-color: #f7fafc;
}

.text-gray-800 {
    color: #2d3748;
}

.text-gray-700 {
    color: #4a5568;
}

.bg-white {
    background-color: #ffffff;
}

.border {
    border: 1px solid #cbd5e0;
}

.rounded-lg {
    border-radius: 0.5rem;
}

.shadow-md {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.hover\:bg-blue-700:hover {
    background-color: #2b6cb0;
}

.transition {
    transition: all 0.2s ease-in-out;
}
</style>

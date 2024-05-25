<script setup>
import { useForm } from '@inertiajs/vue3';
import Homelayout from '@/Layouts/Homelayout.vue';

defineOptions({
    layout: Homelayout
})

const form =  useForm({
    imageUrl: '',
    player_id: '',
    username:    '',
    email:    '',
    password: '',
})

const submit = () => {
    form.submit('post', '/Record')
}
</script>

<template>
    <main id="page-trans" class="futuristic-background">
        <header class="text-4xl fw-bold py-4 text-center text-white">Input Player Info</header>
            <div style="max-width: 400px; margin-left: 31%;" class="p-4 text-center">
                <form @submit.prevent="submit" class="futuristic-form">
                    <div class="mb-3">
                        <label for="imageUrl" class="text-white font-bold">Image URL:</label>
                        <input type="text" id="imageUrl" class="w-full futuristic-input" v-model="form.imageUrl">
                    </div>
                    <div class="mb-3">
                        <label for="player_id" class="text-white font-bold">Player ID:</label>
                        <input type="number" id="player_id" class="w-full futuristic-input" v-model="form.player_id">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="text-white font-bold">Username:</label>
                        <input type="text" id="username" class="w-full futuristic-input" v-model="form.username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="text-white font-bold">Email:</label>
                        <input type="text" id="email" class="w-full futuristic-input" v-model="form.email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="text-white font-bold">Password:</label>
                        <input type="password" id="password" class="w-full futuristic-input" v-model="form.password">
                    </div>
                    <button type="submit" class="link bg-gray-600 fw-bold text-white py-2 px-4 rounded futuristic-button">Save</button>
                </form>
            </div>
    </main>
</template>

<style scoped>
header {
    font-weight: bolder;
    font-family: 'Courier New', Courier, monospace;
    background: linear-gradient(45deg, #ff6b6b, #f8e8a2, #6bff95);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.futuristic-background {
    background-image: url('https://i.pinimg.com/originals/e3/7c/21/e37c2105950eb3d999f38ddc6cad2860.gif');
    background-repeat: no-repeat;
    background-size: cover;
}

.futuristic-form {
    border: 2px solid #00a2ff;
    padding: 20px;
    border-radius: 10px;
    background-color: rgba(0, 119, 255, 0.1);
}

.futuristic-input {
    border: none;
    border-bottom: 2px solid #00e1ff;
    background-color: transparent;
    color: #fff;
    padding: 10px;
    font-size: 16px;
    margin-bottom: 20px;
    transition: border-bottom-color 0.3s ease-in-out;
}

.futuristic-input:focus {
    outline: none;
    border-bottom-color: #fff;
}

.futuristic-button {
    background-color: #00b7ff;
    border: none;
    color: #000;
    font-size: 18px;
    transition: background-color 0.3s ease-in-out;
}

.futuristic-button:hover {
    background-color: #9fc1ff;
    color: #006eff;
}
</style>

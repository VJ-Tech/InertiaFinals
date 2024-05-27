<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />
    <div class="login-container">
        <div class="login-header">
            <h1>Welcome</h1>
        </div>
        <div class="login-body">
            <Link :href="route('login')" class="route-link">Log in</Link>
            <Link v-if="canRegister" :href="route('register')" class="route-link2">Register</Link>
        </div>
    </div>
</template>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #fff;
    color: #202124;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    width: 360px;
    padding: 40px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    text-align: center;
    background-color: #fff;
}

.logo {
    height: 48px;
    margin-bottom: 20px;
}

.login-header {
    margin-bottom: 20px;
}

.route-link, .route-link2 {
    display: block;
    font-weight: 500;
    margin: 10px 0;
    padding: 10px;
    border-radius: 4px;
    transition: background-color 0.3s;
    background-color: #1a73e8;
    color: white;
    text-decoration: none;
}

.route-link:hover, .route-link2:hover {
    background-color: #1669c1;
}
</style>

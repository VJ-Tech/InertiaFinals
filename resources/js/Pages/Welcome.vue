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
    <div class="home">
        <div class="top-nav">
            <div class="routes"> 
                <img class="logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoPqGtHrqlykqfW4h8s237m9VCSWS4-0nYsqSy3ExbvnMyv6wuYrlF70SJNmP5pgWYibc&usqp=CAU" alt="">
                <h1>Gamespace</h1>
                <Link :href="route('login')" class="route-link">Log in</Link>
                <Link v-if="canRegister" :href="route('register')" class="route-link2">Register</Link>
            </div>
        </div>
        <div class="content">
            <div class="image">
                <img src="https://camo.githubusercontent.com/d6071165f118647cd11619ed34fb9f18fe75e2b48656296ee8de22fcfdf1a9cd/68747470733a2f2f6d656469612e74656e6f722e636f6d2f2d6d5f70797974655f674541414141642f77656c636f6d652d7265647461696c732e676966" alt="">
            </div>
            <p class="gradient-text text-center text-4xl font-bold mb-5">Welcome to Gamespace hub!</p>
            <p class="gradient-text text-center text-2xl font-bold mt-2 mb-5">>>Start Exploring</p>
        </div>
    </div>
</template>

<style>
.logo {
    height: 50px;
    width: 50px;
    border-radius: 50%;
    margin-right: 10px;
}

.home {
    background: linear-gradient(#1b1b1b, #4d4d4d);
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.top-nav {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    border-bottom: 1px solid gray;
}

h1 {
    font-weight: bold;
    font-size: 25px;
    background: linear-gradient(45deg, #ff6b6b, #f8e8a2, #6bff95);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin: 0;
}

.routes {
    display: flex;
    align-items: center;
}

.route-link {
    font-weight: 600;
    margin: 0 10px;
    padding: 8px 16px;
    border-radius: 4px;
    transition: all 0.3s ease;
    background-color: #383a57;
    color: #fff;
    text-decoration: none;
    margin-left: 800px;
}

.route-link:hover {
    background-color: #fff;
    border-color: #f8d3d3;
    color: #111111;
}

.route-link2 {
    font-weight: 600;
    margin: 0 10px;
    padding: 8px 16px;
    border-radius: 4px;
    transition: all 0.3s ease;
    background-color: #383a57;
    color: #fff;
    text-decoration: none;
}

.route-link2:hover {
    background-color: #fff;
    border-color: #f8d3d3;
    color: #111111;
}

.image {
    margin-top: 100px;
    max-width: 100%;
    padding: 10px;
    height: auto;
    margin-bottom: 50px;
    border-radius: 8px;
    background-color: #383a57;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.gradient-text {
    background: linear-gradient(45deg, #ff6b6b, #f8e8a2, #6bff95);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.content {
    text-align: center;
}
</style>

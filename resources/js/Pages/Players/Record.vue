<script setup>
import Homelayout from '@/Layouts/Homelayout.vue';
import { Link } from '@inertiajs/vue3';

defineOptions({
    layout: Homelayout
})

const props = defineProps({
    players: Array
})
</script>

<template>
    <main id="page-trans">
        <div class="container">
            <header class="text-4xl font-bold mb-4 py-2 px-4">Players</header>
            <p class="text-xl text-gray-600 font-bold py-2 px-4">list of players active:</p>
            <div class="card-container p-4">
                <Link v-for="(players, index) in players" :key="index" :href="'/players/' + players.id" class="btn card-link">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-xl font-semibold">Player ID: {{ players.player_id }}</h2>
                        </div>
                        <div class="card-body">
                            <p><strong>Username:</strong> {{ players.username }}</p>
                        </div>
                    </div>
                </Link>
            </div>
        </div>
    </main>
</template>

<style scoped>

.card-container {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 10px;
    height: 500px;
    overflow-y: auto;
}

header {
    font-weight: bold;
}

.card {
    background-color: #2a2b2c;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 15px;
    transition: transform 0.2s;
    width: 200px;
    height: 120px; 
    display: flex;
    flex-direction: column;
}
.card h2 {
    background: linear-gradient(45deg, #ff6b6b, #f8e8a2, #6bff95);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.card:hover {
    transform: translateY(-5px);
}

.card-header {
    border-bottom: 1px solid #c2c2c2;
    padding-bottom: 8px;
    margin-bottom: 8px;
}

.card-body p {
    background: linear-gradient(45deg, #ff6b6b, #f8e8a2, #6bff95);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin: 5px 0;
    word-wrap: break-word;
}

.card-link {
    text-decoration: none;
    color: inherit; 
}

</style>

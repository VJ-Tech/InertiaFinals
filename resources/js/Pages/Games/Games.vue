<script setup>
import Homelayout from '@/Layouts/Homelayout.vue';
import { ref, computed } from 'vue';

defineOptions({
    layout: Homelayout
});

const searchQuery = ref('');

const data = [
    {
        gameImage: 'https://mmoculture.com/wp-content/uploads/2020/02/CrossFire-new-image.png',
        gameName: 'Crossfire',
        gameDescription: 'Crossfire is an online tactical first-person shooter game developed by Smilegate Entertainment for Microsoft Windows.',
        gameLink: 'https://cf.gameclub.ph/',
    },
    {
        gameImage: 'https://img.redbull.com/images/c_crop,w_1920,h_960,x_0,y_103,f_auto,q_auto/c_scale,w_1200/redbullcom/2020/6/5/ctsejxmdtw9inp8zqqqd/red-bull-campus-clutch-valorant-agents',
        gameName: 'Valorant',
        gameDescription: 'Valorant is a free-to-play first-person tactical hero shooter developed and published by Riot Games, for Windows.',
        gameLink: 'https://playvalorant.com/en-us/',
    },
    {
        gameImage: 'https://cdn.cloudflare.steamstatic.com/steam/apps/570/capsule_616x353.jpg?t=1714502360',
        gameName: 'Dota 2',
        gameDescription: 'Dota 2 is a 2013 multiplayer online battle arena video game by Valve.',
        gameLink: 'https://www.dota2.com/home',
    },
    {
        gameImage: 'https://m.media-amazon.com/images/I/710Lg8IQJqL._AC_UF1000,1000_QL80_.jpg',
        gameName: 'Apex Legends',
        gameDescription: 'Apex Legends is a free-to-play battle royale-hero shooter game developed by Respawn Entertainment and published by Electronic Arts.',
        gameLink: 'https://www.ea.com/games/apex-legends',
    },
    {
        gameImage: 'https://xxboxnews.blob.core.windows.net/prod/sites/2/2022/01/PUBG_NewKeyArt2022.jpg',
        gameName: 'PlayerUnknowns Battlegrounds',
        gameDescription: 'PUBG: Battlegrounds is a battle royale game developed by PUBG Studios and published by Krafton.',
        gameLink: 'https://pubg.com/en-na',
    },
    {
        gameImage: 'https://cdn1.epicgames.com/offer/24b9b5e323bc40eea252a10cdd3b2f10/EGS_LeagueofLegends_RiotGames_S1_2560x1440-80471666c140f790f28dff68d72c384b',
        gameName: 'League of Legends',
        gameDescription: 'League of Legends is a multiplayer online battle arena video game developed and published by Riot Games.',
        gameLink: 'https://www.leagueoflegends.com/en-us/'
    },
    {
        gameImage: 'https://cdn1.epicgames.com/offer/fn/FNBR_29-00_C5S2_EGS_Launcher_Blade_2560x1440_2560x1440-c14f4f4627b95d192cf6a75ff4cadb7b',
        gameName: 'Fortnite',
        gameDescription: 'Fortnite is an online video game developed by Epic Games.',
        gameLink: 'https://www.fortnite.com/'
    },
    {
        gameImage: 'https://xxboxnews.blob.core.windows.net/prod/sites/2/2022/10/OW2-be9287b234afbe7898ac.jpg',
        gameName: 'Overwatch 2',
        gameDescription: 'Overwatch 2 is a team-based multiplayer first-person shooter developed and published by Blizzard Entertainment.',
        gameLink: 'https://overwatch.blizzard.com/en-us/'
    },
    {
        gameImage: 'https://i.ytimg.com/vi_webp/ztNoBI0m_P0/maxresdefault.webp',
        gameName: 'Minecraft',
        gameDescription: 'Minecraft is a sandbox video game developed by Mojang.',
        gameLink: 'https://www.minecraft.net/en-us'
    },
    {
        gameImage: 'https://www.callofduty.com/content/dam/atvi/callofduty/cod-touchui/store/games/wz/overview/WZPLP_Hero.webp',
        gameName: 'Call of Duty: Warzone',
        gameDescription: 'Call of Duty: Warzone is a free-to-play battle royale video game released on March 10, 2020.',
        gameLink: 'https://www.callofduty.com/warzone'
    },
    {
        gameImage: 'https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2014/09/59755-ya-hay-fecha-trailer-gta-5-ps4-xbox-one.jpg?tf=3840x',
        gameName: 'Grand Theft Auto V',
        gameDescription: 'Grand Theft Auto V is a 2013 action-adventure game developed by Rockstar North and published by Rockstar Games.',
        gameLink: 'https://www.rockstargames.com/gta-v'
    },
    {
        gameImage: 'https://imageio.forbes.com/specials-images/imageserve/65da2da0e2e90f76b1fde68c/Rainbow-Six-operators-and-Deimos/960x0.jpg?format=jpg&width=960',
        gameName: 'Rainbow Six Siege',
        gameDescription: 'Tom Clancys Rainbow Six Siege is an online tactical shooter video game developed by Ubisoft Montreal and published by Ubisoft.',
        gameLink: 'https://www.ubisoft.com/en-gb/game/rainbow-six/siege'
    },
];

const filteredGames = computed(() => {
    return data.filter(game => 
        game.gameName.toLowerCase().includes(searchQuery.value.toLowerCase())
    );
});
</script>

<template>
    <main id="page-trans">
        <div class="container">
            <header class="text-4xl font-bold mb-4 py-2 px-4">Game List</header>
            <div class="search-container">
                <input 
                    type="search" 
                    placeholder="Search games..." 
                    class="rounded-full"
                    v-model="searchQuery"
                >
            </div>
            <div class="card-container p-4 mt-5">
                <div v-for="(game, index) in filteredGames" :key="index" class="card">
                    <div class="card-body">
                        <img :src="game.gameImage" alt="" class="game-image">
                    </div>
                    <div class="card-body font-bold text-2xl text-center bg-black rounded">
                        <p>{{ game.gameName }}</p>
                    </div>
                    <div class="card-body">
                        <p>{{ game.gameDescription }}</p>
                    </div>
                    <div class="button">
                        <a class="py-2 px-4 bg-blue-600 rounded font-bold text-white" :href="game.gameLink" target="_blank">Go</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<style scoped>
.container {
    max-height: 100vh;
    overflow: hidden; 
}

.search-container {
    display: flex;
    align-items: center;
    justify-content: center;
}

.button {
    display: flex;
    justify-content: center;
    align-items: center;
}

.card-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 20px;
    max-height: calc(100vh - 200px); 
    overflow-y: auto; 
}

header {
    font-weight: bold;
    text-align: center;
}

.card {
    background-color: #2a2b2c;
    border-radius: 8px;
    box-shadow: 10px 10px 8px #595370;
    padding: 15px;
    transition: transform 0.2s;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 400px; 
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

.game-image {
    width: 100%;
    height: auto;
    border-radius: 8px;
    object-fit: cover;
}
</style>

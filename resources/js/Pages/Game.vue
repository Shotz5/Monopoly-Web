<template>
    <div class="flex flex-row m-10">
        <Board :gameState="props.gameState" :position="props.gameState.players[CURRENT_PLAYER].position" />
        <div class="flex flex-col">
            <div class="m-2 h-24">
                <Button :onclick.prevent="rollDice">Dice Roll</Button>
                <span>Last Dice Roll: {{ lastRoll }}</span>
            </div>
            <div class="m-2 h-24">
                <Button :onclick.prevent="rollDice">Dice Roll</Button>
                <span>Last Dice Roll: {{ lastRoll }}</span>
            </div>
        </div>
    </div>
</template>

<script setup>
    import Board from '../Components/Board.vue';
    import Button from '../Components/Button.vue';
    import axios from 'axios';
    import { ref } from 'vue';

    const props = defineProps({
        gameState: Object,
    });

    const MAX_POSITION = 40;
    const CURRENT_PLAYER = props.gameState.players.findIndex((el) => el.id === 1);
    const CURRENT_PLAYER_ID = props.gameState.players[CURRENT_PLAYER].id;
    const lastRoll = ref(0);

    const rollDice = async () => {
        const response = await axios.post('/api/roll-dice', {player: CURRENT_PLAYER_ID});

        if (response.data.position < props.gameState.players[CURRENT_PLAYER].position) {
            lastRoll.value = MAX_POSITION + (response.data.position - props.gameState.players[CURRENT_PLAYER].position);
        } else {
            lastRoll.value = response.data.position - props.gameState.players[CURRENT_PLAYER].position
        }
        props.gameState.players[CURRENT_PLAYER].position = response.data.position;
    }
</script>

<template>
    <div class="flex justify-center">
        <Board :boardConfig="props.boardConfig" />
    </div>
    <div>
        <a :onclick.prevent="rollDice">Dice Roll</a>
    </div>
    <div>
        <span>Last Dice Roll: {{ lastRoll }}</span>
    </div>
</template>

<script setup>
    import Board from '../Components/Board.vue';
    import axios from 'axios';
    import { ref } from 'vue';

    const position = ref(0);
    const lastRoll = ref(0);

    const rollDice = async () => {
        const roll = await axios.get('/api/dice-roll');
        lastRoll.value = roll.data;
        position.value += roll.data;
    }

    const props = defineProps({
        boardConfig: Object
    });
</script>

<template>
    <div class="flex flex-row m-10">
        <Board :boardConfig="props.boardConfig" :position="position" />
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

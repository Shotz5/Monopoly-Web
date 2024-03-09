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

    const MAX_POSITION = 40;
    const position = ref(1);
    const lastRoll = ref(0);

    const rollDice = async () => {
        const roll = await axios.post('/api/new-position', {position: position.value});

        if (roll.data.position < position.value) {
            lastRoll.value = MAX_POSITION + (roll.data.position - position.value);
        } else {
            lastRoll.value = roll.data.position - position.value
        }
        position.value = roll.data.position;

        console.log(roll.data);
    }

    const props = defineProps({
        boardConfig: Object
    });
</script>

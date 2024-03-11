<template>
    <div :id="props.config.property.id" class="grid grid-cols-4 grid-rows-1 text-[12px] text-center">
        <div class="p-2 [writing-mode:vertical-rl]"><s v-if="props.config.property.price">M</s>{{ props.config.property.price }}</div>
        <div class="flex [writing-mode:vertical-rl]">
            <template v-for="player in props.players">
                <TopHat v-if="player.icon == 'top_hat' && player.position == props.config.property.id" />
                <Thimble v-if="player.icon == 'thimble' && player.position == props.config.property.id" />
                <Racecar v-if="player.icon == 'racecar' && player.position == props.config.property.id" />
                <Battleship v-if="player.icon == 'battleship' && player.position == props.config.property.id" />
            </template>
        </div>
        <div class="p-2 [writing-mode:vertical-rl]">{{ props.config.property.name }}</div>
        <div :class="props.color + (props.color ? ' border-l-2 border-black' : '')"></div>
    </div>
</template>

<script setup>
    import TopHat from './Tokens/TopHat.vue';
    import Thimble from './Tokens/Thimble.vue';
    import Racecar from './Tokens/Racecar.vue';
    import Battleship from './Tokens/Battleship.vue';

    const props = defineProps({
        config: Object,
        color: String,
        players: Object,
    });
</script>

<template>
    <div :id="props.config.location" class="grid grid-cols-4 grid-rows-1 text-[12px] text-center">
        <div class="p-2 [writing-mode:vertical-rl]"><s v-if="props.config.price">M</s>{{ props.config.price }}</div>
        <div class="p-2 text-lg [writing-mode:vertical-rl]">{{ props.config.location == props.position ? '*' : '' }}</div>
        <div class="p-2 [writing-mode:vertical-rl]">{{ props.config.name }}</div>
        <div :class="props.color + (props.color ? ' border-l-2 border-black' : '')"></div>
    </div>
</template>

<script setup>
    const props = defineProps({
        config: Object,
        color: String,
        position: Number,
    });
</script>

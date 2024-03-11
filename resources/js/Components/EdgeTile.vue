<template>
    <div :id="props.config.property.id" class="grid grid-rows-4 grid-cols-1 text-[12px] text-center">
        <div :class="props.color + (props.color ? ' border-b-2 border-black' : '')"></div>
        <div class="p-2">{{ props.config.property.name }}</div>
        <div class="p-2 text-lg">{{ props.config.property.id == props.position ? '*' : '' }}</div>
        <div class="p-2"><s v-if="props.config.property.price">M</s>{{ props.config.property.price }}</div>
    </div>
</template>

<script setup>
    const props = defineProps({
        config: Object,
        color: String,
        position: Number,
    });
</script>

<template>
    <div :id="props.tile_id" class="grid grid-cols-4 grid-rows-1">
        <div></div>
        <div></div>
        <div></div>
        <div :class="props.color"></div>
    </div>
</template>

<script setup>
    const props = defineProps({
        tile_id: Number,
        position: Number,
        color: String,
    });
</script>

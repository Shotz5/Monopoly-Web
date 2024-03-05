<template>
    <div :id="props.tile_id" class="grid grid-rows-4 grid-cols-1">
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

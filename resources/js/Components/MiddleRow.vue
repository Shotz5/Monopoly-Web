<template>
    <div class="grid grid-cols-13">
        <Tile :position="props.position" :tile_id="(0 + props.last_id)" class="col-span-2"></Tile>
        <Tile :position="props.position" class="col-span-9"></Tile>
        <Tile :position="props.position" :tile_id="(1 + props.last_id)" class="col-span-2"></Tile>
    </div>
</template>

<script setup>
    import Tile from './Tile.vue';

    const props = defineProps({
        last_id: Number,
        position: Number,
    });
</script>

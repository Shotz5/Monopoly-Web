<template>
    <div class="grid grid-cols-13 grid-rows-13 align-center bg-white text-black w-[1100px] h-[1100px] [&>*]:border [&>*]:border-black">
        <!-- Top Row -->
        <EdgeTile :config="properties[21]" :players="props.gameState.players" class="col-span-2 row-span-2"></EdgeTile>
        <EdgeTile :config="properties[22]" :players="props.gameState.players" class="row-span-2" color="bg-red-600"></EdgeTile>
        <EdgeTile :config="properties[23]" :players="props.gameState.players" class="row-span-2"></EdgeTile>
        <EdgeTile :config="properties[24]" :players="props.gameState.players" class="row-span-2" color="bg-red-600"></EdgeTile>
        <EdgeTile :config="properties[25]" :players="props.gameState.players" class="row-span-2" color="bg-red-600"></EdgeTile>
        <EdgeTile :config="properties[26]" :players="props.gameState.players" class="row-span-2"></EdgeTile>
        <EdgeTile :config="properties[27]" :players="props.gameState.players" class="row-span-2" color="bg-yellow-300"></EdgeTile>
        <EdgeTile :config="properties[28]" :players="props.gameState.players" class="row-span-2" color="bg-yellow-300"></EdgeTile>
        <EdgeTile :config="properties[29]" :players="props.gameState.players" class="row-span-2"></EdgeTile>
        <EdgeTile :config="properties[30]" :players="props.gameState.players" class="row-span-2" color="bg-yellow-300"></EdgeTile>
        <EdgeTile :config="properties[31]" :players="props.gameState.players" class="col-span-2 row-span-2"></EdgeTile>
        <!-- Right Row -->
        <RightTile :config="properties[32]" :players="props.gameState.players" class="col-start-12 row-start-3 col-span-2" color="bg-green-500"></RightTile>
        <RightTile :config="properties[33]" :players="props.gameState.players" class="col-start-12 row-start-4 col-span-2" color="bg-green-500"></RightTile>
        <RightTile :config="properties[34]" :players="props.gameState.players" class="col-start-12 row-start-5 col-span-2"></RightTile>
        <RightTile :config="properties[35]" :players="props.gameState.players" class="col-start-12 row-start-6 col-span-2" color="bg-green-500"></RightTile>
        <RightTile :config="properties[36]" :players="props.gameState.players" class="col-start-12 row-start-7 col-span-2"></RightTile>
        <RightTile :config="properties[37]" :players="props.gameState.players" class="col-start-12 row-start-8 col-span-2"></RightTile>
        <RightTile :config="properties[38]" :players="props.gameState.players" class="col-start-12 row-start-9 col-span-2" color="bg-blue-700"></RightTile>
        <RightTile :config="properties[39]" :players="props.gameState.players" class="col-start-12 row-start-10 col-span-2"></RightTile>
        <RightTile :config="properties[40]" :players="props.gameState.players" class="col-start-12 row-start-11 col-span-2" color="bg-blue-700"></RightTile>
        <!-- Bottom Row -->
        <EdgeTile :config="properties[11]" :players="props.gameState.players" class="row-start-12 col-start-1 col-span-2 row-span-2"></EdgeTile>
        <EdgeTile :config="properties[10]" :players="props.gameState.players" class="row-start-12 col-start-3 row-span-2" color="bg-slate-500"></EdgeTile>
        <EdgeTile :config="properties[9]" :players="props.gameState.players" class="row-start-12 col-start-4 row-span-2" color="bg-slate-500"></EdgeTile>
        <EdgeTile :config="properties[8]" :players="props.gameState.players" class="row-start-12 col-start-5 row-span-2"></EdgeTile>
        <EdgeTile :config="properties[7]" :players="props.gameState.players" class="row-start-12 col-start-6 row-span-2" color="bg-slate-500"></EdgeTile>
        <EdgeTile :config="properties[6]" :players="props.gameState.players" class="row-start-12 col-start-7 row-span-2"></EdgeTile>
        <EdgeTile :config="properties[5]" :players="props.gameState.players" class="row-start-12 col-start-8 row-span-2"></EdgeTile>
        <EdgeTile :config="properties[4]" :players="props.gameState.players" class="row-start-12 col-start-9 row-span-2" color="bg-orange-900"></EdgeTile>
        <EdgeTile :config="properties[3]" :players="props.gameState.players" class="row-start-12 col-start-10 row-span-2"></EdgeTile>
        <EdgeTile :config="properties[2]" :players="props.gameState.players" class="row-start-12 col-start-11 row-span-2" color="bg-orange-900"></EdgeTile>
        <EdgeTile :config="properties[1]" :players="props.gameState.players" class="row-start-12 col-start-12 col-span-2 row-span-2"></EdgeTile>
        <!-- Left Row -->
        <LeftTile :config="properties[20]" :players="props.gameState.players" class="col-start-1 col-span-2" color="bg-orange-600"></LeftTile>
        <LeftTile :config="properties[19]" :players="props.gameState.players" class="col-start-1 col-span-2" color="bg-orange-600"></LeftTile>
        <LeftTile :config="properties[18]" :players="props.gameState.players" class="col-start-1 col-span-2"></LeftTile>
        <LeftTile :config="properties[17]" :players="props.gameState.players" class="col-start-1 col-span-2" color="bg-orange-600"></LeftTile>
        <LeftTile :config="properties[16]" :players="props.gameState.players" class="col-start-1 col-span-2"></LeftTile>
        <LeftTile :config="properties[15]" :players="props.gameState.players" class="col-start-1 col-span-2" color="bg-pink-600"></LeftTile>
        <LeftTile :config="properties[14]" :players="props.gameState.players" class="col-start-1 col-span-2" color="bg-pink-600"></LeftTile>
        <LeftTile :config="properties[13]" :players="props.gameState.players" class="col-start-1 col-span-2"></LeftTile>
        <LeftTile :config="properties[12]" :players="props.gameState.players" class="col-start-1 col-span-2" color="bg-pink-600"></LeftTile>
    </div>
</template>

<script setup>
    import RightTile from './RightTile.vue';
    import LeftTile from './LeftTile.vue';
    import EdgeTile from './EdgeTile.vue';
    import { reactive } from 'vue';

    const props = defineProps({
        gameState: Object
    });

    let properties = reactive({});
    props.gameState.game_properties.forEach((el) => {
        properties[el.id] = el;
    });
</script>

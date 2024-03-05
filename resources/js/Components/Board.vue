<template>
    <div class="grid grid-cols-13 grid-rows-13 align-center w-[650px] h-[650px] my-10 [&>*]:border [&>*]:border-black">
        <!-- Top Row -->
        <EdgeTile class="col-span-2 row-span-2">1</EdgeTile>
        <EdgeTile class="row-span-2" color="bg-red-600">2</EdgeTile>
        <EdgeTile class="row-span-2">3</EdgeTile>
        <EdgeTile class="row-span-2" color="bg-red-600">4</EdgeTile>
        <EdgeTile class="row-span-2" color="bg-red-600">5</EdgeTile>
        <EdgeTile class="row-span-2">6</EdgeTile>
        <EdgeTile class="row-span-2" color="bg-yellow-300">7</EdgeTile>
        <EdgeTile class="row-span-2" color="bg-yellow-300">8</EdgeTile>
        <EdgeTile class="row-span-2">9</EdgeTile>
        <EdgeTile class="row-span-2" color="bg-yellow-300">10</EdgeTile>
        <EdgeTile class="col-span-2 row-span-2">11</EdgeTile>
        <!-- Right Row -->
        <RightTile class="col-start-12 row-start-3 col-span-2" color="bg-green-500">12</RightTile>
        <RightTile class="col-start-12 row-start-4 col-span-2" color="bg-green-500">13</RightTile>
        <RightTile class="col-start-12 row-start-5 col-span-2">14</RightTile>
        <RightTile class="col-start-12 row-start-6 col-span-2" color="bg-green-500">15</RightTile>
        <RightTile class="col-start-12 row-start-7 col-span-2">16</RightTile>
        <RightTile class="col-start-12 row-start-8 col-span-2">17</RightTile>
        <RightTile class="col-start-12 row-start-9 col-span-2" color="bg-blue-700">18</RightTile>
        <RightTile class="col-start-12 row-start-10 col-span-2">19</RightTile>
        <RightTile class="col-start-12 row-start-11 col-span-2" color="bg-blue-700">20</RightTile>
        <!-- Bottom Row -->
        <EdgeTile class="row-start-12 col-start-1 col-span-2 row-span-2">31</EdgeTile>
        <EdgeTile class="row-start-12 col-start-3 row-span-2" color="bg-slate-500">30</EdgeTile>
        <EdgeTile class="row-start-12 col-start-4 row-span-2" color="bg-slate-500">29</EdgeTile>
        <EdgeTile class="row-start-12 col-start-5 row-span-2">28</EdgeTile>
        <EdgeTile class="row-start-12 col-start-6 row-span-2" color="bg-slate-500">27</EdgeTile>
        <EdgeTile class="row-start-12 col-start-7 row-span-2">26</EdgeTile>
        <EdgeTile class="row-start-12 col-start-8 row-span-2">25</EdgeTile>
        <EdgeTile class="row-start-12 col-start-9 row-span-2" color="bg-orange-900">24</EdgeTile>
        <EdgeTile class="row-start-12 col-start-10 row-span-2">23</EdgeTile>
        <EdgeTile class="row-start-12 col-start-11 row-span-2" color="bg-orange-900">22</EdgeTile>
        <EdgeTile class="row-start-12 col-start-12 col-span-2 row-span-2">21</EdgeTile>
        <!-- Left Row -->
        <LeftTile class="col-start-1 col-span-2" color="bg-orange-600">40</LeftTile>
        <LeftTile class="col-start-1 col-span-2" color="bg-orange-600">39</LeftTile>
        <LeftTile class="col-start-1 col-span-2">38</LeftTile>
        <LeftTile class="col-start-1 col-span-2" color="bg-orange-600">37</LeftTile>
        <LeftTile class="col-start-1 col-span-2">36</LeftTile>
        <LeftTile class="col-start-1 col-span-2" color="bg-pink-600">35</LeftTile>
        <LeftTile class="col-start-1 col-span-2" color="bg-pink-600">34</LeftTile>
        <LeftTile class="col-start-1 col-span-2">33</LeftTile>
        <LeftTile class="col-start-1 col-span-2" color="bg-pink-600">32</LeftTile>
    </div>
</template>

<script setup>
    import RightTile from './RightTile.vue';
    import LeftTile from './LeftTile.vue';
    import EdgeTile from './EdgeTile.vue';

    const props = defineProps({
        position: Number
    });
</script>./TopRow.vue./EdgeRow.vue

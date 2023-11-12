<template>
    <div>
        <h3>hello world!</h3>
        <canvas id="chartCanvas"></canvas>
    </div>
</template>

<script setup>
import Chart from "chart.js/auto";
import { ref, onMounted } from "vue";

const props = defineProps({
    chartData: {
        type: Object,
        default: () => ({ labels: [], datasets: [] }),
    },
});

// data: props.chartData, // props.chartData is used here

//we only added the mounted part

const a = ref(5);

onMounted(() => {
    console.log(props.chartData);

    const ctx = document.getElementById("chartCanvas");

    new Chart(ctx, {
        type: "line",
        data: {
            labels: props.chartData.labels,
            datasets: props.chartData.datasets,
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
});
</script>

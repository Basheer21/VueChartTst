<template>
    <div>
        <h3>hello world!</h3>
        <canvas id="chartCanvas"></canvas>
    </div>
</template>

<script setup>
// import { ref, onMounted } from 'vue'; // this line is added for vue

import Chart from "chart.js/auto";
import { onMounted } from "vue";

//we only added the mounted part

onMounted(() => {
    const ctx = document.getElementById("chartCanvas");

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [
                {
                    label: "# of Votes",
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1,
                },
            ],
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

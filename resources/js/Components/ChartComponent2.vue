<template>
    <Bar :chart-data="chartData" />
</template>

<script>
const chartData = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
    datasets: [
        {
            label: "Dataset 1",
            data: [2, 5, 4, 8, 10, 4, 7],
            backgroundColor: "#DB4C77",
        },
    ],
};
import { Bar } from "vue-chartjs";
import {
    Chart as ChartJS,
    Title,
    Tooltip,
    Legend,
    BarElement,
    CategoryScale,
    LinearScale,
} from "chart.js";
ChartJS.register(
    Title,
    Tooltip,
    Legend,
    BarElement,
    CategoryScale,
    LinearScale
);
export default {
    components: {
        Bar,
    },
    data() {
        return {
            chartData: chartData,
        };
    },
};
</script>

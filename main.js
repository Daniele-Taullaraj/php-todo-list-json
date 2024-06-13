const { createApp } = Vue

createApp({
    data() {
        return {
            coseDaFare: []
        }
    },
    methods: {

    },
    mounted() {
        console.log("Recupero i dati dal server");

        axios.get("api.php").then(results => {
            console.log("Risultati: ", results);
            this.coseDaFare = results.data;
        });
    }
}).mount('#app')
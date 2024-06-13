const { createApp } = Vue

createApp({
    data() {
        return {
            coseDaFare: [],
            inputUser: "",
            contatore: 0,
        }
    },
    methods: {
        checkStatus(listElement) {
            if (listElement.done) {
                return 'text-success fs-5 list-unstyled border border-1 border-success rounded p-2 mb-2';
            } else {
                return 'text-decoration-line-through text-danger fs-5 list-unstyled border border-1 border-danger rounded p-2 mb-2';
            }
        },
        countTodo() {
            this.coseDaFare.forEach(element => {
                if (element.done) {
                    this.contatore++;
                    console.log(this.contatore)
                }
            });
        },
        addElement() {
            if (!this.inputUser == "") {
                this.coseDaFare.push({ "titolo": this.inputUser, "done": true });
                this.inputUser = "";
                this.contatore++;
            }
        },
        changeStatus(listElement) {
            if (listElement.done) {
                listElement.done = false
                this.contatore--;
            } else {
                listElement.done = true
                this.contatore++;
            }
        }


    },
    mounted() {
        axios.get("api.php").then(results => {
            this.coseDaFare = results.data;
            this.countTodo()
        });
    }
}).mount('#app')
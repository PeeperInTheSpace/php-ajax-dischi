const app = new Vue({
    el: "#root",
    data: {
        albums: [],
    },
    created() {
        axios.get("./server.php").then((resp) => {
            this.albums = resp.data;
        });
    },
    methods: {

    },

});
new Vue({
    el: "#app",
    data: {
        albumList: [],
        filters: {
            fGenre: "",
            fAuthor:"",
            fTitle: "",
        }
    },
    methods: {
        fetchData() {
            axios.get("main.php", {
                params: {
                    ...this.filters,
                }
            })
                .then((resp) => {
                    this.albumList = resp.data
                })
        },
        onGenreSubmit() {
            this.fetchData();
        }
    },

    mounted() {
        this.fetchData();
    }
})
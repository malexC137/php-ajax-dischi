new Vue({
    el: "#app",
    data: {
        albumList: [],
    },
    mounted() {
        axios.get("http://localhost:8888/Boolean/Giorno%2056%20Php/php-ajax-dischi/main.php")
        .then((resp) => {
            this.albumList = resp.data
            console.log(this.albumList)
        })
    }
})
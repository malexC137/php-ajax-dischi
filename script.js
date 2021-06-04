new Vue({
    el: "#app",
    data: {
        albumList: [],
    },
    mounted() {
        axios.get("https://flynn.boolean.careers/exercises/api/array/music")
        .then((resp) => {
            this.albumList = resp.data.response
            this.albumList.sort((a, b) => parseFloat(a.year) - parseFloat(b.year));
        })
    }
})
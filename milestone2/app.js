const app = new Vue ({
    el: "#app",

    data: {
        albums: [],
    },

    methods:  {
        fetchData(){

            axios.get("./server.php")
            .then((res)=>{
                this.albums = res.data;
            });

        }
    },

    mounted(){
        this.fetchData();
    }
})
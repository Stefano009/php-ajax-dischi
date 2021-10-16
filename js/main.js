Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        filter: [],
        selected: 'All',
        genres: [],
    },
    created: function() {
        this.getDb();
        this.getGenre();
    },
    methods: {
        getDb() {
            axios.get('api/server.php?genre=' + this.selected). //se lo scrivo direttamente come api/server faccio una chiamata relativa infatti api/server sta sullo stesso livello del mio index
            then((res) => {
                return this.filter = res.data;
            })
        },
        getGenre() {
            axios.get('api/server.php?').
            then((res) => {
                let data = res.data;
                for (let i = 0; i < data.length; i++) {
                    if (!this.genres.includes(data[i].genre)) {
                        this.genres.push(data[i].genre);
                    }
                }
            })

        }
    },
    computed: {
        // filterGenre() {
        //     if (this.selected === '' || this.selected === 'All') {
        //         return this.db;
        //     }
        //     const filter = this.db.filter(item => {
        //         if (item.genre === this.selected)
        //             return item.genre
        //     })
        //     return filter
        // }
        //i need to create a second filter that works through axios
        // filterGenre() {
        //     if (this.selected === '' || this.selected === 'All') {
        //         return this.filter = this.db;
        //     }
        //     axios.get('api/server.php?genre=' + this.selected)
        //         .then((res) => {
        //             const newRes = res.data
        //             let tmp = []
        //             for (let i = 0; i < newRes.length; i++) {
        //                 console.log(newRes[i].genre)
        //                 if (newRes[i].genre === this.selected) {
        //                     tmp.push(newRes[i])
        //                 }
        //             }
        //             return this.filter = tmp;

        //         });
        // }
    }
})
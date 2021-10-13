Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        db: [],
        filter: [],
        selected: 'All',
        genre: [
            'All',
            'Jaxx',
            'Metal',
            'Pop',
            'Rock'
        ]
    },
    created: function() {
        axios.get('api/server.php'). //se lo scrivo direttamente come api/server faccio una chiamata relativa infatti api/server sta sullo stesso livello del mio index
        then((res) => {
            return (this.db = res.data, this.filter = res.data)
        })
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
        filterGenre() {
            if (this.selected === '' || this.selected === 'All') {
                return this.filter = this.db;
            }
            axios.get('api/server.php/search/' + this.selected)
                .then((res) => {
                    const newRes = res.data
                    let tmp = []
                    for (let i = 0; i < newRes.length; i++) {
                        console.log(newRes[i].genre)
                        if (newRes[i].genre === this.selected) {
                            tmp.push(newRes[i])
                        }
                    }
                    return this.filter = tmp;

                });
        }
    }
})
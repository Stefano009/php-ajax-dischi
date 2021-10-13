Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        db: [],
        selected: '',
        genre: [
            'All',
            'Jaxx',
            'Metal',
            'Pop',
            'Rock'
        ]
    },
    created: function() {
        axios.get('http://localhost/php-ajax-dischi/api/server.php').
        then((res) => {
            return this.db = res.data;
        })

    },
    computed: {
        filterGenre() {
            if (this.selected === '' || this.selected === 'All') {
                return this.db;
            }
            const filter = this.db.filter(item => {
                if (item.genre === this.selected)
                    return item.genre
            })
            return filter
        }
    }


})
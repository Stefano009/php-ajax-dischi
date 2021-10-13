Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        db: [],
        selected: 'All'
    },
    created: function() {
        axios.get('http://localhost/php-ajax-dischi/api/server.php').
        then((res) => {
            return this.db = res.data;
        })

    },
    methods() {
        function filter(array) {

        }
    }


})
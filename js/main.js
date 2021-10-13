Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {

    },
    created: function() {
        axios.get('http://localhost/php-ajax-dischi/api/server.php').
        then((res) => {
            console.log(res)
        })

    }


})
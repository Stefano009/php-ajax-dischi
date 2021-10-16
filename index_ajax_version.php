<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js" integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Vue-dischi</title>
</head>
<body>
    <div id="root" class="outer-wrapper">
        <header>
            <div class="nav">
                <img src="./img/spotify.png" alt="spotify-icon">
                <div>
                    <label for="genre"> Seleziona il tuo genere preferito</label>
                <select @change="getDb" v-model="selected" class="genre" name="genre" id="genre">
                    <option value="All">
                        All
                    </option>
                    <option v-for="genre in genres" :value="genre">
                            {{genre}}
                    </option>
                </select>
                </div>
            </div>
        </header>
        <main>
            <div class="wrapper">
                <div class="card" v-for="disk in filter">                        
                    <img :src="disk.poster" :alt="disk.title">
                            <h2>
                                {{disk.title}}
                            </h2>
                                <h3>
                                    {{disk.author}}<br>
                                    <span>{{disk.year}}</span>
                                </h3>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="js/main.js"></script>
</body>
</html>
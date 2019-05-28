<template>
    <v-app>
        <v-toolbar-title app>Game of Rock, Paper, Scissors</v-toolbar-title>
        <v-content>
            <v-container fluid>
                <router-view></router-view>

                <router-link to="/"></router-link>
            </v-container>
        </v-content>
        <v-footer app>&copy; 2019 Karolina Suchomska</v-footer>
    </v-app>
</template>

<style lang="scss">
    @import '@/sass/_variables.scss';
    @import '@/sass/app.scss';

    * {
        box-sizing: border-box;
        background-color: $body-bg;
        color: $white;
    }
    #app {
        height: 100%;
        font-family: $font-Arial-sans-serif;
        font-size: calc(1.5rem + 5px);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        margin: 0 auto;
        padding: 20px;
    }

    .v-toolbar__title {
        height: 100% !important;
        font-family: $font-Anton-sans-serif;
        font-size: calc(3rem + 5px);
        text-transform: uppercase;
        padding: 10px;
    }

    .v-content {
        padding: 10px;
    }

    .v-footer {
        font-size: calc(0.4rem + 5px);;
    }
</style>

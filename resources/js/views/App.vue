<template>
    <v-app>
        <v-navigation-drawer app></v-navigation-drawer>
        <v-toolbar app>Game of Rock, Paper, Scissors</v-toolbar>
        <v-content>
            <v-container fluid>
                <router-view></router-view>

                <router-link to="/"></router-link>
            </v-container>
        </v-content>
        <v-footer app></v-footer>
    </v-app>
</template>

<script>

export default {};

</script>

<style lang="scss">
    @import '@/sass/_variables.scss';
    @import '@/sass/app.scss';

    * {
        box-sizing: border-box;
        background-color: rgb(51, 51, 51);
    }
    #app {
        height: 100%;
        font-family: 'Avenir', Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #ffffff;
        margin: 0 auto;
        padding: 20px;
        font-size: calc(1.5rem + 5px);
    }

    .v-toolbar__content {
        font-size: calc(3rem + 5px);
        font-family: $font-family-sans-serif;
        text-transform: uppercase;
        padding: 10px;
    }

    .v-content {
        padding: 10px;
    }

    button {
        background-color: rgb(32, 32, 32);
        padding: 15px;
        margin: 20px;
        font-size: calc(0.8rem + 5px);
        color: white;
        outline: none;
        border: none;
        box-shadow: 0 0 3px rgb(117, 117, 117);;
        &:hover {
            background-color: rgb(61, 61, 61);
        }
    }

</style>

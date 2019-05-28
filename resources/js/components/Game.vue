<template>
    <div class="game-container">
        <div class="button-container">
            <button class="game-button" v-on:click="choose('rock')">
                <span>Rock</span>
                <i class="far fa-hand-rock"/>
            </button>
            <button class="game-button" v-on:click="choose('paper')">
                <span>Paper</span>
                <i class="far fa-hand-paper"/>
            </button>
            <button class="game-button" v-on:click="choose('scissors')">
                <span>Scissors</span>
                <i class="far fa-hand-scissors"/>
            </button>
        </div>
        
    <div class="game-items">{{ winner.score }}</div>
    <div class="game-players">
        <div class="game-items players">Player:  
            <div>{{ player }}</div> 
        </div>
        <div class="game-items players">&amp;</div>
        <div class="game-items players">Computer:  
            <div>{{ computer }}</div> 
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Player choice</th>
                <th>Computer choice</th>
                <th>Score</th>
            </tr>
        </thead>
            <tbody>
                <tr v-for="winner in winners" :key="winner.id">
                    <td>{{ winner.player }}</td>
                    <td>{{ winner.computer }}</td>
                    <td>{{ winner.score }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
  name: 'Game',
  data () {
    return {
        items: ['paper', 'rock', 'scissors'],
        player: '----',
        computer: '----',
        winner: {},
        winners: [],
        history: '',
        };
    },
    created() {
        let uri = 'http://localhost:8000/api/score';
        this.axios.get(uri).then(response => {
            this.winners = response.data.data;
        })
    },
    methods: {
        choose(items) {
            this.player = items;
            this.computer= this.items[Math.floor(Math.random()*this.items.length)];
            this.winner.score = this.getWinner(this.player, this.computer);
            this.winner.player = this.player;
            this.winner.computer = this.computer;
            this.history = this.addHistory();
        },
        getWinner(player, computer) {
            if (player == computer) {
                return "Draw!";
            }
            if ((player == 'paper' && computer == 'rock') ||
                (player == 'rock' && computer == 'scissors') || 
                (player == 'scissors' && computer == 'paper')) {
                return 'Player win!';
            }
            else return 'Computer win!';
        },
        addHistory() {
            let url = 'http://localhost:8000/api/score';
            this.axios.post(url, this.winner).then((response) => {
            this.$router.go({name: 'game'});
            });
        },
    }
}
</script>

<style lang="scss">
    @import '@/sass/_variables.scss';

    .game-container {
        margin: 0 auto;
        padding: 20px;
    }

    .button-container {
        margin: 30px;
    }

    .game-button {
        margin: 10px;
    }

    .game-players {
        display: flex;
        justify-content: center;
        margin: 20px;
    }

    .players {
        margin: 0 auto;
        padding: 10px;
    }

    .game-items {
        margin: 30px 5px;
    }

    button {
        width: 190px;
        min-height: 50px;
        background-color: $body-bg;
        font-size: calc(0.8rem + 5px); 
        color: $white;
        outline: none;
        border: none;
        margin: 20px;
        padding: 15px;
        box-shadow: 0 0 3px $gray;
        &:hover {
            box-shadow: 0 0 3px $light;
        }
    }

    .table {
        margin: 0 auto;
        padding: 10px;
        font-size: calc(0.5rem + 10px);
        th, td {
        vertical-align: middle !important;
        padding: 25px 5px !important;
        }
        th {
            font-size: calc(1rem + 5px);
        }
    }

    
</style>

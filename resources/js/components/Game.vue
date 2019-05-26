<template>
  <div class="game-container">
    <div>
        <button class="game-button" v-on:click="choose('paper')">Paper</button>
        <button class="game-button" v-on:click="choose('rock')">Rock</button>
        <button class="game-button" v-on:click="choose('scissors')">Scissors</button>
    </div>
  <div class="game-players">
    <div class="game-items players">Player  
        <div>{{ player }}</div> 
    </div>
    <div class="game-items players">Computer  
        <div>{{ computer }}</div> 
    </div>
    </div>
    <div class="game-items">{{ winner }}</div>
    <div class="game-items">{{ history }}</div>
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
        winner: '',
        history: '',
        newitem: '',
        };
    },
    methods: {
        choose(items) {
            this.player = items;
            this.computer= this.items[Math.floor(Math.random()*this.items.length)];
            this.winner = this.getWinner(this.player, this.computer)
            this.history = this.getHistory(this.winner);
        },
        getWinner(player, computer) {
            if (player == computer) {
                return "Draw!";
            }
            if ((player == 'paper' && computer == 'rock') ||
                (player == 'rock' && computer == 'scissors') || 
                (player == 'scissors' && computer == 'paper')) {
                return 'Winner Player!';
            }
            else return 'Winner Computer!';
        },
        getHistory(history) {
            console.log(history);
        }
    }
}
</script>

<style lang="scss">
    @import '@/sass/_variables.scss';

    .game-container {
        margin: 0 auto;
        padding: 20px;
    }

    .game-button {
        margin: 10px;
    }

    .game-players {
        display: flex;
        justify-content: center;
    }

    .players {
        margin: 20px;
        padding: 10px;
    }

    .game-items {
        margin: 20px;
    }
</style>

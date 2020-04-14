<template>
  <div>
    <h4><input type="text" v-model="player.data.name" /></h4>
    <h4>{{ player.data.score }} Point {{ player.data.plural }}</h4>
    <h4><input type="text" v-model="computerplayer.data.name" /></h4>
    <h4>{{ computerplayer.data.score }} Point {{ computerplayer.data.plural }}</h4>

    <div id = "app">
    <div id="Rock" @click="requestRock">
        <p><strong>Rock</strong></p>
    </div>
    <div id="Paper" @click="requestPaper">
        <p><strong>Paper</strong></p>
    </div>
    <div id="Scissors" @click="requestScissors">
        <p><strong>Scissors</strong></p>
    </div>
</template>

<script>
export default {
  name: "User Display",
  props: {
    player: Object
  },
  watch: {
    "player.data.name": function() {
      console.log(this.player.data.name);
    },
        methods: {
             requestRock: function(click) {
                this.$root.$emit('newRock')

             }, requestPaper: function(click) {
                this.$root.$emit('newPaper')

             }, requestScissors: function(click) {
                this.$root.$emit('newScissors')

             },
     watch: {
    "computerplayer.data.name": function() {
      console.log(this.computerplayer.data.name);
    },
        methods: {
             requestRock: function(click) {
                this.$root.$emit('newRock')

             }, requestPaper: function(click) {
                this.$root.$emit('newPaper')

             }, requestScissors: function(click) {
                this.$root.$emit('newScissors')

             },
        }
    },
    }
   }
}
</script>

<style>
    #Rock-button{
        box-shadow: 5px 5px 10px darkblue;
        transition: box-shadow 0.2s;
        padding: 2vh 4vw;
    }
    #Rock-button:hover {
        cursor: pointer;
    }
    #Rock-button:focus {
        box-shadow: 2px 2px 5px lightblue;
    }
    #Rock-button:active {
        box-shadow: 2px 2px 5px lightblue;
    }
    #Paper-button{
        box-shadow: 5px 5px 10px gainsboro;
        transition: box-shadow 0.2s;
        padding: 2vh 4vw;
    }
    #Paper-button:hover {
        cursor: pointer;
    }
    #Paper-button:focus {
        box-shadow: 2px 2px 5px white;
    }
    #Paper-button:active {
        box-shadow: 2px 2px 5px white;
    }
    #Scissor-button{
        box-shadow: 5px 5px 10px grey;
        transition: box-shadow 0.2s;
        padding: 2vh 4vw;
    }
    #Scissor-button:hover {
        cursor: pointer;
    }
    #Scissor-button:focus {
        box-shadow: 2px 2px 5px lightgrey;
    }
    #Scissor-button:active {
        box-shadow: 2px 2px 5px lightgrey;
    }
</style>

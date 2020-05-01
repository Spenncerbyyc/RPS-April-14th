<template>
  <div>
    <div id="Scorekeeper">
      <h1>{{ playerScore }} - {{ computerScore }}</h1>
    </div>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      playerSelectionMove: "",
      computerSelectionMove: "",
      playerScore: 0,
      computerScore: 0
    };
  },
  mounted: function() {
    this.$root.$on("playerSelection", this.playerSelection); //call method that tells computer to make a move, 1 emit
    this.$root.$on("computerSelection", this.computerSelection);
    //listening for player/computer emit 1 thing
  },
  methods: {
    playGame() {},
    playerSelection: function(selection) {
      this.playerSelectionMove = selection;
      this.$root.$emit("ScoreKeeper", "Player Made a Move");
    },
    computerSelection: function(selection) {
      this.computerSelectionMove = selection;
      this.getWinner();
    },
    getWinner() {
      if (this.playerSelectionMove === this.computerSelectionMove) {
        console.log("Tie Game!");
      }
      if (this.playerSelectionMove === "Rock") {
        if (this.computerSelectionMove === "Paper") {
          this.computerScore++;
        } else {
          this.playerScore++;
        }
      }
      if (this.playerSelectionMove === "Paper") {
        if (this.computerSelectionMove === "Scissors") {
          this.computerScore++;
        } else {
          this.playerScore++;
        }
      }
      if (this.playerSelectionMove === "Scissors") {
        if (this.computerSelectionMove === "Rock") {
          this.computerScore++;
        } else {
          this.playerScore++;
        }
      }
    }
  }
};
</script>

//Win condition, and pretty it up
//UserScore ComputerEntry

//listen for global events, check slides, compare and who wins, ssot. add score, listening
then make API request, or tell computer to make API, who won? match up with image,
Scorekeeper emits to ComputerPlayer
Scorekeepers listening for 2 events s

Scorekeeper listens for child emit from UD, then emits to ComputerPlayer, then listens for CP

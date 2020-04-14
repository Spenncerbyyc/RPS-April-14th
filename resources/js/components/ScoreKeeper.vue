new
<template>
  <div id="Scorekeeper">
    <h1>{{ userScore }} - {{ computerScore }}</h1>
  </div>
</template>

<script>
export default {
  data() {
    return {
      user: "",
      computer: "",
      isStart: false
    };
  },
    mounted: function() {
    this.$root.$on('newQuote', this.getNewQuote)
},
  methods: {
    playGame() {},
    getComputerChoice() {
      var vm = (this.randomNumber = Math.floor(Math.random() * 3));
      if (randomNumber === 0) {
        vm.computer = "rock";
      } else if (randomNumber === 1) {
        vm.computer = "paper";
      } else {
        vm.computer = "scissors";
      }
    }
  },
  computed: {
    determineWinner() {
      var vm = this,
        userChoice = vm.user,
        getComputerChoice = vm.computer;
      if (userChoice === getComputerChoice) {
        return "Tie Game!";
      }
      if (userChoice === "rock") {
        if (getComputerChoice === "paper") {
          return "You lost!";
        } else {
          return "You won!";
        }
      }
      if (userChoice === "paper") {
        if (getComputerChoice === "scissors") {
          return "You lost!";
        } else {
          return "You won!";
        }
      }
      if (userChoice === "scissors") {
        if (getComputerChoice === "rock") {
          return "You lost!";
        } else {
          return "You won!!";
        }
      }
    },
  }
}
</script>

//listen for global events, check slides, compare and who wins, ssot

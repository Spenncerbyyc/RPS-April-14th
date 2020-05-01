<template>
  <div>
    <h2>{{quote}}</h2>
  </div>
</template>

<script>
export default {
  name: "Computer Player",
  data: function() {
    return {
      quote: "Pick a Move"
    };
  },
  mounted: function() {
    this.$root.$on("ScoreKeeper", this.getComputerPlayerMove); //listen for SK, not player
  },
  methods: {
    getComputerPlayerMove: function(selection) {
      //comes AFTER API, random math comes from API,
      axios
        .get("/kanye-quote")
        .then(response =>  {//this is CP move
          console.log(response);
          this.$root.$emit("computerSelection", response.data.quote);
        })
        .catch(error => {
          console.log(error);
          this.quote = computerSelection;
        });
    },
    computerSelection: function(selection) {
      this.$root.$emit("computerSelection", "Computer Made a Move");
    }
  }
};
</script>


//parent
// Single export default, make like Button vue
//Listens to Scorekeeper, makes API, listens for API return

//      }
//    }

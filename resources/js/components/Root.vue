<template>
  <div id='grid-container'>
    <Player />
    <ComputerPlayer />
    <ScoreKeeper />
    <UserDisplay />
  </div>
</template>

<script>
import Player from "./Player.vue";
import ComputerPlayer from "./ComputerPlayer.vue";
import ScoreKeeper from "./ScoreKeeper.vue";
import UserDisplay from "./UserDisplay.vue";

export default {
  name: "Root",
  components: {UserDisplay, Player, ComputerPlayer, ScoreKeeper,
  }
  };
</script>

<style>
    body {
        font-family: Nunito
    }

    #grid-container {
        min-height: 50vh;
        display: grid;
        grid-template-rows: 1fr 1fr;
        justify-items: center;
        align-items: center;
    }
</style>

//repurpose, rename

<template>
  <div>
    <h4><input type="text" v-model="player.data.name" /></h4>
    <h4>{{ player.data.score }} Point {{ player.data.plural }}</h4>
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
    }
  }
};
</script>

<style></style>

<template>
<div>
    <div id="Rock">
        <h2>Rock</h2>
    </div>
     <div id="Paper">
        <h2>Paper</h2>
    </div>

     <div id="Scissors">
        <h2>Scissors</h2>
    </div>
    </div>
</template>

<script>
    export default {
        methods: {
             requestRock: function(click) {
                this.$root.$emit('Rock')

            },  requestPaper: function() {
                this.$root.$emit('Paper')

            },  requestScissors: function() {
                this.$root.$emit('Scissors')

            }
        }
    }
</script>

//computer player
//create scorekeeper
//user display

<style>
    #new-quote {
        max-width: 75vw;
    }
</style>


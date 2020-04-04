<template>
    <div id = "app">
    <div id="Rock" @click="requestRock">
        <p><strong>Rock</strong></p>
    </div>
    <div id="Paper" @click="requestPaper">
        <p><strong>Paper</strong></p>
    </div>
    <div id="Scissor" @click="requestScissor">
        <p><strong>Scissor</strong></p>
    </div>
</template>

<script>
    export default {
        methods: {
             requestRock: function(click) {
                this.$root.$emit('newRock')
                this.$store.dispatch(pickRock);
             }, requestPaper: function() {
                this.$root.$emit('newPaper')
                this.$store.dispatch(pickPaper);
             }, requestScissor: function() {
                this.$root.$emit('newScissor')
                this.$store.dispatch(pickScissor);
             },
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

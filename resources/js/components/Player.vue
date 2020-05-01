<template>
<div>
<h2>{{quote}}</h2>
</div>
</template>

<script>
    export default {
        data: function() {
            return {
                quote: "Pick a Move"
            }
        },
        mounted: function() {
            this.$root.$on('playerSelection', this.playerSelection)
        },
        methods: {
            playerSelection: function(selection){
            this.quote = selection
        },
    }
}
</script>


//computer player
//create scorekeeper
//user display
//parent
// One data, multiple variables, one method, one mounted, make look like Button vue

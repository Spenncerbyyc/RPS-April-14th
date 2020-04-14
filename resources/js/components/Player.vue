<template>
    <div id="Rock">
        <h2>{{Rock}}</h2>

     <div id="Paper">
        <h2>{{Paper}}</h2>
    </div>

     <div id="Scissors">
        <h2>{{Scissors}}</h2>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                quote: "Rock"
            }
        },
        function() {
            return {
                quote: "Paper"
            }
        },
        function() {
            return {
                quote: "Scissor"
            }
        },
        mounted: function() {
            this.$root.$on('newQuote', this.getNewQuote)
        },
        methods: {
            getNewQuote: function(){
                axios.get('/new-Quote')
                .then(response => {
                    console.log(response);
                    this.quote = response.data.quote;
                })
                .catch(error => {
                    console.log(error);
                    this.quote = 'You Lost';
            });
        },
    }
}
</script>


//computer player
//create scorekeeper
//user display
//parent
// One data, multiple variables, one method, one mounted, make look like Button vue

<template>
    <div id="Rock">
        <h2>{{Rock}}</h2>

     <div id="Paper">
        <h2>{{Paper}}</h2>
    </div>

     <div id="Scissor">
        <h2>{{Rock}}</h2>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                quote: "Rock"
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

        export default {
        data: function() {
            return {
                quote: "Paper"
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

        export default {
        data: function() {
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
            }
        }
    }
</script>


//computer player
//create scorekeeper
//user display




/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
var unique_id=window.unique_id;
var items, items_total=0;
const app = new Vue({
    el:'#app',

    data: {items, unique_id, items_total
    },
    watch: {
        items: {
            handler:function(){
                var total = 0 ;
                if(this.items.length>0){
                    for(var i = 0; i<this.items.length; i++){
                        if(!isNaN(parseFloat(this.items[i].qty)) && !isNaN(parseFloat(this.items[i].qty)) && !isNaN((parseFloat(this.items[i].qty) * parseFloat(this.items[i].rate)))){

                            total += (parseFloat(this.items[i].qty) * parseFloat(this.items[i].rate));
                        }

                    }
                }

                this.items_total= total;
            }, deep:true
        }
    },
created:function() {


    this.fetchThings('invoice-lines/'+this.unique_id, 'items');

},filters: {
        moment: function (date) {
            return moment(date).format('MMMM Do YYYY, h:mm:ss a');
        }
    },
    methods: {
        addInvoiceItem: function(){
            var invoice = {};
            this.$http.put('/api/invoice-lines/'+this.unique_id).then((data)=>{
                this.items.push(data.body);
            })
            this.$watch('items', function () {
                console.log('a thing changed')
            }, {deep:true})

        },
        deleteThings: function(path, variable){

        },
        addThings: function(path, variable){

        },
        fetchThings: function(path, variable){
            this.$http.get('/api/'+path).then( (data)=>{
                this.$set(this,variable, data.body);

            })
        },
        deleteItem: function(item_id){

        this.$http.delete('/api/invoice-lines/'+item_id);
            for(var i = 0; i<this.items.length; i++){
                if(this.items[i].id == item_id){
                    this.items.splice(i, 1);
                }
            }
        }


},

});


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
var items = [{id:0,qty:0,rate:0,tax_id:0,type:0,discount:0,cost:0}] , items_total=0, clients, client_id, projects, project_id, payments;
const app = new Vue({
    el:'#app',

    data: {items, unique_id, items_total, clients, client_id, projects, project_id, payments
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
        },
        payments: {
            handler: function(){

            }, deep: true
        }
    },
created:function() {

this.client_id = document.getElementById('client_id_value').value;
this.project_id = document.getElementById('project_id_value').value;

    this.fetchInvoiceLines();
    this.fetchClients();
    this.fetchProjects();
    this.fetchPayments();

},filters: {
        moment: function (date) {
            return moment(date).format('MMMM Do YYYY, h:mm:ss a');
        }
    },
    methods: {
        fetchInvoiceLines: function(){
           // this.fetchThings('invoice-lines/'+this.unique_id, 'items');
},
        displayClient(client){
          return   client.first_name + ' ' + client.last_name + ' - ' + client.company
        },
        fetchClients: function(){
          this.fetchThings('clients/list', 'clients')
        },
        fetchProjects:function(){
            if(this.client_id){
                this.fetchThings('projects/list/'+this.client_id, 'projects')
            }

},
        fetchPayments: function(){
          this.fetchThings('invoice-payments/'+this.unique_id, 'payments');
        },
        addInvoiceItem: function(){
            var invoice = {};
            this.$http.put('/api/invoice-lines/'+this.unique_id).then((data)=>{
                this.items.push(data.body);
            });
            this.$watch('items', function () {
                console.log('a thing changed')
            }, {deep:true})

        },
        addPayment: function(){
            var payment = {'amount':0};
          this.$http.put('/api/invoice-payment/' + this.unique_id).then((data)=>{
this.payments.push(payment)
            }  );
            // this.$watch('payments', function(){
            //     console.log('payments changed')
            // }, {deep:true})
        },
        deletePayment: function(payment_id){
          this.$http.delete('/api/invoice-payment/'+payment_id);
            for(var i = 0; i<this.payments.length; i++){

                if(this.payments[i].id == payment_id){
                    this.payments.splice(i, 1)
                }
            }
        },
        paymentPaid: function(payment_id){
          this.$http.get('/api/invoice-payment/'+ payment_id + '/paid')  .then((data)=>{
              this.$set(this, 'payments', data.body)
          });
        },
        deleteThings: function(path, variable){

        },
        addThings: function(path, variable){

        },
        fetchThings: function(path, variable){

            this.$http.get('/api/'+path).then( (data)=>{

                if(data.body.length>0){
                    this.$set(this,variable, data.body);
                }


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

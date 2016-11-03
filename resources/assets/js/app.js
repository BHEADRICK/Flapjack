
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
var process;
var tasks, projects, invoices;
const app = new Vue({
    el:'#app',

    data: {tasks, projects, invoices
    , message: "word up"},
created:function() {
this.fetchTasks();
    this.fetchProjects();
    this.fetchInvoices();
},
    methods: {
        fetchTasks: function () {


            this.$http.get('/api/tasks').then( (data)=>{
               this.$set(this,'tasks', data.body);

            })
        },
        fetchProjects: function(){
            this.$http.get('/api/projects').then( (data)=>{
                this.$set(this,'projects', data.body);

            })
        }  ,
        fetchInvoices: function(){
            this.$http.get('/api/invoices').then((data)=>{
                this.$set(this, 'invoices', data.body);
            })
        }

},

});

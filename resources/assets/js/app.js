
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
var tasks, projects, invoices, notifications, snapshot;
const app = new Vue({
    el:'#app',

    data: {tasks, projects, invoices, notifications, snapshot
    },
created:function() {
this.fetchTasks();
    this.fetchProjects();
    this.fetchInvoices();
    this.fetchNotifications();
    this.fetchSnapshot();
},filters: {
        moment: function (date) {
            return moment(date).format('MMMM Do YYYY, h:mm:ss a');
        }
    },
    methods: {
        formatClient: function(client){
            if(client)
            return client.first_name + ' ' + client.last_name + ' - ' + client.company;
        },
        mmnt: function(date, format){
            return  moment(new Date(Date(date)).toISOString()).format( format )
        },
        currency(number){
            return parseFloat(number).toFixed(2);
        },
        fetchThings: function(path, variable){
            this.$http.get('/api/'+path).then( (data)=>{
                this.$set(this,variable, data.body);

            })
        },
        fetchTasks: function () {

            this.fetchThings('tasks', 'tasks');

        },
        fetchProjects: function(){
           this.fetchThings('projects', 'projects');
        }  ,
        fetchInvoices: function(){
            this.fetchThings('invoices', 'invoices');
        },
        fetchNotifications: function(){
this.fetchThings('notifications', 'notifications');
        },
        fetchSnapshot: function(){
            this.fetchThings('snapshot', 'snapshot');
        }


},

});

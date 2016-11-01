<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Timestamps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
  
        Schema::table('business_identities', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('assignments_permissions', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('clients', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('client_credit_alterations', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('comments', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('contact_log', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('currencies', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('email_settings_tempates', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('email_templates', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('error_logs', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('files', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('gateway_fields', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('groups', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('hidden_notifications', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('invoices', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('invoice_rows', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('invoice_rows_taxes', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('items', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('items_taxes', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('keys', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('logs', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('notes', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('notifications', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('partial_payments', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('permissions', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('projects', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('project_expenses', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('project_expenses_categories', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('project_expenses_suppliers', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('project_files', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('project_milestones', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('project_tasks', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('project_task_statuses', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('project_task_templates', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('project_templates', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('project_timers', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('project_times', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('project_updates', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('project_proposals', function (Blueprint $table) {
                 $table->timestamps();
        }); Schema::table('project_tasks', function (Blueprint $table) {
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        Schema::table('project_tasks', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('business_identities', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('assignments_permissions', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('clients', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('client_credit_alterations', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('comments', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('contact_log', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('currencies', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('email_settings_tempates', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('email_templates', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('error_logs', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('files', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('gateway_fields', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('groups', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('hidden_notifications', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('invoices', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('invoice_rows', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('invoice_rows_taxes', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('items', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('items_taxes', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('keys', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('logs', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('notes', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('notifications', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('partial_payments', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('permissions', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('project_expenses', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('project_expenses_categories', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('project_expenses_suppliers', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('project_files', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('project_milestones', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('project_tasks', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('project_task_statuses', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('project_task_templates', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('project_templates', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('project_timers', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('project_times', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('project_updates', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });
 Schema::table('project_proposals', function (Blueprint $table) {
            $table->dropColumn([     'created_at', 'updated_at']);
        });


    }
}

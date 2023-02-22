<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_users', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('role');
            $table->foreign('customers_id')->references('id')->on('customers');
            $table->foreign('branches_id')->references('id')->on('branches');
            $table->foreign('dates_id')->references('id')->on('dates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::table('users', function(Blueprint $table) {
                $table->dropForeign('users_role_id_foreign');
                $table->dropForeign('users_customers_id_foreign');
                $table->dropForeign('users_branches_id_foreign');
                $table->dropForeign('users_dates_id_foreign');

            });
        }
};

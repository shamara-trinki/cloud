<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_categories', function (Blueprint $table) {
            $table->id();
            $table->string('server_id ');
            $table->string('name');
            $table->string('server_type');
            $table->string('ip_address');
            $table->string('ram');
            $table->string('storage');
            $table->integer('rdb_port');
            $table->string('ac_backup');
            $table->date('paid_date');
            $table->string('renewal_amt')->nullable();
            $table->date('renewal_date')->nullable();
            $table->text('email')->nullable();
            $table->string('email_password')->nullable();
            $table->string('billing_cycle')->nullable();
             $table->string('color', 20);
            $table->text('description')->nullable();
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
        Schema::dropIfExists('expense_categories');
    }
}
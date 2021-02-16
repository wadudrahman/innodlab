<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('first_name')->nullable();
                $table->string('last_name')->nullable();
                $table->string('email')->unique()->nullable();
                $table->boolean('is_email_verified')->nullable();
                $table->string('msisdn')->unique()->nullable();
                $table->boolean('is_msisdn_verified')->nullable();
                $table->string('nid')->unique()->nullable();
                $table->boolean('is_nid_verified')->nullable();
                $table->string('password');
                $table->date('dob')->nullable();
                $table->string('gender')->nullable();
                $table->string('portfolio_link')->nullable();
                $table->string('image')->nullable();
                $table->integer('role_id');
                $table->integer('package_id')->nullable();
                $table->boolean('is_trial')->default(true);
                $table->integer('design_count')->default(0);
                $table->boolean('is_active')->default(true);
                $table->boolean('is_paid')->default(false);
                $table->timestamp('created_by')->default(0);
                $table->timestamp('created_at')->useCurrent();
                $table->timestamp('updated_by')->nullable();
                $table->timestamp('updated_at')->useCurrent();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

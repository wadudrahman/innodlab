<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     /*   Schema::create('add_packages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });*/

        if (!Schema::hasTable('add_packages')) {
            Schema::create('add_packages', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->tinyInteger('status');
                $table->tinyInteger('is_trail_available');
                $table->integer('trail_days_count');
                $table->integer('trail_design_count');
                $table->integer('design_count');
                $table->integer('file_storage_for');
                $table->tinyInteger('is_multiple_revision_available');
                $table->tinyInteger('is_same_day_delivery_available');
                $table->tinyInteger('receive_design_via_mail');
                $table->tinyInteger('is_open_for_registration');
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
        Schema::dropIfExists('add_packages');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('packages')) {
            Schema::create('packages', function (Blueprint $table) {
                $table->id();
                $table->string('title')->unique();
                $table->integer('design_count')->default(0);
                $table->float('price_per_design', 8, 2)->default(0.00);
                $table->boolean('is_trail_available')->default(false);
                $table->integer('trial_period_day_count')->default(0);
                $table->integer('trial_period_design_count')->default(0);
                $table->boolean('is_active')->default(true);
                $table->integer('file_stored_day_count')->default(0);
                $table->boolean('is_multiple_revisions')->default(true);
                $table->boolean('is_via_email_allowed')->default(true);
                $table->integer('addon_email_count')->default(0);
                $table->boolean('is_same_day_delivery')->default(true);
                $table->boolean('is_displayed')->default(true);
                $table->string('icon_class')->nullable();
                $table->integer('created_by')->default(0);
                $table->timestamp('created_at')->useCurrent();
                $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('packages');
    }
}

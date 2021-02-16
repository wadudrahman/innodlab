<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = [
            [
                'title' => 'Starter',
                'design_count' => 100,
                'addon_email_count' => 15,
                'file_stored_day_count' => 30,
                'trial_period_day_count' => 7,
                'trial_period_design_count' => 20,
                'price_per_design' => 50
            ],
            [
                'title' => 'Basic',
                'design_count' => 200,
                'addon_email_count' => 15,
                'file_stored_day_count' => 45,
                'trial_period_day_count' => 7,
                'trial_period_design_count' => 20,
                'price_per_design' => 40
            ],
            [
                'title' => 'Premium',
                'design_count' => 500,
                'addon_email_count' => 15,
                'file_stored_day_count' => 50,
                'trial_period_day_count' => 7,
                'trial_period_design_count' => 20,
                'price_per_design' => 30
            ],
            [
                'title' => 'Pay As You Go',
                'design_count' => -1,
                'addon_email_count' => 15,
                'file_stored_day_count' => 30,
                'price_per_design' => 50
            ],
        ];

        if (DB::table('packages')->get()->count() <= 0) {
            DB::table('packages')->insert($packages);
        }
    }
}

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
                'is_via_email_allowed' => true,
                'addon_email_count' => 15,
                'is_same_day_delivery' => true,
                'is_multiple_revisions' => true,
                'file_stored_day_count' => 30,
                'trial_period_day_count' => 7,
                'trial_period_design_count' => 20,
                'price_per_design' => 50,
                'is_active' => true,
                'is_displayed' => true,
                'icon_class' => 'lnr lnr-rocket text-big'
            ],
            [
                'title' => 'Basic',
                'design_count' => 200,
                'is_via_email_allowed' => true,
                'addon_email_count' => 15,
                'is_same_day_delivery' => true,
                'is_multiple_revisions' => true,
                'file_stored_day_count' => 45,
                'trial_period_day_count' => 7,
                'trial_period_design_count' => 20,
                'price_per_design' => 40,
                'is_active' => true,
                'is_displayed' => true,
                'icon_class' => 'lnr lnr-briefcase text-big'
            ],
            [
                'title' => 'Premium',
                'design_count' => 500,
                'is_via_email_allowed' => true,
                'addon_email_count' => 15,
                'is_same_day_delivery' => true,
                'is_multiple_revisions' => true,
                'file_stored_day_count' => 50,
                'trial_period_day_count' => 7,
                'trial_period_design_count' => 20,
                'price_per_design' => 30,
                'is_active' => true,
                'is_displayed' => true,
                'icon_class' => 'lnr lnr-diamond text-big'
            ],
            [
                'title' => 'Pay As You Go',
                'design_count' => -1,
                'is_via_email_allowed' => true,
                'addon_email_count' => 15,
                'is_same_day_delivery' => true,
                'is_multiple_revisions' => true,
                'file_stored_day_count' => 30,
                'trial_period_day_count' => -1,
                'trial_period_design_count' => -1,
                'price_per_design' => 50,
                'is_active' => true,
                'is_displayed' => true,
                'icon_class' => 'lnr lnr-hourglass text-big'
            ],
        ];

        if (DB::table('packages')->get()->count() <= 0) {
            DB::table('packages')->insert($packages);
        }
    }
}

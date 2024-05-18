<?php

namespace Database\Seeders;

use App\Models\SubscriptionPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubscriptionPlan::insert(
            [
                [
                    'name' => 'Monthly',
                    'stripe_price_id' => 'price_1PHfqrDlpfAX3z0vHpxE8OLw',
                    'trail_days' => 5,
                    'amount' => 12,
                    'type' => 0,
                    'enabled' => true,
                ],
                [
                    'name' => 'Yearly',
                    'stripe_price_id' => 'price_1PHfrxDlpfAX3z0vd6vFEtHz',
                    'trail_days' => 5,
                    'amount' => 100,
                    'type' => 1,
                    'enabled' => true,
                ],
                [
                    'name' => 'Lifetime',
                    'stripe_price_id' => 'price_1PHftFDlpfAX3z0vK1sj7w0H',
                    'trail_days' => 5,
                    'amount' => 400,
                    'type' => 2,
                    'enabled' => true,
                ],
            ]
        );
    }
}

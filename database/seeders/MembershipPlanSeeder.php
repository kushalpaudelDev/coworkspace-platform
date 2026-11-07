<?php

namespace Database\Seeders;

use App\Models\MembershipPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembershipPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Starter Desk',
                'description' => 'Perfect for freelancers. Get 24/7 access to our hot desk area and basic amenities.',
                'price' => 2000, // $20
                'included_booking_hours' => 2, // 2 hours of meeting room
                'billing_interval' => 'monthly',
                'status' => 'active',
            ],
            [
                'name' => 'Pro Dedicated',
                'description' => 'A dedicated desk just for you. Includes a locker, mail handling, and priority booking.',
                'price' => 5000, // $50
                'included_booking_hours' => 10, // 10 hours of meeting room
                'billing_interval' => 'monthly',
                'status' => 'active',
            ],
            [
                'name' => 'Private Office',
                'description' => 'A secure, soundproof office for small teams of 2-4 people. Fully furnished.',
                'price' => 10000, // $100
                'included_booking_hours' => 40, // 40 hours of meeting room
                'billing_interval' => 'monthly',
                'status' => 'active',
            ],
        ];

        foreach ($plans as $plan) {
            MembershipPlan::updateOrCreate(
                ['name' => $plan['name']],
                $plan
            );
        }
    }
}

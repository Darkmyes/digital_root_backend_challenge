<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('tickets')->count() > 0) {
            return;
        }

        for ($index = 0; $index < 20; $index++) {
            DB::table('tickets')->insert([
                'event_name' => Str::random(10),
                'seat_code' => Str::random(4),
                'is_vip' => (bool)random_int(0, 1),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

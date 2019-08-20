<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EpicSeeder::class);
        $this->call(GrowlSeeder::class);
        $this->call(AndSeeder::class);
        $this->call(PowerSeeder::class);
        $this->call(WithSeeder::class);
        $this->call(SteelSeeder::class);
        $this->call(MusclesSeeder::class);
        $this->call(GroupedSeeder::class);
        $this->call(ThatSeeder::class);
        $this->call(IsSeeder::class);
        $this->call(NotSeeder::class);
        $this->call(OkaySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(GarageSeeder::class);
        $this->call(CarSeeder::class);
    }
}
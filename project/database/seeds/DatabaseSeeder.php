<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(InfoTableSeeder::class);
        $this->call(SkillGroupTableSeeder::class);
        $this->call(SkillTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
    }
}

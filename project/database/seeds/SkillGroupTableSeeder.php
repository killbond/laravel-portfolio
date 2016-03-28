<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillGroupTableSeeder extends Seeder
{
    public $table = 'skill_group';

    public function run()
    {
        $data = ['Products', 'Frameworks', 'Technologies', 'Databases', 'Languages'];
        foreach($data as $item) {
            DB::insert("insert into {$this->table} (`name`) values (?)", [$item]);
        }
    }
}
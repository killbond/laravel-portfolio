<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoTableSeeder extends Seeder
{
    public $table = 'info';

    public function run()
    {
        $table = $this->table;
        DB::insert("insert into {$table} (alias, info) values (?, ?)", ['NAME', 'Talanin Andrew']);
        DB::insert("insert into {$table} (alias, info) values (?, ?)", ['PHONE', '+7 (902) 306-42-79']);
        DB::insert("insert into {$table} (alias, info) values (?, ?)", ['EMAIL', 'killbond@mail.ru']);
        DB::insert("insert into {$table} (alias, info) values (?, ?)", ['PHOTO_URL', 'https://pp.vk.me/c617119/v617119671/15fce/84a55OwJ6wo.jpg']);
    }
}
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillTableSeeder extends Seeder
{
    public $table = 'skill';

    public function run()
    {
        $data = [
            [1, 'Jenkins'],
            [1, 'TeamCity'],
            [1, 'GitLab'],
            [1, 'Redmine'],
            [1, 'GitHub'],
            [1, 'Bitbucket'],
            [1, 'Yandex Maps API'],
            [1, 'Google Maps API'],
            [1, 'Phinx'],
            [2, 'Yii (1, 2)'],
            [2, 'Zend (1, 2)'],
            [2, 'CodeIgniter'],
            [2, 'Symfony 2'],
            [2, 'node.js'],
            [2, 'jQuery'],
            [2, 'Twitter Bootstrap'],
            [2, 'Compass'],
            [2, '960 Grid System'],
            [3, 'HTML'],
            [3, 'CSS'],
            [3, 'SASS'],
            [3, 'Less'],
            [3, 'Apache'],
            [3, 'Nginx'],
            [3, 'Memcached'],
            [3, 'Sphinx'],
            [3, 'COMET'],
            [3, 'socket.io'],
            [3, 'Git'],
            [3, 'REST'],
            [3, 'SOAP'],
            [3, 'Vagrant'],
            [3, 'Docker'],
            [4, 'MySQL'],
            [4, 'MongoDB'],
            [4, 'PostgreSQL'],
            [4, 'SQLite'],
            [4, 'MSSQL'],
            [5, 'PHP (5.3, 5.4, 5.6)'],
            [5, 'ECMAScript (JavaScript)'],
            [5, 'SQL'],
            [5, 'С++'],
            [5, 'R'],
        ];

        foreach($data as $item) {
            DB::insert("insert into {$this->table} (`group_id`, `skill`) values (?, ?)", $item);
        }
    }
}
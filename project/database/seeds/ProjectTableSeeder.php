<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTableSeeder extends Seeder
{
    public $table = 'project';

    public function run()
    {
        $table = $this->table;
        $data = [
            ['Eternal Wars PVP', 'uploads/1459160619.jpg', 'Site, shop for private MMORG Rising Force Online server', 'PHP, CodeIgniter, MSSQL', 'Design, Layouts, Development, Maintenance'],
            ['Yana Venevskaya', 'uploads/1459161083.jpg', 'Internet shop for clothes brand Yana Venevskaya', 'PHP, Expression Engine 2, MySQL, jQuery', 'Layouts, Development'],
            ['Faq Cafe', 'uploads/1459162281.jpg', 'Moscow cafe poster site', 'HTML, CSS, SASS, Compass, jQuery', 'Layouts'],
            ['Alfa Models', 'uploads/1459162441.jpg', 'Site model agency', 'PHP, Expression Engine 2, MySQL, CSS, SASS, Compass, jQuery', 'Layouts, Development'],
            ['Fabrikant', 'uploads/1459162729.jpg', 'Site electronic marketplace', 'PHP, Zend 1, Zend 2, jQuery, MySQL, Sphinx', 'Bugfixing, Maintenance'],
            ['Avtosushi', 'uploads/1459163110.jpg', 'Internet shop foods', 'PHP, Yii 1, Yii 2, jQuery, Node.js, Sockets, PostgreSQL, MySQL', 'Maintenance, Services integration, Business process automatization'],
            ['GIPERNN', 'uploads/1459163561.jpg', 'Real estate website in Nizhny Novgorod', 'PHP, Yii2, MongoDB, jQuery', 'Maintenance, bugfixing, control of the code works application services'],
            ['RitmOLife', 'uploads/1459176961.jpg', 'Distributor product website', 'PHP, Yii2, MySQL, SASS, Compass, jQuery', 'Layouts, Development, Maintenance'],
            ['Smotorom', 'uploads/1459165297.jpg', 'Social network of owners of vehicles', 'PHP, Zend 2, MySQL, jQuery', 'Bugfixing, Maintenance'],
        ];

        foreach($data as $item) {
            DB::insert("insert into {$table} (name, img, description, technology, role) values (?, ?, ?, ?, ?)", $item);
        }
    }
}
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NormalizeSkillTable extends Migration
{
    public $table = 'skill_group';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function($table) {
            $table->increments('id');
            $table->string('name')->unique();
        });

        Schema::table('skill', function($table)
        {
            $table->dropColumn('group');
            $table->integer('group_id')->unsigned()->after('id');
            $table->foreign('group_id')
                ->references('id')
                ->on($this->table)
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::table('skill', function($table)
        {
            $table->dropForeign('skill_group_id_foreign');
            $table->dropColumn('group_id');
            $table->string('group');
        });

        Schema::dropIfExists($this->table);
    }
}

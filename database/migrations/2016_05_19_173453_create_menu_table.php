<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenuTable extends Migration
{
    protected $tablePrefix = '';

    public function __construct()
    {
        $this->tablePrefix = config('voyager.database.prefix');
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablePrefix.'menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create($this->tablePrefix.'menu_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('menu_id')->nullable();
            $table->string('title');
            $table->string('url');
            $table->string('target')->default('_self');
            $table->string('icon_class')->nullable();
            $table->string('color')->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('order');
            $table->timestamps();
        });

        Schema::table($this->tablePrefix.'menu_items', function (Blueprint $table) {
            $table->foreign('menu_id')->references('id')->on($this->tablePrefix.'menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->tablePrefix.'menu_items');
        Schema::drop($this->tablePrefix.'menus');
    }
}

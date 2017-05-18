<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOrderToDataRowsTable extends Migration
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
        Schema::table($this->tablePrefix.'data_rows', function (Blueprint $table) {
            $table->integer('order')->default(1)->after('details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table($this->tablePrefix.'data_rows', function (Blueprint $table) {
            $table->dropColumn('order');
        });
    }
}

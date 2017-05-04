<?php

use Illuminate\Database\Migrations\Migration;

class AddVoyagerUserFields extends Migration
{
    protected $tablePrefix = '';

    public function __construct()
    {
        $this->tablePrefix = config('voyager.database.prefix');
    }

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table($this->tablePrefix.'users', function ($table) {
            $table->string('avatar')->nullable()->after('email');
            $table->integer('role_id')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table($this->tablePrefix.'users', function ($table) {
            $table->dropColumn('avatar');
            $table->dropColumn('role_id');
        });
    }
}

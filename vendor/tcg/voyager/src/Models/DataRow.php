<?php

namespace TCG\Voyager\Models;

use Illuminate\Database\Eloquent\Model;

class DataRow extends Model
{
    protected $table = 'vy_data_rows';

    protected $guarded = [];

    public $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pohon extends Model
{
    protected $table = 'table_pohon';

    protected $fillable = ['id', 'ordo', 'famili', 'genus', 'species', 'jumlah'];
}

<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';

    protected $fillable = [
        'title',
        'file_path',
        'description',
    ];
}

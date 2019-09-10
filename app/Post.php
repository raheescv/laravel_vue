<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use JamesDordoy\LaravelVueDatatable\Traits\LaravelVueDatatableTrait;

class Post extends Model
{
    use LaravelVueDatatableTrait;
    protected $dataTableColumns = [
        'id' => [
            'searchable' => false,
        ],
        'title' => [
            'searchable' => true,
        ],
        'body' => [
            'searchable' => true,
        ]
    ];
    protected $fillable = ['title', 'body'];
}

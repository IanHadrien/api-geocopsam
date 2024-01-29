<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cultivation extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'probable_harvest_date'
    ];


    public function scopeFilter($query, $request)
    {
        if(!$request) return;
        return $query
            ->when($request['id'] ?? false, function ($query, $id) {
                return $query->where('id', 'like', '%' . $id . '%');
            })
            ->when($request['name'] ?? false, function ($query, $name) {
                return $query->where('name', 'like', '%' . $name . '%');
            });
    }
}

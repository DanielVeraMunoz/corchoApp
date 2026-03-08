<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'color'];

    // public function getColorClassAttribute() 
    // {
    //     $colors = [
    //         'red' => 'bg-red-200 text-red-800',
    //         'green' => 'bg-green-200 text-green-800',
    //         'blue' => 'bg-blue-200 text-blue-800',
    //         'pink' => 'bg-pink-200 text-pink-800',
    //         'cyan' => 'bg-cyan-200 text-cyan-800',
    //         'yellow' => 'bg-yellow-200 text-yellow-800',
    //     ];
    //     return $colors[$this->color] ?? 'bg-gray-200 text-gray-800';
    // }
}



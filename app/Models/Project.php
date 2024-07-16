<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "img",
        "category_id",
    ];

    //Tutti i Project avranno un metodo che restituisce la categoria a cui appartengono
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //Relazione molti-molti
    public function technologies() {
        return $this->belongsToMany(Technology::class);
    }
}

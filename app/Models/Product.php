<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
class Product extends Model
{
    use SoftDeletes;
    use HasFactory;
    use Searchable;
    
    protected $fillable=['name','price','detail'];
    protected $dates=['deleted_at'];

    public function toSearchableArray()
    {
        $array = $this->toArray();
 
        // Customize the data array...
 
        return $array;
    }
}

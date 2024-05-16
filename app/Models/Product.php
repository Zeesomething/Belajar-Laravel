<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name_product', 'price', 'description', 'id_brand', 'cover'];
    public $timestamps = true;

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'id_brand');
    }

    // Menghapus Image
    public function deleteImage() {
        if($this->cover && file_exists(public_path('image/product' . $this->cover))) {
            return unlink(public_path('image/product' . $this->cover));
        }
    }
}

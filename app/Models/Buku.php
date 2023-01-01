<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    
    use HasFactory,Sluggable;
    
    // yang gaboleh diisi
    protected $guarded = ['id'];
    protected $with = ['kategori', 'penulis'];
    public $table = "bukus";
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                 $query->where('judul', 'like', '%' . $search . '%')
                             ->orWhere('isi', 'like', '%' . $search . '%');
             });
         });
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function penulis()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    

    public function getRouteKeyName()
    {
        return 'slug';
    }

    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}

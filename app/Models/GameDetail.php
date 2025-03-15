<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameDetail extends Model
{
    protected $fillable = ['product_id', 'publisher_id', 'platform', 'release_date'];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function publisher() {
        return $this->belongsTo(Publisher::class);
    }

    public function genre() {
        return $this->hasMany(Genre::class, 'game_genres');
    }
}

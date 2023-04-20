<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;
    protected $fillable= ["id","name" , "email", "telephone_number"];
    
    public function accounts():HasMany
    {
        return $this->hasMany(Account::class);
    }

    protected static function newFactory()
    {
        return \Database\Factories\ClientFactory::new();
    }
}

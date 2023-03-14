<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Authenticatable
{
    use Notifiable;
    use HasApiTokens, HasFactory, Notifiable,HasPermissions;
    protected $table ='customers';
    protected $fillable = [
        'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id', 'id');
    }

    public function scopeSearch($query)
    {
        if ($key = request()->key) {
            $query = $query->where('name', 'like', '%' . $key . '%');
        }
        return $query;
    }
}

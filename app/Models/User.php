<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    // protected $appends = [
    //     'birth_date'
    // ];
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'gender',
        'photo',
        'birth_date',
        'province_id',
        'regency_id',
        'district_id',
        'village_id',
        'zip_code',
        'country',
        'role',
        'status',
        'last_seen'
    ];
    public function product()
    {
        return $this->hasMany(Product::class, 'id', 'user_id');
    }
    
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
    public function regency()
    {
        return $this->belongsTo(Regency::class);
    }
    public function district()
    {
        return $this->belongsTo(District::class);
    }
    public function village()
    {
        return $this->belongsTo(Village::class);
    }

    public function store()
    {
        return $this->hasOne(Store::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class, 'user_id', 'id');
    }
    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getBirthDateAttribute()
    {
        return Carbon::parse($this->attributes['birth_date'])->translatedFormat('d F Y');
    }
}

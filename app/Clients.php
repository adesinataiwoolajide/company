<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
class Clients extends Model
{
    use SoftDeletes;
    use LogsActivity;

    protected $table = 'clients';
    public $primaryKey = 'client_id';
    protected $guard_name = 'web';
    protected $fillable = [
        'client_name', 'client_banner', 'client_url'
    ];

    protected static $logAttributes = ['client_name', 'client_url'];

    public function getClientNameAttribute($value){
        return ucwords($value);
    }

    public function setClientNameAttribute($value){
        return $this->attributes['client_name'] = ucwords($value);
    }

    public function getClientBannerAttribute($value){
        return ucwords($value);
    }

    public function setClientBannerAttribute($value){
        return $this->attributes['client_banner'] = ucwords($value);
    }

    public function getClientUrlAttribute($value){
        return ucwords($value);
    }

    public function setClientUrlAttribute($value){
        return $this->attributes['client_url'] = ucwords($value);
    }

    public function getCreatedAtAttribute($value){
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }

    public function getDeletedAtAttribute($value){
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }

    public function getUpdatedAtAttribute($value){
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }
}

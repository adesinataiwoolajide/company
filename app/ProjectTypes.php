<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class ProjectTypes extends Model
{
    use SoftDeletes;
    use LogsActivity;

    protected $table = 'project_types';
    public $primaryKey = 'type_id';
    protected $guard_name = 'web';
    protected $fillable = [
        'type_name'
    ];

    protected static $logAttributes = ['type_name'];

    public function getTypeNameAttribute($value){
        return ucwords($value);
    }

    public function setTypeNameAttribute($value){
        return $this->attributes['type_name'] = ucwords($value);
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

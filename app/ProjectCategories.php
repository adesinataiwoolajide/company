<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
class ProjectCategories extends Model
{
    use SoftDeletes;
    use LogsActivity;

    protected $table = 'project_categories';
    public $primaryKey = 'category_id';
    protected $guard_name = 'web';
    protected $fillable = [
        'category_name'
    ];

    protected static $logAttributes = ['category_name'];

    public function getCategoryNameAttribute($value){
        return ucwords($value);
    }

    public function setCategoryNameAttribute($value){
        return $this->attributes['category_name'] = ucwords($value);
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

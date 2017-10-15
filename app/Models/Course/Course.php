<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course\Traits\CourseAttribute;
use App\Models\Course\Traits\CourseScopes;
use App\Models\Course\Traits\CourseRelationship;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\BaseAttribute;

class Course extends Model
{
    use BaseAttribute,
        CourseAttribute,
        CourseScopes,
        CourseRelationship,
        SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'courses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['course_title','course_type_id','default_teacher_id','default_hours'];


    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function getRestoreUrl()
    {
        return '';//route('',$this);
    }
    public function getDeletePermanentlyUrl()
    {
        return '';//route('',$this);
    }
    public function getDeleteUrl()
    {
        return '';//route('',$this);
    }
    public function getEditUrl()
    {
        return '';//route('',$this);
    }
    public function getShowUrl()
    {
        return '';//route('',$this);
    }
}

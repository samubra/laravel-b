<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course\Traits\CourseAttribute;
use App\Models\Course\Traits\CourseScopes;
use App\Models\Course\Traits\CourseRelationship;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use CourseAttribute,
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
}

<?php

namespace App\Models\Teacher;

use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher\Traits\TeacherAttribute;
use App\Models\Teacher\Traits\TeacherScopes;
use App\Models\Teacher\Traits\TeacherRelationship;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\BaseAttribute;

class Teacher extends Model
{
    use BaseAttribute,
        TeacherAttribute,
        TeacherScopes,
        TeacherRelationship,
        SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'teachers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['teacher_name','teacher_identity','certificate_no','teacher_type_id','job_title','teacher_phone','teacher_company','teacher_edu_id','teacher_photo'];


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

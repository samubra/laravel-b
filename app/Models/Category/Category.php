<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;
use App\Models\Category\Traits\CategoryAttribute;
use App\Models\Category\Traits\CategoryScopes;
use App\Models\Traits\BaseAttribute;

class Category extends Model
{
    use BaseAttribute,SoftDeletes,NodeTrait,CategoryAttribute,CategoryScopes;

    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['category_name', 'category_type','parent_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function getLftName()
    {
        return '_lft';
    }

    public function getRgtName()
    {
        return '_rgt';
    }

    public function getParentIdName()
    {
        return 'parent_id';
    }

    const typeList = [
        'train_type'    =>  '培训类别',
        'operation_type'=>  '操作项目类别',
        'plan_status'   =>  '培训计划状态',
        'apply_status'  =>  '培训申请受理状态',
        'edu_type'      =>  '文化程度',
        'health_type' =>  '健康状况',
        'teacher_type' => '教师类别'
    ];

    public function getRestoreUrl()
    {
        return url('/');//route('',$this);
    }
    public function getDeletePermanentlyUrl()
    {
        return url('/');//route('',$this);
    }
    public function getDeleteUrl()
    {
        return url('/');//route('',$this);
    }
    public function getEditUrl()
    {
        return url('/');//route('',$this);
    }
    public function getShowUrl()
    {
        return url('/');//route('',$this);
    }

}

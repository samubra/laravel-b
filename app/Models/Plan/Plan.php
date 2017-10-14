<?php

namespace App\Models\Plan;

use Illuminate\Database\Eloquent\Model;
use App\Models\Plan\Traits\PlanAttribute;
use App\Models\Plan\Traits\PlanScopes;
use App\Models\Plan\Traits\PlanRelationship;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use PlanRelationship,
        PlanAttribute,
        PlanScopes,
        SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'plans';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['plan_title','plan_type_id','plan_is_review_id','plan_status_id','plan_can_apply','end_apply_date','start_date','end_date','exam_date','contact_name','contact_phone','payment','description'];


    /**
     * @var array
     */
    protected $dates = ['deleted_at'];
}

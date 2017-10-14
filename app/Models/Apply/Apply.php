<?php

namespace App\Models\Apply;

use Illuminate\Database\Eloquent\Model;
use App\Models\Apply\Traits\ApplyAttribute;
use App\Models\Apply\Traits\ApplyScopes;
use App\Models\Apply\Traits\ApplyRelationship;
use Illuminate\Database\Eloquent\SoftDeletes;

class Apply extends Model
{
    use ApplyAttribute,
        ApplyScopes,
        ApplyRelationship,
        SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'applies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['plan_id','member_id','record_id','user_id','apply_is_review_id','health_id','apply_status_id','pay','theory_score','operate_score','remark'];


    /**
     * @var array
     */
    protected $dates = ['deleted_at'];
}

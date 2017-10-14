<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;
use App\Models\Member\Traits\MemberAttribute;
use App\Models\Member\Traits\MemberScopes;
use App\Models\Member\Traits\MemberRelationship;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use MemberAttribute,
        MemberScopes,
        MemberRelationship,
        SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'members';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','member_name','member_identity','member_edu_id','phone','address','company','remark'];


    /**
     * @var array
     */
    protected $dates = ['deleted_at'];
}

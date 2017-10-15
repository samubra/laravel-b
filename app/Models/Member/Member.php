<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;
use App\Models\Member\Traits\MemberAttribute;
use App\Models\Member\Traits\MemberScopes;
use App\Models\Member\Traits\MemberRelationship;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\BaseAttribute;

class Member extends Model
{
    use BaseAttribute,
        MemberAttribute,
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

<?php

namespace App\Models\Record;

use Illuminate\Database\Eloquent\Model;
use App\Models\Record\Traits\RecordAttribute;
use App\Models\Record\Traits\RecordScopes;
use App\Models\Record\Traits\RecordRelationship;
use Illuminate\Database\Eloquent\SoftDeletes;

class Record extends Model
{
    use RecordAttribute,
        RecordScopes,
        RecordRelationship,
        SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'records';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['member_id','record_type_id','first_get_date','print_date','review_date','reprint_date','is_reviewed','is_valid','remark'];


    /**
     * @var array
     */
    protected $dates = ['deleted_at'];
}

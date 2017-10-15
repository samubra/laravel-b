<?php
/**
 * Created by PhpStorm.
 * User: samubra
 * Date: 17-2-17
 * Time: 下午9:08
 */

namespace App\Models\Category\Traits;


trait CategoryScopes
{
    public function scopeType($query,$type)
    {
        if(is_array($type))
            return $query->whereIn('category_type', $type)->orderBy('_lft', 'asc');
        return $query->where('category_type',$type)->orderBy('_lft', 'asc');
    }
}

<?php
namespace App\Models\Category\Traits;
/**
 * Created by PhpStorm.
 * User: samubra
 * Date: 17-2-14
 * Time: 下午10:14
 */
trait CategoryAttribute
{

    public function getTypeNameAttribute()
    {
        $typeList = self::getTypeOptions();
        return isset($typeList[$this->category_type]) ? $typeList[$this->category_type] : 'NULL';
    }
    public static function getTypeOptions()
    {
        return self::typeList;
    }


}

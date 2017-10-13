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

    public function getEditButtonAttribute()
    {
        return '<a href="'.route('admin.category.edit', $this).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.edit').'"></i></a> ';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute()
    {
            return '<a href="'.route('admin.category.destroy', $this).'"
                 data-method="delete"
                 data-trans-button-cancel="'.trans('buttons.general.cancel').'"
                 data-trans-button-confirm="'.trans('buttons.general.crud.delete').'"
                 data-trans-title="'.trans('strings.backend.general.are_you_sure').'"
                 class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.delete').'"></i></a> ';

    }


    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '';
            //$this->getEditButtonAttribute().
            //$this->getDeleteButtonAttribute();
    }
}

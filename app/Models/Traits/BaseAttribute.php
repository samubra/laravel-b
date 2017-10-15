<?php
/**
 * Created by PhpStorm.
 * User: samubra
 * Date: 17-10-15
 * Time: 下午9:28
 */

namespace App\Models\Traits;


trait BaseAttribute
{

    /**
     * @return string
     */
    public function getShowButtonAttribute()
    {
        return '<a href="'.$this->getShowUrl().'" class="btn btn-xs btn-info"><i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.view').'"></i></a> ';
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute()
    {
        return '<a href="'.$this->getEditUrl().'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.edit').'"></i></a> ';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute()
    {
            return '<a href="'.$this->getDeleteUrl().'"
                 data-method="delete"
                 data-trans-button-cancel="'.trans('buttons.general.cancel').'"
                 data-trans-button-confirm="'.trans('buttons.general.crud.delete').'"
                 data-trans-title="'.trans('strings.backend.general.are_you_sure').'"
                 class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.delete').'"></i></a> ';
    }

    /**
     * @return string
     */
    public function getRestoreButtonAttribute()
    {
        return '<a href="'.$this->getRestoreUrl().'" name="restore_user" class="btn btn-xs btn-info"><i class="fa fa-refresh" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.backend.access.users.restore_user').'"></i></a> ';
    }

    /**
     * @return string
     */
    public function getDeletePermanentlyButtonAttribute()
    {
        return '<a href="'.$this->getDeletePermanentlyUrl().'" name="delete_user_perm" class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.backend.access.users.delete_permanently').'"></i></a> ';
    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        if ($this->trashed()) {
            return $this->restore_button.$this->delete_permanently_button;
        }

        return
            $this->show_button.
            $this->edit_button.
            $this->delete_button;
    }

    abstract public function getRestoreUrl();
    abstract public function getDeletePermanentlyUrl();
    abstract public function getDeleteUrl();
    abstract public function getEditUrl();
    abstract public function getShowUrl();

}
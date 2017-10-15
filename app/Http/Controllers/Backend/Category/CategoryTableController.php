<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;
use App\Repositories\Backend\Category\CategoryRepository;
use App\Http\Requests\Backend\Category\ManageCategoryRequest;

class CategoryTableController extends Controller
{
    /**
     * @var CategoryRepository
     */
    protected $category;

    /**
     * @param CategoryRepository $users
     */
    public function __construct(CategoryRepository $category)
    {
        $this->category = $category;
    }

    /**
     * @param ManageCategoryRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageCategoryRequest $request)
    {
        $categoryModel = $this->category->getForDataTable($request->get('type'), $request->get('trashed'));
        return Datatables::of($categoryModel)
        ->editColumn('category_type', function ($model) {
            return $model->type_name;
        })
            ->addColumn('actions', function ($model) {
                return e($model->action_buttons,true);
                //return '<a href="#edit-'.$model->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->withTrashed()
            ->make(true);
    }
}

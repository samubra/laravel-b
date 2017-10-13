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
     * @param UserRepository $users
     */
    public function __construct(CategoryRepository $category)
    {
        $this->category = $category;
    }

    /**
     * @param ManageUserRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageCategoryRequest $request)
    {
        return Datatables::of($this->category->getForDataTable($request->get('type'), $request->get('trashed')))
            ->select(['id','category_name','category_type','updated_at'])
        ->editColumn('category_type', function ($model) {
            return $model->getTypeNameAttribute();
        })
            ->addColumn('actions', function ($model) {
                return $model->action_buttons;
            })
            ->withTrashed()
            ->make(true);
    }
}

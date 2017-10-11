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
        return Datatables::of($this->users->getForDataTable($request->get('status'), $request->get('trashed')))
        ->escapeColumns(['first_name', 'last_name', 'email'])
        ->editColumn('confirmed', function ($user) {
            return $user->confirmed_label;
        })
            ->addColumn('roles', function ($user) {
                return $user->roles->count() ?
                    implode('<br/>', $user->roles->pluck('name')->toArray()) :
                    trans('labels.general.none');
            })
            ->addColumn('social', function ($user) {
                $accounts = [];

                // Note: If you have a provider that does not have a corresponding
                // font-awesome icon, you can override it here
                foreach ($user->providers as $social) {
                    $accounts[] = '<a href="'.route('admin.access.user.social.unlink',
                            [$user, $social]).'" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.backend.access.users.unlink').'" data-method="delete"><i class="fa fa-'.$social->provider.'"></i></a>';
                }

                return count($accounts) ? implode(' ', $accounts) : 'None';
            })
            ->addColumn('actions', function ($user) {
                return $user->action_buttons;
            })
            ->setRowClass(function ($user) {
                return ! $user->isConfirmed() && config('access.users.requires_approval') ? 'danger' : '';
            })
            ->withTrashed()
            ->make(true);
    }
}

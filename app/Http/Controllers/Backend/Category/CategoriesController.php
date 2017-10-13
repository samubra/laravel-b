<?php

namespace App\Http\Controllers\Backend\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Category\ManageCategoryRequest;
use App\Http\Requests\Backend\Category\UpdateCategoryRequest;
use App\Http\Requests\Backend\Category\StoreCategoryRequest;

class CategoriesController extends Controller
{
    public function index(ManageCategoryRequest $request)
    {
        //dd('samubra');
        return view('backend.category.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\ArticleCategory;
use App\Category;
use App\Http\Controllers\AdminController;
use App\Http\Requests\Admin\ArticleCategoryRequest;
use App\Http\Requests\Admin\DeleteRequest;
use App\Http\Requests\Admin\ReorderRequest;
use Illuminate\Support\Facades\Auth;
use Datatables;

class ArticleCategoriesController extends AdminController
{

    public function __construct()
    {
        view()->share('type', 'articlecategory');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.articlecategory.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::all();
        $categoriesArr = array();
        foreach($categories as $key => $values){
            $categoriesArr[$values->_id] = $values->_id;
        }
        $categories = $categoriesArr;
        return view('admin.articlecategory.create_edit', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ArticleCategoryRequest $request)
    {
        $articlecategory = Category::create($request->only(['_id', 'parent']));
        $articlecategory->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit(Category $articlecategory)
    {
        //$languages = Language::lists('name', 'id')->toArray();
        $categories = Category::all();
        $categoriesArr = array();
        foreach($categories as $key => $values){
            $categoriesArr[$values->_id] = $values->_id;
        }
        $categories = $categoriesArr;
        return view('admin.articlecategory.create_edit', compact('articlecategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(ArticleCategoryRequest $request, ArticleCategory $articlecategory)
    {
        //$articlecategory->user_id_edited = Auth::id();
        $articlecategory->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */

    public function delete(Category $category)
    {
        dd($category);
        return view('admin.articlecategory.delete', compact('category'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy(Category $articleCategory)
    {
        $articleCategory->delete();
    }

    /**
     * Show a list of all the languages posts formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function data()
    {
        $article_categories = Category::all()
            ->map(function ($article_category) {
                return [
                    'id' => $article_category->_id,
                    'parent' => $article_category->parent,
                    'created_at' => $article_category->created_at->format('d-m-Y  h:i A'),
                ];
            });
        return Datatables::of($article_categories)
            ->add_column('actions', '<a href="{{{ url(\'admin/articlecategory/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil"></span>  {{ trans("admin/modal.edit") }}</a>
                <a href="{{{ url(\'admin/articlecategory/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger iframe"><span class="glyphicon glyphicon-trash"></span> {{ trans("admin/modal.delete") }}</a>
                <input type="hidden" name="row" value="{{$id}}" id="row">')
            //->remove_column('id')
            ->make();
    }

    /**
     * Reorder items
     *
     * @param items list
     * @return items from @param
     */
    public function getReorder(ReorderRequest $request)
    {
        $list = $request->list;
        $items = explode(",", $list);
        $order = 1;
        foreach ($items as $value) {
            if ($value != '') {
                ArticleCategory::where('id', '=', $value)->update(array('position' => $order));
                $order++;
            }
        }
        return $list;
    }

}

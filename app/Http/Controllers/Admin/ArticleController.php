<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Article;
use App\Category;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\Admin\ArticleRequest;
use Illuminate\Support\Facades\Auth;
use Datatables;

class ArticleController extends AdminController {

    public function __construct()
    {
        view()->share('type', 'article');
    }
     /*
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index()
    {
        // Show the page
        return view('admin.article.index');
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
            if($values->parent) {
                if(isset($categoriesArr[$values->parent])) {
                    $categoriesArr[$values->parent][$values->_id] = $values->_id;
                } else {
                    $categoriesArr[$values->parent] = [$values->_id=>$values->_id];
                }
            }
        }
        $categories = $categoriesArr;
        return view('admin.article.create_edit', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ArticleRequest $request)
    {
        $article = Article::create($request->except('picture', 'files', 'image'));
        $article-> user_id = 1; //Auth::id();
        $picture = "";
        if(Input::hasFile('picture')) {
            $file = Input::file('picture');
            $filename = $file->getClientOriginalName();
            $extension = $file -> getClientOriginalExtension();
            $picture = sha1($filename . time()) . '.' . $extension;
        }
        $article->picture = $picture;
        $article->save();
        //dd($article);

        if(Input::hasFile('picture'))
        {
            $destinationPath = public_path() . '/images/article/'.$article->id.'/';
            Input::file('picture')->move($destinationPath, $picture);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Article $article)
    {
        $categories = Category::all();
        $categoriesArr = array();
        foreach($categories as $key => $values){
            if($values->parent) {
                if(isset($categoriesArr[$values->parent])) {
                    $categoriesArr[$values->parent][$values->_id] = $values->_id;
                } else {
                    $categoriesArr[$values->parent] = [$values->_id=>$values->_id];
                }
            }
        }
        $categories = $categoriesArr;
        return view('admin.article.create_edit',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $article -> user_id = 1; //Auth::id();
        $picture = "";
        if(Input::hasFile('image'))
        {
            $file = Input::file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file -> getClientOriginalExtension();
            $picture = sha1($filename . time()) . '.' . $extension;
        }
        $article -> picture = $picture;
        $article -> update($request->except('image'));

        if(Input::hasFile('image'))
        {
            $destinationPath = public_path() . '/images/article/'.$article->id.'/';
            Input::file('image')->move($destinationPath, $picture);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */

    public function delete(Article $article)
    {
        return view('admin.article.delete', compact('article'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
    }


    /**
     * Show a list of all the languages posts formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function data()
    {
        /*$articles = Article::with('category','language')
            ->get()
            ->map(function ($article) {
                return [
                    'id' => $article->id,
                    'title' => $article->title,
                    'category' => isset($article->category)?$article->category->title:"",
                    'language' => isset($article->language)?$article->language->name:"",
                    'created_at' => $article->created_at->format('d.m.Y.'),
                ];
            });*/
        $articles = Article::all(['_id', 'title', 'categories', 'introduction', 'views','created_at']) ->map(function ($article) {
                return [
                    'id' => $article->_id,
                    'title' => $article->title,
                    'category' => $article->categories,
                    'introduction' => substr($article->introduction, 0, 100),
                    'views' => ($article->views)?$article->views:0,
                    'created_at' => $article->created_at->format('d-m-Y'),
                ];
            });
        return Datatables::of($articles)
            ->add_column('actions', '<a href="{{{ url(\'admin/article/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm" ><span class="glyphicon glyphicon-pencil"></span>  {{ trans("admin/modal.edit") }}</a>
                    <a href="{{{ url(\'admin/article/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger iframe"><span class="glyphicon glyphicon-trash"></span> {{ trans("admin/modal.delete") }}</a>
                    <input type="hidden" name="row" value="{{$id}}" id="row">')
            ->remove_column('id')
            ->make();
    }
}

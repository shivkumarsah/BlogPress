<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Article;
use App\Category;
//use App\ArticleCategory;
use App\User;
use App\Photo;
use App\PhotoAlbum;

class DashboardController extends AdminController {

    public function __construct()
    {
        parent::__construct();
        view()->share('type', '');
    }

	public function index()
	{
        $title = "Dashboard";

        $news = Article::count();
        $category_1 = Category::where('parent',null)->count();
        $category_2 = Category::count();
        $newscategory = "$category_1/". ($category_2-$category_1);
        $users = rand(); //User::count();
        $photo = 2; //Photo::count();
        $photoalbum = 3; //PhotoAlbum::count();
		return view('admin.dashboard.index',  compact('title','news','newscategory','photo','photoalbum','users'));
	}
}
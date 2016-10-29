<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Social;
use App\Http\Requests\Admin\SocialRequest;
use Illuminate\Support\Facades\Input;
use Datatables;


class SocialController extends AdminController
{
    public function __construct()
    {
        view()->share('type', 'setting');
    }

    /*
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index()
    {
        $social = Social::first();
        //dd($social);
        return view('admin.setting.social', compact('social'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(SocialRequest $request)
    {
        $user = Social::first();
        $input = $request->all();
        $user->facebook = $input['facebook'];
        $user->twitter = $input['twitter'];
        $user->linkedin = $input['linkedin'];
        $user->gplus = $input['gplus'];
        $user->instagram = $input['instagram'];
        $user->youtube = $input['youtube'];

        $user->save();
        $social = $user;
        return view('admin.setting.social', compact('social'));
    }
}

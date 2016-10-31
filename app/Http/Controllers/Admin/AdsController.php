<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Ads;
use App\Http\Requests\Admin\AdsRequest;
use Illuminate\Support\Facades\Input;
use Datatables;


class AdsController extends AdminController
{
    public function __construct(AdsRequest $request)
    {
        //dd($request);
        view()->share('type', 'setting');
    }

    /*
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index()
    {
        $setting = Ads::first();
        return view('admin.setting.ads', compact('setting'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(AdsRequest $request)
    {
        dd($request);

        $user = Ads::first();
        $input = $request->all();
        $user->home_page = $input['home'];
        $user->listing_page = $input['category'];
        $user->detail_page = $input['article'];
        $user->common_header = $input['common_header'];
        $user->common_footer = $input['common_footer'];
        $user->common_sidebar = $input['common_sidebar'];
        $user->save();
        $setting = $user;
        return view('admin.setting.ads', compact('setting'));
    }
}

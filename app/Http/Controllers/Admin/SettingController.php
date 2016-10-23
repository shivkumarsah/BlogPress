<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Setting;
use App\Http\Requests\Admin\SettingRequest;
use Illuminate\Support\Facades\Input;
use Datatables;


class SettingController extends AdminController
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
        $setting = Setting::first();
        return view('admin.setting.index', compact('setting'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(SettingRequest $request)
    {

        $user = Setting::first(); //new Setting;
        $input = $request->all();
        //$user->copyscrap_status = $input['copyscrap_status'];
        $user->copyscrap_api = $input['copyscrap_api'];
        $user->copyscrap_check = $input['copyscrap_check'];
        $user->content_req_length_percentage = $input['content_req_length'];
        $user->google_analytics = $input['google_analytics'];
        $user->google_webmasters = $input['google_webmasters'];

        $user->save();
        $setting = $user;
        return view('admin.setting.index', compact('setting'));
    }
}

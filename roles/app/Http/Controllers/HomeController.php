<?php

namespace App\Http\Controllers;

use App\Models\GroupPermissionModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home()
    {
        // get user group id
        $group_id = auth()->user()->group_id;

        // get user permissions
        $homeSlug = "home";

        $checkPermission = GroupPermissionModel::where('group_id', $group_id)->where('slug', $homeSlug)->first();

        if ($checkPermission) {
            echo "You have permission to access this page";
        } else {
            echo "You don't have permission to access this page";
        }

    }
}
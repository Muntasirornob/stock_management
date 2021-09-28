<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Manager;
use App\Models\Product;
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
        $admin=Admin::all();
        $adminCount=$admin->count();
        $manager=Manager::all();
        $manageCount=$manager->count();
        $product=Product::all();
        $productCount=$product->count();
        return view ('admin.index',compact('adminCount','manageCount','productCount'));

    }
}

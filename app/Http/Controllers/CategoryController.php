<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

//contruct for current user
    public $user;
    public function __construct()
    {
        $this->middleware(function($request,$next){

    $this->user=Auth::user();
    return $next($request);
        });
    }

   // add Category view page
   public function AddCategory()
   {
    if(is_null($this->user) || !$this->user->can('product.create') || !$this->user->can('product.update') || !$this->user->can('product.delete') || !$this->user->can('product.view')){
        abort('403','You dont have acces!!!!');
    }

       return view('category.AddCategory');
   }

   // Category list View page


        public function StoreCategory(Request $request)
        {
            $validateData = $request->validate([
                'category_name' => 'required',

            ]);
            $cat= new Category;
            $cat->category_name=$request->category_name;


            $cat->save();
            $notification = array(
                'message' => 'Category Add Sucessyfuly',
                'alert-type' => 'info',
              );

              return redirect()->back()->with($notification);



        }


   public function CategoryList()
   {
    $categories  = Category::all();
       return view('category.CategoryList',compact('categories'));
   }

   public function EditCategory($id)
{
    $category = Category::find($id);
    return view('category.CategoryEdit',compact('category'));
}

public function UpdateCategory(Request $request,$id)
{
    $validateData = $request->validate([
    'category_name' => 'required',

]);
    $category=Category::find($id);
    $category->category_name=$request->category_name;
    $category->save();
    $notification = array(
        'message' => 'Category Edited Sucessyfuly',
        'alert-type' => 'success',
      );

      return redirect()->back()->with($notification);
}
public function DeleteCategory($id)
{
    Category::destroy($id);
    return redirect('category/list');

}

}



<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\FeaturedCategory;

class FeaturedController extends Controller
{
    public function view_featured_categories(){
        $categories = Category::all();
        return view ('admin.featured.category', compact('categories'));
    }

    public function store_featured_category(Request $request){
        $category = FeaturedCategory::find($request->category_id);
        if ($category){
            return redirect('/admin/featured/categories')->with('error', 'Category already added to the Featured List!');
        }
        else{
            $featuredCategory = new FeaturedCategory;
            $featuredCategory->category_id = $request->category_id;
            $featuredCategory->save();
    
            return redirect('/admin/featured/categories')->with('success', 'Category successfully added to Featured List!');
        }
    }

    public function view_featured_courses(){
        return view ('admin.featured.course');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu\Menu;
use App\Models\Menu\SubMenu;
use App\Models\Slider\Slider;
use App\Models\Brand\Brand;
use App\Models\Category\Category;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage()
    {
        $menus = Menu::where('is_published',0)->get();
        $sliders = Slider::where('is_published',0)->get();
        $brands = Brand::where('is_featured', 1)->where('is_published', 1)->get();
        $categories = Category::get();
        $products = Product::where('is_featured', 1)->get();
        return view('frontend.home',compact('menus','sliders','brands','categories','products'));
    }

    public function quickViewProduct(Request $request){
        $product_id = $request->get('product_id');
        if($product_id){
            $product = Product::find($product_id);
            return response()->json([
                'status' => true,
                'message' => 'success',
                'data' => $product
            ]);
        } else
        {
            return response()->json([
                'status' => false,
                'message' => 'No Such Product',
                'data' => NULL
            ]);

        }
    }
   
}

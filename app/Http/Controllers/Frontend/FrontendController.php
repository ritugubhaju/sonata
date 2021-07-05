<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu\Menu;
use App\Models\Menu\SubMenu;
use App\Models\Page\Page;
use App\Models\Slider\Slider;
use App\Models\Brand\Brand;
use App\Models\Category\Category;
use App\Models\SubCategory\SubCategory;
use App\Models\Product\Product;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMailNotifiable;
use App\Mail\SendContactInfo;

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
        $categories = Category::get()->take(4);
        $subcategories = SubCategory::where('is_featured', 1)->where('is_published', 1)->get();
        $products = Product::where('is_featured', 1)->get();
        $bestsellerproducts = Product::where('best_seller', 1)->get();
        return view('frontend.home',compact('menus','sliders','brands','categories','subcategories','products','bestsellerproducts'));
    }

    public function page($slug = null)
    {
        
        if ($slug) {
            
            $page = Page::whereSlug($slug)->whereIsPublished(1)->first();

            if ($page == null) {
                return view('frontend.errors.404');
            }

            if ($page) {
                $pages = Page::whereIsPublished(1)->whereIsPrimary(0)->whereNotIn('id', [$page->id])->take(10)->inRandomOrder()->get();
                if ($pages) {
                    return view('frontend.page', compact('page', 'pages'));
                }
            } else {
                return view('frontend.errors.404');
            }
        }
    }

    public function contact()
    {
        return view('frontend.contact.contact');
    }

    public function sendcontact(Request $request)
    {
        $data = $request->all();
        //dd($request->all());
        Mail::to('ritu.gubhaju20@gmail.com')->send(new SendContactInfo($data));
        return redirect()->back()->withSuccess(trans('Contact Inquiry Send Successfully'));
    }

    public function productsDetail(Product $products)
    {
        return view('frontend.product.detail', compact('products'));
    }

    public function quickViewProduct(Request $request){
        $product_id = $request->get('product_id');
        if($product_id){
            $product = Product::find($request->product_id);
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

    public function about()
    {
        return view('frontend.about.about');
    }
   
}

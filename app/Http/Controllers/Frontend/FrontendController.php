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
        $categories = Category::get();
        $subcategories = SubCategory::where('is_featured', 1)->where('is_published', 1)->get();
        $products = Product::where('is_featured', 1)->get();
        $bestsellerproducts = Product::where('best_seller', 1)->get();
        return view('frontend.home',compact('menus','sliders','brands','categories','subcategories','products','bestsellerproducts'));
    }

    
    public function contact()
    {
        $categories = Category::get();
        $subcategories = SubCategory::where('is_featured', 1)->where('is_published', 1)->get();
        $products = Product::where('is_featured', 1)->get();
        return view('frontend.contact.contact',compact('categories','subcategories','products'));
    }

    public function sendcontact(Request $request)
    {
        $categories = Category::get();
        $subcategories = SubCategory::where('is_featured', 1)->where('is_published', 1)->get();
        $products = Product::where('is_featured', 1)->get();

        $data = $request->all();
        Mail::to('ritu.gubhaju20@gmail.com')->send(new SendContactInfo($data));
        return redirect()->back()->withSuccess(trans('Contact Inquiry Send Successfully'));
    }

    public function getproductbyCategory(Category $category, Product $products , Subcategory $subcategory,$slug)
    {
        $category = Category::where('slug',$slug)->first();   
        $subcategory = SubCategory::where('id', $category->id)->get();
        $product = Product::where('category_id',$category->id)->paginate(15);

        $categories = Category::get();
        $subcategories = SubCategory::where('is_featured', 1)->where('is_published', 1)->get();
        $products = Product::where('is_featured', 1)->get();
        return view('frontend.product.productcategory', compact('products','product','category','categories','subcategory','subcategories'));
    }

    public function getproductbySubCategory(Category $category, Product $products , Subcategory $subcategory,$slug)
    {
        $category = Category::where('id',$slug)->first();
        $subcategory = SubCategory::where('slug', $slug)->first();
        $product = Product::where('subcategory_id',$subcategory->id)->paginate(15);

        $categories = Category::get();
        $subcategories = SubCategory::where('is_featured', 1)->where('is_published', 1)->get();   
        $products = Product::where('is_featured', 1)->get();
       
        return view('frontend.product.productsubcategory', compact('products','product','category','categories','subcategory','subcategories'));
    }

    public function productdetailbyCategory(Product $products)
    {
        $categories = Category::get();
        $subcategories = SubCategory::where('is_featured', 1)->where('is_published', 1)->get();
        $products = Product::where('slug',$products->slug)->first();
        return view('frontend.product.productcategorydetail', compact('products','categories','subcategories'));
    }

    public function quickViewProduct(Request $request){
        $categories = Category::get();
        $subcategories = SubCategory::where('is_featured', 1)->where('is_published', 1)->get();
        $products = Product::where('is_featured', 1)->get();
        
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
        $categories = Category::get();
        $subcategories = SubCategory::where('is_featured', 1)->where('is_published', 1)->get();
        $products = Product::where('is_featured', 1)->get();
        return view('frontend.about.about',compact('categories','subcategories','products'));
    }

    public function searchResult(Request $request){
        $categories = Category::get();
        $subcategories = SubCategory::where('is_featured', 1)->where('is_published', 1)->get();
        $products = Product::where('is_featured', 1)->get();
        
        $search_title = $request->keyword;
        if(isset($request->keyword) && !empty($request->keyword)){
            $product = Product::where('title','LIKE',"%".$request->keyword."%")
                        ->orWhere('description','LIKE',"%".$request->keyword."%")->get();
        }
        return view('frontend.product.productsearch', compact('categories','subcategories','products','product','search_title'));
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
   
}

<?php 
 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use App\Models\Categories; 
 
class HomepageController extends Controller 
{ 
  public function index() 
  { 
      $categories = categories::all();
      
      return view('web.homepage', [ 
        'categories' => $categories, 
    ]);     
  } 
  
  public function products() 
  { 
      $title = "Products";
      return view('web.products', ['title' => $title]); 
  } 
  
  public function product($slug) 
  { 
      $title = "Single Product";
      return view('web.product', ['title' => $title, 'slug' => $slug]); 
  } 
  
  public function categories() 
  { 
      $title = "Categories";
      return view('web.categories', ['title' => $title]); 
  } 
  
  public function category($slug) 
  { 
      $category = Categories::find($slug); 

      return view('web.category_by_slug', ['slug' => $slug, 'category' => $category]); 
  } 
  
  public function cart() 
  { 
      $title = "Cart";
      return view('web.cart', ['title' => $title]); 
  } 
  
  public function checkout() 
  { 
      $title = "Checkout";
      return view('web.checkout', ['title' => $title]); 
  }
  
} 
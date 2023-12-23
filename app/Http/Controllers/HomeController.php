<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Categorys;
use App\Components\Recusive;

class HomeController extends Controller
{
    function index(){
        $drink = DB::table('products')
        ->select('id', 'name','price','image','description')->where('category_id', 1)->limit(4)->get();
        $hamburger = DB::table('products')->select('id', 'name','price','image','description')->where('category_id', 6)->limit(4)->get();
        $sandwich = DB::table('products')->select('id', 'name','price','image','description')->where('category_id', 5)->limit(4)->get();
        $bread = DB::table('products')->select('id', 'name','price','image','description')->where('category_id', 4)->limit(4)->get();
        return view('index', compact('drink','hamburger','sandwich','bread'));
    }
    function menu(){
        $htmlOption = $this->getCategory(0);
        $query = DB::table('products')
        ->select('id', 'name','price','image','description')
        ->get();
        $perPage = 8; // Số tin trên mỗi trang
        $currentPage = request()->input('page', 1); // Lấy số trang hiện tại từ request

        // Tạo LengthAwarePaginator cho phân trang
        $products = new LengthAwarePaginator(
            $query->forPage($currentPage, $perPage), // Lấy dữ liệu cho trang hiện tại
            $query->count(), // Tổng số tin
            $perPage, // Số tin trên mỗi trang
            $currentPage, // Trang hiện tại
            ['path' => request()->url(), 'query' => request()->query()]
        );
        return view('menu', ['products'=>$products,'htmlOption'=>$htmlOption]);
    }
    function about(){
        return view('about');
    }
    function contact(){
        return view('contact');
    }
    function blog(){
        return view('blog');
    }
    function productDetails($id){
        $product = DB::table('products')
        ->where('id', $id)
        ->first();
        return view('product_details', ['product'=>$product]);
    }
    function kind($id){
        $htmlOption = $this->getCategory(0);
        $category = Categorys::with('children')->find($id);
        $allSubCategory = $category->children->pluck('id')->push($id)->toArray();
        $perPage = 8; // Số tin trên mỗi trang
        $currentPage = request()->input('page', 1); // Lấy số trang hiện tại từ request

        // Tạo LengthAwarePaginator cho phân trang
        $products = Products::whereIn('category_id', $allSubCategory)->paginate($perPage, ['*'], 'page', $currentPage);
        return view('menu', ['products'=>$products,'htmlOption'=>$htmlOption]);
    }
    function cart(){
        return view('cart');
    }
    public function getCategory($parent_id){
        $data = Categorys::all();
        $recusive = new Recusive($data);
        $htmlOption =  $recusive->categoryRecusiveMenu($parent_id);
        return $htmlOption;
    }
}

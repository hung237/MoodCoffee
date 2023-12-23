<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categorys;
use App\Components\Recusive;
use Illuminate\Support\Str;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{
    private $products;

    public function __construct(Products $products){
        $this->products = $products;
    }

    public function list(){
        $query = $this->products->all();
        $perPage = 5;
        $currentPage = request()->input('page', 1);
        $products = new LengthAwarePaginator(
            $query->forPage($currentPage, $perPage),
            $query->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );
        return view('admin.product.list', compact('products'));
    }

    public function create(){
        $htmlOption =  $this->getCategory(0);
        return view('admin.product.create', compact('htmlOption'));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ], [
            'name.required' => 'Tên sản phẩm không được để trống.',
            'category_id.required' => 'Danh mục không được để trống.',
            'category_id.exists' => 'Danh mục chưa được chọn.',
            'price.required' => 'Giá sản phẩm không được để trống.',
            'image.required' => 'Ảnh sản phẩm chưa được chọn.',
            'image.image' => 'Ảnh sản phẩm không đúng định dạng.',
            'description.required' => 'Mô tả sản phẩm không được để trống.',
        ]);
        
        if ($request->hasFile('image') && $validatedData) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
    
            $image->move(public_path('assets/images/products/'), $imageName);
    
            $this->products->create([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'price' => $request->price,
                'image' =>  $imageName,
                'description' => $request->description,
            ]);
    
            return redirect()->back()->with('success', 'Thêm sản phẩm thành công!');
        } else {
            return redirect()->back()->withErrors(['message' => 'Có lỗi xảy ra. Vui lòng thử lại.'])->withInput();
        }
    }
    
    

    public function edit($id){
        $product = $this->products->find($id);
        $htmlOption = $this->getCategory($product->category_id);
        return view('admin.product.update', compact('product', 'htmlOption'));
    }
    
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
        ], [
            'name.required' => 'Tên sản phẩm không được để trống.',
            'category_id.required' => 'Danh mục không được để trống.',
            'category_id.exists' => 'Danh mục chưa được chọn.',
            'price.required' => 'Giá sản phẩm không được để trống.',
            'description.required' => 'Mô tả sản phẩm không được để trống.',
        ]);
        if ($request->hasFile('image')) {
            if($validatedData){
                // tìm tên ảnh sản phẩm cũ
                $oldImage = $this->products->find($id)->image;
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
        
                $image->move(public_path('assets/images/products/'), $imageName);
        
                $this->products->find($id)->update([
                    'name' => $request->name,
                    'category_id' => $request->category_id,
                    'price' => $request->price,
                    'image' =>  $imageName,
                    'description' => $request->description,
                ]);
                unlink(public_path('assets/images/products/' . $oldImage));
                return redirect()->back()->with('success', 'Cập nhập sản phẩm thành công!');
            }
            else {
                return redirect()->back()->withErrors(['message' => 'Có lỗi xảy ra. Vui lòng thử lại.'])->withInput();
            }
        } else{ 
            if($validatedData){
                $this->products->find($id)->update([
                    'name' => $request->name,
                    'category_id' => $request->category_id,
                    'price' => $request->price,
                    'description' => $request->description,
                ]);
                return redirect()->back()->with('success', 'Cập nhập sản phẩm thành công!');
            }
            else {
                return redirect()->back()->withErrors(['message' => 'Có lỗi xảy ra. Vui lòng thử lại.'])->withInput();
            }
        }
    }

    public function remove($id){
        $product = $this->products->find($id);

        if (!$product) {
            // Xử lý khi không tìm thấy bản ghi
            return redirect('/admin/category')->with('error', 'Không tìm thấy sản phẩm.');
        }

        $product->delete();
        return redirect('/admin/product')->with('success', 'Đã xóa sản phẩm thành công.');
    }
    public function getCategory($parent_id){
        $data = Categorys::all();
        $recusive = new Recusive($data);
        $htmlOption =  $recusive->categoryRecusive($parent_id);
        return $htmlOption;
    }
}

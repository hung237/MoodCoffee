<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorys;
use App\Components\Recusive;
use Illuminate\Support\Str;
use Illuminate\Pagination\LengthAwarePaginator;

class CategoryController extends Controller
{
    private $categorys;

    public function __construct(Categorys $categorys){
        $this->categorys = $categorys;
    }

    public function list(){
        $query = $this->categorys->all();
        $perPage = 5;
        $currentPage = request()->input('page', 1);
        $categorys = new LengthAwarePaginator(
            $query->forPage($currentPage, $perPage),
            $query->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );
        return view('admin.category.list', compact('categorys'));
    }

    public function create(){
        $htmlOption =  $this->getCategory(0);
        return view('admin.category.create', compact('htmlOption'));
    }

    public function store(Request $request){
        $this->categorys->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => str::slug($request->name)
        ]);
        return redirect('/admin/category');
    }

    public function edit($id){
        $category = $this->categorys->find($id);
        $htmlOption = $this->getCategory($category->parent_id);
        return view('admin.category.update', compact('category', 'htmlOption'));
    }
    
    public function update(Request $request, $id){
        $this->categorys->find($id)->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => str::slug($request->name)
        ]);
        return back();
    }

    public function remove($id){
        $category = $this->categorys->find($id);

        if (!$category) {
            // Xử lý khi không tìm thấy bản ghi
            return redirect('/admin/category')->with('error', 'Không tìm thấy danh mục.');
        }

        $category->delete();
        return redirect('/admin/category')->with('success', 'Đã xóa danh mục thành công.');
    }
    public function getCategory($parent_id){
        $data = $this->categorys->all();
        $recusive = new Recusive($data);
        $htmlOption =  $recusive->categoryRecusive($parent_id);
        return $htmlOption;
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Components\Recusive;
use Illuminate\Support\Str;
use App\Http\Requests\Category\StoreCategogyRequest;
class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category){
        $this->category = $category;
    }

    public function index(){
        $categories = $this->category->latest()->paginate(5);
        return view('admin.category.index', compact('categories'));
    }
    public function create(){
        $htmlOption = $this->getCategory($parentId='');
      //  dd($htmlOption);
        return view('admin.category.add',compact('htmlOption'));
    }
    public function store(StoreCategogyRequest $request){
        try{
            $category = Category::create([
                'name'=> $request->name,
                'parent_id'=> $request->parent_id,
                'slug'=> Str::slug($request->name)]);
            return redirect()->route('categories.index')->with('success','Thêm mới thành công!');

        }catch(\Throwable $th){
            return redirect()->back()->with('error','Thêm mới thất bại!');
        }



    }

    public function getCategory($parentId){
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return $htmlOption;
    }

    public function edit($id){
        $category = Category::find($id);
        $htmlOption = $this->getCategory($category->parent_id);
        return view('admin.category.edit',compact('category','htmlOption'));
    }
    public function update($id, Request $request){
        $this->category->find($id)->update([
            'name'=> $request->name,
            'parent_id'=> $request->parent_id,
            'slug'=> Str::slug($request->name)
        ]);
        return redirect()->route('categories.index')->with('success','Category updated!');
    }
    public function delete($id){
        $this->category->find($id)->delete();
        return redirect()->route('categories.index')->with('success','Category deleted!');

    }
}

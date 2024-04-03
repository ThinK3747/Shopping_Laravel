<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ImgProduct;
use App\Components\Recusive;
use App\Http\Requests\Product\StoreProductRequest;
///use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy("id", "desc")->paginate(5);
        ////$products = DB::table('products')->latest()->paginate(5); // lỗi không load Name Category
        return view("admin.product.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $htmlOption = $this->getCategory($parentId='');
        return view("admin.product.add", compact("htmlOption"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {

        $fileName = $request->photo->getClientOriginalName();
        $request->photo->storeAs("public/images", $fileName);
        $request->merge(['image' => $fileName]);
        try {
            $product = Product::create($request->all());
            if ($product && $request->hasFile('photos')) {
                foreach ($request->photos as $key => $value) {
                    $fileNames = $value->getClientOriginalName();
                    $value->storeAs('public/images', $fileNames);
                    ImgProduct::create([
                        'product_id' => $product->id,
                        'image' => $fileNames
                    ]);
                }
                return redirect()->route('product.index')->with('success', 'Thêm mới thành công!');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Thêm mới thất bại!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function getCategory($parentId){
        $data = Category::all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return $htmlOption;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $product_id)
    {

        //$categories = Category::all();
        $product = Product::findOrFail($product_id);
        $htmlOption = $this->getCategory($product->category_id);
        return view('admin.product.edit',compact('htmlOption','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $product_id)
    {
        $validatedData = $request->validated();
        $product = Category::findOrFail($validatedData['category_id'])
                        ->products()->where('id',$product_id)->first();
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Product $product)
    {
        try {
            $product->delete();
            return redirect()->route('product.index')->with('success', 'Xoá thành công!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Xoá thất bại!');
        }
    }
    public function trash()
    {
        $products = Product::withTrash();
        return view('admin.product.trash');
    }
}

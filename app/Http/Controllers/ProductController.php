<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->paginate(3);

        return view('product.index',compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('product.add', compact(['category']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',

            'status' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ],
            [
                'name.required'=>'Không được để trống',
                'description.required'=>'Không được để trống',

                'status.required'=>'Không được để trống',
                'price.required'=>'Không được để trống',
                'category_id.required'=>'Không được để trống',
            ]);
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->status = $request->status;
        $product->category_id  = $request->category_id ;
        if ($request->hasFile('image')) {
            $get_image = $request->file('image');
            $path = 'public\uploads\product';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $product->image = $new_image;
            $data['product_image'] = $new_image;
        }
        // dd($product);
        $product->save();
        // alert()->success('Thêm sản phẩm','thành công');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productshow = Product::findOrFail($id);
        $param =[
            'productshow'=>$productshow,
        ];

        // $productshow-> show();
        return view('product.show',  $param );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::get();
        return view('product.edit', compact(['product','categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->status = $request->status;
        $product->category_id  = $request->category_id ;

        $get_image=$request->image;
        if($get_image){
            $path='public\uploads\product'.$product->image;
            if(file_exists($path)){
                unlink($path);
            }
        $path='public\uploads\product';
        $get_name_image=$get_image->getClientOriginalName();
        $name_image=current(explode('.',$get_name_image));
        $new_image=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);
        $product->image=$new_image;
        $data['product_image']=$new_image;
        }
        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');

    }
    public function search(Request $request)
    {
    $search = $request->input('search_product');
    if (!$search) {
        return redirect()->route('product.index');
    }
    $products = Product::where('name', 'LIKE', '%' . $search . '%')->paginate(5);
    return view('product.index', compact('products'));
    }
}

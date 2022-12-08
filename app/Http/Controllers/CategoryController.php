<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $this->authorize('viewAny', Category::class);
      $categories = Category::paginate(3);
      $param =[
        'categories'=> $categories
      ];
      return view('category.index', $param );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Category::class);
        return view('category.add');
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
        ],
            [
                'name.required'=>'Không được để trống',
            ]
            // $.ajax(option)
            // alertify.success('Cập nhật thành công');

    );
        $category = new Category();
        $category->name = $request->name;
        $category->save($request->all());
        // alert()->success('Thêm sản phẩm','thành công');
        // return redirect('home');
        return redirect()->route('category.index')->with('status','Thêm danh mục thành công');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('update', Category::class);
        $categories = Category::find($id);
        return view('category.edit', compact(['categories']));
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
    $categories = Category::find($id);
    $categories->name = $request->name;
    $categories->save();
    alert()->success('Sửa sản phẩm','thành công');
    // return redirect('home');
    return redirect()->route('category.index')->with('status','Sửa danh mục thành công');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('forceDelete', Category::class);
        $category=Category::onlyTrashed()->findOrFail($id);
        $category->forceDelete()->with('status','Xóa danh mục thành công');

    }
    public function search(Request $request)
    {
    $search = $request->input('search');
    if (!$search) {
        return redirect()->route('category.index');
    }
    $categories = Category::where('name', 'LIKE', '%' . $search . '%')->paginate(5);
    return view('category.index', compact('categories'));
    }
    public  function softdeletes($id){
        $this->authorize('delete', Category::class);
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $category = Category::findOrFail($id);
        $category->deleted_at = date("Y-m-d h:i:s");
        $category->save();
        return redirect()->route('category.index');
    }
    public  function trash(){
        $this->authorize('viewtrash', Category::class);
        $categories = Category::onlyTrashed()->get();
        $param = ['categories'    => $categories];
        return view('category.trash', $param);
    }
    public function restoredelete($id){
        $this->authorize('restore', Category::class);
        $categories=Category::withTrashed()->where('id', $id);
        $categories->restore();
        return redirect()->route('category.trash');


    }

}

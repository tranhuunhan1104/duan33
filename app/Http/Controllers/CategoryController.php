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
            'description' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ],
            [
                'name.required'=>'Không được để trống',
                'description.required'=>'Không được để trống',
                'slug.required'=>'Không được để trống',
                'status.required'=>'Không được để trống',
            ]
            // $.ajax(option)
            // alertify.success('Cập nhật thành công');

    );
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->slug = $request->slug;
        $category->status = $request->status;
        $category->save($request->all());
        // return redirect('home');
        return redirect()->route('category.index');


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
    $categories->description = $request->description;
    $categories->status = $request->status;
    $categories->slug = $request->slug;
    $categories->save();

    // return redirect('home');
    return redirect()->route('category.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        // return redirect('home');
        return redirect()->route('category.index');

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
}

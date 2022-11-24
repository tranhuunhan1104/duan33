<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checklogin(Request $request)
    {
        // dd(123);
        $arr = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::guard('customers')->attempt($arr)) {
            return redirect()->route('shop');
        } else {
            return redirect()->route('login.index');
        }
    }
    public function indexlogin()
    {
        return view('customer.login');
    }
    public function index()
    {
        $product = Product::get();
        $param =[
            'product'=> $product
          ];
        return view('cart',$param );
    }

    public function shop()
    {
        $product = Product::get();
      $param =[
        'product'=> $product
      ];
      return view('shop', $param );
        // return view('layout.shop' );
    }

    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            $totalCart = number_format(($cart[$request->id]["price"]) * $cart[$request->id]["quantity"]);
            $totalAllCart = 0;
            $TotalAllRefreshAjax = 0;
            foreach ($cart as $id => $details) {
                $totalAllCart = $details['price'] * $details['quantity'];
                $TotalAllRefreshAjax += $totalAllCart;
            }
            session()->put('cart', $cart);
            session()->flash('message', 'Cart updated successfully');
            return response()->json([
                'status' => 'cập nhật thành công',
                'totalCart' => '' . $totalCart,
                'TotalAllRefreshAjax' => '' . number_format($TotalAllRefreshAjax),
            ]);
        }
    }


    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->put('cart', $cart);
            return response()->json(['status' => 'Xóa đơn hàng thành công']);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( $id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "nameVi" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                'image' => $product->image,
                'max' => $product->quantity,
            ];
        }
        session()->put('cart', $cart);
        $data = [];
        $data['cart'] = session()->has('cart');
        return redirect()->route('cart.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Cart($id)
    {
        $products = Product::all();
        $categories = Category::all();
        $param = [
            'products' => $products,
            'categories' => $categories,
        ];
        return view('shop.cart', $param);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}

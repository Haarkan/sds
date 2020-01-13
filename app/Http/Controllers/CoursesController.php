<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Courses;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Support\Facades\Auth;
class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Courses::All();
        return view('courses')->with('courses',$courses);
    }

    public function cart()
    {
        if (Auth::check()) {
            return view('cart');
        }
        else{
            return redirect()->route('login');
        }

    }
    public function addToCart($id)
    {
        if (Auth::check()) {
        
        $product = Courses::find($id);
 
        if(!$product) {
 
            abort(404);
 
        }
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "name" => $product->course_name,
                        "credit" => $product->credits,
                        "semester"=>$product->semester,
                        "university"=>$product->university,
                        "code"=>$product->code,
                        

                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Course added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            return redirect()->back()->with('success', 'Course added to cart successfully!');
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->course_name,
            "credit" => $product->credits,
            "semester"=>$product->semester,
            "university"=>$product->university,
            "code"=>$product->code,
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Course added to cart successfully!');
    }
    else{
        return redirect()->route('login');
    }
}
public function remove(Request $request)
{
    if($request->id) {

        $cart = session()->get('cart');

        if(isset($cart[$request->id])) {

            unset($cart[$request->id]);

            session()->put('cart', $cart);
        }

        session()->flash('success', 'Product removed successfully');
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
    public function store(Request $request)
    {
        //
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
        //
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

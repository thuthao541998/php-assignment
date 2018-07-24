<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Support\Facades\Input;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $list_obj = Food::all();
        return view('admin.food.list')->with('list_obj', $list_obj);
    }
    public function userindex()
    {
        $list_obj = Food::all();
        return view('user.show')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $obj = new Food();
        $obj->name = Input::get('name');
        $obj->price = Input::get('price');
        $obj->categoryId = Input::get('categoryId');
        $obj->description = Input::get('description');
        $obj->images = Input::get('images');
        $obj->save();
        return redirect('/admin/food');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Food::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.food.show')
            ->with('obj', $obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Food::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.food.edit')
            ->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $obj = Food::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->name = Input::get('name');
        $obj->price = Input::get('price');
        $obj->categoryId = Input::get('categoryId');
        $obj->description = Input::get('description');
        $obj->images = Input::get('images');
        $obj->save();
        return redirect('/admin/food');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Food::find($id);
        if ($obj == null) {
            return response('food not found or has been deleted!', 404);
        }
        $obj->delete();
        return response('Deleted', 200);
    }
}

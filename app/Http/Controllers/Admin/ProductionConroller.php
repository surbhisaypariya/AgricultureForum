<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\product_info;
use Illuminate\Support\Facades\Validator;
class ProductionConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.production_admin')
        ->with(['menu'=>'production_admin']);
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
        return $request->all();
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|unique:categories|max:5',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->route('production_admin.index')
        //     ->withErrors($validator)
        //     ->withInput();
        // }
        $Inserted = product_info::create($request->all()); 
        if($Inserted)
        {
            return redirect()->route('production_admin.index')
            ->with(['message' => 'Created Successfully.']);
        }else{
            return redirect()->route('production_admin.index')
            ->with(['message' => "Your Data Are Not Inserted!"]);
        }
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

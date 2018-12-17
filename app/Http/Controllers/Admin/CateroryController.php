<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\categories;
use Illuminate\Support\Facades\Validator;

class CateroryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = categories::all();
        return view('admin.pages.category_admin',compact('categories'))
        ->with(['menu'=>'category_admin']);
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

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories',
            ]);

        if ($validator->fails()) {
            return redirect()->route('category_admin.index')
            ->withErrors($validator)
            ->withInput();
        }
        $Inserted = categories::create($request->all()); 
        if($Inserted)
        {
            return redirect()->route('category_admin.index')
            ->with(['message' => 'Created Successfully.']);
        }else{
            return redirect()->route('category_admin.index')
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories|max:2555',
            ]);

        if ($validator->fails()) {
            return redirect()->route('category_admin.index')
            ->withErrors($validator)
            ->withInput();
        }

        $updated = categories::where('id',$id)->update(['name' => $request->name]); 
        if($updated)
        {
            return redirect()->route('category_admin.index')
            ->with(['message' => 'Created Successfully.']);
        }else{
            return redirect()->route('category_admin.index')
            ->with(['message' => "Your Data Are Not Inserted!"]);
        }
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flag = DB::table('categories')->where('id',$id)->delete();


        if($flag)
            return redirect()->route("category_admin.index");
        else
            return 'Something went wrong';
    }
}

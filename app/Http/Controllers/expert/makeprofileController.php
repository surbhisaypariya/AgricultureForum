<?php

namespace App\Http\Controllers\expert;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\expert_profile;
use Illuminate\Support\Facades\Validator;

class makeprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('expert.pages.registration_expert');
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
        $validator=Validator::make($request->all(),[
            'name' => 'required|string|max:50',
            'address' => 'required|string|max:225',
            'mobile_no'=>'required|numeric',
            'email' => 'required|email',
            'category'=>'required',
            'degree_certificate'=>'required|mimes:pdf',
            'username'=>'required',
            'password'=>'required|max:20|min:2|confirmed',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('makeprofile_expert.index')
            ->withErrors($validator)
            ->withInput();
        }


        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('images');
            $request->photo = $image->move($destinationPath, $name);
            // $request->photo = $name; 
            // return $request->photo;
        }else{
            $request->photo = "No Image";
        }
        // return $request->all();
        expert_profile::create($request->all());
        return redirect()->route('makeprofile_expert.index');

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

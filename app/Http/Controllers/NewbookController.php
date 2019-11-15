<?php

namespace App\Http\Controllers;

use App\newbook;
use Illuminate\Http\Request;

class NewbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b = newbook::
              orderBy('id', 'desc')
                //take(10)
                ->get();

        return $b->toJson();
       
    }
    
    public function search(Request $request)
    {
      $ph='%'.$request->criterica.'%';
      $b = newbook::where('criterica','like',$ph)->get();
      return $b->tojson();
    }

    public function delete(Request $request)
    {  
          $ph='%'.$request->id.'%';
        $b = newbook::where('id','like',$ph)->get();
        $z = newbook::where('id','like',$ph)->delete();
        return $b->toJson();
       
    }

    public function put(Request $request)
    {  
        $id=$request->id;
        $b = newbook::where('id',$id)->first();
        if($id)
        {
        $b->namebook=$request["namebook"];
        $b->namebook=$request->namebook;
        $b->criterica=$request["criterica"];
        $b->criterica=$request->criterica;
        $b->save();
        return $b->toJson();
    }
    else
    {
        return "id not found";
    }


    }

    public function post(Request $request)
    {
        $b = new newbook();
        $b->namebook=$request["namebook"];
        $b->namebook=$request->namebook;
        $b->criterica=$request["criterica"];
        $b->criterica=$request->criterica;
        $b->save();
        return $b->toJson();
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
     * @param  \App\newbook  $newbook
     * @return \Illuminate\Http\Response
     */
    public function show(newbook $newbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\newbook  $newbook
     * @return \Illuminate\Http\Response
     */
    public function edit(newbook $newbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\newbook  $newbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newbook $newbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\newbook  $newbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(newbook $newbook)
    {
        //
    }
}

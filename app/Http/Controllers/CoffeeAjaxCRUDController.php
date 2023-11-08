<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;
 
use Datatables;

class CoffeeAjaxCRUDController extends Controller
{
  
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Coffee::select('*'))
            ->addColumn('action', 'coffee-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('coffee');
    }
      
      
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
 
        $coffeeId = $request->id;
 
        $coffee   =   Coffee::updateOrCreate(
                    [
                     'id' => $coffeeId
                    ],
                    [
                    'name' => $request->name,
                    'sex' => $request->sex,
                    'purok' => $request->purok,
                    'barangay' => $request->barangay,
                    'bearing' => $request->bearing,
                    'non_bearing' => $request->non_bearing,
                    'total' => $request->total,
                    'area' => $request->area,
                    'age' => $request->age,
                    'coffee_trees_harvested' => $request->coffee_trees_harvested,
                    'kilo' => $request->kilo,
                    'season' => $request->season,
                    'varieties' => $request->varieties,
                    'group' => $request->group,
                    'remark' => $request->remark,
                    ]);    
                         
        return Response()->json($coffee);
 
    }
      
      
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {   
        $where = array('id' => $request->id);
        $coffee  = Coffee::where($where)->first();
      
        return Response()->json($coffee);
    }
      
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $coffee = Coffee::where('id',$request->id)->delete();
      
        return Response()->json($coffee);
    }
   
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruits;
 
use Datatables;

class FruitsAjaxCRUDController extends Controller
{
  
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Fruits::select('*'))
            ->addColumn('action', 'fruits-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('fruits');
    }
      
      
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
 
        $fruitsId = $request->id;
 
        $fruits   =   Fruits::updateOrCreate(
                    [
                     'id' => $fruitsId
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
                    'fruits_trees_harvested' => $request->fruits_trees_harvested,
                    'kilo' => $request->kilo,
                    'season' => $request->season,
                    'varieties' => $request->varieties,
                    'group' => $request->group,
                    'remark' => $request->remark,
                    ]);    
                         
        return Response()->json($fruits);
 
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
        $fruits  = Fruits::where($where)->first();
      
        return Response()->json($fruits);
    }
      
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $fruits = Fruits::where('id',$request->id)->delete();
      
        return Response()->json($fruits);
    }
    // In your controller, retrieve the data
 public function fetchData() {
    // Retrieve data from your model or source (e.g., database)
    $data = Fruits::all(); // Replace YourModel with your actual model

    return response()->json($data);
}
    
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 
use App\Models\RootCrops;
 
use Datatables;
 

class RootcropAjaxCRUDController extends Controller
{
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(RootCrops::select('*'))
            ->addColumn('action', 'root-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('RootCrops');
    }
      
      
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
 
        $rootId = $request->id;
 
        $root   =   RootCrops::updateOrCreate(
                    [
                     'id' => $rootId
                    ],
                    [
                    'name' => $request->name, 
                    'barangay' => $request->barangay,
                    'municipality' => $request->municipality,
                    'sex' => $request->sex,
                    'affiliation' => $request->affiliation,
                    'contact' => $request->contact,
                    'commodity' => $request->commodity,
                    'area' => $request->area,
                    'number_of_hills' => $request->number_of_hills,
                    'production' => $request->production,
                    'market' => $request->market,
                    'expansionarea' => $request->expansionarea,
                    
                    ]);    
                         
        return Response()->json($root);
 
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
        $root  = RootCrops::where($where)->first();
      
        return Response()->json($root);
    }
      
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $root = RootCrops::where('id',$request->id)->delete();
      
        return Response()->json($root);
    }
    // In your controller, retrieve the data
 public function fetchData() {
    // Retrieve data from your model or source (e.g., database)
    $data = RootCrops::all(); // Replace YourModel with your actual model

    return response()->json($data);
}
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corn;
use Datatables;
use Illuminate\Support\Facades\DB;

class CornAjaxController extends Controller
{
    //  /**
    //   * Display a listing of the resource.
    //   *
    //   * @return \Illuminate\Http\Response
    //   */
     public function index()
     {
         if(request()->ajax()) {
             return datatables()->of(Corn::select('*'))
             ->addColumn('action', 'admin/corn-action')
             ->rawColumns(['action'])
             ->addIndexColumn()
             ->make(true);
         }
         return view('admin/corn');
     }
       
       
    //  /**
    //   * Store a newly created resource in storage.
    //   *
    //   * @param  \Illuminate\Http\Request  $request
    //   * @return \Illuminate\Http\Response
    //   */
     public function store(Request $request)
     {  
  
         $cornId = $request->id;
  
         $corn   =   Corn::updateOrCreate(
                     [
                      'id' => $cornId
                     ],
                     [
                     'rsbsa' => $request->rsbsa, 
                     'generated'=> $request->generated,
                     'association'=> $request->association,
                     'barangay'=> $request->barangay,
                     'name'=> $request->name,
                     'birth'=> $request->birth,
                     'season'=> $request->season,
                     'age'=> $request->age,
                     'sex'=> $request->sex,
                     'cropping'=> $request->cropping,
                     'area'=> $request->area,
                     'location'=> $request->location,
                     ]);    
                          
         return Response()->json($corn);
  
     }
       
       
    //  /**
    //   * Show the form for editing the specified resource.
    //   *
    //   * @param  \App\company  $company
    //   * @return \Illuminate\Http\Response
    //   */
     public function edit(Request $request)
     {   
         $where = array('id' => $request->id);
         $corn  = Corn::where($where)->first();
       
         return Response()->json($corn);
     }
       
       
    //  /**
    //   * Remove the specified resource from storage.
    //   *
    //   * @param  \App\company  $company
    //   * @return \Illuminate\Http\Response
    //   */
    public function destroy(Request $request)
{
    $corn = Corn::where('id', $request->id)->delete();
    
    // Reset AUTO_INCREMENT for 'corns' table
    $table = 'corns'; // Replace 'corns' with the actual table name
    DB::statement("ALTER TABLE $table AUTO_INCREMENT = 1");
    
    return Response()->json($corn);
}
 // In your controller, retrieve the data
 public function fetchData() {
    // Retrieve data from your model or source (e.g., database)
    $data = Corn::all(); // Replace YourModel with your actual model

    return response()->json($data);
}
    
 }

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livestock;
use Datatables;

class LivestockAjaxCRUDController extends Controller
{
    //  /**
    //   * Display a listing of the resource.
    //   *
    //   * @return \Illuminate\Http\Response
    //   */
     public function index()
     {
         if(request()->ajax()) {
             return datatables()->of(Livestock::select('*'))
             ->addColumn('action', 'admin/livestock-action')
             ->rawColumns(['action'])
             ->addIndexColumn()
             ->make(true);
         }
         return view('admin/livestock');
     }
       
       
    //  /**
    //   * Store a newly created resource in storage.
    //   *
    //   * @param  \Illuminate\Http\Request  $request
    //   * @return \Illuminate\Http\Response
    //   */
     public function store(Request $request)
     {  
  
         $livestockId = $request->id;
  
         $livestock   =   Livestock::updateOrCreate(
                     [
                      'id' => $livestockId
                     ],
                     [
                     'rsbsa' => $request->rsbsa, 
                     'generated'=> $request->generated,
                     'barangay'=> $request->barangay,
                     'name'=> $request->name,
                     'birth'=> $request->birth,
                     'age'=> $request->age,
                     'sex'=> $request->sex,
                     'commodity'=> $request->commodity,
                     'head'=> $request->head,
                     'deceased'=> $request->deceased,
                     ]);    
                          
         return Response()->json($livestock);
  
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
         $livestock  = Livestock::where($where)->first();
       
         return Response()->json($livestock);
     }
       
       
    //  /**
    //   * Remove the specified resource from storage.
    //   *
    //   * @param  \App\company  $company
    //   * @return \Illuminate\Http\Response
    //   */
     public function destroy(Request $request)
     {
         $livestock = Livestock::where('id',$request->id)->delete();
       
         return Response()->json($livestock);
     }
 }


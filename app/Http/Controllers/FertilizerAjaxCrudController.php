<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fert;
    
use Datatables;

class FertilizerAjaxCrudController extends Controller
{
    //  /**
    //   * Display a listing of the resource.
    //   *
    //   * @return \Illuminate\Http\Response
    //   */
     public function index()
     {
         if(request()->ajax()) {
             return datatables()->of(Fert::select('*'))
             ->addColumn('action', 'admin/fertilizer/fert-action')
             ->rawColumns(['action'])
             ->addIndexColumn()
             ->make(true);
         }
         return view('admin/fertilizer/fert');
     }
       
       
    //  /**
    //   * Store a newly created resource in storage.
    //   *
    //   * @param  \Illuminate\Http\Request  $request
    //   * @return \Illuminate\Http\Response
    //   */
     public function store(Request $request)
     {  
  
         $fertsId = $request->id;
  
         $ferts   =   Fert::updateOrCreate(
                     [
                      'id' => $fertsId
                     ],
                     [
                     'seeds_received' => $request->seeds_received,
                     'date_received' => $request->date_received,
                     'source_of_funds' => $request->source_of_funds,
                     ]);    
                          
         return Response()->json($ferts);
  
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
         $ferts  = Fert::where($where)->first();
       
         return Response()->json($ferts);
     }
       
       
    //  /**
    //   * Remove the specified resource from storage.
    //   *
    //   * @param  \App\company  $company
    //   * @return \Illuminate\Http\Response
    //   */
     public function destroy(Request $request)
     {
         $ferts = Fert::where('id',$request->id)->delete();
       
         return Response()->json($ferts);
     }

 }


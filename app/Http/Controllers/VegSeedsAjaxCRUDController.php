<?php
 
 namespace App\Http\Controllers;
  
 use Illuminate\Http\Request;
  
 use App\Models\VegSeeds;
  
 use Datatables;
  
 class VegSeedsAjaxCrudController extends Controller

 {
    //  /**
    //   * Display a listing of the resource.
    //   *
    //   * @return \Illuminate\Http\Response
    //   */
     public function index()
     {
         if(request()->ajax()) {
             return datatables()->of(VegSeeds::select('*'))
             ->addColumn('action', 'admin/vegseeds-action')
             ->rawColumns(['action'])
             ->addIndexColumn()
             ->make(true);
         }
         return view('admin/vegseeds');
     }
       
       
    //  /**
    //   * Store a newly created resource in storage.
    //   *
    //   * @param  \Illuminate\Http\Request  $request
    //   * @return \Illuminate\Http\Response
    //   */
     public function store(Request $request)
     {  
  
         $veg_seedsId = $request->id;
  
         $veg_seeds   =   VegSeeds::updateOrCreate(
                     [
                      'id' => $veg_seedsId
                     ],
                     [
                     'variety' => $request->variety, 
                     'seeds_received' => $request->seeds_received,
                     'date_received' => $request->date_received,
                     'source_of_funds' => $request->source_of_funds,
                     ]);    
                          
         return Response()->json($veg_seeds);
  
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
         $veg_seeds  = VegSeeds::where($where)->first();
       
         return Response()->json($veg_seeds);
     }
       
       
    //  /**
    //   * Remove the specified resource from storage.
    //   *
    //   * @param  \App\company  $company
    //   * @return \Illuminate\Http\Response
    //   */
     public function destroy(Request $request)
     {
         $veg_seeds = VegSeeds::where('id',$request->id)->delete();
       
         return Response()->json($veg_seeds);
     }
 }

<?php
 
 namespace App\Http\Controllers;
  
 use Illuminate\Http\Request;
  
 use App\Models\RiceSeeds;
    
 use Datatables;
  
 class RiceSeedsAjaxCrudController extends Controller

 {
    //  /**
    //   * Display a listing of the resource.
    //   *
    //   * @return \Illuminate\Http\Response
    //   */
     public function index()
     {
         if(request()->ajax()) {
             return datatables()->of(RiceSeeds::select('*'))
             ->addColumn('action', 'admin/rice-seeds-action')
             ->rawColumns(['action'])
             ->addIndexColumn()
             ->make(true);
         }
         return view('admin/riceseeds');
     }
       
       
    //  /**
    //   * Store a newly created resource in storage.
    //   *
    //   * @param  \Illuminate\Http\Request  $request
    //   * @return \Illuminate\Http\Response
    //   */
     public function store(Request $request)
     {  
  
         $rice_seedsId = $request->id;
  
         $rice_seeds   =   RiceSeeds::updateOrCreate(
                     [
                      'id' => $rice_seedsId
                     ],
                     [
                     'variety' => $request->variety, 
                     'seeds_received' => $request->seeds_received,
                     'date_received' => $request->date_received,
                     'source_of_funds' => $request->source_of_funds,
                     ]);    
                          
         return Response()->json($rice_seeds);
  
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
         $rice_seeds  = RiceSeeds::where($where)->first();
       
         return Response()->json($rice_seeds);
     }
       
       
    //  /**
    //   * Remove the specified resource from storage.
    //   *
    //   * @param  \App\company  $company
    //   * @return \Illuminate\Http\Response
    //   */
     public function destroy(Request $request)
     {
         $rice_seeds = RiceSeeds::where('id',$request->id)->delete();
       
         return Response()->json($rice_seeds);
     }

 }

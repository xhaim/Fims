<?php
 
 namespace App\Http\Controllers;
  
 use Illuminate\Http\Request;
  
 use App\Models\Vegreq;
  
 use Datatables;
  
 class VegReqController extends Controller

 {
    //  /**
    //   * Display a listing of the resource.
    //   *
    //   * @return \Illuminate\Http\Response
    //   */
     public function index()
     {
         if(request()->ajax()) {
             return datatables()->of(Vegreq::select('*'))
             ->addColumn('action', 'admin/vegreq-action')
             ->rawColumns(['action'])
             ->addIndexColumn()
             ->make(true);
         }
         return view('admin/veg-req');
     }
       
       
    //  /**
    //   * Store a newly created resource in storage.
    //   *
    //   * @param  \Illuminate\Http\Request  $request
    //   * @return \Illuminate\Http\Response
    //   */
     public function store(Request $request)
     {  
  
         $vegreqId = $request->id;
  
         $vegreq   =   Vegreq::updateOrCreate(
                     [
                      'id' => $vegreqId
                     ],
                     [
                     'name' => $request->name, 
                     'seeds_received' => $request->seeds_received,
                     'barangay' => $request->barangay,
                     'contact' => $request->contact,
                     ]);    
                          
         return Response()->json($vegreq);
  
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
         $vegreq  = Vegreq::where($where)->first();
       
         return Response()->json($vegreq);
     }
       
       
    //  /**
    //   * Remove the specified resource from storage.
    //   *
    //   * @param  \App\company  $company
    //   * @return \Illuminate\Http\Response
    //   */
     public function destroy(Request $request)
     {
         $vegreq = Vegreq::where('id',$request->id)->delete();
       
         return Response()->json($vegreq);
     }
     
 }

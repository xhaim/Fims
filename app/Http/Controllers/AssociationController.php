<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;
use DataTables;


class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Association::select('*'))
            ->addColumn('action', 'association-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('association');
    }
      
      
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
 
        $associationId = $request->id;
 
        $association   =   Association::updateOrCreate(
                    [
                     'id' => $associationId
                    ],
                    [
                        'name'=>$request->name, 
                        'barangay'=>$request->barangay,
                         'contact_number'=>$request->contact_number,
                         'chairman'=>$request->chairman,
                         'name_of_association'=>$request->name_of_association,
                         'number_of_farmers'=>$request->name,
                         'registered_on_date'=>$request->registered_on_date
                    ]);    
                         
        return Response()->json($association);
 
    }
      
      
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\association  $association
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {   
        $where = array('id' => $request->id);
        $association  = Association::where($where)->first();
      
        return Response()->json($association);
    }
      
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\association  $association
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $association = Association::where('id',$request->id)->delete();
      
        return Response()->json($association);
    }
}


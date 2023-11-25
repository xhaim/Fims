<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bamboo;
 
use Datatables;


class BambooAjaxCRUDController extends Controller
{
    
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Bamboo::select('*'))
            ->addColumn('action', 'bamboo-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('bamboo');
    }
      
      
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
 
        $bambooId = $request->id;
 
        $bamboo   =   Bamboo::updateOrCreate(
                    [
                     'id' => $bambooId
                    ],
                    [
                    'name' => $request->name,
                    'sex' => $request->sex,
                    'birthday' => $request->birthday,
                    'purok' => $request->purok,
                    'barangay' => $request->barangay,
                    'newly' => $request->newly,
                    'harvestable' => $request->harvestable,
                    'total' => $request->total,
                    'area' => $request->area,
                    'age' => $request->age,
                    'per_month' => $request->per_month,
                    'varieties' => $request->varieties,
                    'group' => $request->group,
                    'remark' => $request->remark,
                    ]);    
                         
        return Response()->json($bamboo);
 
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
        $bamboo  = Bamboo::where($where)->first();
      
        return Response()->json($bamboo);
    }
      
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $bamboo = Bamboo::where('id',$request->id)->delete();
      
        return Response()->json($bamboo);
    }
        // In your controller, retrieve the data
    public function fetchData() {
        // Retrieve data from your model or source (e.g., database)
        $data = Bamboo::all(); // Replace YourModel with your actual model

        return response()->json($data);
    }
        
}

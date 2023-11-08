<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacc;
 
use Datatables;

class VaccinationAjaxCRUDController extends Controller
{
  
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Vacc::select('*'))
            ->addColumn('action', 'vacc-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('vaccination');
    }
      
      
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
 
        $vaccId = $request->id;
        
       
 
        $vacc   =   Vacc::updateOrCreate(
                    [
                     'id' => $vaccId
                    ],
                    [
                        'owner_name' => $request->owner_name,
                        'birthday' => $request->birthday,
                        'dog_name' => $request->dog_name,
                        'origin' => $request->origin,
                        'breed' => $request->breed,
                        $exoticType = $request->input('exotic_type'),
                        'color' => $request->color,
                        'ageyr' => $request->ageyr,
                        'age_month' => $request->age_month,
                        'sex_male' => $request->sex_male,
                        'sex_female' => $request->sex_female,
                    ]);    
                         
        return Response()->json($vacc);
 
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
        $vacc  = Vacc::where($where)->first();
      
        return Response()->json($vacc);
    }
      
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $vacc = Vacc::where('id',$request->id)->delete();
      
        return Response()->json($vacc);
    }
   
}






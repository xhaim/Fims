<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roms;
 
use Datatables;

class ROMSAjaxCRUDController extends Controller
{
  
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Roms::select('*'))
            ->addColumn('action', 'roms-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('roms');
    }
      
      
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
 
        $romsId = $request->id;
 
        $roms   =   Roms::updateOrCreate(
                    [
                     'id' => $romsId
                    ],
                    [
                        'name' => $request->name,
                        'address' => $request->address,
                        'animal_id' => $request->animal_id,
                        'breed' => $request->breed,
                        'born' => $request->born,
                        'bcs' => $request->bcs,
                        'lastcalving' => $request->lastcalving,
                        'romsdate' => $request->romsdate, 
                        'ovarian' => $request->ovarian,
                        'result' => $request->result,
                        'ai' => $request->ai,
                        'ut' => $request->ut,
                        'w_iec' => $request->w_iec,
                        'bullid' => $request->bullid,
                        'straws' => $request->straws,
                        'remark' => $request->remark,
                    ]);    
                         
        return Response()->json($roms);
 
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
        $roms  = Roms::where($where)->first();
      
        return Response()->json($roms);
    }
      
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $roms = Roms::where('id',$request->id)->delete();
      
        return Response()->json($roms);
    }
   
}




<?php

namespace App\Http\Controllers;

use App\Models\Livestockpopulation;
use Illuminate\Http\Request;
 
use Datatables;

class LivestockPopulationAjaxCRUDController extends Controller
{
    
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Livestockpopulation::select('*'))
            ->addColumn('action', 'population-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('population');
    }
      
      
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
 
        $popuId = $request->id;
 
        $popu   =   Livestockpopulation::updateOrCreate(
                    [
                     'id' => $popuId
                    ],
                    [
                    'name' => $request->name,
                    'kabawm' => $request->kabawm,
                    'kabawf' => $request->kabawf,
                    'totalkabaw' => $request->totalkabaw,
                    'bakam' => $request->bakam,
                    'bakaf' => $request->bakaf,
                    'totalbaka' => $request->totalbaka,
                    'baboyf' => $request->baboyf,
                    'baboym' => $request->baboym,
                    'totalbaboy' => $request->totalbaboy,
                    'kandingm' => $request->kandingm,
                    'kandingf' => $request->kandingf,
                    'totalkanding' => $request->totalkanding,
                    'kabayom' => $request->kabayom,
                    'kabayof' => $request->kabayof,
                    'totalkabayo' => $request->totalkabayo,
                    'irom' => $request->irom,
                    'irof' => $request->irof,
                    'totaliro' => $request->totaliro,
                    'manokf' => $request->manokf,
                    'manokm' => $request->manokm,
                    'totalmanok' => $request->totalmanok,
                    'bebem' => $request->bebem,
                    'bebef' => $request->bebef,
                    'totalbebe' => $request->totalbebe,
                    'quailm' => $request->quailm,
                    'quailf' => $request->quailf,
                    'totalquail' => $request->totalquail,
                    'broilerm' => $request->broilerm,
                    'broilerf' => $request->broilerf,
                    'totalbroiler' => $request->totalbroiler,
                    'rabbitm' => $request->rabbitm,
                    'rabbitf' => $request->rabbitf,
                    'totalrabbit' => $request->totalrabbit,
                    ]);    
                         
        return Response()->json($popu);
 
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
        $popu  = Livestockpopulation::where($where)->first();
      
        return Response()->json($popu);
    }
      
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $popu = Livestockpopulation::where('id',$request->id)->delete();
      
        return Response()->json($popu);
    }
   // In your controller, retrieve the data
   public function fetchData() {
    // Retrieve data from your model or source (e.g., database)
    $data = Livestockpopulation::all(); // Replace YourModel with your actual model

    return response()->json($data);
}
}
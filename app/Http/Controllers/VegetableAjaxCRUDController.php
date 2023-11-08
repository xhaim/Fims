<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Models\Vegetable;
 
use Datatables;
 
class VegetableAjaxCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Vegetable::select('*'))
            ->addColumn('action', 'veg-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('vegetable');
    }
      
      
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
 
        $vegId = $request->id;
 
        $veg   =   Vegetable::updateOrCreate(
                    [
                     'id' => $vegId
                    ],
                    [
                    'name' => $request->name, 
                    'barangay' => $request->barangay,
                    'municipality' => $request->municipality,
                    'sex' => $request->sex,
                    'affiliation' => $request->affiliation,
                    'contact' => $request->contact,
                    'commodity' => $request->commodity,
                    'area' => $request->area,
                    'number_of_hills' => $request->number_of_hills,
                    'production' => $request->production,
                    'market' => $request->market,
                    'expansionarea' => $request->expansionarea,
                    
                    ]);    
                         
        return Response()->json($veg);
 
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
        $veg  = Vegetable::where($where)->first();
      
        return Response()->json($veg);
    }
      
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $veg = Vegetable::where('id',$request->id)->delete();
      
        return Response()->json($veg);
    }
   
}
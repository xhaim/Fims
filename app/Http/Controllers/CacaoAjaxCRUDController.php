<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 
use App\Models\Cacao;
 
use Datatables;
 

class CacaoAjaxCRUDController extends Controller
{
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Cacao::select('*'))
            ->addColumn('action', 'cacao-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('cacao');
    }
      
      
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
 
        $cacaoId = $request->id;
 
        $cacao   =   Cacao::updateOrCreate(
                    [
                     'id' => $cacaoId
                    ],
                    [
                    'name' => $request->name,
                    'sex' => $request->sex,
                    'purok' => $request->purok,
                    'barangay' => $request->barangay,
                    'bearing' => $request->bearing,
                    'non_bearing' => $request->non_bearing,
                    'total' => $request->total,
                    'area' => $request->area,
                    'age' => $request->age,
                    'cacao_trees_harvested' => $request->cacao_trees_harvested,
                    'kilo' => $request->kilo,
                    'season' => $request->season,
                    'varieties' => $request->varieties,
                    'group' => $request->group,
                    'remark' => $request->remark,
                    ]);    
                         
        return Response()->json($cacao);
 
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
        $cacao  = Cacao::where($where)->first();
      
        return Response()->json($cacao);
    }
      
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cacao = Cacao::where('id',$request->id)->delete();
      
        return Response()->json($cacao);
    }
   
}

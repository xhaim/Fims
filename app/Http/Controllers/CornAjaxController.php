<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corn;
use App\Models\Archivedcorns;
use Datatables;
use Illuminate\Support\Facades\DB;

class CornAjaxController extends Controller
{
    //  /**
    //   * Display a listing of the resource.
    //   *
    //   * @return \Illuminate\Http\Response
    //   */
     public function index()
     {
         if(request()->ajax()) {
             return datatables()->of(Corn::select('*'))
             ->addColumn('action', 'admin/corn-action')
             ->rawColumns(['action'])
             ->addIndexColumn()
             ->make(true);
         }
         return view('admin/corn');
     }
       
       
    //  /**
    //   * Store a newly created resource in storage.
    //   *
    //   * @param  \Illuminate\Http\Request  $request
    //   * @return \Illuminate\Http\Response
    //   */
     public function store(Request $request)
     {  
  
         $cornId = $request->id;
  
         $corn   =   Corn::updateOrCreate(
                     [
                      'id' => $cornId
                     ],
                     [
                     'rsbsa' => $request->rsbsa, 
                     'generated'=> $request->generated,
                     'association'=> $request->association,
                     'barangay'=> $request->barangay,
                     'name'=> $request->name,
                     'birth'=> $request->birth,
                     'season'=> $request->season,
                     'age'=> $request->age,
                     'sex'=> $request->sex,
                     'cropping'=> $request->cropping,
                     'area'=> $request->area,
                     'location'=> $request->location,
                     ]);    
                          
         return Response()->json($corn);
  
     }
       

     // START OF ARCHIVING //START OF ARCHIVING //START OF ARCHIVING //START OF ARCHIVING //START OF ARCHIVING //START OF ARCHIVING //START OF ARCHIVING //

    //  Archive Datatable
    public function archive_index()
    {
        if (request()->ajax()) {
            return datatables()->of(Archivedcorns::select('*'))
                ->addColumn('action', 'admin/archive-corn-action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin/corn');
    }


   //  ARCHIVE
   public function archive(Request $request)
   {
       // Validate the request, if necessary
       $request->validate([
           'id' => 'required|exists:corns,id',
       ]);

       // Get the record to be archived
       $corn = Corn::find($request->id);

       // Create a new archived record
       $archivedRecord = Archivedcorns::create([
            'rsbsa' => $corn->rsbsa, 
            'generated'=> $corn->generated,
            'association'=> $corn->association,
            'barangay'=> $corn->barangay,
            'name'=> $corn->name,
            'birth'=> $corn->birth,
            'season'=> $corn->season,
            'age'=> $corn->age,
            'sex'=> $corn->sex,
            'cropping'=> $corn->cropping,
            'area'=> $corn->area,
            'location'=> $corn->location,
           // Add any additional columns needed for the archived table
       ]);

       // Delete the record from the main table
       $corn->delete();

       return response()->json(['success' => true]);
   }

   // RESTORE ARCHIVED
   public function restore(Request $request)
   {
       // Validate the request, if necessary
       $request->validate([
           'id' => 'required|exists:archived_corn,id',
       ]);

       // Get the record to be unarchived
       $archivedcorn = Archivedcorns::find($request->id);

       // Create a new record in the main table
       $corn = Corn::create([
        'rsbsa' => $archivedcorn->rsbsa, 
        'generated'=> $archivedcorn->generated,
        'association'=> $archivedcorn->association,
        'barangay'=> $archivedcorn->barangay,
        'name'=> $archivedcorn->name,
        'birth'=> $archivedcorn->birth,
        'season'=> $archivedcorn->season,
        'age'=> $archivedcorn->age,
        'sex'=> $archivedcorn->sex,
        'cropping'=> $archivedcorn->cropping,
        'area'=> $archivedcorn->area,
        'location'=> $archivedcorn->location,
           // Add any additional columns needed for the main table
       ]);

       // Delete the record from the archived table
       $archivedcorn->delete();

       return response()->json(['success' => true]);
   }


   // END OF ARCHIVING // END OF ARCHIVING // END OF ARCHIVING // END OF ARCHIVING // END OF ARCHIVING // END OF ARCHIVING // END OF ARCHIVING //

       
    //  /**
    //   * Show the form for editing the specified resource.
    //   *
    //   * @param  \App\company  $company
    //   * @return \Illuminate\Http\Response
    //   */
     public function edit(Request $request)
     {   
         $where = array('id' => $request->id);
         $corn  = Corn::where($where)->first();
       
         return Response()->json($corn);
     }
       
       
    //  /**
    //   * Remove the specified resource from storage.
    //   *
    //   * @param  \App\company  $company
    //   * @return \Illuminate\Http\Response
    //   */
    public function destroy(Request $request)
{
    $corn = Archivedcorns::where('id', $request->id)->delete();
    
    // Reset AUTO_INCREMENT for 'corns' table
    $table = 'corns'; // Replace 'corns' with the actual table name
    DB::statement("ALTER TABLE $table AUTO_MENT = 1");
    
    return Response()->json($corn);
}
 // In your controller, retrieve the data
 public function fetchData() {
    // Retrieve data from your model or source (e.g., database)
    $data = Corn::all(); // Replace YourModel with your actual model

    return response()->json($data);
}
    
 }

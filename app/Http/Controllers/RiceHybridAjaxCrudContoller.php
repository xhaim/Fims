<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ricehybrid; // Assuming the Eloquent model for the "farmers" table is named "Farmer"
use App\Models\ArchivedRice; 
use Datatables;

class RiceHybridAjaxCrudContoller extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(Ricehybrid::select('*'))
                ->addColumn('action', 'admin/rice/rice-action') // Assuming you have a view file named 'farmers-action.blade.php'
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin/rice/rice'); // Assuming you have a view file named 'farmers.blade.php'
    }

    public function store(Request $request)
    {
        $farmerId = $request->id;

        $farmer = Ricehybrid::updateOrCreate(
            [
                'id' => $farmerId
            ],
            [
                'rsbsa' => $request->rsbsa,
                'name_first' => $request->name_first,
                'name_middle' => $request->name_middle,
                'name_last' => $request->name_last,
                'barangay' => $request->barangay,
                'farm_location' => $request->farm_location,
                'birthdate' => $request->birthdate,
                'farm_area' => $request->farm_area,
                'sex' => $request->sex,
                'membership' => json_encode($request->membership), // Convert to JSON
                'quantity' => $request->quantity,
                'date_received' => $request->date_received,
            ]
        );

        return response()->json($farmer);
    }
// START OF ARCHIVING //START OF ARCHIVING //START OF ARCHIVING //START OF ARCHIVING //START OF ARCHIVING //START OF ARCHIVING //

    //  Archive Datatable
    public function archive_index()
    {
        if(request()->ajax()) {
            return datatables()->of(ArchivedRice::select('*'))
            ->addColumn('action', 'admin/rice/archive-ricehybrid-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        
        return view('admin/rice/rice');
    }

   //  ARCHIVE
   public function archive(Request $request)
   {
       // Validate the request, if necessary
       $request->validate([
           'id' => 'required|exists:ricedistributionhybrid,id',
       ]);

       // Get the record to be archived
       $riceHB = Ricehybrid::find($request->id);

       // Create a new archived record
       $archivedRecord = ArchivedRice::create([
                'rsbsa' => $riceHB->rsbsa,
                'name_first' => $riceHB->name_first,
                'name_middle' => $riceHB->name_middle,
                'name_last' => $riceHB->name_last,
                'barangay' => $riceHB->barangay,
                'farm_location' => $riceHB->farm_location,
                'birthdate' => $riceHB->birthdate,
                'farm_area' => $riceHB->farm_area,
                'sex' => $riceHB->sex,
                'membership' => $riceHB->membership, // Convert to JSON
                'quantity' => $riceHB->quantity,
                'date_received' => $riceHB->date_received,
           // Add any additional columns needed for the archived table
       ]);

       // Delete the record from the main table
       $riceHB->delete();

       return response()->json(['success' => true]);
   }

   // RESTORE ARCHIVED
   public function restore(Request $request)
   {
       // Validate the request, if necessary
       $request->validate([
           'id' => 'required|exists:archived_rice,id',
       ]);

       // Get the record to be unarchived
       $archivedriceHB = ArchivedRice::find($request->id);

       // Create a new record in the main table
       $riceHB = Ricehybrid::create([
        'rsbsa' => $archivedriceHB->rsbsa,
        'name_first' => $archivedriceHB->name_first,
        'name_middle' => $archivedriceHB->name_middle,
        'name_last' => $archivedriceHB->name_last,
        'barangay' => $archivedriceHB->barangay,
        'farm_location' => $archivedriceHB->farm_location,
        'birthdate' => $archivedriceHB->birthdate,
        'farm_area' => $archivedriceHB->farm_area,
        'sex' => $archivedriceHB->sex,
        'membership' => $archivedriceHB->membership, // Convert to JSON
        'quantity' => $archivedriceHB->quantity,
        'date_received' => $archivedriceHB->date_received,
           // Add any additional columns needed for the main table
       ]);

       // Delete the record from the archived table
       $archivedriceHB->delete();

       return response()->json(['success' => true]);
   }


   // END OF ARCHIVING // END OF ARCHIVING // END OF ARCHIVING // END OF ARCHIVING // END OF ARCHIVING // END OF ARCHIVING //
    public function edit(Request $request)
    {
        $where = ['id' => $request->id];
        $farmer = Ricehybrid::where($where)->first();

        return response()->json($farmer);
    }
    //  show
    public function getFarmerDetails($id)
    {
        $rental = Ricehybrid::find($id);
        return response()->json($rental);
    }
    public function destroy(Request $request)
    {
        $farmer = Ricehybrid::where('id', $request->id)->delete();

        return response()->json($farmer);
    }
    // In your controller, retrieve the data
    public function fetchData() {
        // Retrieve data from your model or source (e.g., database)
        $data = Ricehybrid::all(); // Replace YourModel with your actual model

        return response()->json($data);
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ricehybrid; // Assuming the Eloquent model for the "farmers" table is named "Farmer"
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


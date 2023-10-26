<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
    
use Datatables;

class RentalAjaxCrudController extends Controller
{
    //  /**
    //   * Display a listing of the resource.
    //   *
    //   * @return \Illuminate\Http\Response
    //   */
     public function index()
     {
         if(request()->ajax()) {
            
             return datatables()->of(Rental::select('*'))
             ->addColumn('action', 'admin/rental/rental-action')
             ->rawColumns(['action'])
             ->addIndexColumn()
             ->make(true);
         }
         return view('admin/rental/rental');
     }
       
       
    //  /**
    //   * Store a newly created resource in storage.
    //   *
    //   * @param  \Illuminate\Http\Request  $request
    //   * @return \Illuminate\Http\Response
    //   */
     public function store(Request $request)
     {  
  
         $rentalId = $request->id;
  
         $rental = Rental::updateOrCreate(
            ['id' => $rentalId],
            [
                'applicant' => $request->applicant,
                'address' => $request->address,
                'location' => $request->location,
                'project_description' => $request->project_description,
                'contact' => $request->contact,
                'actual_land_area_of_farm' => $request->actual_land_area_of_farm,
                'date_inspected' => $request->date_inspected,
                'inspector' => $request->inspector,
                'fuel_requirement' => $request->fuel_requirement,
                'hours_of_operation' => $request->hours_of_operation,
                'equipment' => json_encode($request->equipment), // Convert to JSON
                'area' => $request->area,
                'rental_rate' => $request->rental_rate,
                'total_rental_amount' => $request->total_rental_amount,
                'payment' => $request->payment,
                'or_number' => $request->or_number,
                'payment_date' => $request->payment_date,
                'payment_amount' => $request->payment_amount,
                'municipal_treasurer' => $request->municipal_treasurer,
                'source_of_fund' => $request->source_of_fund,
                'funds_available' => $request->funds_available,
                'municipal_accountant' => $request->municipal_accountant,
                'municipal_budget_officer' => $request->municipal_budget_officer,
                'municipal_mayor' => $request->municipal_mayor,
                'schedule_of_operation' => $request->schedule_of_operation,
                'plate_number_tractor' => $request->plate_number_tractor,
                'mao_tractor_incharge' => $request->mao_tractor_incharge,
                'actual_land_area_served' => $request->actual_land_area_served,
                'actual_hours_of_operation' => $request->actual_hours_of_operation,
                'remarks' => $request->remarks,
                'mo_field_inspector' => $request->mo_field_inspector,
            ]
        );
        
         return Response()->json($rental);
  
     }
       
       
    //  /**
    //   * Show the form for editing the specified resource.
    //   *
    //   * @param  \App\company  $company
    //   * @return \Illuminate\Http\Response
    //   */
     public function edit(Request $request)
     {   
         $where = array('id' => $request->id);
         $rental  = Rental::where($where)->first();
       
         return Response()->json($rental);
     }
       
        //  show
        public function getRentalDetails($id)
    {
        $rental = Rental::find($id);
        return response()->json($rental);
    }

       
    //  /**
    //   * Remove the specified resource from storage.
    //   *
    //   * @param  \App\company  $company
    //   * @return \Illuminate\Http\Response
    //   */
    public function destroy(Request $request)
    {
        $rental = Rental::where('id', $request->id)->delete();

        
        return Response()->json($rental);
    }

 }
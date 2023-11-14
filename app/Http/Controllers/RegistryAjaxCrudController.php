<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registry;

use Datatables;

class RegistryAjaxCrudController extends Controller
{
    //  /**
    //   * Display a listing of the resource.
    //   *
    //   * @return \Illuminate\Http\Response
    //   */
    public function index()
    {
        if(request()->ajax()) {
           
            return datatables()->of(Registry::select('*'))
            ->addColumn('action', 'admin.registry.registry-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('admin.registry.registry');
    }
      
      
   //  /**
   //   * Store a newly created resource in storage.
   //   *
   //   * @param  \Illuminate\Http\Request  $request
   //   * @return \Illuminate\Http\Response
   //   */
    public function store(Request $request)
    {  
 
        $registryId = $request->id;
 
        $registry = Registry::updateOrCreate(
           ['id' => $registryId],
           [
            'rsbsa_id' => $request-> rsbsa_id,
            'generated_id' => $request-> generated_id,
            'date_enrolled' => $request-> date_enrolled,
    
            // household members columns //////////////////////////////////////////////////////////////////////////////////////////
    
            // hh 1
            'hh_member' => $request-> hh_member,
            'surname' => $request-> surname,
            'firstname' => $request-> firstname,
            'middlename' => $request-> middlename,
            'gender' => $request-> gender,
            'age' => $request-> age,
            'birthdate' => $request-> birthdate,
    
            // hh 2
            'hh_member2' => $request-> hh_member2,
            'surname2' => $request-> surname2,
            'firstname2' => $request-> firstname2,
            'middlename2' => $request-> middlename2,
            'gender2' => $request-> gender2,
            'age2' => $request-> age2,
            'birthdate2' => $request-> birthdate2,
    
            // hh 3
            'hh_member3' => $request-> hh_member3,
            'surname3' => $request-> surname3,
            'firstname3' => $request-> firstname3,
            'middlename3' => $request-> middlename3,
            'gender3' => $request-> gender3,
            'age3' => $request-> age3,
            'birthdate3' => $request-> birthdate3,
    
            // hh 4
            'hh_member4' => $request-> hh_member4,
            'surname4' => $request-> surname4,
            'firstname4' => $request-> firstname4,
            'middlename4' => $request-> middlename4,
            'gender4' => $request-> gender4,
            'age4' => $request-> age4,
            'birthdate4' => $request-> birthdate4,
    
            // hh 5
            'hh_member5' => $request-> hh_member5,
            'surname5' => $request-> surname5,
            'firstname5' => $request-> firstname5,
            'middlename5' => $request-> middlename5,
            'gender5' => $request-> gender5,
            'age5' => $request-> age5,
            'birthdate5' => $request-> birthdate5,
    
            // hh 6
            'hh_member6' => $request-> hh_member6,
            'surname6' => $request-> surname6,
            'firstname6' => $request-> firstname6,
            'middlename6' => $request-> middlename6,
            'gender6' => $request-> gender6,
            'age6' => $request-> age6,
            'birthdate6' => $request-> birthdate6,
    
            // hh 7
            'hh_member7' => $request-> hh_member7,
            'surname7' => $request-> surname7,
            'firstname7' => $request-> firstname7,
            'middlename7' => $request-> middlename7,
            'gender7' => $request-> gender7,
            'age7' => $request-> age7,
            'birthdate7' => $request-> birthdate7,
    
            // hh 8
            'hh_member8' => $request-> hh_member8,
            'surname8' => $request-> surname8,
            'firstname8' => $request-> firstname8,
            'middlename8' => $request-> middlename8,
            'gender8' => $request-> gender8,
            'age8' => $request-> age8,
            'birthdate8' => $request-> birthdate8,
    
    
            // hh 9
            'hh_member9' => $request-> hh_member9,
            'surname9' => $request-> surname9,
            'firstname9' => $request-> firstname9,
            'middlename9' => $request-> middlename9,
            'gender9' => $request-> gender9,
            'age9' => $request-> age9,
            'birthdate9' => $request-> birthdate9,
    
    
            // hh 10
            'hh_member10' => $request-> hh_member10,
            'surname10' => $request-> surname10,
            'firstname10' => $request-> firstname10,
            'middlename10' => $request-> middlename10,
            'gender10' => $request-> gender10,
            'age10' => $request-> gender10,
            'birthdate10' => $request-> birthdate10,
    
    
            // hh 11
            'hh_member11' => $request-> hh_member11,
            'surname11' => $request-> surname11,
            'firstname11' => $request-> firstname11,
            'middlename11' => $request-> middlename11,
            'gender11' => $request-> gender11,
            'age11' => $request-> age11,
            'birthdate11' => $request-> birthdate11,
    
    
            // hh 12
            'hh_member12' => $request-> hh_member12,
            'surname12' => $request-> surname12,
            'firstname12' => $request-> firstname12,
            'middlename12' => $request-> middlename12,
            'gender12' => $request-> gender12,
            'age12' => $request-> age12,
            'birthdate12' => $request-> birthdate12,
    
    
            // hh 13
            'hh_member13' => $request-> hh_member13,
            'surname13' => $request-> surname13,
            'firstname13' => $request-> firstname13,
            'middlename13' => $request-> middlename13,
            'gender13' => $request-> gender13,
            'age13' => $request-> age13,
            'birthdate13' => $request-> birthdate13,
    
    
            // hh 14
            'hh_member14' => $request-> hh_member14,
            'surname14' => $request-> surname14,
            'firstname14' => $request-> firstname14,
            'middlename14' => $request-> middlename14,
            'gender14' => $request-> gender14,
            'age14' => $request-> age14,
            'birthdate14' => $request-> birthdate14,
    
    
            // hh 15
            'hh_member15' => $request-> hh_member15,
            'surname15' => $request-> surname15,
            'firstname15' => $request-> firstname15,
            'middlename15' => $request-> middlename15,
            'gender15' => $request-> gender15,
            'age15' => $request-> age15,
            'birthdate15' => $request-> birthdate15,
    
    
            // hh 16
            'hh_member16' => $request-> hh_member16,
            'surname16' => $request-> surname16,
            'firstname16' => $request-> firstname16,
            'middlename16' => $request-> middlename16,
            'gender16' => $request-> gender16,
            'age16' => $request-> age16,
            'birthdate16' => $request-> birthdate16,
    
    
            // hh 17
            'hh_member17' => $request-> hh_member17,
            'surname17' => $request-> surname17,
            'firstname17' => $request-> firstname17,
            'middlename17' => $request-> middlename17,
            'gender17' => $request-> gender17,
            'age17' => $request-> age17,
            'birthdate17' => $request-> birthdate17,
    
    
            // hh 18
            'hh_member18' => $request-> hh_member18,
            'surname18' => $request-> surname18,
            'firstname18' => $request-> firstname18,
            'middlename18' => $request-> middlename18,
            'gender18' => $request-> gender18,
            'age18' => $request-> age18,
            'birthdate18' => $request-> birthdate18,
    
    
            // hh 19
            'hh_member19' => $request-> hh_member19,
            'surname19' => $request-> surname19,
            'firstname19' => $request-> firstname19,
            'middlename19' => $request-> middlename19,
            'gender19' => $request-> gender19,
            'age19' => $request-> age19,
            'birthdate19' => $request-> birthdate19,
    
    
            // hh 20
            'hh_member20' => $request-> hh_member20,
            'surname20' => $request-> surname20,
            'firstname20' => $request-> firstname20,
            'middlename20' => $request-> middlename20,
            'gender20' => $request-> gender20,
            'age20' => $request-> age20,
            'birthdate20' => $request-> birthdate20,
    
            // End of household members columns //////////////////////////////////////////////////////////////////////////////////////////
    
            'income_source' => $request-> income_source,
            'est_annual_income' => $request-> est_annual_income,
            'address' => $request-> address,
            'sitio_purok' => $request-> sitio_purok,
            'barangay' => $request-> barangay,
            'city' => $request-> city,
            'geo_coordinates' => $request-> geo_coordinates,
            'years_of_residency' => $request-> years_of_residency,
    
            // MEMBERSHIP & AFFILIATIONS // MEMBERSHIP & AFFILIATIONS // MEMBERSHIP & AFFILIATIONS // MEMBERSHIP & AFFILIATIONS //
    
            // M&A 1
            'membership' => $request-> membership,
            'position' => $request-> position,
            'member_since' => $request-> member_since,
            'status' => $request-> status,
            // M&A 2
            'membership2' => $request-> membership2,
            'position2' => $request-> position2,
            'member_since2' => $request-> member_since2, 
            'status2' => $request-> status2,
            // M&A 3
            'membership3' => $request-> membership3,
            'position3' => $request-> position3,
            'member_since3' => $request-> member_since3,
            'status3' => $request-> status3,
            // M&A 4
            'membership4' => $request-> membership4,
            'position4' => $request-> position4,
            'member_since4' => $request-> member_since4,
            'status4' => $request-> status4,
            // M&A 5
            'membership5' => $request-> membership5,
            'position5' => $request-> position5,
            'member_since5' => $request-> member_since5,
            'status5' => $request-> status5,
    
            // AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS // 
    
            // A&C 1
            'award' => $request-> award,
            'awarding_body' => $request-> awarding_body,
            'date_received' => $request-> date_received,
            // A&C 2
            'award2' => $request-> award2,
            'awarding_body2' => $request-> awarding_body2,
            'date_received2' => $request-> date_received2,
            // A&C 3
            'award3' => $request-> award3,
            'awarding_body3' => $request-> awarding_body3,
            'date_received3' => $request-> date_received3,
            // A&C 4
            'award4' => $request-> award4,
            'awarding_body4' => $request-> awarding_body4,
            'date_received4' => $request-> date_received4,
            // A&C 5
            'award5' => $request-> award5,
            'awarding_body5' => $request-> awarding_body5,
            'date_received5' => $request-> date_received5,
                    
            // REMARKS // REMARKS // REMARKS // REMARKS // REMARKS // REMARKS // REMARKS // REMARKS // REMARKS // REMARKS // REMARKS //
    
            'remarks' => $request-> remarks,
    
            // PARTICULARS // PARTICULARS // PARTICULARS // PARTICULARS // PARTICULARS // PARTICULARS //
    
            // PARTICULAR 1
            'purok' => $request-> purok,
            'brngy' => $request-> brngy,
            'geographic_coordinates' => $request-> geographic_coordinates,
            'title_no' => $request-> title_no,
            'tax_declarration_no' => $request-> tax_declarration_no,
            'tenure' => json_encode($request->tenure),
            'existing_crop' => $request -> existing_crop,
            'previous_crop'=> $request -> previous_crop,
            //TOPOGRAPHY
            'hectares' => $request-> hectares,
            'land' => json_encode($request->land),
            'soil_type' => $request-> soil_type,
            'source' => json_encode($request->source),
            // REMARKS
            'notes' => $request->notes,
    
            // PARTICULAR 2
            'purok2' => $request-> purok2,
            'brngy2' => $request-> brngy2,
            'geographic_coordinates2' => $request-> geographic_coordinates2,
            'title_no2' => $request-> title_no2,
            'tax_declarration_no2' => $request-> tax_declarration_no2,
            'tenure2' => json_encode($request->tenure2),
            'existing_crop2' => $request -> existing_crop2,
            'previous_crop2'=> $request -> previous_crop2,
            //TOPOGRAPHY
            'hectares2' => $request-> hectares2,
            'land2' => json_encode($request->land2),
            'soil_type2' => $request-> soil_type2,
            'source2' => json_encode($request->source2),
            // REMARKS
            'notes2' => $request->notes2,
            
    
            // PARTICULAR 3
            'purok3' => $request-> purok3,
            'brngy3' => $request-> brngy3,
            'geographic_coordinates3' => $request-> geographic_coordinates3,
            'title_no3' => $request-> title_no3,
            'tax_declarration_no3' => $request-> tax_declarration_no3,
            'tenure3' => json_encode($request->tenure3),
            'existing_crop3' => $request -> existing_crop3,
            'previous_crop3'=> $request -> previous_crop3,
            //TOPOGRAPHY
            'hectares3' => $request-> hectares3,
            'land3' => json_encode($request->land3),
            'soil_type3' => $request-> soil_type3,
            'source3' => json_encode($request->source3),
            // REMARKS
            'notes3' => $request->notes3,
    
           ]
       );
       
        return Response()->json($registry);
 
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
        $registry  = Registry::where($where)->first();
      
        return Response()->json($registry);
    }
      
       //  show
       public function getRegistryDetails($id)
   {
       $registry = Registry::find($id);
       return response()->json($registry);
   }

      
   //  /**
   //   * Remove the specified resource from storage.
   //   *
   //   * @param  \App\company  $company
   //   * @return \Illuminate\Http\Response
   //   */
   public function destroy(Request $request)
   {
       $registry = Registry::where('id', $request->id)->delete();

       
       return Response()->json($registry);
   }
}

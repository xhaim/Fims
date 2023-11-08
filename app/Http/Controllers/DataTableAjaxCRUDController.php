<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Models\Company;
 
use Datatables;
 
class DataTableAjaxCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Company::select('*'))
            ->addColumn('action', 'company-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('companies');
    }
      
      
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
 
        $companyId = $request->id;
       
   
    if ($request->nationality === 'Others') {
        $nationality = $request->other_nationality;
    } else {
        $nationality = $request->nationality;
    }
    if ($request->education === 'Others') {
        $education = $request->other_education;
    } else {
        $education = $request->education;
    }
 
        $company   =   Company::updateOrCreate(
                    [
                     'id' => $companyId
                    ],
                    [
                        'registration_no' => $request->registration_no,
                        'registration_date' => $request->registration_date,
                        'registration_type' => $request->registration_type,
                        'salutation' => $request->salutation,
                        'last_name' => $request->last_name,
                        'first_name' => $request->first_name,
                        'middle_name' => $request->middle_name,
                        'appellation' => $request->appellation,
                        'barangay' => $request->barangay,
                        'contact_no' => $request->contact_no,
                        'resident' => $request->resident,
                        'age' => $request->age,
                        'date_of_birth' => $request->date_of_birth,
                        'place_of_birth' => $request->place_of_birth,
                        'gender' => $request->gender,
                        'civil_status' => $request->civil_status,
                        'no_of_children'=> $request->no_of_children,
                        'nationality' => json_encode($nationality),
                        'education'=> json_encode($education),
                        'person_to_notify' => $request->person_to_notify,
                        'relationship' => $request->relationship,
                        'contact' => $request->contact,
                        'address'=> $request->address,
                        'religion'=> $request->religion,
                        'incomeSource'=> json_encode($request->incomeSource),
                        'OtherincomeSource'=> json_encode($request->OtherincomeSource),
                       // MEMBERSHIP & AFFILIATIONS // MEMBERSHIP & AFFILIATIONS // MEMBERSHIP & AFFILIATIONS // MEMBERSHIP & AFFILIATIONS //
    
            // M&A 1
            'membership' => $request-> membership,
            'member_since' => $request-> member_since,
            'position' => $request-> position,
           
            
            // M&A 2
            'membership2' => $request-> membership2,
            'member_since2' => $request-> member_since2, 
            'position2' => $request-> position2,
           
           
                    ]); 
                         
        return Response()->json($company);
 
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
        $company  = Company::where($where)->first();
      
        return Response()->json($company);
    }
      
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $company = Company::where('id',$request->id)->delete();
      
        return Response()->json($company);
    }
}
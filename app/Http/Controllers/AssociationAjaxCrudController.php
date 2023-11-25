<?php
 
 namespace App\Http\Controllers;
  
 use Illuminate\Http\Request;
  
 use App\Models\Association;
  
 use Datatables;
 use Illuminate\Support\Facades\DB;

 class AssociationAjaxCrudController extends Controller

 {
    //  /**
    //   * Display a listing of the resource.
    //   *
    //   * @return \Illuminate\Http\Response
    //   */
     public function index()
     {
         if(request()->ajax()) {
            
             return datatables()->of(Association::select('*'))
             ->addColumn('action', 'admin/association-action')
             ->rawColumns(['action'])
             ->addIndexColumn()
             ->make(true);
         }
         return view('admin/association');
     }
       
       
    //  /**
    //   * Store a newly created resource in storage.
    //   *
    //   * @param  \Illuminate\Http\Request  $request
    //   * @return \Illuminate\Http\Response
    //   */
     public function store(Request $request)
     {  
  
         $associationId = $request->id;
  
         $association   =   Association::updateOrCreate(
                     [
                      'id' => $associationId
                     ],
                     [
                        'association'=> $request->association,
                        'barangay'=> $request->barangay,
                        'chairman'=> $request->chairman,
                        'contact'=> $request->contact,
                        'no_of_farmers'=> $request->no_of_farmers,
                        'registered'=> $request->registered,
                     ]);    
                          
         return Response()->json($association);
  
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
         $association  = Association::where($where)->first();
       
         return Response()->json($association);
     }
       
        //  show
        public function getAssociationDetails($id)
    {
        $association = Association::find($id);
        return response()->json($association);
    }

       
    //  /**
    //   * Remove the specified resource from storage.
    //   *
    //   * @param  \App\company  $company
    //   * @return \Illuminate\Http\Response
    //   */
    public function destroy(Request $request)
    {
        $association = Association::where('id', $request->id)->delete();

        // Reset AUTO_INCREMENT
        $associations = 'associations'; // Replace 'your_table' with the actual table name
        DB::statement("ALTER TABLE $associations AUTO_INCREMENT = 1");
        DB::statement("SET @id := 0");
        DB::statement("UPDATE associations SET id = (@id := @id + 1)");
        return Response()->json($association);
    }
     // In your controller, retrieve the data
     public function fetchData() {
        // Retrieve data from your model or source (e.g., database)
        $data = Association::all(); // Replace YourModel with your actual model

        return response()->json($data);
    }
 }

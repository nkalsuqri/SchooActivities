<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     
        if ($request->ajax()) {
  
            $data = Subjects::latest()->get();
  
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editRow">Edit</a>';

                        $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteRow">Delete</a>';
 
                         return $btn;
                 })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('subjects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        Subjects::updateOrCreate([
            'id' => $request->id
        ],
        [
            'code' => $request->code, 
            'ar_name' => $request->ar_name,
            'en_name' => $request->en_name,
            'active' => $request->active,
        ]);  
return response()->json(['success'=>'Subjects saved successfully.']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subjects  $Subjects
     * @return \Illuminate\Http\Response
     */
    public function show(Subjects $Subjects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subjects  $Subjects
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Subjects::find($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subjects  $Subjects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subjects $Subjects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subjects  $Subjects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Subjects::find($id)->delete();
      
        return response()->json(['success'=>'Subjects deleted successfully.']);
    }
}

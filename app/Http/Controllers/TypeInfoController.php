<?php

namespace App\Http\Controllers;

use App\Models\TypeInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables as DataTables;

class TypeInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     
        if ($request->ajax()) {
  
            $data = TypeInfo::latest()->get();
  
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
        
        return view('type_info.index');
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
        TypeInfo::updateOrCreate([
            'id' => $request->id
        ],
        [
            'code' => $request->code, 
            'ar_name' => $request->ar_name,
            'en_name' => $request->en_name,
            'active' => $request->active,
        ]);  
return response()->json(['success'=>'Class Room saved successfully.']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeInfo  $TypeInfo
     * @return \Illuminate\Http\Response
     */
    public function show(TypeInfo $typeInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeInfo  $TypeInfo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = typeInfo::find($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeInfo  $TypeInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeInfo $typeInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeInfo  $TypeInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        TypeInfo::find($id)->delete();
      
        return response()->json(['success'=>'Product deleted successfully.']);
    }
}

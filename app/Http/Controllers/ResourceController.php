<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables as DataTables;


class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     
        if ($request->ajax()) {
  
            $data = Resource::latest()->get();
  
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
        
        return view('resources.index');
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
        Resource::updateOrCreate([
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
     * @param  \App\Models\Resource  $Resource
     * @return \Illuminate\Http\Response
     */
    public function show(Resource $Resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resource  $Resource
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Resource::find($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resource  $Resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resource $Resource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resource  $Resource
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Resource::find($id)->delete();
      
        return response()->json(['success'=>'Product deleted successfully.']);
    }
}

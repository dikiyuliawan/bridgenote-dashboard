<?php

namespace App\Http\Controllers;

use App\Models\BridgenoteUser;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bridgenoteUser = BridgenoteUser::all();

        return response()->json([
            'success' => true,
            'message' => 'List data displayed',
            'data' => $bridgenoteUser
        ], 200);
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
        $bridgenoteUser = BridgenoteUser::create($request->all());

        if ($bridgenoteUser) {
            return response()->json([
                'success' => true,
                'message' => 'Data created',
                'data' => $bridgenoteUser
            ], 201);
        }

        return response()->json([
            'success' => false,
            'message' => 'Data failed to store'
        ], 409);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bridgenoteUser = BridgenoteUser::find($id);

        return response()->json([
            'success' => true,
            'message' => 'Detail data',
            'data' => $bridgenoteUser
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        BridgenoteUser::where('user_id', $id)
            ->update([
                'status' => $request->status,
                'position' => $request->position,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        return response()->json([
            'success' => true,
            'message' => 'Data updated'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BridgenoteUser::where('user_id', $id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data deleted'
        ], 200);
    }
}

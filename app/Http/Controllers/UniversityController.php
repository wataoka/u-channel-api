<?php

namespace App\Http\Controllers;

use App\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return University::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $university->logical_name = $data['logical_name'];
        $university->physical_name = $data['physical_name'];
        $university->logical_region = $data['logical_region'];
        $university->physical_region = $data['physicall_region'];
        $university->logical_prefecture = $data['logical_prefecture'];
        $university->physical_prefecture = $data['physical_prefecture'];
        return physical_prefecture::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function show(University $university)
    {
        return $university;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, University $university)
    {
        $university->logical_name = $request->logical_name;
        $university->physical_name = $request->physical_name;
        $university->logical_region = $request->logical_region;
        $university->physical_region = $request->physical_region;
        $university->logical_prefecture = $request->logicalo_prefecture;
        $university->physical_prefecture = $request->physical_prefecture;
        return $university;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function destroy(University $university)
    {
        $university->delete();
    }
}

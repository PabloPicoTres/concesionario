<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cocheController extends Controller
{
    
    
    
    public function index()
    {
        return coche::all();
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function destroy($id)
    {
        //
    }
}

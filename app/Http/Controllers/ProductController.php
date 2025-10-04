<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $number = $id + 10; // bebas mau ditambah berapa pun
        return view('products.index', ['number' => $number]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $nilai)
    {
        $alertMessage;
        $alertType;
        if($nilai % 2 == 0){
            $alertMessage = "Nilai ini adalah genap";
            $alertType = "success";
        }else{
            $alertMessage = "Nilai ini adalah ganjil"; 
            $alertType = "warning";
        }
        return view('product', [
            "alertMessage" => $alertMessage, 
            "alertType" => $alertType
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

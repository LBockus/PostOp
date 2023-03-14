<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HospitalRequest;
use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::all();
        return view('hospitals.index', ['hospitals' => $hospitals]);
    }

    public function store(HospitalRequest $request)
    {
        $hospital = Hospital::create($request->all());
        return redirect()->route('hospital.show', $hospital);
    }

    public function create()
    {
        return view('hospital.create');
    }

    public function show(Hospital $hospital)
    {
        return view('hospital.show', ['hospital' => $hospital]);
    }

    public function edit(Hospital $hospital)
    {
        return view('hospital.edit', ['hospital' => $hospital]);
    }

    public function update(HospitalRequest $request, Hospital $hospital)
    {
        $hospital->update($request->all());
        return redirect()->route('hospital.show', ['hospital' => $hospital]);
    }

    public function destroy(Hospital $hospital)
    {
        $hospital->delete();
        return redirect()->route('hospitals.index');
    }
}

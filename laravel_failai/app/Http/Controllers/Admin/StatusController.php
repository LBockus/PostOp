<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $statuses = Status::all();
        return view('statuses.index');
    }

    public function store(StatusRequest $request)
    {
        $status = Status::create($request->all());
        return redirect()->route('status.show', $status);
    }

    public function create()
    {
        return view('status.create');
    }

    public function show(Status $status)
    {
        return view('status.show', ['status' => $status]);
    }

    public function edit(Status $status)
    {
        return view('status.edit', ['status' => $status]);
    }

    public function update(StatusRequest $request, Status $status)
    {
        $status->update($request->all());
        return redirect()->route('status.show', ['status' => $status]);
    }

    public function destroy(Status $status)
    {
        $status->delete();
        return redirect()->route('statuses.index');
    }
}

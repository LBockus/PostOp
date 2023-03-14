<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OperationRequest;
use App\Models\Operation;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function index()
    {
        $operations = Operation::all();
        return view('operations.index', ['operations' => $operations]);
    }

    public function store(OperationRequest $request)
    {
        $operation = Operation::create($request->all());
        return redirect()->route('operation.show', $operation);
    }

    public function create()
    {
        return view('operation.create');
    }

    public function show(Operation $operation)
    {
        return view('operation.show', ['operation' => $operation]);
    }

    public function edit(Operation $operation)
    {
        return view('operation.edit', ['operation'=>$operation]);
    }

    public function update(OperationRequest $request, Operation $operation)
    {
        $operation->update($request->all());
    }

    public function destroy(Operation $operation)
    {
        $operation->delete();
        return redirect()->route('operations.index');
    }
}

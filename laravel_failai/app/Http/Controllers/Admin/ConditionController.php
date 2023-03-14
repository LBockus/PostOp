<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConditionRequest;
use App\Models\Condition;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function index()
    {
        $conditions = Condition::all();
        return view('conditions.index', ['conditions' => $conditions]);
    }

    public function store(ConditionRequest $request)
    {
        $condition = Condition::create($request->all());
        return redirect()->route('condition.show', $condition);
    }

    public function create()
    {
        return view('condition.create');
    }

    public function show(Condition $condition)
    {
        return view('condition.sown', ['condition' => $condition]);
    }

    public function edit(Condition $condition)
    {
        return view('condition.edit', ['condition' => $condition]);
    }

    public function update(ConditionRequest $request, Condition $condition)
    {
        $condition->update($request->all());
        return redirect()->route('condition.show', ['condition' => $condition]);
    }

    public function destroy(Condition $condition)
    {
        $condition->delete();
        return redirect()->route('conditions.index');
    }
}

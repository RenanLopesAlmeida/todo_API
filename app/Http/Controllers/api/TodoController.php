<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Task;

class TodoController extends Controller
{

    public function index()
    {
        return Task::all();
    }


    public function store(Request $request)
    {
        return Task::create($request->all());
    }


    public function show($id)
    {
        return Task::find($id);
    }


    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->update($request->all());
        return $task;
    }


    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return $task;
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserTask;

class UserTasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userTasks = UserTask::get();
        return $userTasks;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userTask = new UserTask();
        $userTask->user_id = $request->user_id;
        $userTask->task_id = $request->task_id;
        return $userTask;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $userTask = UserTask::findOrFail($id);
        return $userTask;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $userTask = UserTask::findOrFail($id);
        $userTask->user_id = $request->user_id;
        $userTask->task_id = $request->task_id;
        return $userTask;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $userTask = UserTask::destroy($id);
        return $userTask;
    }
}

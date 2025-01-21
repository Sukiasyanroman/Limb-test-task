<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::with(['user','project'])->get();

        return view('task.index')->with(['tasks' => $tasks]);
    }

    public function create()
    {
        $users = User::all();
        $projects = Project::all();

        return view('task.create')->with(['users' => $users, 'projects' => $projects]);
    }


    public function store(Request $request){
        $validated = $request->validate([
            'title' => ['required','string','max:255'],
            'description'=>['required','string','max:255'],
            'user_id' => ['required'],
            'project_id' => ['required']
        ]);

        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->user_id = $request->user_id;
        $task->project_id  = $request->project_id;

        $task->save();

        return redirect()->back()->with([
            'message' => 'Task Created Successfully'
        ]);
    }



}

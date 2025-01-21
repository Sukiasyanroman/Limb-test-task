<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('users')->get();

        return view('project.index')->with(['projects' => $projects]);
    }

    public function create()
    {
        $users = User::all();

        return view('project.create')->with(['users'=> $users]);
    }


    public function store(Request $request){
        $validated = $request->validate([
            'title' => ['required','string','max:255'],
            'description'=>['required','string','max:255'],
            'user_ids' => ['required']

        ]);

        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;

        $project->save();

        $project->users()->attach($request->user_ids);

        return redirect()->back()->with([
            'message' => 'Project Created Successfully'
        ]);
    }


}

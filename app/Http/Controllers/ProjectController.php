<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=Project::where('user_id',auth()->user()->id)->orderBy('id','desc')->paginate(10);

        // return $projects;
       return view('dashboard.project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $tag = [];

        $tag = $request->tag;
        // return $request;
        if ($tag != null) {
            $tag_var = '';
            foreach ($tag as $tags) {
                $tag_var .= $tags . "   ,   ";
            }
        } else {
            $tag_var = '';
        }

        $files_name = '';
        if ($request->has('file')) {
            $FileEx = $request->file('file')->getClientOriginalExtension();
            $files_name = time() . '_' . rand() . '.' . $FileEx;
            $request->file('file')->move(public_path('upload/project'), $files_name);
        }
        $requirment_name = '';

        if ($request->has('requirment')) {
            $FileEx = $request->file('requirment')->getClientOriginalExtension();
            $requirment_name = time() . '_' . rand() . '.' . $FileEx;
            $request->file('requirment')->move(public_path('upload/project'), $files_name);
        }
        // return $requirment_name;
        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'requirment' => $requirment_name,
            'tag' => $tag_var,
            'image' => $files_name,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('success', 'Data saved successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::find($id)->delete();
        return redirect()->back()->with('success', 'Data delete successfully');
    }
}

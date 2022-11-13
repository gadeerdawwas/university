<?php

namespace App\Http\Controllers;

use App\Models\order_group;
use App\Models\Project;
use App\Models\Task;
use App\Models\Task_result;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks=Task::where('user_id',auth()->user()->id)->orderBy('id','desc')->paginate(10);
        return view('dashboard.task.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task =Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'required' => $request->required,
            'user_id' => auth()->user()->id
        ]);
        $prject=Project::where('user_id',auth()->user()->id)->pluck('id');
        $oder_group_id=order_group::where('status',1)->whereIn('project_id',$prject)->pluck('group_id');

        foreach($oder_group_id as $seat_id) {
            Task_result::create([
                'task_id' => $task->id,
                'order_group_id' => $seat_id,
            ]);
        }


        // return $oder_group_id;


        return redirect()->back()->with('success', 'course work added successfully');

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
        $task=Task::find($id)->delete();
        Task_result::where('task_id',$task->id)->delete();

        return redirect()->back()->with('success', 'course work deleted successfully');
    }

    public function alltask()
    {
        $task= Task::where('user_id',auth()->user()->id)->pluck('id');
        $tasks= Task_result::whereIn('task_id',$task)->orderBy('id', 'desc')->paginate(10);
        // return $task;

        return view('dashboard.task.submittask',compact('tasks'));
    }
    public function detailtask($id)
    {
        $task= Task_result::find($id);
        return view('dashboard.task.result',compact('task'));
    }

    public function resulttask(Request $request ,$id)
    {
        Task_result::find($id)->update([
            'grade' => $request->grade,
            'note' => $request->note
        ]);
        return redirect()->back()->with('success', 'The result submited');
    }

}

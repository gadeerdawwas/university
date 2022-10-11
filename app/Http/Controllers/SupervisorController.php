<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Project;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    public function index()
    {
        return view('dashboard.profile');
    }
    public function order()
    {

     $projects=Project::where('user_id',auth()->user()->id)->pluck('id');

     $Groups=Group::whereIn('project_id',$projects)->where('status',0)->orderBy('id','desc')->paginate(10);
    //  return $Group;

     return view('dashboard.order.index',compact('Groups'));

    }
    public function group()
    {

     $projects=Project::where('user_id',auth()->user()->id)->pluck('id');

     $Groups=Group::whereIn('project_id',$projects)->where('status',1)->orderBy('id','desc')->paginate(10);
    //  return $Group;

     return view('dashboard.order.group',compact('Groups'));

    }

    public function accepteorder($id)
    {
        $group=Group::find($id);
        if ($group->status == 1) {
            Group::find($id)->update([
                'status' => 0
            ]);
        }else{
            Group::find($id)->update([
                'status' => 1
            ]);
        }


        return redirect()->back()->with('success', 'Apply successfully');

    }

}

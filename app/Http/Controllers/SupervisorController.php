<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use App\Models\Project;
use App\Models\order_group;
use App\Models\Task;
use App\Models\announcement;
use App\Models\supervisorinfo;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    public function index()
    {
        $prject_count=Project::where('user_id',auth()->user()->id)->count();

        $projects=Project::where('user_id',auth()->user()->id)->pluck('id');
        $order_group_count=order_group::whereIn('project_id',$projects)->orderBy('id','desc')->count();
        $order_group=order_group::whereIn('project_id',$projects)->orderBy('id','desc')->get();

        $Task=Task::where('user_id',auth()->user()->id)->count();
        return view('dashboard.profile',compact('Task','prject_count','order_group_count','order_group'));
    }
    public function order()
    {

     $projects=Project::where('user_id',auth()->user()->id)->pluck('id');
     $users=User::all();
     $Groups_order=order_group::whereIn('project_id',$projects)->where('status',0)->orderBy('id','desc')->paginate(10);
    //  return $Group;

     return view('dashboard.order.index',compact('Groups_order','users'));

    }
    public function group()
    {
        $users=User::all();
        $projects=Project::where('user_id',auth()->user()->id)->pluck('id');
        $order_group=order_group::whereIn('project_id',$projects)->where('status',1)->orderBy('id','desc')->paginate(10);
    //  $order_group=order_group::find(1);
    //  return $order_group;

     return view('dashboard.order.group',compact('order_group','users'));

    }

    public function accepteorder($id)
    {
        $order_group=order_group::find($id);
        if ($order_group->status == 1) {
            order_group::find($id)->update([
                'status' => 0
            ]);
            Group::find($order_group->group_id)->update([
                'status' => 0
            ]);
        }else{
            order_group::find($id)->update([
                'status' => 1
            ]);
            Group::find($order_group->group_id)->update([
                'status' =>1
            ]);
        }
        return redirect()->back()->with('success', 'Update Order successfully');

    }
    public function groupinfo($id)
    {

        $order_group=order_group::find($id);
        $group=Group::where('id',$order_group->group_id)->get();
        $users=User::all();
        return view('dashboard.group.group_info',compact('users','group'));
    }
    public function allannouncements()
    {
        $Announcements=Announcement::orderBy('id','desc')->paginate(10);
        return view('dashboard.announcement',compact('Announcements'));
    }
    public function profile()
    {
        $info = supervisorinfo::where('user_id', auth()->user()->id)->first();
        return view('dashboard.supervisor.profile', compact('info'));
    }
    public function info(Request $request)
    {
        $files_name = '';
        if ($request->has('file')) {
            $FileEx = $request->file('file')->getClientOriginalExtension();
            $files_name = time() . '_' . rand() . '.' . $FileEx;
            $request->file('file')->move(public_path('upload/info'), $files_name);
        }
        supervisorinfo::create([
            'user_id' => auth()->user()->id,
            'cv' => $files_name,
            'office_id' => $request->office_id,
            'college' => $request->college,
            'Specialization' => $request->Specialization,
            'interests' => $request->interests,
        ]);
        return redirect()->route('supervisor.profile')->with('success', 'Data saved successfully');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Group;
use App\Models\Project;
use App\Models\Userinfo;
use App\Models\order_group;
use App\Models\Task_result;
use App\Models\announcement;
use Illuminate\Http\Request;

class StudentController extends Controller
{


    public function index()
    {
        $info = Userinfo::where('user_id', auth()->user()->id)->first();
        // $info=Userinfo::find(3);
        // return $info->User->id;
        return view('dashboard.user.profile', compact('info'));
    }


    public function info(Request $request)
    {
        // return $request;
        $files_name = '';
        if ($request->has('file')) {
            $FileEx = $request->file('file')->getClientOriginalExtension();
            $files_name = time() . '_' . rand() . '.' . $FileEx;
            $request->file('file')->move(public_path('upload/info'), $files_name);
        }
        Userinfo::create([
            'user_id' => auth()->user()->id,
            'cv' => $files_name,
            'level' => $request->level,
            'major' => $request->major,
            'GPA' => $request->GPA,
        ]);
        return redirect()->route('student.index')->with('success', 'Data saved successfully');
    }


    public function project()
    {
        $group = Group::where('user_id', auth()->user()->id)
            ->orWhere('user_id_1', auth()->user()->id)
            ->orWhere('user_id_2', auth()->user()->id)
            ->orWhere('user_id_3', auth()->user()->id)
            ->orWhere('user_id_4', auth()->user()->id)
            ->orWhere('user_id_5', auth()->user()->id)
            ->orWhere('user_id_6', auth()->user()->id)
            ->first();
        // return $group;
        if ($group == NULL) {
            $group = [];
        } else {
            $group = $group;
        }

        $projects = Project::orderBy('id', 'desc')->paginate(10);
        // $projects=Project::find(1);
        // return $projects->User->first_name;
        $users = User::all();
        return view('dashboard.group.index', compact('projects', 'group', 'users'));
    }


    public function applyproject(Request $request, $id)
    {
        // return $request;
        if ($request->group_id == 0) {
            return redirect()->back()->with('success', 'You are not joined to a group. Can\'t apply for a request ');
        } else {
            $order_group = order_group::where('group_id', $request->group_id)->first();
        }
        // return $order_group;
        if ($order_group) {

            return redirect()->back()->with('success', 'The request was submitted by ');
        } else {
            order_group::create([
                'group_id' => $request->group_id,
                'project_id' => $request->project_id,
            ]);
        }

        return redirect()->route('student.project')->with('success', 'Apply successfully');
    }
    public function groups()
    {
        $users = User::where('is_student', 0)->get();

        $groups = Group::orderBy('id', 'desc')->paginate(10);
        // $groups=Group::find(1);
        // return $users;
        return view('dashboard.user.group.index', compact('groups', 'users'));
    }
    public function group()
    {

        $group = Group::where('user_id', auth()->user()->id)
            ->orWhere('user_id_1', auth()->user()->id)
            ->orWhere('user_id_2', auth()->user()->id)
            ->orWhere('user_id_3', auth()->user()->id)
            ->orWhere('user_id_4', auth()->user()->id)
            ->orWhere('user_id_5', auth()->user()->id)
            ->orWhere('user_id_6', auth()->user()->id)
            ->get();
        $users = User::where('is_student', 0)->get();
        $user = User::find(auth()->user()->id);
        // return $users;
        if (count($group) === 0) {
            return view('dashboard.user.group.create', compact('users', 'user'));
        } else {
            return redirect()->route('student.groups')->with('success', 'user  exit in group');
        }
    }
    public function savegroup(Request $request)
    {
        // return $request;
        $group = Group::create([
            'name' => $request->name,
            'user_id_1' => auth()->user()->id,
            'user_id_2' => $request->user_id_2,
            'user_id_3' => $request->user_id_3,
            'user_id_4' => $request->user_id_4,
            'user_id_5' => $request->user_id_5,
            'user_id_6' => $request->user_id_6,
            'user_id' => auth()->user()->id
        ]);

        order_group::create([
            'group_id' => $group->id,
            'project_id' => $request->project,
        ]);
        return redirect()->back()->with('success', 'Group Added successfully');
        return view('dashboard.user.group.create');
    }

    public function groupupdate(Request $request, $id)
    {
        $group = Group::where('user_id', auth()->user()->id)
            ->orWhere('user_id_1', auth()->user()->id)
            ->orWhere('user_id_2', auth()->user()->id)
            ->orWhere('user_id_3', auth()->user()->id)
            ->orWhere('user_id_4', auth()->user()->id)
            ->orWhere('user_id_5', auth()->user()->id)
            ->orWhere('user_id_6', auth()->user()->id)
            ->get();
        // return $group;
        if (count($group) === 0) {

            $group = Group::find($id)->update([
                'user_id_2' => $request->user_id_2,
                'user_id_3' => $request->user_id_3,
                'user_id_4' => $request->user_id_4,
                'user_id_5' => $request->user_id_5,
                'user_id_6' => $request->user_id_6,
            ]);
            return redirect()->back()->with('success', 'user added  successfully');

            // return $group;
        } else {

            return redirect()->route('student.groups')->with('success', 'user  exit in group');
        }
    }
    public function usertask()
    {

        $group = Group::where([['status', '=', 1]])
            ->orWhere([
                ['user_id_1', auth()->user()->id],
                ['user_id_2', auth()->user()->id],
                ['user_id_3', auth()->user()->id],
                ['user_id_4', auth()->user()->id],
                ['user_id_5', auth()->user()->id],
                ['user_id_6', auth()->user()->id]
            ])
            ->first();

        // return $group;

        if ($group) {

            $tasks = Task_result::where('order_group_id', $group->id)->orderBy('id', 'desc')->paginate(10);
            return view('dashboard.user.task.index', compact('tasks'));
        } else {
            return redirect()->route('student.usertask')->with('success', 'There are no tasks to display');
        }
    }

    public function task($id)
    {
        $task = Task_result::find($id);
        return view('dashboard.user.task.submittask', compact('task'));
    }

    public function submittask(Request $request, $id)
    {
        $files_name = '';
        if ($request->has('file')) {
            $FileEx = $request->file('file')->getClientOriginalExtension();
            $files_name = time() . '_' . rand() . '.' . $FileEx;
            $request->file('file')->move(public_path('upload/task'), $files_name);
        }
        Task_result::find($id)->update([
            'file' => $files_name,
            'submit_status' => 1
        ]);
        return redirect()->route('student.usertask')->with('success', 'The tasks submited');
    }

    public function project_tag($tag)
    {

        $streets = Project::where('tag', 'like', '%' . $tag . '%')->pluck('id', 'title');

        return json_encode($streets);
    }
    public function allannouncements()
    {
        $Announcements = Announcement::orderBy('id', 'desc')->paginate(10);
        return view('dashboard.announcement', compact('Announcements'));
    }

    public function searchsuper(Request $request)
    {
        $group = Group::where('user_id', auth()->user()->id)
            ->orWhere('user_id_1', auth()->user()->id)
            ->orWhere('user_id_2', auth()->user()->id)
            ->orWhere('user_id_3', auth()->user()->id)
            ->orWhere('user_id_4', auth()->user()->id)
            ->orWhere('user_id_5', auth()->user()->id)
            ->orWhere('user_id_6', auth()->user()->id)
            ->first();
        // return $group;
        if ($group == NULL) {
            $group = [];
        } else {
            $group = $group;
        }

        if ($request->search) {
            $user=User::where('first_name','like', '%' . $request->search . '%')->first();
            // return $user->id;
            $projects=Project::where('user_id', $user->id)->orderBy('id','desc')->paginate(10);
            $users = User::all();

            return view('dashboard.group.index', compact('projects', 'group', 'users'));
        }

        // $projects=Project::find(1);
        // return $projects->User->first_name;
        $users = User::all();
        return view('dashboard.group.index', compact('projects', 'group', 'users'));
    }
}

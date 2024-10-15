<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
   public function index(){
       $users = User::all();
       $tasks = Task::all();
       return view('tasks',compact('users', 'tasks'));
   }
   public function addTask(){
       $users = User::all();
       return view('create-tasks',compact('users'));
   }
   public function storeTask(Request $request){
       $task = Task::query()->create([
           'title' => $request->input('title'),
           'status' => $request->input('status'),
           'user_id' => $request->input('user_id'),
       ]);
    $task->users()->attach($request['user_id']);
//       $user = User::find(1);
//       $user->tasks()->attach($request->tasks);

       return redirect()->route('tasks');
   }
}

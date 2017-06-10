<?php

namespace App\Http\Controllers;

use \App\Task;
use Response;
use DB;
use Request;


class TestController extends Controller
{

    public function getTasks()
    {
      $tasks = Task::getLatest();
      return view('tasks', compact('tasks'));
    }

    public function addTask(Request $request)
    {
      $task = new Task;
      $task->task = request()->task;
      $task->save();
      return redirect('/tasks');
    }

    public function deleteTask($id)
    {
      $task = Task::getById($id);
      $task->delete();
      return redirect('/tasks');
    }

    public function editTask($id)
    {
      $task = Task::getById($id);
      $task->task = request()->task;
      $task->save();
      return redirect('/tasks');
    }
    public function doneTask($id)
    {
      $task = Task::getById($id);
      $task->isdone = true;
      $task->save();
      return redirect('/tasks');
    }
}

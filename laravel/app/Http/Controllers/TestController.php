<?php

namespace App\Http\Controllers;

use Response;
use DB;
use Request;

/**
 * @resource Management
 *
 * Yönetici modülüne ait api fonksiyonları için hazırlanmıştır.
 */
class TestController extends Controller
{


    /****** BRAND MANAGEMENT ********/

    public function getBrand()
    {
        $data = [
            'test' => 'works'
        ];
        return Response::json($data);
    }
    public function getView()
    {
      $data = [
          'test2' => 'works2'
      ];
      return view('test', $data);
    }

    public function getTasks()
    {
      $tasks = DB::table('tasks')->latest()->get();
      return view('tasks', compact('tasks'));
    }

    public function addTask(Request $request)
    {
      $task = request()->task;
      $id = DB::table('tasks')->insertGetId(
          ['task' => $task, 'isdone' => 0]
      );
      return redirect('/tasks');
    }

    public function deleteTask($id)
    {
      $tasks = DB::table('tasks')->where('id', '=',(integer) $id)->delete();
      return redirect('/tasks');
    }

    public function editTask($id)
    {
      $task = request()->task;
      DB::table('tasks')->where('id', '=', (integer) $id)->update(['task' => $task]);
      return redirect('/tasks');
    }
    public function doneTask($id)
    {
      DB::table('tasks')->where('id', '=', (integer) $id)->update(['isdone' => 1]);
      return redirect('/tasks');
    }
}

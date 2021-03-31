<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Task;

use Illuminate\Support\Facades\DB;

use App\Services\CheckFormData;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $user_id = Auth::id();

        $query = DB::table('tasks')->where('user_id', $user_id);


        if($search !== null){
            $search_split = mb_convert_kana($search,'s');

            $search_split2 = preg_split('/[\s]+/', $search_split,-1,PREG_SPLIT_NO_EMPTY);

            foreach($search_split2 as $value)
            {
            $query->where('class_name','like','%'.$value.'%');
            }
        }

        $tasks = $query->get();

        //$user_id = Auth::id();
        //$tasks = DB::table('tasks')->where('user_id', $user_id)->get();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $task = new Task;
    
      $task->class_name = $request->input('class_name');
      $task->task_format = $request->input('task_format');
      $task->deadline = $request->input('deadline');
      $task->detail = $request->input('detail');
      $task->user_id = $request->user()->id;

      $task->save();

      return redirect('tasks/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        $task_format = CheckFormData::checkTaskFormat($task);
        return view('tasks.show', compact('task', 'task_format'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', compact('task'));
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

      $task = Task::find($id);

      $task->class_name = $request->input('class_name');
      $task->task_format = $request->input('task_format');
      $task->deadline = $request->input('deadline');
      $task->detail = $request->input('detail');
      $task->user_id = $request->user()->id;

      $task->save();

      return redirect('tasks/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect('tasks/index');
    }
}

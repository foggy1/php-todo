<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\TodoList;
use App\Task;

class ListTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($list_id)
    {
        $list = TodoList::find($list_id);
        $tasks = $list->tasks->sortByDesc('created_at');
        return view('user.lists.show', ['user' => Auth::user(),
                                        'list' => $list,
                                        'tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($list_id)
    {
        $list = TodoList::find($list_id);
        return view('list.tasks.create', ['list' => $list]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $list_id)
    {
        $list = TodoList::find($list_id);
        Task::create([
            'description' => $request->input('task.description'),
            'todo_list_id' => $list_id
        ]);

        $tasks = $list->tasks->sortByDesc('created_at');
        return view('user.lists.show', ['user' => Auth::user(), 
                                        'list' => $list, 
                                        'tasks' => $tasks]);
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
    public function update(Request $request, $list_id, $id)
    {
        $list = TodoList::find($list_id);
        $task = Task::find($id);

        $newStatus = $request->input('task.status');
        $newStatus === "false" || "0" ? $newStatus = false : $newStatus = true;
        if ($request->input('check') === 'not check') {
            $newDescription = $request->input('task.description');
            $task->description = $newDescription;
        };
        $task->status = $newStatus;
        $task->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($list_id, $id)
    {
        $list = TodoList::find($list_id);
        $task = Task::find($id);
        $task->delete();
    }
}

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
            'description' => $request['description'],
            'todo_list_id' => $list_id
        ]);

        $tasks = $list->tasks;
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
        $task->status === 0 ? $task->status = 1 : $task->status = 0;
        $task->save();
        return $task->status;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

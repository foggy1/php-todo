<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\TodoList;
use Illuminate\Http\Request;

class UserListController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {   
        if (auth()->user()->id != $user_id) {
            abort(404);
        };
        $user = User::find($user_id);
        $lists = $user->todo_lists;
        return view('user.lists.index', ['user' => $user,
                                         'lists' => $lists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.lists.create', ['user' => Auth::user()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TodoList::create([
            'title' => $request['title'],
            'user_id' => Auth::user()->id
        ]);

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id, $id)
    {
        if (auth()->user()->id != $user_id) {
            abort(404);
        };
        $user = User::find($user_id);
        $list = TodoList::find($id);
        $tasks = $list->tasks->sortByDesc('created_at');
        return view('user.lists.show', ['user' => $user,
                                        'list' => $list,
                                        'tasks' => $tasks]);
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
        //
    }
}

<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Opinion;
use App\Rules\ElaboratedComment;
use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;
use App\Models\Opinion;
>>>>>>> Dev
use Illuminate\Support\Facades\Auth;

class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('opinions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

<<<<<<< HEAD
    /**
     * Add a comment to an opinion
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function newComment(Request $request)
    {
        $validated = $request->validate([
            'newcomm' => 'required|min:25',
            'newcomm' => new ElaboratedComment()
        ]);
        $opinion = Opinion::find($request->input('opinion'));
        $opinion->comments()->attach(Auth::user(),['comment' => $request->input('newcomm'),'points' => $request->input('points')]);
        return redirect(route('topics.show',$opinion->topic))->with('message','Commentaire enregistré');
=======
    public function newComment(Request $request)
    {
        $opinion = Opinion::find($request->input('opinionid'));
        $opinion->comments()->attach(Auth::user(),['comment' => $request->input('newcomm'), 'points' => $request->input('points')]);
        return redirect(route('topics.show',$opinion->topic))->with('message', 'Commentaire ajouté');
>>>>>>> Dev
    }
}

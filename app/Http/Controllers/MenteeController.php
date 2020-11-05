<?php

namespace App\Http\Controllers;

use App\Models\mentee;
use App\Models\mentor;
use Illuminate\Http\Request;

class MenteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentees = Mentee::all(); //SELECT * FROM Mentee
        $mentors = Mentor::all(); //SELECT * FROM Mentor
        return view('mentee.index', compact('mentees', 'mentors'));
    }

    public function list()
    {
        $mentees = Mentee::all(); //SELECT * FROM Mentee
        $mentors = Mentor::all(); //SELECT * FROM Mentor
        return view('layouts.listMentoring', compact('mentees', 'mentors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mentors = Mentor::all();
        return view('mentee.addMentee', compact('mentors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_mentee' => 'required|string',
            'nim_mentee' => 'required|unique:mentees',
            'mentored_by'=>'required|integer',
            'jurusan' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
        ]);

        Mentee::create([
            'nama_mentee' => $data['nama_mentee'],
            'nim_mentee' => $data['nim_mentee'],
            'mentored_by' => $data['mentored_by'],
            'jurusan' => $data['jurusan'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'jenis_kelamin' => $data['jenis_kelamin'],
        ]);

        //$request->validated() mengreturn boolean

        return redirect()->route('mentee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mentee  $mentee
     * @return \Illuminate\Http\Response
     */
    public function show(mentee $mentee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mentee  $mentee
     * @return \Illuminate\Http\Response
     */
    public function edit(mentee $mentee)
    {
        $mentors = Mentor::all();
        return view('mentee.editMentee', compact('mentee', 'mentors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mentee  $mentee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mentee $mentee)
    {
        $mentee->update($request->all());
        return redirect()->route('mentee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mentee  $mentee
     * @return \Illuminate\Http\Response
     */
    public function destroy(mentee $mentee)
    {
        $mentee->delete();
        return redirect()->route('mentee.index');
    }
}

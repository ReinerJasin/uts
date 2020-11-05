<?php

namespace App\Http\Controllers;

use App\Models\mentor;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentors = Mentor::all(); //SELECT * FROM Mentor
        return view('mentor.index', compact('mentors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mentor.addMentor');
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
            'nama_mentor' => 'required|string',
            'nim_mentor' => 'required|unique:mentors',
            'jurusan' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
        ]);

        Mentor::create([
            'nama_mentor' => $data['nama_mentor'],
            'nim_mentor' => $data['nim_mentor'],
            'jurusan' => $data['jurusan'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'jenis_kelamin' => $data['jenis_kelamin'],
        ]);

        //$request->validated() mengreturn boolean

        return redirect()->route('mentor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function show(mentor $mentor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function edit(mentor $mentor)
    {
        return view('mentor.editMentor', compact('mentor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mentor $mentor)
    {
        $mentor->update($request->all());
        return redirect()->route('mentor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function destroy(mentor $mentor)
    {
        $mentor->delete();
        return redirect()->route('mentor.index');
    }
}

@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Mentee List</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
            <a href="{{ route('mentee.create') }}" class="btn btn-primary btn-block" role="button"
                   aria-pressed="true" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Add Mentee</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr style="background-color: rgba(255, 255, 255, 0.8)">
                    <th scope="col">Full Name</th>
                    <th scope="col">ID Number</th>
                    <th scope="col">Major</th>
                    <th scope="col">Mentor</th>
                    <th scope="col">Birth Date</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Last Update</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    {{-- {{ dd($mentees) }} --}}
                @foreach($mentees as $mentee)
                    <tr style="background-color: rgba(255, 255, 255, 0.5)">
                    <td><a href="{{ route('mentee.edit', $mentee) }}" onmouseover="this.style.textShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.textShadow='0px 0px 0px LightSkyBlue'">{{ $mentee->nama_mentee }}</a></td>
                        <td>{{ $mentee->nim_mentee }}</td>
                        <td>{{ $mentee->jurusan }}</td>
                        @foreach ($mentors as $mentor)
                            @if ($mentee->mentored_by == $mentor->id)
                                <td>{{ $mentor->nama_mentor }} ({{$mentor->jurusan}})</td>
                            @endif
                        @endforeach
                        <td>{{ $mentee->tanggal_lahir }}</td>
                        <td>{{ $mentee->jenis_kelamin }}</td>
                        <td>{{ $mentee->updated_at}}</td>
                        <td>{{ $mentee->created_at}}</td>
                        <td>
                            <form action="{{ route('mentee.destroy', $mentee) }}" method="post" onsubmit="return confirm('Are you sure? This action cannot be undone!')">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onmouseover="this.style.boxShadow='0px 0px 15px HotPink'" onmouseout="this.style.boxShadow='0px 0px 0px HotPink'">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

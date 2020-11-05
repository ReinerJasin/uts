@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Mentor List</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
            <a href="{{ route('mentor.create') }}" class="btn btn-primary btn-block" role="button"
                   aria-pressed="true" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Add Mentor</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr style="background-color: rgba(255, 255, 255, 0.8)">
                    <th scope="col">Full Name</th>
                    <th scope="col">ID Number</th>
                    <th scope="col">Major</th>
                    <th scope="col">Birth Date</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Last Update</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    {{-- {{ dd($mentors) }} --}}
                @foreach($mentors as $mentor)
                    <tr style="background-color: rgba(255, 255, 255, 0.5)">
                    <td><a href="{{ route('mentor.edit', $mentor) }}" onmouseover="this.style.textShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.textShadow='0px 0px 0px LightSkyBlue'">{{ $mentor->nama_mentor }}</a></td>
                        <td>{{ $mentor->nim_mentor }}</td>
                        <td>{{ $mentor->jurusan }}</td>
                        <td>{{ $mentor->tanggal_lahir }}</td>
                        <td>{{ $mentor->jenis_kelamin }}</td>
                        <td>{{ $mentor->updated_at}}</td>
                        <td>{{ $mentor->created_at}}</td>
                        <td>
                            <form action="{{ route('mentor.destroy', $mentor) }}" method="post" onsubmit="return confirm('Are you sure? all the related data will also be deleted!')">
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

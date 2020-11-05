@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Edit Mentee Data</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('mentee.update', $mentee) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" name="nama_mentee" value="{{ $mentee->nama_mentee }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>ID Number:</label>
                        <input class="form-control" value="{{ $mentee->nim_mentee }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Major:</label>
                        <input class="form-control" name="jurusan" value="{{ $mentee->jurusan }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Mentored By:</label>
                        <select class="custom-select" name="mentored_by" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                            @foreach ($mentors as $mentor)
                            @if ($mentee->mentored_by == $mentor->id) {
                                <option value="{{ $mentor->id }}" selected>{{$mentor->nama_mentor . ' (' . $mentor->jurusan .')'}}</option>
                            }
                            @else{
                                <option value="{{ $mentor->id }}">{{$mentor->nama_mentor . ' (' . $mentor->jurusan .')'}}</option>
                            }       
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Birth Date:</label>
                        <input type="date" class="form-control" name="tanggal_lahir" value="{{ $mentee->tanggal_lahir }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Gender:</label><br>
                        @if ($mentee->jenis_kelamin == "Pria")
                            <input type="radio" class="form_control" id="pria" name="jenis_kelamin" value="Pria" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'" checked>
                            <label for="pria">Male</label><br>
                            <input type="radio" class="form_control" id="wanita" name="jenis_kelamin" value="Wanita" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                            <label for="wanita">Female</label><br>
                        @else
                            <input type="radio" class="form_control" id="pria" name="jenis_kelamin" value="Pria" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                            <label for="pria">Male</label><br>
                            <input type="radio" class="form_control" id="wanita" name="jenis_kelamin" value="Wanita" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'" checked>
                            <label for="wanita">Female</label><br>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Edit Mentor Data</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('mentor.update', $mentor) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" name="nama_mentor" value="{{ $mentor->nama_mentor }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>ID Number:</label>
                        <input class="form-control" value="{{ $mentor->nim_mentor }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Major:</label>
                        <input class="form-control" name="jurusan" value="{{ $mentor->jurusan }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Birth Date:</label>
                        <input type="date" class="form-control" name="tanggal_lahir" value="{{ $mentor->tanggal_lahir }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Gender:</label><br>
                        @if ($mentor->jenis_kelamin == "Pria")
                            <input type="radio" class="form_control" id="pria" name="jenis_kelamin" value="Pria" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'" checked>
                            <label for="pria">Male</label><br>
                            <input type="radio" class="form_control" id="wanita" name="jenis_kelamin" value="Wanita" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                            <label for="wanita">Female</label><br>
                        @else
                            <input type="radio" class="form_control" id="pria" name="jenis_kelamin" value="Pria" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                            <label for="pria">Male</label><br>
                            <input type="radio" class="form_control" id="wanita" name="jenis_kelamin" value="Wanita" checked onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                            <label for="wanita">Female</label><br>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

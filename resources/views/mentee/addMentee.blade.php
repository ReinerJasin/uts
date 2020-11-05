@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Insert Mentee Data</h1>
        </div>
        {{-- {{ dd($mentors) }} --}}
        <div class="row">
            <div class="col">
            <form action="{{ route('mentee.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" name="nama_mentee" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>ID Number:</label>
                        <input class="form-control" name="nim_mentee" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Mentored By:</label>
                        <select class="custom-select" name="mentored_by" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                            @foreach ($mentors as $mentor)
                                <option value="{{ $mentor->id }}">{{$mentor->nama_mentor . ' (' . $mentor->jurusan .')'}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Major:</label>
                        <input class="form-control" name="jurusan" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Birth Date:</label>
                        <input type="date" class="form-control" name="tanggal_lahir" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Gender:</label><br>
                        <input type="radio" class="form_control" id="pria" name="jenis_kelamin" value="Pria" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                        <label for="pria">Male</label><br>
                        <input type="radio" class="form_control" id="wanita" name="jenis_kelamin" value="Wanita" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                        <label for="wanita">Female</label><br>
                    </div>
                    <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')

    <div class="container" style = "margin-top: 75px; margin-bottom: 50px">

        @foreach ($mentors as $mentor)
    
            <h1>{{ $mentor->nama_mentor }}'s mentee: </h1>

            <?php
            $totalmentee = 0;
            ?>
        
            <div style = "background-color: rgba(255, 255, 255, 0.5)">

            @foreach($mentor->mentees as $mentee)

            <h3 style = "padding-left: 10px">- {{$mentee->nama_mentee}} ({{$mentee->nim_mentee}})</h3>
            
            <?php
                $totalmentee = 1;
            ?>

            @endforeach
        
            </div>

            @if ($totalmentee == 0)
        
                <h3>This mentor has no mentee.</h3>
        
            @endif

            <br>
    
        @endforeach
    
    </div>
    
@endsection

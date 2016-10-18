@extends('layouts.app')

@section('content')
<div style="padding-top:20px" class="container">
    <div class="col-md-4">
        <img class="profile-pic" src={{$immigrant->image()}}>

    </div>
    <div class="col-md-8 bottom-align-text">

        <h1>{{$immigrant->name}}</h1>
    </div>

    <h2>Age: {{$immigrant->age}}</h2>
    <br>
    <h2>Arrived: {{$immigrant->date_of_arrival}}</h2>
    <br>
    <h2>Ship: {{$immigrant->ship}}</h2>


</div>
@endsection

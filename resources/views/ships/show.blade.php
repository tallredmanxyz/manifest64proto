@extends('layouts.app')

@section('content')
<div style="padding-top:20px" class="container">
    <h1>{{$ship_name}}</h1>
    <h2>Records</h2>
    @foreach($ship_links as $ship_link)
        <h4><a href="{{$ship_link->url}}">{{$ship_link->qsa_item_id}}_{{$ship_link->soundex_value}}</a></h4>
    @endforeach

    <h2>Voyages</h2>
    @foreach($immigrants as $immigrant)
        <br>
        <form action="{{ url('ships/'.$immigrant->ship.'/'.$immigrant->date_of_arrival) }}" method="GET">
            {{ csrf_field() }}
            <button type="submit" id="{{$immigrant->date_of_arrival}}" class="btn btn-primary">
                {{$immigrant->date_of_arrival}}
            </button>
        </form>
    @endforeach

</div>
@endsection

@extends('layouts.app')

@section('content')
<div style="padding-top:20px" class="container-fluid">
    <table class="table">
        <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Age</th>
            <th>Arrival</th>
            <th>Ship</th>
        </tr>
        </thead>
        <tbody>
            @foreach($immigrants as $immigrant)
            <tr>
                <td class="text-right"><img src={{$immigrant->image()}}></td>
                <td>
                    <h2>
                        <form action="{{ url('immigrants/'.$immigrant->arrival_id) }}" method="GET">
                            {{ csrf_field() }}
                            <button type="submit" id="{{$immigrant->arrival_id}}" class="btn btn-primary">
                                {{$immigrant->name}}
                            </button>
                        </form>
                    </h2>
                </td>
                <td><h2>{{$immigrant->age}}</h2></td>
                <td><h2>{{$immigrant->date_of_arrival}}</h2></td>
                <td>
                    <form action="{{ url('ships/'.$immigrant->ship) }}" method="GET">
                        {{ csrf_field() }}
                        <button type="submit" id="{{$immigrant->ship}}" class="btn btn-primary">
                            {{$immigrant->ship}}
                        </button>
                    </form>

            </tr>
            @endforeach
        </tbody>
    </table>
    {{$immigrants->appends(Request::only('searchQuery'))->links()}}

</div>
@endsection

@extends('layouts.app')

@section('content')
<div style="padding-top:20px" class="container">
    <table class="table">
        <thead>
        <tr>
            <th></th>
            <th>Ship</th>
        </tr>
        </thead>
        <tbody>
            @foreach($ships as $ship)
            <tr>
                <td></td>
                <td>
                    <form action="{{ url('ships/'.$ship->ship_name) }}" method="GET">
                        {{ csrf_field() }}
                        <button type="submit" id="{{$ship->ship_name}}" class="btn btn-primary">
                            {{$ship->ship_name}}
                        </button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    {{$ships->links()}}

</div>
@endsection

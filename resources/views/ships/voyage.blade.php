@extends('layouts.app')
<div style="padding-top:20px" class="container-fluid">

<table class="table">
    <thead>
    <tr>
        <th></th>
        <th>Name</th>
        <th>Age</th>
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
        </tr>
    @endforeach
    </tbody>
</table>
    </div>
{{$immigrants->appends(Request::only('searchQuery'))->links()}}

@extends('base')


@section('content')
<div class="container" style="margin-top: 20px;">
    <h2>Instructors</h2>

    <table class="table table-bordered table-hover table-sm">
        <thead  class="bg-primary">
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Area of Expertise</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            @foreach($instructors as $instructor)
            <tr>
                <td>{{$instructor->lname}}</td>
                <td>{{$instructor->fname}}</td>
                <td>{{$instructor->aoe}}</td>
                <td>{{$instructor->rating}}</td>

            </tr>
            @endforeach
        </tbody>

    </table>
</div>


@stop
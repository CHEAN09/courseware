@extends('base')


@section('content')
<div class="container" style="margin-top: 20px;">
    <h2>Learners</h2>

    <table class="table table-bordered table-hover  table-sm">
        <thead class="bg-primary">
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Level</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($learners as $learner)
            <tr>
                <td>{{$learner->lname}}</td>
                <td>{{$learner->fname}}</td>
                <td>{{$learner->level}}</td>
                <td>{{$learner->status}}</td>

            </tr>
            @endforeach
        </tbody>

    </table>
</div>


@stop
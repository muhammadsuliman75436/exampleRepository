@extends('layout.app')
@section('content')
<div class="container-fluid justify-content-center" style="text-align: center;" align="center'">
    <h2>Jobs index</h2>
    <a href="jobs/create">Post a job</a>


    <table class="table text-left" align="left">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>City</th>
            <th>Post Date</th>
            <th>Exp Date</th>
            <th>Dept</th>
            <th>Source</th>
        </thead>
        <tbody>
            @foreach ($jobs as $job)
            <tr>
                <td>{{ $job->id }}</td>
                <td><a href="jobs/{{ $job->id }}">{{ $job->title }}</a></td>
                <td>{{ $job->city }}</td>
                <td>{{ $job->dat }}</td>
                <td>{{ $job->expdat }}</td>
                <td>{{ $job->dept }}</td>
                <td>{{ $job->source }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
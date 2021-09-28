@extends('layout.app')
@section('content')
<div class="container justify-content-center" style="text-align: center;" align="center'">

    <h2>Job</h2>
    <table class="table table-bordered " id="table1" width='100%'>
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>City</th>
            <th>Post Date</th>
            <th>Exp Date</th>
            <th>Dept</th>
            <th>Source</th>
            <th>Action</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $job->id }}</td>
                <td>{{ $job->title }}</td>
                <td>{{ $job->city }}</td>
                <td>{{ $job->dat }}</td>
                <td>{{ $job->expdat }}</td>
                <td>{{ $job->dept }}</td>
                <td>{{ $job->source }}</td>
                <td>
                    <a href="/jobs/{{$job->id}}/edit" class="float-left">Edit</a>
                    <form action="/jobs/{{$job->id}}" method="POST" class="float-right">
                        @csrf
                        @method("delete")
                        <button type="submit">
                            Detele
                        </button>
                    </form>
                </td>
            </tr>
        </tbody>

    </table>
</div>
@endsection
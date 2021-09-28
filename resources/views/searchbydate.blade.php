@extends('layout.app')
@section('content')
<div class="container justify-content-center" style="text-align: center;" align="center'">
    <div class="row">
        <div class="col-md-12">
            <table class="table text-left" align="left">
                <thead>
                    <tr>
                        <th align="left" class="col-7">Title</th>
                        <th class="col-2">City</th>
                        <th class="col-2">Date</th>
                        <th class="col-1">Show</th>
                    </tr>
                </thead>
                @foreach ($jobs as $job)
                <tr>
                    <td><span><a href="title.php?title={{ $job->title}}">{{ $job->title}}</a></span><br><span
                            class="small"><a href="department.php?dept={{ $job->dept }}">{{ $job->dept }}</a></span>
                    </td>
                    <td><a href="city.php?city={{ $job->city }}">{{ $job->city }}</a></td>
                    <td><?php $date = date_create( $job->dat ); echo date_format($date, 'd/m/Y'); ?></td>
                    <td><a href="/showjob/{{ $job->id }}" class="btn btn-info btn-sm">Show Ad</a></td>
                </tr>
                @endforeach
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 justify-content-center">
            {{ $jobs->links() }}
        </div>
    </div>
</div>

@endsection
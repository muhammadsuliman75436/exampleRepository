@extends('layout.app')
@section('content')
<div class="container justify-content-center" style="text-align: center;" align="center'">
    <br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <img src="{{asset("storage/banner.jpg")}}" class="img-fluid" alt="Naujawan Rozgar Contact Banner">
        </div>
        <div class="col-md-2"></div>
        <br>
    </div>
    <h1 class="text-4xl">{{ $jobs->title }}</h1>
    <h1 class="text-primary">{{ $jobs->dept }}</h1>
    <h3><a href="city.php?city=Peshawar">Jobs in {{ $jobs->city }}</a></h3>
    <p><span>Posted date : {{$jobs->dat}}</span> &nbsp; <span class="text-danger">Job Expiry date :
            <mark>{{$jobs->expdat}}</mark></span></p>
    <p><a class="btn btn-info" href="job-apply.php?ad_id=459">Apply for this job</a></p>
    <a href="jobs/6141ccc0d85e70.45173119.jpg" target="_blank"><img src="{{ asset('jobss/'. $jobs->imgpath)  }}"
            class="img-fluid" style="max-width: 100%; max-height: 100%" alt=""></a>

</div>
@endsection
<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $date = \Carbon\Carbon::today()->subDays(7);

        $job = Job::where('dat', '>=', $date)->groupBy('dat')->get();

        return view('index', ['jobs' => $job]);
    }

    public function paperjob($newspaper, $date)
    {
        $jobs = DB::table('jobs')
            ->where('dat', '=', $date)
            ->where('source', '=', $newspaper)
            ->paginate(15);

        return view('paperjobs', ['jobs' => $jobs]);
    }

    public function showjob($id)
    {
        $job = DB::table('jobs')
            ->where('id', '=', $id)
            ->first();
        // dd($job);

        return view('showjob', ['jobs' => $job]);
    }

    public function searchbydate(Request $request)
    {
        $jobs = DB::table('jobs')
            ->where('dat', '=', $request->input('searchjob'))
            ->paginate(15);

        return view('searchbydate', ['jobs' => $jobs]);
    }
}

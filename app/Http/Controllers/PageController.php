<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function planostreino()
    {
        return view('planostreino');
    }

    public function blog()
    {
        return view('blog');
    }

    public function modalidades()
    {
        return view('modalidades');
    }

    public function servicos()
    {
        $services = Service::all();
        return view('servicos', compact('services'));
    }
    public function eventos()
    {
        $events = Service::all();
        return view('eventos', compact('events'));
    }

    public function staff()
    {
        return view('staff');
    }

    public function admindashboard()
    {

        $count_events = Event::count();
        $count_users = User::count();
        $count_users_per_role = User::select('perm', DB::raw('count(*) as
       count'))->groupBy('perm')->get();

        return view('_admin.dashboard', compact('count_events', 'count_users', 'count_users_per_role'));
    }
}

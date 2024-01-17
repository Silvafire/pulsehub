<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Modalidade;
use App\Models\User;
use App\Models\Service;
use App\Models\Staff;
use App\Models\Post;
use App\Models\TiposPlano;
use App\Models\Tipo_eventos_mod;
use App\Models\ImageService;

use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function planostreino()
    {
        $tiposplanos = TiposPlano::all();
        return view('planostreino', compact('tiposplanos'));
    }

    public function blog()
    {
        $posts = Post::all();
        return view('blog',compact('posts'));
    }

    public function modalidades()
    {
        $modalidades = Modalidade::all();
        $tipo_eventos_mods = Tipo_eventos_mod::all();
        return view('modalidades', compact('modalidades', 'tipo_eventos_mods'));
    }

    public function servicos()
    {
        $services = Service::all();
        return view('servicos', compact('services'));
    }
    public function eventos()
    {
        $events = Event::all();
        return view('eventos', compact('events'));
    }

    public function staff()
    {
        $staffs = Staff::all();
        return view('staff',compact('staffs'));
    }

    public function servicosshow(Service $service)
    {


        return view('servicosshow', compact('service'));
    }


    public function admindashboard()
    {

        $count_events = Event::count();
        $count_events_per_type = Event::select('tipo_eventos_mod_id', DB::raw('count(*) as
        count'))->groupBy('tipo_eventos_mod_id')->get();


        $count_modalidades = Modalidade::count();
        $count_mod_per_type = Modalidade::select('tipo_eventos_mod_id', DB::raw('count(*) as
        count'))->groupBy('tipo_eventos_mod_id')->get();



        $count_services = Service::count();
        $count_services_per_image = ImageService::select('imagem', DB::raw('count(*) as
        count'))->groupBy('imagem')->get();



        $count_users = User::count();
        $count_users_per_role = User::select('perm', DB::raw('count(*) as
       count'))->groupBy('perm')->get();

        return view('_admin.dashboard', compact('count_events','count_events_per_type', 'count_users', 'count_users_per_role','count_modalidades','count_mod_per_type','count_services','count_services_per_image'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Tipo_eventos_mod;



class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $events = Event::all();
        return view('_admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $event = new Event;
        $tipos = Tipo_eventos_mod::all();
        return view('_admin.events.create', compact("event", "tipos"));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(EventRequest $request)
    {
        $fields = $request->validated();
        $event = new Event();
        $event->fill($fields);
        if ($request->hasFile('img')) {
            $imagem_path =
                $request->file('img')->store('public/eventos_imagens');
            $event->img = basename($imagem_path);
        }
        $event->save();
        return redirect()->route('admin.events.index')
            ->with('success', 'evento criado com sucesso');
    }

    /**
     * Display the specified resource.
     */

    public function show(Event $event)
    {
        return view('_admin.events.show', compact("event"));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Event $event)
    {
        $tipos = Tipo_eventos_mod::all();
        return view('_admin.events.edit', compact('event', 'tipos'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(EventRequest $request, Event $event)
    {
        $fields = $request->validated();
        $event->fill($fields);
        if ($request->hasFile('img')) {
            if (!empty($event->img)) {
                Storage::disk('public')->delete('eventos_imagens/' .
                    $event->img);
            }
            $imagem_path =
                $request->file('img')->store('public/eventos_imagens');
            $event->img = basename($imagem_path);
        }
        $event->save();
        return redirect()->route('admin.events.index')->with('success', 'Evento atualizado com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with(
            'success',
            'Evento eliminado com sucesso'
        );
    }
}

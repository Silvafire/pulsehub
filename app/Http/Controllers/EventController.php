<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;

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
        return view('_admin.events.create', compact("event"));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(EventRequest $request)
    {
        $fields = $request->validated();
        $event = new Event();
        $event->fill($fields);
        $event->save();
        return redirect()->route('admin.events.index')
            ->with('success', 'Evento criado com sucesso');
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
        return view('_admin.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(EventRequest $request, Event $event)
    {
        $fields = $request->validated(); 
        $event->save();
        return redirect()->route('_admin.events.index')->with('success', 'Evento atualizado com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Event $event)
    {
        if ($event->projects()->exists()) {
            return redirect()->route('admin.events.index')->withErrors(
                ['delete' => 'O Evento que tentou eliminar tem projetos associados']
            );
        }
        $event->delete();
        return redirect()->route('admin.events.index')->with(
            'success',
            'Evento eliminado com sucesso'
        );
    }
}
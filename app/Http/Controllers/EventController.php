<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // List event (pagination)
    public function index()
    {
        $events = Event::orderByDesc('event_date')->paginate(10);
        return view('events.index', compact('events'));
    }

    // Form create
    public function create()
    {
        return view('events.create');
    }

    // Simpan data
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'event_date'  => 'required|date',
            'location'    => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Event::create($validated);

        return redirect()->route('events.index')->with('success', 'Event berhasil dibuat.');
    }

    // Detail
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    // Form edit
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    // Update data
    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'event_date'  => 'required|date',
            'location'    => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $event->update($validated);

        return redirect()->route('events.index')->with('success', 'Event berhasil diperbarui.');
    }

    // Hapus
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    protected Event $events;

    public function __construct(Event $events)
    {
        $this->events = $events;
    }

    public function show()
    {
        return view('pages.activities', [
            'events' => $this->events->getAllEvents()
        ]);
    }
}

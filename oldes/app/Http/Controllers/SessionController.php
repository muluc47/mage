<?php

namespace Baslat\Http\Controllers;

use Illuminate\Http\Request;
use Baslat\Models\Session;
use Baslat\Http\Resources\SessionResource;
use Baslat\Events\SessionEvent;
use Illuminate\Routing\Controller;

class SessionController extends Controller
{
    public function create(Request $request)
    {
        $session = Session::create(['user1_id' => auth()->id(), 'user2_id' => $request->friend_id]);
        $modifiedSession = new SessionResource($session);
        broadcast(new SessionEvent($modifiedSession, auth()->id()));
        return $modifiedSession;
    }
}

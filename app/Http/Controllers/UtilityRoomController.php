<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use App\Events\PlayerRemove;

class UtilityRoomController extends Controller
{
    public function index($room_id)
    {
        return view('Admin.fitur.lobby', [
            'room_id' => $room_id,
        ]);
    }

    public function getPlayers($room_id)
    {
        $players = Player::where('room_id', $room_id)->get();

        return response()->json([
            'data' => $players,
        ]);
    }

    public function kickPlayer(Request $request)
    {
        $playerId = $request->input('player_id');

        if (!$playerId) {
            return response()->json(['message' => 'Player ID is required'], 400);
        }

        $player = Player::find($playerId);

        if (!$player) {
            return response()->json(['message' => 'Player not found'], 404);
        }

        $player->room_id = null;
        $player->save();
        PlayerRemove::dispatch();

        return response()->json(['message' => 'Player successfully removed'], 200);
    }
    
}


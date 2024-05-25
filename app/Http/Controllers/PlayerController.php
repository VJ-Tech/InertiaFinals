<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index() {
        $players = Player::orderBy('id')->get();

        return inertia('Players/Record', [
            'players' => $players
        ]);
    }

    public function create() {
        return inertia('Players/Create');
    }

    public function store(Request $request) {
        $request->validate([
            'imageUrl' => 'required',
            'player_id' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        Player::create($request->all());

        return redirect('/Record');
    }

    public function show(Player $players) {
        
        return inertia('Players/View', [
            'players' => $players
        ]);
    }

    public function update(Request $request, Player $player) {
        $fields = $request->validate([
            'imageUrl' => '',
            'player_id' => '',
            'username' => '',
            'email' => '',
            'password' => ''
        ]);
        
        $player->update($fields);
        return redirect('/Record');
    }

    public function destroy(Player $player){
        $player->delete();
        
        return redirect('/Record');
    }
}

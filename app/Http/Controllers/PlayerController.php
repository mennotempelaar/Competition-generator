<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class PlayerController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        $players = Player::all();

        return view('pages.player.index', compact('players'));
    }

    /**
     * @return Factory|View
     */
    public function create()
    {
        return view('pages.player.create');
    }

    /**
     * @param Request $request
     *
     * @return RedirectResponse
     *
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
           'nttb_number' => '',
           'name' => 'required'
        ]);

        $nttb_number = $validated['nttb_numer'] ?? null;

        $player = new Player();
        $player->nttb_number = $nttb_number;
        $player->name = $validated['name'];
        $player->save();

        return redirect()->route('players.index');
    }

    /**
     * @param Player $player
     *
     * @return Factory|View
     */
    public function show(Player $player)
    {
        return view('pages.player.show', compact('player'));
    }

    /**
     * @param Player $player
     *
     * @return Factory|View
     */
    public function edit(Player $player)
    {
        return view('pages.player.edit', compact('player'));
    }

    /**
     * @param Request $request
     * @param Player $player
     *
     * @return RedirectResponse
     *
     * @throws ValidationException
     */
    public function update(Request $request, Player $player)
    {
        $validated = $this->validate($request, [
            'nttb_number' => '',
            'name' => 'required'
        ]);

        if ($validated['nttb_number'] === '') {
            $validated['nttb_number'] = null;
        }

        $player->nttb_number = $validated['nttb_number'];
        $player->name = $validated['name'];
        $player->save();

        return redirect()->route('players.show', ['player' => $player]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        //
    }
}

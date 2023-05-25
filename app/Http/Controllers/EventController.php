<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Time;
use App\Models\Event;
use App\Models\Member;


class EventController extends Controller
{

    function show()
    {
        $informacoes = Time::all();
        return view('home', ['informacoes' => $informacoes]);
    }
    public function index() {

    }

    public function store(Request $request) {

        $time = new Time;

        $time->nome = $request->nome;
        $time->email = $request->email;
        $time->RA = $request->ra;
        $time->turno = $request->turno;
        $time->curso = $request->curso;
        $time->esporte = $request->jogo;
        $time->nome_time = $request->equipe;

        $time->save();

        return redirect('/home')->with('msg', 'Time criado com sucesso');

    }

    public function store_E(Request $request) {

        $event = new Event;

        $event->evento = $request->evento;
        $event->data = $request->data;
        $event->local = $request->local;
        $event->descricao = $request->descricao;

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        $event->save();

        return redirect('/home')->with('msg', 'Evento criado com sucesso');

    }

    public function store_M(Request $request) {

        $member = new Member;

        $member->nome = $request->nome;
        $member->curso = $request->curso;
        $member->turno = $request->turno;
        $member->email = $request->email;

        $member->save();

        return redirect('/home')->with('msg', 'Solicitação Enviada');
    }
}


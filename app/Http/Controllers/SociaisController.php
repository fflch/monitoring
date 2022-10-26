<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class SociaisController extends Controller
{
    public function index(){
        //primeira mesa
        $mesa1_equipamento1 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa1_equipamento2 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa1_equipamento3 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa1_equipamento4 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa1_equipamento5 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa1_equipamento6 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa1_equipamento7 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa1_equipamento8 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        //segunda mesa
        $mesa2_equipamento1 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa2_equipamento2 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa2_equipamento3 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa2_equipamento4 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa2_equipamento5 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa2_equipamento6 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa2_equipamento7 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa2_equipamento8 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        //terceira mesa
        $mesa3_equipamento1 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa3_equipamento2 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa3_equipamento3 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa3_equipamento4 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa3_equipamento5 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa3_equipamento6 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa3_equipamento7 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa3_equipamento8 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        //quarta mesa
        $mesa4_equipamento1 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa4_equipamento2 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa4_equipamento3 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa4_equipamento4 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa4_equipamento5 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa4_equipamento6 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa4_equipamento7 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa4_equipamento8 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        //quinta mesa
        $mesa5_equipamento1 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa5_equipamento2 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa5_equipamento3 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa5_equipamento4 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        //sexta mesa
        $mesa6_equipamento1 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa6_equipamento2 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa6_equipamento3 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa6_equipamento4 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        //setima mesa
        $mesa7_equipamento1 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa7_equipamento2 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa7_equipamento3 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa7_equipamento4 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        //mesa do monitor
        $mesa_monitor_equipamento1 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        return view('sociais.sociais', [
        //primeira mesa
        'mesa1_equipamento1' => $mesa1_equipamento1,
        'mesa1_equipamento2' => $mesa1_equipamento2,
        'mesa1_equipamento3' => $mesa1_equipamento3,
        'mesa1_equipamento4' => $mesa1_equipamento4,
        'mesa1_equipamento5' => $mesa1_equipamento5,
        'mesa1_equipamento6' => $mesa1_equipamento6,
        'mesa1_equipamento7' => $mesa1_equipamento7,
        'mesa1_equipamento8' => $mesa1_equipamento8,

        //segunda mesa
        'mesa2_equipamento1' => $mesa2_equipamento1,
        'mesa2_equipamento2' => $mesa2_equipamento2,
        'mesa2_equipamento3' => $mesa2_equipamento3,
        'mesa2_equipamento4' => $mesa2_equipamento4,
        'mesa2_equipamento5' => $mesa2_equipamento5,
        'mesa2_equipamento6' => $mesa2_equipamento6,
        'mesa2_equipamento7' => $mesa2_equipamento7,
        'mesa2_equipamento8' => $mesa2_equipamento8,
        
        //terceira mesa
        'mesa3_equipamento1' => $mesa3_equipamento1,
        'mesa3_equipamento2' => $mesa3_equipamento2,
        'mesa3_equipamento3' => $mesa3_equipamento3,
        'mesa3_equipamento4' => $mesa3_equipamento4,
        'mesa3_equipamento5' => $mesa3_equipamento5,
        'mesa3_equipamento6' => $mesa3_equipamento6,
        'mesa3_equipamento7' => $mesa3_equipamento7,
        'mesa3_equipamento8' => $mesa3_equipamento8,

        //quarta mesa
        'mesa4_equipamento1' => $mesa4_equipamento1,
        'mesa4_equipamento2' => $mesa4_equipamento2,
        'mesa4_equipamento3' => $mesa4_equipamento3,
        'mesa4_equipamento4' => $mesa4_equipamento4,
        'mesa4_equipamento5' => $mesa4_equipamento5,
        'mesa4_equipamento6' => $mesa4_equipamento6,
        'mesa4_equipamento7' => $mesa4_equipamento7,
        'mesa4_equipamento8' => $mesa4_equipamento8,

        //quinta mesa
        'mesa5_equipamento1' => $mesa5_equipamento1,
        'mesa5_equipamento2' => $mesa5_equipamento2,
        'mesa5_equipamento3' => $mesa5_equipamento3,
        'mesa5_equipamento4' => $mesa5_equipamento4,

        //sexta mesa
        'mesa6_equipamento1' => $mesa6_equipamento1,
        'mesa6_equipamento2' => $mesa6_equipamento2,
        'mesa6_equipamento3' => $mesa6_equipamento3,
        'mesa6_equipamento4' => $mesa6_equipamento4,

        //setima mesa
        'mesa7_equipamento1' => $mesa7_equipamento1,
        'mesa7_equipamento2' => $mesa7_equipamento2,
        'mesa7_equipamento3' => $mesa7_equipamento3,
        'mesa7_equipamento4' => $mesa7_equipamento4,
        
        //mesa do monitor
        'mesa_monitor_equipamento1' => $mesa_monitor_equipamento1,
        ]);
    }
}

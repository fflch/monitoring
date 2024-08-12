<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    public function index(){
	//Mesas da proaluno da sociais
        //primeira mesa
        $sociais_mesa1_equipamento1 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa1_equipamento2 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa1_equipamento3 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa1_equipamento4 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa1_equipamento5 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa1_equipamento6 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa1_equipamento7 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa1_equipamento8 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        //segunda mesa
        $sociais_mesa2_equipamento1 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa2_equipamento2 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa2_equipamento3 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa2_equipamento4 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa2_equipamento5 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa2_equipamento6 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa2_equipamento7 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa2_equipamento8 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        //terceira mesa
        $sociais_mesa3_equipamento1 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa3_equipamento2 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa3_equipamento3 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa3_equipamento4 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa3_equipamento5 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa3_equipamento6 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa3_equipamento7 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa3_equipamento8 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        //quarta mesa
        $sociais_mesa4_equipamento1 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa4_equipamento2 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa4_equipamento3 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa4_equipamento4 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa4_equipamento5 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa4_equipamento6 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa4_equipamento7 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa4_equipamento8 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        //quinta mesa
        $sociais_mesa5_equipamento1 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa5_equipamento2 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa5_equipamento3 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa5_equipamento4 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        //sexta mesa
        $sociais_mesa6_equipamento1 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa6_equipamento2 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa6_equipamento3 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa6_equipamento4 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        //setima mesa
        $sociais_mesa7_equipamento1 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa7_equipamento2 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa7_equipamento3 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $sociais_mesa7_equipamento4 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        //mesa do monitor
        $sociais_mesa_monitor_equipamento1 = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();

	//mesas da proaluno da histgeo
	//primeira mesa
        $histgeo_mesa1_equipamento1  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa1_equipamento2  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
	//segunda mesa
        $histgeo_mesa2_equipamento1  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa2_equipamento2  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa2_equipamento3  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa2_equipamento4  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa2_equipamento5  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa2_equipamento6  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
	//terceira mesa
        $histgeo_mesa3_equipamento1  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa3_equipamento2  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa3_equipamento3  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa3_equipamento4  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa3_equipamento5  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa3_equipamento6  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
	//quarte mesa
        $histgeo_mesa4_equipamento1  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa4_equipamento2  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa4_equipamento3  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa4_equipamento4  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa4_equipamento5  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa4_equipamento6  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
	//quinta mesa
        $histgeo_mesa5_equipamento1  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa5_equipamento2  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa5_equipamento3  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa5_equipamento4  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa5_equipamento5  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa5_equipamento6  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
	//sexta mesa
        $histgeo_mesa6_equipamento1  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa6_equipamento2  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
	//setima mesa
        $histgeo_mesa7_equipamento1  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa7_equipamento2  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa7_equipamento3  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa7_equipamento4  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa7_equipamento5  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa7_equipamento6  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
	//oitava mesa
        $histgeo_mesa8_equipamento1  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa8_equipamento2  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa8_equipamento3  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa8_equipamento4  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa8_equipamento5  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa8_equipamento6  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
	//nona mesa
        $histgeo_mesa9_equipamento1  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa9_equipamento2  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $histgeo_mesa9_equipamento3  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();

	//renderizacao de dados para as views

        $sociais = View::make('sociais.sociais', [
	//mesas proaluno sociais
        //primeira mesa
        'sociais_mesa1_equipamento1' => $sociais_mesa1_equipamento1,
        'sociais_mesa1_equipamento2' => $sociais_mesa1_equipamento2,
        'sociais_mesa1_equipamento3' => $sociais_mesa1_equipamento3,
        'sociais_mesa1_equipamento4' => $sociais_mesa1_equipamento4,
        'sociais_mesa1_equipamento5' => $sociais_mesa1_equipamento5,
        'sociais_mesa1_equipamento6' => $sociais_mesa1_equipamento6,
        'sociais_mesa1_equipamento7' => $sociais_mesa1_equipamento7,
        'sociais_mesa1_equipamento8' => $sociais_mesa1_equipamento8,

        //segunda mesa
        'sociais_mesa2_equipamento1' => $sociais_mesa2_equipamento1,
        'sociais_mesa2_equipamento2' => $sociais_mesa2_equipamento2,
        'sociais_mesa2_equipamento3' => $sociais_mesa2_equipamento3,
        'sociais_mesa2_equipamento4' => $sociais_mesa2_equipamento4,
        'sociais_mesa2_equipamento5' => $sociais_mesa2_equipamento5,
        'sociais_mesa2_equipamento6' => $sociais_mesa2_equipamento6,
        'sociais_mesa2_equipamento7' => $sociais_mesa2_equipamento7,
        'sociais_mesa2_equipamento8' => $sociais_mesa2_equipamento8,

        //terceira mesa
        'sociais_mesa3_equipamento1' => $sociais_mesa3_equipamento1,
        'sociais_mesa3_equipamento2' => $sociais_mesa3_equipamento2,
        'sociais_mesa3_equipamento3' => $sociais_mesa3_equipamento3,
        'sociais_mesa3_equipamento4' => $sociais_mesa3_equipamento4,
        'sociais_mesa3_equipamento5' => $sociais_mesa3_equipamento5,
        'sociais_mesa3_equipamento6' => $sociais_mesa3_equipamento6,
        'sociais_mesa3_equipamento7' => $sociais_mesa3_equipamento7,
        'sociais_mesa3_equipamento8' => $sociais_mesa3_equipamento8,

        //quarta mesa
        'sociais_mesa4_equipamento1' => $sociais_mesa4_equipamento1,
        'sociais_mesa4_equipamento2' => $sociais_mesa4_equipamento2,
        'sociais_mesa4_equipamento3' => $sociais_mesa4_equipamento3,
        'sociais_mesa4_equipamento4' => $sociais_mesa4_equipamento4,
        'sociais_mesa4_equipamento5' => $sociais_mesa4_equipamento5,
        'sociais_mesa4_equipamento6' => $sociais_mesa4_equipamento6,
        'sociais_mesa4_equipamento7' => $sociais_mesa4_equipamento7,
        'sociais_mesa4_equipamento8' => $sociais_mesa4_equipamento8,

        //quinta mesa
        'sociais_mesa5_equipamento1' => $sociais_mesa5_equipamento1,
        'sociais_mesa5_equipamento2' => $sociais_mesa5_equipamento2,
        'sociais_mesa5_equipamento3' => $sociais_mesa5_equipamento3,
        'sociais_mesa5_equipamento4' => $sociais_mesa5_equipamento4,

        //sexta mesa
        'sociais_mesa6_equipamento1' => $sociais_mesa6_equipamento1,
        'sociais_mesa6_equipamento2' => $sociais_mesa6_equipamento2,
        'sociais_mesa6_equipamento3' => $sociais_mesa6_equipamento3,
        'sociais_mesa6_equipamento4' => $sociais_mesa6_equipamento4,

        //setima mesa
        'sociais_mesa7_equipamento1' => $sociais_mesa7_equipamento1,
        'sociais_mesa7_equipamento2' => $sociais_mesa7_equipamento2,
        'sociais_mesa7_equipamento3' => $sociais_mesa7_equipamento3,
        'sociais_mesa7_equipamento4' => $sociais_mesa7_equipamento4,

        //mesa do monitor
        'sociais_mesa_monitor_equipamento1' => $sociais_mesa_monitor_equipamento1,
        ])->render();


        $histgeo = View::make('histgeo.histgeo', [
	//mesas proaluno histgeo
	//primeira mesa
        'histgeo_mesa1_equipamento1' => $histgeo_mesa1_equipamento1,
        'histgeo_mesa1_equipamento2' => $histgeo_mesa1_equipamento2,
	//segunda mesa
        'histgeo_mesa2_equipamento1' => $histgeo_mesa2_equipamento1,
        'histgeo_mesa2_equipamento2' => $histgeo_mesa2_equipamento2,
        'histgeo_mesa2_equipamento3' => $histgeo_mesa2_equipamento3,
        'histgeo_mesa2_equipamento4' => $histgeo_mesa2_equipamento4,
        'histgeo_mesa2_equipamento5' => $histgeo_mesa2_equipamento5,
        'histgeo_mesa2_equipamento6' => $histgeo_mesa2_equipamento6,
	//tercira mesa
        'histgeo_mesa3_equipamento1' => $histgeo_mesa3_equipamento1,
        'histgeo_mesa3_equipamento2' => $histgeo_mesa3_equipamento2,
        'histgeo_mesa3_equipamento3' => $histgeo_mesa3_equipamento3,
        'histgeo_mesa3_equipamento4' => $histgeo_mesa3_equipamento4,
        'histgeo_mesa3_equipamento5' => $histgeo_mesa3_equipamento5,
        'histgeo_mesa3_equipamento6' => $histgeo_mesa3_equipamento6,
	//quarta mesa
        'histgeo_mesa4_equipamento1' => $histgeo_mesa4_equipamento1,
        'histgeo_mesa4_equipamento2' => $histgeo_mesa4_equipamento2,
        'histgeo_mesa4_equipamento3' => $histgeo_mesa4_equipamento3,
        'histgeo_mesa4_equipamento4' => $histgeo_mesa4_equipamento4,
        'histgeo_mesa4_equipamento5' => $histgeo_mesa4_equipamento5,
        'histgeo_mesa4_equipamento6' => $histgeo_mesa4_equipamento6,
	//quinta mesa
        'histgeo_mesa5_equipamento1' => $histgeo_mesa5_equipamento1,
        'histgeo_mesa5_equipamento2' => $histgeo_mesa5_equipamento2,
        'histgeo_mesa5_equipamento3' => $histgeo_mesa5_equipamento3,
        'histgeo_mesa5_equipamento4' => $histgeo_mesa5_equipamento4,
        'histgeo_mesa5_equipamento5' => $histgeo_mesa5_equipamento5,
        'histgeo_mesa5_equipamento6' => $histgeo_mesa5_equipamento6,
	//sexta mesa
        'histgeo_mesa6_equipamento1' => $histgeo_mesa6_equipamento1,
        'histgeo_mesa6_equipamento2' => $histgeo_mesa6_equipamento2,
	//setima mesa
        'histgeo_mesa7_equipamento1' => $histgeo_mesa7_equipamento1,
        'histgeo_mesa7_equipamento2' => $histgeo_mesa7_equipamento2,
        'histgeo_mesa7_equipamento3' => $histgeo_mesa7_equipamento3,
        'histgeo_mesa7_equipamento4' => $histgeo_mesa7_equipamento4,
        'histgeo_mesa7_equipamento5' => $histgeo_mesa7_equipamento5,
        'histgeo_mesa7_equipamento6' => $histgeo_mesa7_equipamento6,
	//oitava mesa
        'histgeo_mesa8_equipamento1' => $histgeo_mesa8_equipamento1,
        'histgeo_mesa8_equipamento2' => $histgeo_mesa8_equipamento2,
        'histgeo_mesa8_equipamento3' => $histgeo_mesa8_equipamento3,
        'histgeo_mesa8_equipamento4' => $histgeo_mesa8_equipamento4,
        'histgeo_mesa8_equipamento5' => $histgeo_mesa8_equipamento5,
        'histgeo_mesa8_equipamento6' => $histgeo_mesa8_equipamento6,
	//nona mesa
        'histgeo_mesa9_equipamento1' => $histgeo_mesa9_equipamento1,
        'histgeo_mesa9_equipamento2' => $histgeo_mesa9_equipamento2,
        'histgeo_mesa9_equipamento3' => $histgeo_mesa9_equipamento3,
        ])->render();

	//concatenando conteudo das duas views
	$prosalunos = $sociais . $histgeo;
	
	//retornando conteudo combinado na resposta
	return response($prosalunos);

/* 	//se nao der certo o que esta abaixo ainda funciona

	return view('sociais.sociais', [
        //primeira mesa
        'sociais_mesa1_equipamento1' => $sociais_mesa1_equipamento1,
        'sociais_mesa1_equipamento2' => $sociais_mesa1_equipamento2,
        'sociais_mesa1_equipamento3' => $sociais_mesa1_equipamento3,
        'sociais_mesa1_equipamento4' => $sociais_mesa1_equipamento4,
        'sociais_mesa1_equipamento5' => $sociais_mesa1_equipamento5,
        'sociais_mesa1_equipamento6' => $sociais_mesa1_equipamento6,
        'sociais_mesa1_equipamento7' => $sociais_mesa1_equipamento7,
        'sociais_mesa1_equipamento8' => $sociais_mesa1_equipamento8,

        //segunda mesa
        'sociais_mesa2_equipamento1' => $sociais_mesa2_equipamento1,
        'sociais_mesa2_equipamento2' => $sociais_mesa2_equipamento2,
        'sociais_mesa2_equipamento3' => $sociais_mesa2_equipamento3,
        'sociais_mesa2_equipamento4' => $sociais_mesa2_equipamento4,
        'sociais_mesa2_equipamento5' => $sociais_mesa2_equipamento5,
        'sociais_mesa2_equipamento6' => $sociais_mesa2_equipamento6,
        'sociais_mesa2_equipamento7' => $sociais_mesa2_equipamento7,
        'sociais_mesa2_equipamento8' => $sociais_mesa2_equipamento8,

        //terceira mesa
        'sociais_mesa3_equipamento1' => $sociais_mesa3_equipamento1,
        'sociais_mesa3_equipamento2' => $sociais_mesa3_equipamento2,
        'sociais_mesa3_equipamento3' => $sociais_mesa3_equipamento3,
        'sociais_mesa3_equipamento4' => $sociais_mesa3_equipamento4,
        'sociais_mesa3_equipamento5' => $sociais_mesa3_equipamento5,
        'sociais_mesa3_equipamento6' => $sociais_mesa3_equipamento6,
        'sociais_mesa3_equipamento7' => $sociais_mesa3_equipamento7,
        'sociais_mesa3_equipamento8' => $sociais_mesa3_equipamento8,

        //quarta mesa
        'sociais_mesa4_equipamento1' => $sociais_mesa4_equipamento1,
        'sociais_mesa4_equipamento2' => $sociais_mesa4_equipamento2,
        'sociais_mesa4_equipamento3' => $sociais_mesa4_equipamento3,
        'sociais_mesa4_equipamento4' => $sociais_mesa4_equipamento4,
        'sociais_mesa4_equipamento5' => $sociais_mesa4_equipamento5,
        'sociais_mesa4_equipamento6' => $sociais_mesa4_equipamento6,
        'sociais_mesa4_equipamento7' => $sociais_mesa4_equipamento7,
        'sociais_mesa4_equipamento8' => $sociais_mesa4_equipamento8,

        //quinta mesa
        'sociais_mesa5_equipamento1' => $sociais_mesa5_equipamento1,
        'sociais_mesa5_equipamento2' => $sociais_mesa5_equipamento2,
        'sociais_mesa5_equipamento3' => $sociais_mesa5_equipamento3,
        'sociais_mesa5_equipamento4' => $sociais_mesa5_equipamento4,

        //sexta mesa
        'sociais_mesa6_equipamento1' => $sociais_mesa6_equipamento1,
        'sociais_mesa6_equipamento2' => $sociais_mesa6_equipamento2,
        'sociais_mesa6_equipamento3' => $sociais_mesa6_equipamento3,
        'sociais_mesa6_equipamento4' => $sociais_mesa6_equipamento4,

        //setima mesa
        'sociais_mesa7_equipamento1' => $sociais_mesa7_equipamento1,
        'sociais_mesa7_equipamento2' => $sociais_mesa7_equipamento2,
        'sociais_mesa7_equipamento3' => $sociais_mesa7_equipamento3,
        'sociais_mesa7_equipamento4' => $sociais_mesa7_equipamento4,

        //mesa do monitor
        'sociais_mesa_monitor_equipamento1' => $sociais_mesa_monitor_equipamento1,
        ]);

*/
    }
}

<?php

namespace sisAgenda\Http\Controllers;

use Illuminate\Http\Request;

use sisAgenda\Http\Requests;

use sisAgenda\Agenda;
use Illuminate\Support\Facades\Readirect;
use sisAgenda\Http\Requests\AgendaRequest;
use DB;

class AgendaController extends Controller
{
    public function __constructor(){

    }

    public function index (Request $request){
    	if ($request) {
    		$query=trim($request->get('searchText'));
    		$categorias=DB::table('contactos')->where('nombre',LIKE,'%'.$query.'%')
    		->orderBy('id_contactos','desc')
    		->paginate(7);
    		return view('agenda.categoria.index',["categorias"=>$categorias,"searchText"=>$query]);

    	}


    }

    public function create (){
    	return view ("agenda.categoria.create");

    }

    public function store(AgendaRequest $request){
    	$categoria=new Agenda;
    	$categoria->nombre_c=$request->get('nombre');
    	$categoria->ap_c=$request->get('ap');
    	$categoria->n_tel1=$request->get('tel1');
    	$categoria->n_tel2=$request->get('tel2');
    	$categoria->correo_c=$request->get('correo');
    	$categoria->dir_c=$request->get('dir');
    	$categoria->condicion='1';
    	$cateoria->save();
    	return Readirect::to('agenda/categoria');

    }

    public function show($id){
    	return view("agenda.categoria.show",["categoria"=>Categoria::findOrFail($id)]);

    }

    public function edit($id){
    	return view("agenda.categoria.edit",["categoria"=>Categoria::findOrFail($id)]);

    }

    public function update(AgendaRequest $request,$id){
    	 $categoria=Categoria::findOrFail($id);
        $categoria->nombre_c=$request->get('nombre');
    	$categoria->ap_c=$request->get('ap');
    	$categoria->n_tel1=$request->get('tel1');
    	$categoria->n_tel2=$request->get('tel2');
    	$categoria->correo_c=$request->get('correo');
    	$categoria->dir_c=$request->get('dir');
    	$categoria->update();
        return Redirect::to('agenda/categoria');

    }

    public function destroy(){
    	 $categoria=Categoria::findOrFail($id);
        $categoria->condicion='0';
        $categoria->update();
        return Redirect::to('agenda/categoria');

    }



}

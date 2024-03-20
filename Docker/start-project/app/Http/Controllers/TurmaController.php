<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TurmaRepository;
use App\Repositories\CursoRepository;
use App\Models\Turma;

class TurmaController extends Controller{
    protected $repository; 

    public function __construct(){
        $this->repository = new TurmaRepository();
    }

    public function index(){
        $data = $this->repository->selectAllWitch(['curso']);
        return $data;
    }

    public function create(){

    }
    public function store(Request $request){

        $objCurso = (new CursoRepository()) ->findById($request->curso_id);

        if(isset($objCurso->id)){
            $obj = new Turma();
            $obj->ano = $request->ano;
            $obj->curso()->associate($objCurso);
            $this->repository->save($obj);

            return "<h1>Store - OK!</h1>";
        }

        return "<h1>Store - Not found Curso!</h1>";


    }

    public function show(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }



}
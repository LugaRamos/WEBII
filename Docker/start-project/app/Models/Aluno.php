<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model{

    // Utiliza a trait HasFactory para adicionar métodos de criação de fábrica ao modelo
    use HasFactory;

    // Utiliza a trait SoftDeletes para permitir exclusões "soft" (não permanentes) dos registros do banco de dados
    use SoftDeletes;

    // Define a relação "pertence a" (belongs to) com o modelo User
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    // Define a relação "pertence a" (belongs to) com o modelo Curso
    public function curso() {
        return $this->belongsTo('App\Models\Curso');
    }

    // Define a relação "pertence a" (belongs to) com o modelo Turma
    public function turma() {
        return $this->belongsTo('App\Models\Turma');
    }

    // Define a relação "tem muitos" (has many) com o modelo Comprovante
    public function comprovante() {
        return $this->hasMany('App\Models\Comprovante');
    }

    // Define a relação "tem muitos" (has many) com o modelo Declaracao
    public function declaracao() {
        return $this->hasMany('App\Models\Declaracao');
    }
    
}

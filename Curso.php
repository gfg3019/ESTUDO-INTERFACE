<?php
class Curso implements ControleCurso{
    public $nome;
    public int $tipo;
    public $descricao;

    public function salvar(){
        echo 'Curso salvo!';
    }
    public function remover(){
        echo 'Curso removido.';
    }
    public function atualizar(){
        echo 'Curso Atualizado.';
    }

    public function listarCurso(){
        echo 'Curso Lista.';
    }
    public function listarEmenta(){
        echo 'listando';
    }

}
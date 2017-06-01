<?php

// Created by Thiago Henrique Felix


class aula 
{
    
    private $rm;
    public $diaSemana;
    private $horarioInicial;
    private $horarioFinal;
    private $nomeTurma;
    private $turno;
    
    /**
     * Construtor padrão
     * @param type $rm
     * @param type $diaSemana
     * @param type $horarioInicial
     * @param type $horarioFinal
     * @param type $nomeTurma
     * @param type $turno
     */
    function __construct($rm, $diaSemana, $horarioInicial, $horarioFinal, $nomeTurma, $turno) {
        $this->rm = $rm;
        $this->diaSemana = $diaSemana;
        $this->horarioInicial = $horarioInicial;
        $this->horarioFinal = $horarioFinal;
        $this->nomeTurma = $nomeTurma;
        $this->turno = $turno;
    }//Construct
    function getRm() {
        return $this->rm;
    }

    function getDiaSemana() {
        return $this->diaSemana;
    }

    function getHorarioInicial() {
        return $this->horarioInicial;
    }

    function getHorarioFinal() {
        return $this->horarioFinal;
    }

    function getNomeTurma() {
        return $this->nomeTurma;
    }

    function getTurno() {
        return $this->turno;
    }

    function setRm($rm) {
        $this->rm = $rm;
    }

    function setDiaSemana($diaSemana) {
        $this->diaSemana = $diaSemana;
    }

    function setHorarioInicial($horarioInicial) {
        $this->horarioInicial = $horarioInicial;
    }

    function setHorarioFinal($horarioFinal) {
        $this->horarioFinal = $horarioFinal;
    }

    function setNomeTurma($nomeTurma) {
        $this->nomeTurma = $nomeTurma;
    }

    function setTurno($turno) {
        $this->turno = $turno;
    }

        
      /**
     * Destroi o atual objeto
     * @return string
     */
    function __destruct() {
        return "Objeto destruido";
    }//Destruct
    
    
    
    
}//Class
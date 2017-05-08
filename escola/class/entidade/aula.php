<?php

// Created by Thiago Henrique Felix


class aula 
{
    
    private $rm;
    private $diaSemana;
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

    
      /**
     * Destroi o atual objeto
     * @return string
     */
    function __destruct() {
        return "Objeto destruido";
    }//Destruct
    
    
    
    
}//Class
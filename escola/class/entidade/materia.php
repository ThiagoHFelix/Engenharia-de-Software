<?php

// Created by Thiago Henrique Felix

class materia
{
    
    private $rm;
    private $rp;
    private $rc;
    private $avaliacao;
    private $extraClasse;
    private $material;
    private $bibliografia;
    private $titulo;
    private $apresentacao;
    private $objetivo;
    private $ementa;
    private $status;
    private $dataInicio;
    private $dataFinal;
    
    
    /**
     * Construtor padrão
     * @param type $rm
     * @param type $rp
     * @param type $rc
     * @param type $avaliacao
     * @param type $extraClasse
     * @param type $material
     * @param type $bibliografia
     * @param type $titulo
     * @param type $apresentacao
     * @param type $objetivo
     * @param type $ementa
     * @param type $status
     * @param type $dataInicio
     * @param type $dataFinal
     */
    function __construct($rm, $rp, $rc, $avaliacao, $extraClasse, $material, $bibliografia, $titulo, $apresentacao, $objetivo, $ementa, $status, $dataInicio, $dataFinal) {
        $this->rm = $rm;
        $this->rp = $rp;
        $this->rc = $rc;
        $this->avaliacao = $avaliacao;
        $this->extraClasse = $extraClasse;
        $this->material = $material;
        $this->bibliografia = $bibliografia;
        $this->titulo = $titulo;
        $this->apresentacao = $apresentacao;
        $this->objetivo = $objetivo;
        $this->ementa = $ementa;
        $this->status = $status;
        $this->dataInicio = $dataInicio;
        $this->dataFinal = $dataFinal;
    }//Construct 

    
    /**
     * Destroi o atual objeto
     * @return string
     */
    function __destruct() {
        return "Objeto destruido";
    }//Destruct
    
    
    
}//Class

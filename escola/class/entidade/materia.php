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

    function getRm() {
        return $this->rm;
    }

    function getRp() {
        return $this->rp;
    }

    function getRc() {
        return $this->rc;
    }

    function getAvaliacao() {
        return $this->avaliacao;
    }

    function getExtraClasse() {
        return $this->extraClasse;
    }

    function getMaterial() {
        return $this->material;
    }

    function getBibliografia() {
        return $this->bibliografia;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getApresentacao() {
        return $this->apresentacao;
    }

    function getObjetivo() {
        return $this->objetivo;
    }

    function getEmenta() {
        return $this->ementa;
    }

    function getStatus() {
        return $this->status;
    }

    function getDataInicio() {
        return $this->dataInicio;
    }

    function getDataFinal() {
        return $this->dataFinal;
    }

    function setRm($rm) {
        $this->rm = $rm;
    }

    function setRp($rp) {
        $this->rp = $rp;
    }

    function setRc($rc) {
        $this->rc = $rc;
    }

    function setAvaliacao($avaliacao) {
        $this->avaliacao = $avaliacao;
    }

    function setExtraClasse($extraClasse) {
        $this->extraClasse = $extraClasse;
    }

    function setMaterial($material) {
        $this->material = $material;
    }

    function setBibliografia($bibliografia) {
        $this->bibliografia = $bibliografia;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setApresentacao($apresentacao) {
        $this->apresentacao = $apresentacao;
    }

    function setObjetivo($objetivo) {
        $this->objetivo = $objetivo;
    }

    function setEmenta($ementa) {
        $this->ementa = $ementa;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setDataInicio($dataInicio) {
        $this->dataInicio = $dataInicio;
    }

    function setDataFinal($dataFinal) {
        $this->dataFinal = $dataFinal;
    }

        /**
     * Destroi o atual objeto
     * @return string
     */
    function __destruct() {
        return "Objeto destruido";
    }//Destruct
    
    
    
}//Class

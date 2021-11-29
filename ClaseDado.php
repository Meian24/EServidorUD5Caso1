<?php

/* Creamos la clase dado*/
class Dado {

	/*Declaramos las propiedades*/
    private $minNumDado;
    private $maxNumDado;
    
    /*Creamos el método constructor*/
    public function __construct($minNumDado, $maxNumDado) {
        $this->minNumDado = $minNumDado;
        $this->maxNumDado = $maxNumDado;
    }
    
    /*Creamos getters y setters públicos*/
    public function getminNumDado() {
        return $this->minNumDado;
    }

    public function getmaxNumDado() {
        return $this->maxNumDado;
    }

    public function setminNumDado($minNumDado) {
        $this->minNumDado = $minNumDado;
    }

    public function setmaxNumDado($maxNumDado) {
        $this->maxNumDado = $maxNumDado;
    }

    /*Creamos la función pública tirar dado*/
    public function tirarDado() {
        return rand($this->minNumDado, $this->maxNumDado);
    }
}
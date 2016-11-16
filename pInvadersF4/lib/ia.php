<?php
/**
 * Road ia4, nave espacial de Guillermo: ia4a
 * Generamos movimiento con arrays,atributos y metodos nuevos:
 */
class ia{
  
//Atributos o propiedades:        variables simples 
	public $mapaCol=4;
	public $mapaFil=4;
	public $numNaves=3;
//Atributos o propidades, variable=ARRAY,   estan vacios de momento:         
	public $navesHumano=[];

  public $navesIA=[];

//Funcion metodo get pides:
    public function getMapaCol(){
     return $this->mapaCol;
    }
    public function getMapaFil(){
     	return $this->mapaFil;
    }
    public function getNumNaves(){
     	return $this->numNaves;
    }
    public function getNavesHumano(){
    	return $this->navesHumano;
    }
//Funcion que devuelve el array de naves de la IA,en get le cambias el valor de navesIA es $this->  y ultimo el return:  
    public function getNavesIA(){
  		$this->navesIA[2]["fil"]=2;
    	return $this->navesIA;
  	}

//OTROS METODOS funcion =rand();       movimiento random  
   public function randomPos() {
      $this->columna=rand(0,3);
      $this->fila=rand(0,3);
    }
//Funcion set:
  	public function setMapaCol($mapaCol){
    $this->mapaCol=$mapaCol;
    }
  	public function setMapaFil($mapaFil){
    $this->mapaFil=$mapaFil;
    }
  	public function setNumNaves($numNaves){
    $this->numNaves=$numNaves;
   }
//set para navesHumano, defines que entra y creas variable=array directo y array_push($this->navesHumano, $xx)
    public function setNaveHumana($id,$tipo,$col,$fil){
     $nave=["id"=>$id, "tipo"=>$tipo,"col"=>$columna,"fil"=>$fila];

    array_push($this->navesHumano, $nave);
  }
//en set para navesIA llamamos con $this-> creas array dinamico navesIA[]=[clave y valor]; 
  	public function setNaveIA($id,$tipo,$col,$fil){
    $this->navesIA[]=[
      "id"=>$id,
      "tipo"=>$tipo,
      "col"=>$col,
      "fil"=>$fil,
    ];
  }
  }
?>
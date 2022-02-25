<?php
class Film{
    private $titolo;
    private $regista;
    private $genere;
    private $voto;

    public function __construct($_titolo, $_regista, $_genere){
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->genere = $_genere;
    }

    public function getTitolo(){
        return "{$this->titolo}";
    }

    public function getInfo(){
        return "<li><b>Regista:</b> {$this->regista}</li> <li><b>Genere:</b> {$this->genere}</li>";
    }
    
    public function setVoto($_voto){
        $this->voto = $_voto;
    }

    public function getVoto(){
        return $this->voto ? $this->voto : "Nessun voto";
    }
}
?>
<?php
class Film{
    private $titolo;
    public $titoloOriginale;
    private $regista;
    private $genere;
    private $voto;
    private $anno;
    public  $lingua;

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
        return $this->voto ? "<li><b>Voto:</b> $this->voto</li>" : "<li><b>Voto:</b> Nessun voto</li>";
    }

    public function setAnno($_anno){
        $this->anno = $_anno;
    }

    public function getAnno(){
        return $this->anno ? "<li><b>Anno:</b> $this->anno</li>" : "";
    }
}
?>
<?php


final class MachineACafe
{
    private string $marque;
    private int $nombreDosette;
    private bool $enFonction;

    public function __construct(string $marque = "Senseo")
    {
        $this->marque = $marque;
        $this->nombreDosette = 0;
        $this->enFonction = false;
    }

    public function allumage(): string
    {
        $this->enFonction = !$this->enFonction;

        if ($this->enFonction) {

            return "{$this->marque} est en fonction";
        } else {
            return "{$this->marque} est éteint";
        }
    }

    public function mettreUneDosette(): string
    {
        if ($this->nombreDosette < 1) {
            $this->nombreDosette += 1;
            return "Je mets une dosette";
        } else {
            return "Ya déjà une dosette, donc dose";
        }
    }

    public function faireDuCafe(): string
    {

        if(!$this->enFonction) {
            return "La machine est éteinte, allume la d'abord";
        }

        if($this->nombreDosette < 1){
            return "Il faut mettre une dosette d'abord";
        }

        $this->nombreDosette -= 1;

        return "Le café est prêt";
    }
}

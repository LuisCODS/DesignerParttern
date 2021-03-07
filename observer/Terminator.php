<?php
include_once "Subject.php";
include_once "Observer.php";
// subject = observable
class Terminator implements Subject
{   
    // ATTRIBUTS
     public  $observateurs = array(); // liste des observateurs.
     private $isReveille;
     private $isEndormi ;
    
    //METHODES
    function add(Observer $o){
         array_push($this->observateurs, $o);
    }
     function delete(Observer $o){
        $this->avatar = null;        
    }
    //Envoie une notification aux observateurs au changement d'état
     function notify() {
        foreach ($this->observateurs as $observer) {
            $observer->atualizar($this);
        }
    }
    public function getIsEndormi(){
        return $this->isEndormi;
    }
    //état Endormi
    public function setIsEndormi(bool $value){
        // Se Terminator dort
         if ($value === true) {
             $this->isEndormi = true;
             $this->notify();// On avertir!
         }else {
             $this->isEndormi = false;
         }        
    }
    public function getIsReveille(){
        return $this->isReveille;
    }
    //état Reveille
    public function setIsReveille(bool $value){
        // Se Terminator dort
         if ($value === true) {
             $this->isReveille = true;
             $this->notify();// On avertir!
         }else {
             $this->isReveille = false;
         }
    }
}

<?php
include_once "Observer.php";
include_once "Subject.php";
include_once "Terminator.php";

// observer = observateur = observador
class Avatar implements Observer
{   
    // Suject
    private $terminator;
    
    function __construct(Subject $t)
    { 
        // celui qui Avatar doit observer
        $this->terminator = $t;
        // Terminator ajoute cette instance comme nouveau observateur
        $this->terminator->add($this);
    }

    // Avatar recoit les changement d'états de Terminator
    function update(Subject $terminator)
    {     
        // Si Terminator est réveillé, avatar doit le suivre dans toute ses actions.   
        if( $terminator->getIsReveille() === true)
             echo "avatar suit Terminator dans toute ses actions.<br>";

        // Si Terminator est endormi, avatar est libre.    
        if( $terminator->getIsEndormi() === true) 
           echo "avatar est libre.<br>";
    }

}

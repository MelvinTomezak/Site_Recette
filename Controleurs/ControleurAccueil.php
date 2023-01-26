<?php
//La class ControleurAccueil est un controleur de la page Accueil, elle contient une action par défaut qui affiche la page d'accueil
//le pied de page et l'entête.
class ControleurAccueil extends Controller
{
    public function defautAction()
    {
        $this->render('standard/entete');
        echo $A_vue['body'];
        $this->render('standard/pied');

    }
}


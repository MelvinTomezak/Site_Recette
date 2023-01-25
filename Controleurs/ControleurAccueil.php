<?php

class ControleurAccueil extends Controller
{
    public function defautAction()
    {
        $this->render('standard/entete');
        echo $A_vue['body'];
        $this->render('standard/pied');

    }
}


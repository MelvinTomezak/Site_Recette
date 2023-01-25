<?php

class ControleurAccueil extends Controller
{
    public function defautAction(){
        Vue::montrer('../Accueil/Accueil');
    }
}
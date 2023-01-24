<?php



final class ControlleurDefault
{
    public function defautAction()
    {
        $recette =  new ModeleRecette();
      //  Vue::montrer('Accueil/Accueil', array('recette' =>  $recette->laRecette()));

    }

    public function testformAction(Array $A_parametres = null, Array $A_postParams = null)
    {

        Vue::montrer('helloworld/testform', array('formData' =>  $A_postParams));

    }

}
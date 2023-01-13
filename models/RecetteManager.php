<?php


class RecetteManager extends Model
{
    public function getRecettes()
    {
        $this->getBdd();
        return $this->getAll('recette','Recette');
    
    }
}



?>
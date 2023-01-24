<?php

// Modèle pour le système de login

class ModeleLogin {

  // Attributs pour stocker les informations de connexion
  private $username;
  private $password;

  // Getters et setters
  public function setUsername($username) {
    $this->username = $username;
  }

  public function getUsername() {
    return $this->username;
  }

  public function setPassword($password) {
    $this->password = $password;
  }

  public function getPassword() {
    return $this->password;
  }

    // Fonction pour vérifier si les informations de connexion sont valides
    public function checkLogin() {
        // Vérifiez si les informations sont correctes
        if ($this->username == 'username' && $this->password == 'password') {
            // Retournez une réponse positive si les informations sont correctes

            return true;
        }
        // Sinon, retournez une réponse négative
        return false;
    }
}
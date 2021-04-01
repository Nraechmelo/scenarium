<?php

namespace App\Controllers;


class FrontController extends Controller
{
  /**
   * Affiche la page d'accueil
   */
  public function index()
  {
    $this->display(
      'front/home.html.twig',
      []
    );
  }
  /**
   * Affiche la page "Le jeu"
   */
  public function scenarium()
  {
    $this->display(
      'front/game.html.twig',
      []
    );
  }
  /**
   * Affiche la page "Les ressources"
   */
  public function ressources()
  {
    $this->display(
      'front/ressources.html.twig',
      []
    );
  }
  public function conception()
  {
    $this->display(
      'front/conception.html.twig',
      []
    );
  }
  public function gamedays()
  {
    $this->display(
      'front/gamedays.html.twig',
      []
    );
  }
  public function contact()
  {
    $this->display(
      'front/contact.html.twig',
      []
    );
  }
  public function message()
  {
    $required = array('nom', 'mail', 'message');
    $error = false;
    foreach ($required as $field) {
      r($_POST[$field]);
      if (empty($_POST[$field])) {
        $error = true;
      }
    }
    if ($error) {
      $message = false;
    } else {
      $message = true;
      $to = 'rachel.cauchois@gmail.com';
      $subject = 'contact pour Scenarium';
      $headers = 'From: ' . $_POST['mail'];
      mail($to, $subject, $_POST['message'], $headers);
    }
    $this->display(
      'front/contact.html.twig',
      [
        'activItem' => 'contact',
        'message' => $message
      ]
    );
  }
}
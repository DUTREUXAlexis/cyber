<?php
namespace App\Vue;
use App\Utilitaire\Vue_Composant;

class Vue_Menu_Administration extends Vue_Composant
{
    private int $niveauAutorisation;
    public function __construct(int $niveauAutorisation = 1)
    {
        $this->niveauAutorisation = $niveauAutorisation;
    }
    function donneTexte(): string
    {
        switch($this->niveauAutorisation) {
            case 1 :
                return "
                <nav id='menu'>
              <ul id='menu-closed'> 
              <li><a href='?case=Gerer_entreprisesPartenaires'>Entreprises partenaires</a></li>
              <li><a href='?case=Gerer_utilisateur'>Utilisateurs</a></li>
              <li><a href='?case=Gerer_monCompte'>Mon compte</a></li> 
               </ul>
            </nav> 
            
            ";
            case 2 :
                return "
                <nav id='menu'>
              <ul id='menu-closed'> 
              <li><a href='?case=Gerer_catalogue'>Catalogue</a></li>   
              <li><a href='?case=Gerer_monCompte'>Mon compte</a></li> 
               </ul>
            </nav>";
            case 3 :
                return "
                <nav id='menu'>
              <ul id='menu-closed'> 
              <li><a href='?case=Gerer_Commande'>Commandes</a></li>
              <li><a href='?case=Gerer_monCompte'>Mon compte</a></li> 
               </ul>
            </nav> ";
        };
        return("<p>Acces interdit !</p>");
    }
}

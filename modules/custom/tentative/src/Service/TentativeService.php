<?php
namespace Drupal\tentative\Service;

use Symfony\Component\ldap\Ldap;

/**
 * Class TentativeService
 * @package Drupal\tentative\Service
 */
class TentativeService
{
    public function hello()
    {
        return "Salut Monde !";
    }

    public function callTentative()
    {
        /* FONCTIONNEMENT DU COMPOSANT SYMFONY LDAP :

        SE CONNECTER AU SERVEUR LDAP SECURISE PAR STARTTLS
        $ldap = Ldap::create('ext_ldap', [
            'host' => 'my-server',
            'encryption' => 'ssl',
        ]);
        Ou
        $ldap = Ldap::create('ext_ldap', ['connection_string' => 'ldaps://my-server:636']);
        
        SE CONNECTER AVEC UN DN ET UN PASSWORD
        $ldap->bind($dn, $password);

        FAIRE DES REQUETES AU SERVEUR
        $query = $ldap->query('dc=symfony,dc=com', '&(objectclass=person)(ou=Maintainers))');
        $results = $query->execute();

        foreach ($results as $entry) {
            // Do something with the results
        }

        POUR RETOURNER DIRECTEMENT UN TABLEAU
        $results = $query->execute()->toArray();

        UTILISER L'OPTION "FILTER" POUR RECUPERER DES ATTRIBUTS SPECIFIQUES
        $query = $ldap->query('dc=symfony,dc=com', '...', ['filter' => ['cn', 'mail']);
        */
    }
}
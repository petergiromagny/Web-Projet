<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 28/01/2019
 * Time: 11:13
 */


    function creationPanier(){
        if (!isset($_SESSION['panier'])){

            $_SESSION['panier']=array();
            $_SESSION['panier']['libelleProduit']=array();
            $_SESSION['panier']['qteProduit']=array();
            $_SESSION['panier']['prixProduit']=array();
            $_SESSION['panier']['verrou']= false;
            $select = $db->query("SELECT tva FROM products");
            $tva =  $select->fetch(PDO::FETCH_OBJ);
            $_SESSION['panier']['tva'] = $tva;
        }
        return true;
    }

    function ajouterArticle($libelleProduit, $qteProduit, $prixProduit){

        if (creationPanier() && !isVerrouille()){

            $position_produit = array_search($libelleProduit, $_SESSION['panier']['libelleProduit']);

            if ($position_produit !== false){
                $_SESSION['panier']['libelleProduit'][$position_produit] += $qteProduit;
            }
            else{
                array_push($_SESSION['panier']['libelleProduit'], $libelleProduit);
                array_push($_SESSION['panier']['qteProduit'], $qteProduit);
                array_push($_SESSION['panier']['prixProduit'], $prixProduit);
            }

        }else{

            echo 'Erreur,veuillez contacter l\'administrateur';

        }

    }

    function modifierQteProduit($libelleProduit,$qteProduit){

        if (creationPanier() && !isVerouille()){
            if ($qteProduit>0){

                $position_produit = array_search($_SESSION['panier']['libelleProduit'], $libelleProduit);

                if ($position_produit!== false){
                    $_SESSION['panier']['libelleProduit'][$position_produit] = $qteProduit;
                }
            }else{

                supprimerProduit($libelleProduit);

            }
        }else{

            echo'Erreur, veuillez contacter un administrateur';

        }

    }

    function supprimerArticle($libelleProduit){

        if (creationPanier() && !isVerouille()){

            $tmp =array();
            $tmp['libelleProduit'] = array();
            $tmp['qteProduit'] = array();
            $tmp['prixProduit'] = array();
            $tmp['verrou'] = array();

            for ($i = 0; $i<count($_SESSION['panier']['libelleProduit']); $i++){

                if ($_SESSION['panier']['libelleProduit'][$i] !== $libelleProduit){

                    array_push($_SESSION['panier']['libelleProduit'], $_SESSION['panier']['libelleProduit'][$i]);
                    array_push($_SESSION['panier']['qteProduit'], $_SESSION['panier']['qteProduit'][$i]);
                    array_push($_SESSION['panier']['prixProduit'], $_SESSION['panier']['prixProduit'][$i]);

                }

            }

            $_SESSION['panier'] = $tmp;

            unset($tmp);

        }else{

            echo'Erreur, veuillez contacter un administrateur';

        }

        function montantGlobal(){

            $total = 0;

            for ($i; $i<count($_SESSION['panier']['libelleProduit']); $i++){

                $total += $_SESSION['panier']['qteProduit'][$i]*$_SESSION['panier']['prixProduit'];

            }

            return $total;

        }

        function montantGlobalTVA(){

            $total = 0;

            for ($i; $i<count($_SESSION['panier']['libelleProduit']); $i++){

                $total += $_SESSION['panier']['qteProduit'][$i]*$_SESSION['panier']['prixProduit'];

            }

            return $total + $total*$_SESSION['panier']['tva']/100;

        }

        function supprimerPanier(){

            if(isset($_SESSION['panier'])){

                unset($_SESSION['panier']);

            }

        }

        function isVerouille(){

            if(isset($_SESSION['panier']) && $_SESSION['isVerouille']){

                return true;

            }else{

                return false;

            }

        }

        function compterArticles(){

            if (isset($_SESSION['panier']['libelleProduit'])){

                return count($_SESSION['panier']['libelleProduit']);

            }else{

                return 0;

            }

        }


    }

class function_shop
{

}

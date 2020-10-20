<?php $this->titre = 'Information des clients'; ?>

<ul>
    <li>Yassmine El Wasmi</li>

    <li>420-4A4 MO Web et Bases de données</li>
    <li>Hiver 2020, Collège Montmorency</li>
</ul>
<h3>Information des clients.</h3>
<ul>
    <li>Cette application web permet de créer un utilisateur avec plusieurs rôles. Nous avons le rôle d'administrateur qui a
         un contrôle total sur l’environnement, nous avons aussi le client qui peut ajouter une compagnie ainsi qu'une commande
          en ayant accès à la modification, l’ajout et la suppression de ses propres informations. Comme dernier rôle nous avons 
          celui du visiteur qui a comme unique fonction d'avoir un aperçu des compagnies dans la liste index. L’application permet 
          d'ajouter une compagnie ainsi que d'avoir accès à ces fonctions, de plus nous pouvons insérer une commande selon la 
          compagnie choisie, directement liée à l'utilisateur clé. Dans la liste des compagnies nous retrouvons le nom le numéro 
          de téléphone l'adresse la date. Tandis que dans la liste commande nous avons le nom le statut comme 
          arrivée ou en cours et la date.</li>

    <li>La table rôle interagit avec celle de Users. Les 2 sont reliés avec une clé secondaire appeler rôle ID qui permettra 
        aux user d'avoir un rôle lui limitant les accès selon la catégorie. Dépendamment de son rôle user, celui-ci pourra interagir
         avec la table compagnie, qui elle, est liés avec une clé secondaire nommé users ID.  La table compagnie est relié avec 2 
         autres tables la première est celle des commandes, reliés avec une clé secondaire appeler Company id, ces 2 tables auront 
         une relation 1N. l’autre table nommé photo est elle aussi relié avec une clé secondaire nommée compagnie id. Grace à cette 
         table photo chaque compagnie aura une photo uploader selon son index. Pour finir nous avons la table I18N qui se retrouve
          être une table indépendante, cela veut dire qu'elle n'est reliée avec aucune des autres tables dans la base de données. 
          Cette table permet la traduction multilingue des informations saisies par exemple dans l'application nous retrouvons 3 langues comme l'anglais le français et l'espagnol.</li>

    <li>Les visiteurs peuvent cliquer sur le nom d'un
        client pour lire les informations complète du client :<br>
    </li>
    <ul>
        
</ul>

</html>

<table>
    <tr>
    <td>
            <h4>Base de données utilisée par l'application :</h4>
                 <img src="Webroot/img/bd_compagnieInfo.png" alt=""/>
            </object><br/>
        </td>
    </tr>
    <tr>
        <td><br>
            <h4>Basé sur ce modèle original :</h4>
            <a href="http://www.databaseanswers.org/data_models/products_orders_and_deliveries/index.htm" >
                <img src="Contenu/images/bd_originale.png" alt=""/><br/>
                 
        </td>
    </tr>
</table>
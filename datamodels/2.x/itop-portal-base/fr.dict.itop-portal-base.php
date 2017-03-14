<?php

// Copyright (C) 2010-2015 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>

/**
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license	 http://opensource.org/licenses/AGPL-3.0
 */


// Portal
Dict::Add('FR FR', 'French', 'Français', array(
	'Page:DefaultTitle' => 'Portail utilisateur iTop',
	'Page:PleaseWait' => 'Veuillez patienter...',
	'Page:Home' => 'Accueil',
	'Page:GoPortalHome' => 'Revenir à l\'accueil',
	'Page:GoPreviousPage' => 'Page précédente',
	'Portal:Button:Submit' => 'Valider',
	'Portal:Button:Cancel' => 'Annuler',
	'Portal:Button:Close' => 'Fermer',
	'Portal:Button:Add' => 'Ajouter',
	'Portal:Button:Remove' => 'Enlever',
	'Portal:Button:Delete' => 'Supprimer',
	'Portal:EnvironmentBanner:Title' => 'Vous êtes dans le mode <strong>%1$s</strong>',
	'Portal:EnvironmentBanner:GoToProduction' => 'Retourner au mode PRODUCTION',
	'Error:HTTP:404' => 'Page non trouvée',
	'Error:HTTP:500' => 'Oups ! Une erreur est survenue.',
	'Error:HTTP:GetHelp' => 'Si le problème persiste, veuillez contacter votre administrateur iTop.',
	'Error:XHR:Fail' => 'Impossible de charger les données, veuillez contacter votre administrateur iTop si le problème persiste',
	'Portal:Datatables:Language:Processing' => 'Veuillez patienter...',
	'Portal:Datatables:Language:Search' => 'Filtrer :',
	'Portal:Datatables:Language:LengthMenu' => 'Afficher _MENU_ éléments par page',
	'Portal:Datatables:Language:ZeroRecords' => 'Aucun résultat',
	'Portal:Datatables:Language:Info' => 'Page _PAGE_ sur _PAGES_',
	'Portal:Datatables:Language:InfoEmpty' => 'Pas d\'information disponible',
	'Portal:Datatables:Language:InfoFiltered' => 'filtrées sur un total de _MAX_ éléments',
	'Portal:Datatables:Language:EmptyTable' => 'Aucune donnée élément à afficher',
	'Portal:Datatables:Language:DisplayLength:All' => 'Tout',
	'Portal:Datatables:Language:Paginate:First' => 'Premier',
	'Portal:Datatables:Language:Paginate:Previous' => 'Précédent',
	'Portal:Datatables:Language:Paginate:Next' => 'Suivant',
	'Portal:Datatables:Language:Paginate:Last' => 'Dernier',
	'Portal:Datatables:Language:Sort:Ascending' => 'activer pour trier la colonne par ordre croissant',
	'Portal:Datatables:Language:Sort:Descending' => 'activer pour trier la colonne par ordre décroissant',
	'Portal:Autocomplete:NoResult' => 'Aucun résultat',
	'Portal:Attachments:DropZone:Message' => 'Déposez vos fichiers pour les ajouter en pièces jointes',
	'Portal:File:None' => 'Aucun fichier',
	'Portal:File:DisplayInfo' => '<a href="%2$s" class="file_download_link">%1$s</a>',
	'Portal:File:DisplayInfo+' => '%1$s (%2$s) <a href="%3$s" class="file_open_link" target="_blank">Ouvrir</a> / <a href="%4$s" class="file_download_link">Télécharger</a>',
));

// UserProfile brick
Dict::Add('FR FR', 'French', 'Français', array(
	'Brick:Portal:UserProfile:Name' => 'Profil utilisateur',
	'Brick:Portal:UserProfile:Navigation:Dropdown:MyProfil' => 'Mon profil',
	'Brick:Portal:UserProfile:Navigation:Dropdown:Logout' => 'Déconnexion',
	'Brick:Portal:UserProfile:Password:Title' => 'Mot de passe',
	'Brick:Portal:UserProfile:Password:ChoosePassword' => 'Choisissez un mot de passe',
	'Brick:Portal:UserProfile:Password:ConfirmPassword' => 'Confirmer le mot de passe',
	'Brick:Portal:UserProfile:Password:CantChangeContactAdministrator' => 'Veuillez vous adresser à votre administrateur iTop pour changer votre mot de passe',
	'Brick:Portal:UserProfile:Password:CantChangeForUnknownReason' => 'Impossible de modifier votre mot de passe, veuillez contacter votre administrateur iTop',
	'Brick:Portal:UserProfile:PersonalInformations:Title' => 'Informations personnelles',
	'Brick:Portal:UserProfile:Photo:Title' => 'Photo',
));

// BrowseBrick brick
Dict::Add('FR FR', 'French', 'Français', array(
	'Brick:Portal:Browse:Name' => 'Navigation dans les éléments',
	'Brick:Portal:Browse:Mode:List' => 'Liste',
    'Brick:Portal:Browse:Mode:Tree' => 'Hiérarchie',
    'Brick:Portal:Browse:Mode:Grid' => 'Tuiles',
	'Brick:Portal:Browse:Action:Drilldown' => 'Parcourir',
	'Brick:Portal:Browse:Action:View' => 'Détails',
	'Brick:Portal:Browse:Action:Edit' => 'Modifier',
	'Brick:Portal:Browse:Action:Create' => 'Créer',
	'Brick:Portal:Browse:Action:CreateObjectFromThis' => 'Créer %1$s',
	'Brick:Portal:Browse:Tree:ExpandAll' => 'Tout déplier',
	'Brick:Portal:Browse:Tree:CollapseAll' => 'Tout replier',
	'Brick:Portal:Browse:Filter:NoData' => 'Aucun élément',
));

// ManageBrick brick
Dict::Add('FR FR', 'French', 'Français', array(
	'Brick:Portal:Manage:Name' => 'Gestion d\'éléments',
	'Brick:Portal:Manage:Table:NoData' => 'Aucun élément',
));

// ObjectBrick brick
Dict::Add('FR FR', 'French', 'Français', array(
	'Brick:Portal:Object:Name' => 'Objet',
	'Brick:Portal:Object:Form:Create:Title' => 'Création de %1$s',
	'Brick:Portal:Object:Form:Edit:Title' => 'Modification de %2$s (%1$s)',
	'Brick:Portal:Object:Form:View:Title' => '%1$s : %2$s',
	'Brick:Portal:Object:Form:Stimulus:Title' => 'Veuillez compléter les informations suivantes :',
	'Brick:Portal:Object:Form:Message:Saved' => 'Enregistré',
	'Brick:Portal:Object:Search:Regular:Title' => 'Sélection de %1$s (%2$s)',
	'Brick:Portal:Object:Search:Hierarchy:Title' => 'Sélection de %1$s (%2$s)',
));

// CreateBrick brick
Dict::Add('FR FR', 'French', 'Français', array(
	'Brick:Portal:Create:Name' => 'Création rapide',
    'Brick:Portal:Create:ChooseType' => 'Veuillez choisir le type',
));

// Filter brick
Dict::Add('FR FR', 'French', 'Français', array(
    'Brick:Portal:Filter:Name' => 'Préfiltre une brique',
    'Brick:Portal:Filter:SearchInput:Placeholder' => 'ex : connecter wifi',
    'Brick:Portal:Filter:SearchInput:Submit' => 'Rechercher',
));


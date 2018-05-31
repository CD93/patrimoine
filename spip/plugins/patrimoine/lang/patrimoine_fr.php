<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP

if (!defined('_ECRIRE_INC_VERSION')) return;


$GLOBALS[$GLOBALS['idx_lang']] = array(


	'vignette' => 'Vignette',
	'nb_doc' => 'Nbre de documents',
	'nb_geom' => 'Nbre de géométries',
	'points' => 'Pertinence',

	// A
	'ajouter_lien_patrimoine' => 'Ajouter ce patrimoine',

	// C
	/*à supprimer une fois entièrement vidé car remplacé par les polygones de géolocalisation*/
  'champ_adresse_label' => 'Adresse',
	/*anneedecouvenq contient des dates avec mention ca. A harmoniser.*/
  'champ_anneedecouvenq_label' => 'Date de découverte ou d\'enquête',
	'champ_appellation_label' => 'Appellation',
	'champ_appreciationloc_label' => 'Appréciation de localisation',
	//'champ_attributionculturelle_label' => 'Attributionculturelle',
	/*auteur sera transféré dans le module contact et organisation*/
  'champ_auteur_label' => 'Auteur',
	/*les 2 champs suivants chronodebut et chronofin sont spécifiques à la carte archéologique et devraient intégrer les mots indexation chronologique puis être supprimés comme ID3517*/
  'champ_chronodebut_label' => 'Chronologie début',
	'champ_chronofin_label' => 'Chronologie fin',
	//'champ_codecreateur_label' => 'Codecreateur',
	//'champ_codederniermodif_label' => 'Codederniermodif',
	'champ_codemerimee_label' => 'Code Mérimée',
	/*codepatriarche est vide sur tous les enregistrements*/
  //'champ_codepatriarche_label' => 'Code patriarche',
	'champ_codesite_label' => 'Code site',
	/*commentairedatation ne concerne que l'archéologie et est très peu renseigné. Peut-être que ce contenu devrait être intégré dans la description*/
  //'champ_commentairedatation_label' => 'Commentaire datation',
	//'champ_commune2_label' => 'Commune2',
	//'champ_commune_label' => 'Commune',
	/*contextemobilier est peu renseigné et spécifique à l'archéologie*/
  'champ_contextemobilier_label' => 'Contexte mobilier',
	/*datation est un champ inutilisé*/
  //'champ_datation_label' => 'Datation',
	/*les 2 champs suivants datationfinale et datationinitiale sont spécifiques à la carte archéologique*/
  'champ_datationfinale_label' => 'Datation finale',
	'champ_datationinitiale_label' => 'Datation initiale',
	/*dateconstruction A harmoniser*/
  'champ_dateconstruction_label' => 'Date de construction',
	/*les 2 champs suivants datefin et dateinit sont spécifiques à la l'Inventaire*/
  'champ_datefin_label' => 'Date de fin',
	'champ_dateinit_label' => 'Date initiale',
	//'champ_datemodif_label' => 'Datemodif',
	'champ_dateredaction_label' => 'Date de rédaction',
	'champ_denomination_label' => 'Dénomination',
	'champ_descriptif_label' => 'Descriptif',
	/*description sera à masquer dès vérification que son contenu est reporté en champ descriptif*/
  //'champ_description_label' => 'Description',
	'champ_destsuccactu_label' => 'Destination successive',
	'champ_diagnostic_label' => 'Diagnostic',
	'champ_doutedatation_label' => 'Doute de datation',
	'champ_etatactuel_label' => 'État actuel',
	'champ_etatdecouverte_label' => 'État de découverte',
	'champ_gestionadm_label' => 'Gestion administrative',
	//'champ_id_parent_label' => 'Id_parent',
	/*infospratiques ne renseigne que 2 notices. Il est à supprimer*/
  //'champ_infospratiques_label' => 'Informations pratiques',
	'champ_interet_label' => 'Intérêt',
	/*inventairemobilier seulement 13 notices renseignées*/
  'champ_inventairemobilier_label' => 'Inventaire mobilier',
	/*inventinforenq  noms desenquêteurs ou rédacteurs de notices. transférer dans le module contact et organisation*/
  'champ_inventinforenq_label' => 'Inventaire informateur enquêteur',
	'champ_lieuditquartier_label' => 'Lieu-dit ou quartier',
	//'champ_locprecise_label' => 'Loc precise',
	/*maitreouvrage devra être reporté dans le module contact et organisation*/
  'champ_maitreouvrage_label' => 'Maitre d\'ouvrage',
	'champ_naturesite_label' => 'Nature du site',
	'champ_niveauinterpretation_label' => 'Niveau d\'interprétation',
	//'champ_oldid_label' => 'Oldid',
  /*organisme sera à supprimer au profit du module contact et organisation*/
	'champ_organisme_label' => 'Organisme',
	'champ_partiesconstituantes_label' => 'Parties constituantes',
	'champ_precisiondeno_label' => 'Précision dénomination',
	'champ_precisionemprise_label' => 'Précision emprise',
	'champ_presencemobilier_label' => 'Présence de mobilier',
	'champ_protectionmh_label' => 'Protection Monument Historique',
	'champ_qualifdatation_label' => 'Qualification de datation',
	'champ_qualifdatationfinale_label' => 'Qualification datation finale',
	'champ_qualifdatationin_label' => 'Qualification datation initiale',
	'champ_redacteurs_label' => 'Rédacteurs',
	'champ_reference_label' => 'Référence',
	'champ_servitudeprotection_label' => 'Servitude protection',
	'champ_source_label' => 'Source',
	//'champ_sousdossierde_label' => 'Sous-dossier',
	//'champ_sousdossiersrattaches_label' => 'Dossier attaché',
	'champ_structures_label' => 'Structures',
	/*texte n'est-il pas redondant avec les données chiffrées de la table collège ?*/
  'champ_texte_label' => 'Texte',
	/*timecreate et timemodif ne doivent plus être obligatoire pour la saisie d'une notice*/
  //'champ_timecreate_label' => 'Timecreate',
	//'champ_timemodif_label' => 'Timemodif',
	'champ_titre_label' => 'Titre',
	//'champ_typeetude_label' => 'Type d\'étude',
	//'champ_typesite_label' => 'Type site',
	//'champ_versementatlas2_label' => 'Versementatlas2',
	//'champ_versementatlas_label' => 'Versementatlas',
	'champ_zonagesposplu_label' => 'Zonages POS ou PLU',
	'college_codeia' => 'Code Inspection académique',
	'college_programme' => 'Programme',
	'college_programmedorigine' => "Programme d'origine",
	'college_programmeactuel' => 'Programme actuel',
	'college_programmefutur' => 'Programme futur',
	'college_chronologie' => 'Chronologie',
	'college_acteurs' =>'Les acteurs de la construction',
	'college_chiffres' => 'Le collège en chiffres',
	'college_surfaces' => 'Surfaces',
	'college_programmedetaille' => 'Programme détaillé',
	'college_couts' => 'Coûts',
	'confirmer_supprimer_patrimoine' => 'Confirmez-vous la suppression de cet patrimoine ?',

	// I
	'icone_creer_patrimoine' => 'Créer un patrimoine',
	'icone_modifier_patrimoine' => 'Modifier ce patrimoine',
	'info_1_patrimoine' => 'Un patrimoine',
	'info_aucun_patrimoine' => 'Aucun patrimoine',
	'info_nb_patrimoines' => '@nb@ patrimoines',
	'info_patrimoines_auteur' => 'Les patrimoines de cet auteur',
	'info_patrimoines_objet' => 'Patrimoines documentés',
	'info_1_patrimoine_documente' => 'Un patrimoine documenté',
	'info_aucun_patrimoine_documente' => 'Aucun patrimoine documenté',
	'info_nb_patrimoines_documentes' => '@nb@ patrimoines documentés',
	// R
	'patrimoines_documentes' => 'Patrimoines documentés',



	// R
	'retirer_lien_patrimoine' => 'Retirer ce patrimoine',
	'retirer_tous_liens_patrimoines' => 'Retirer tous les patrimoines',

	// S
	'supprimer_patrimoine' => 'Supprimer cet patrimoine',

	// T
	'texte_ajouter_patrimoine' => 'Ajouter un patrimoine',
	'texte_changer_statut_patrimoine' => 'Ce patrimoine est :',
	'texte_creer_associer_patrimoine' => 'Créer et associer un patrimoine',
	'texte_definir_comme_traduction_patrimoine' => 'Ce patrimoine est une traduction du patrimoine numéro :',
	'texte_notices_liees' => 'Notices liées',
	'titre_langue_patrimoine' => 'Langue de ce patrimoine',
	'titre_logo_patrimoine' => 'Logo de ce patrimoine',
	'titre_objets_lies_patrimoine' => 'Objets liés à ce patrimoine',
	'titre_patrimoine' => 'Patrimoine',
	'titre_patrimoines' => 'Patrimoines',
	'titre_patrimoines_rubrique' => 'Patrimoines de la rubrique',

);
?>

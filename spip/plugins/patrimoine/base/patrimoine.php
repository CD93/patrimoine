<?php
/**
 * Déclarations relatives à la base de données
 *
 * @plugin     Patrimoine
 * @copyright  2016
 * @author     damien
 * @licence    GNU/GPL
 * @package    SPIP\Patrimoine\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Déclaration des alias de tables et filtres automatiques de champs
 *
 * @pipeline declarer_tables_interfaces
 * @param array $interfaces
 *     Déclarations d'interface pour le compilateur
 * @return array
 *     Déclarations d'interface pour le compilateur
 */
function patrimoine_declarer_tables_interfaces($interfaces) {

	$interfaces['table_des_tables']['patrimoines'] = 'patrimoines';
	$interfaces['table_des_tables']['bibliographies'] = 'bibliographies';
	$interfaces['table_des_tables']['colleges'] = 'colleges';
	$interfaces['table_des_tables']['protections'] = 'protections';
	$interfaces['table_des_tables']['communes'] = 'communes';
	$interfaces['table_des_tables']['images'] = 'images';

	return $interfaces;
}


/**
 * Déclaration des objets éditoriaux
 *
 * @pipeline declarer_tables_objets_sql
 * @param array $tables
 *     Description des tables
 * @return array
 *     Description complétée des tables
 */
function patrimoine_declarer_tables_objets_sql($tables) {
	$tables['spip_documents']['rechercher_champs'] = array(
		'titre' => 3,
		'id_document' => 2,
		'descriptif' => 1,
		'fichier' => 1,
		'credits' => 1,
	);
	$tables['spip_patrimoines'] = array(
		'type' => 'patrimoine',
		'principale' => "oui",
		'field'=> array(
			'id_patrimoine'      => 'bigint(21) NOT NULL',
			'id_rubrique'        => 'bigint(21) NOT NULL DEFAULT 0',
			'id_parent'         => 'bigint(21) NOT NULL DEFAULT 0',
			'id_secteur'         => 'bigint(21) NOT NULL DEFAULT 0',
			'titre'              => 'varchar(255) NOT NULL DEFAULT ""',
			'appellation'        => 'varchar(255) DEFAULT NULL',
			'denomination'       => 'varchar(255) DEFAULT NULL',
			'texte'              => 'text NOT NULL DEFAULT ""',
			'dateconstruction'   => 'varchar(255) DEFAULT NULL',
			'datemodif'          => 'text',
			'redacteurs'         => 'varchar(50) DEFAULT NULL',
			'organisme'          => 'varchar(75) DEFAULT NULL',
			'typeetude'          => 'varchar(255) DEFAULT NULL',
			'dateredaction'      => 'varchar(25) DEFAULT NULL',
			'codesite'           => 'varchar(9) DEFAULT NULL',
			'anneedecouvenq'     => 'varchar(25) DEFAULT NULL',
			'inventinforenq'     => 'varchar(155) DEFAULT NULL',
			'destsuccactu'       => 'varchar(255) DEFAULT NULL',
			'doutedatation'      => 'enum("True","False") DEFAULT NULL',
			'oldid'              => 'int(11) DEFAULT NULL',
			'source'             => 'varchar(50) DEFAULT NULL',
			'descriptif'         => 'text NOT NULL DEFAULT ""',
			'codepatriarche'     => 'varchar(30) DEFAULT NULL',
			'codemerimee'        => 'varchar(30) DEFAULT NULL',
			'commune'            => 'varchar(23) DEFAULT NULL',
			'commune2'           => 'varchar(255) DEFAULT NULL',
			'adresse'            => 'varchar(255) DEFAULT NULL',
			'etatdecouverte'     => 'varchar(10) DEFAULT NULL',
			'niveauinterpretation' => 'varchar(19) DEFAULT NULL',
			'precisionemprise'   => 'varchar(41) DEFAULT NULL',
			'precisiondeno'      => 'varchar(255) DEFAULT NULL',
			'auteur'             => 'blob',
			'qualifdatation'     => 'varchar(50) DEFAULT NULL',
			'datation'           => 'blob',
			'sousdossierde'      => 'varchar(9) DEFAULT NULL',
			'sousdossiersrattaches' => 'text',
			'maitreouvrage'      => 'varchar(150) DEFAULT NULL',
			'protectionmh'       => 'varchar(100) DEFAULT NULL',
			'lieuditquartier'    => 'varchar(150) DEFAULT NULL',
			'locprecise'         => 'enum("True","False") DEFAULT NULL',
			'versementatlas'     => 'enum("True","False") DEFAULT NULL',
			'versementatlas2'    => 'enum("True","False") DEFAULT NULL',
			'appreciationloc'    => 'varchar(40) DEFAULT NULL',
			'typesite'           => 'varchar(16) DEFAULT NULL',
			'naturesite'         => 'varchar(11) DEFAULT NULL',
			'etatactuel'         => 'varchar(8) DEFAULT NULL',
			'structures'         => 'varchar(255) DEFAULT NULL',
			'presencemobilier'   => 'enum("True","False") DEFAULT NULL',
			'contextemobilier'   => 'varchar(38) DEFAULT NULL',
			'inventairemobilier' => 'text',
			'chronodebut'        => 'varchar(150) DEFAULT NULL',
			'chronofin'          => 'varchar(150) DEFAULT NULL',
			'datationinitiale'   => 'smallint(6) DEFAULT NULL',
			'datationfinale'     => 'smallint(6) DEFAULT NULL',
			'qualifdatationin'   => 'varchar(50) DEFAULT NULL',
			'qualifdatationfinale' => 'varchar(50) DEFAULT NULL',
			'attributionculturelle' => 'varchar(40) DEFAULT NULL',
			'commentairedatation' => 'text',
			'partiesconstituantes' => 'text',
			'dateinit'           => 'smallint(6) DEFAULT NULL',
			'datefin'            => 'smallint(6) DEFAULT NULL',
			'interet'            => 'varchar(50) DEFAULT NULL',
			'zonagesposplu'      => 'varchar(30) DEFAULT NULL',
			'servitudeprotection' => 'varchar(15) DEFAULT NULL',
			'gestionadm'         => 'text',
			'diagnostic'         => 'text',
			'timecreate'         => 'varchar(50) DEFAULT NULL',
			'codecreateur'       => 'varchar(50) NOT NULL DEFAULT ""',
			'codederniermodif'   => 'varchar(50) DEFAULT NULL',
			'timemodif'          => 'varchar(50) DEFAULT NULL',
			'infospratiques'     => 'varchar(255) NOT NULL DEFAULT ""',
			'description'        => 'text NOT NULL DEFAULT ""',
			'date_publication'   => 'datetime NOT NULL DEFAULT "0000-00-00 00:00:00"',
			'statut'             => 'varchar(20)  DEFAULT "0" NOT NULL',
			'lang'               => 'VARCHAR(10) NOT NULL DEFAULT ""',
			'langue_choisie'     => 'VARCHAR(3) DEFAULT "non"',
			'id_trad'            => 'bigint(21) NOT NULL DEFAULT 0',
			'maj'                => 'TIMESTAMP',
			'reference'        => 'text NOT NULL DEFAULT ""'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_patrimoine',
			'KEY id_rubrique'    => 'id_rubrique',
			'KEY id_secteur'     => 'id_secteur',
			'KEY lang'           => 'lang',
			'KEY id_trad'        => 'id_trad',
			'KEY statut'         => 'statut',
		),
		'titre' => 'titre AS titre, lang AS lang',
		'date' => 'date_publication',
		'champs_editables'  => array('titre', 'appellation', 'denomination', 'texte', 'dateconstruction', 'datemodif', 'redacteurs', 'organisme', 'typeetude', 'dateredaction', 'codesite', 'anneedecouvenq', 'inventinforenq', 'destsuccactu', 'doutedatation', 'oldid', 'source', 'descriptif', 'codepatriarche', 'codemerimee', 'commune', 'commune2', 'adresse', 'etatdecouverte', 'niveauinterpretation', 'precisionemprise', 'precisiondeno', 'auteur', 'qualifdatation', 'datation', 'sousdossierde', 'sousdossiersrattaches', 'maitreouvrage', 'protectionmh', 'lieuditquartier', 'locprecise', 'versementatlas', 'versementatlas2', 'appreciationloc', 'typesite', 'naturesite', 'etatactuel', 'structures', 'presencemobilier', 'contextemobilier', 'inventairemobilier', 'chronodebut', 'chronofin', 'datationinitiale', 'datationfinale', 'qualifdatationin', 'qualifdatationfinale', 'attributionculturelle', 'commentairedatation', 'partiesconstituantes', 'dateinit', 'datefin', 'interet', 'zonagesposplu', 'servitudeprotection', 'gestionadm', 'diagnostic', 'timecreate', 'codecreateur', 'codederniermodif', 'timemodif', 'infospratiques', 'description', 'reference'),
		'champs_versionnes' => array('titre', 'appellation', 'denomination', 'texte', 'dateconstruction', 'datemodif', 'redacteurs', 'organisme', 'typeetude', 'dateredaction', 'codesite', 'anneedecouvenq', 'inventinforenq', 'destsuccactu', 'doutedatation', 'oldid', 'source', 'descriptif', 'codepatriarche', 'codemerimee', 'commune', 'commune2', 'adresse', 'etatdecouverte', 'niveauinterpretation', 'precisionemprise', 'precisiondeno', 'auteur', 'qualifdatation', 'datation', 'sousdossierde', 'sousdossiersrattaches', 'maitreouvrage', 'protectionmh', 'lieuditquartier', 'locprecise', 'versementatlas', 'versementatlas2', 'appreciationloc', 'typesite', 'naturesite', 'etatactuel', 'structures', 'presencemobilier', 'contextemobilier', 'inventairemobilier', 'chronodebut', 'chronofin', 'datationinitiale', 'datationfinale', 'qualifdatationin', 'qualifdatationfinale', 'attributionculturelle', 'commentairedatation', 'partiesconstituantes', 'dateinit', 'datefin', 'interet', 'zonagesposplu', 'servitudeprotection', 'gestionadm', 'diagnostic', 'timecreate', 'codecreateur', 'codederniermodif', 'timemodif', 'infospratiques', 'description', 'reference'),
		'rechercher_champs' => array("titre" => 5, "texte" => 1, "description" => 1, "codesite" => 2, "id_patrimoine" => 5),
		'tables_jointures'  => array('spip_patrimoines_liens'),
		'statut_textes_instituer' => array(
			'prepa'    => 'texte_statut_en_cours_redaction',
			'prop'     => 'texte_statut_propose_evaluation',
			'publie'   => 'texte_statut_publie',
			'refuse'   => 'texte_statut_refuse',
			'poubelle' => 'texte_statut_poubelle',
		),
		'statut'=> array(
			array(
				'champ'     => 'statut',
				'publie'    => 'publie',
				'previsu'   => 'publie,prop,prepa',
				'post_date' => 'date',
				'exception' => array('statut','tout')
			)
		),
		'texte_changer_statut' => 'patrimoine:texte_changer_statut_patrimoine',


	);

	$tables['spip_bibliographies'] = array(
		'type' => 'bibliographie',
		'principale' => "oui",
		'table_objet_surnoms' => array('bibliographie'), // table_objet('bibliographie') => 'bibliographies'
		'field'=> array(
			'id_bibliographie' => 'bigint(21) NOT NULL',
			'id_rubrique'        => 'bigint(21) NOT NULL DEFAULT 0',
			'id_secteur'         => 'bigint(21) NOT NULL DEFAULT 0',
			'type'               => 'varchar(255) DEFAULT NULL',
			'auteurs'            => 'varchar(255) DEFAULT NULL',
			'titre'              => 'varchar(255) DEFAULT NULL',
			'titredocumenthote'  => 'varchar(255) DEFAULT NULL',
			'lieudedition'       => 'varchar(255) DEFAULT NULL',
			'nomdelediteur'      => 'varchar(255) DEFAULT NULL',
			'datededition'       => 'varchar(255) DEFAULT NULL',
			'serviceproducteur'  => 'varchar(255) DEFAULT NULL',
			'texte'              => 'text NOT NULL DEFAULT ""',
			'auteursdocumenthote' => 'varchar(255) DEFAULT NULL',
			'mentiondedition'    => 'varchar(255) DEFAULT NULL',
			'collation'          => 'varchar(255) DEFAULT NULL',
			'collationdudocumenthote' => 'varchar(255) DEFAULT NULL',
			'collection'         => 'varchar(255) DEFAULT NULL',
			'travauxuniversitaires' => 'varchar(255) DEFAULT NULL',
			'localisation'       => 'varchar(255) DEFAULT NULL',
			'cote'               => 'varchar(50) DEFAULT NULL',
			'topocommune'        => 'text',
			'motscles'           => 'text',
			'chronologie'        => 'text',
			'signet'             => 'varchar(100) DEFAULT NULL',
			'illustrations'      => 'varchar(50) DEFAULT NULL',
			'issn'               => 'varchar(50) DEFAULT NULL',
			'notes'              => 'text',
			'isbn'               => 'varchar(50) DEFAULT NULL',
			'auteurnotice'       => 'varchar(100) DEFAULT NULL',
			'lien'           		 => 'varchar(255) NOT NULL DEFAULT ""',
			'telechargement'     => 'varchar(255) NOT NULL DEFAULT ""',
			'document'           => 'enum("True","False") NOT NULL DEFAULT "False"',
			'timecreate'         => 'varchar(50) DEFAULT NULL',
			'codecreateur'       => 'varchar(50) NOT NULL DEFAULT ""',
			'codederniermodif'   => 'varchar(50) DEFAULT NULL',
			'timemodif'          => 'varchar(50) DEFAULT NULL',
			'vedette'            => 'varchar(255) NOT NULL DEFAULT ""',
			'date_publication'   => 'datetime NOT NULL DEFAULT "0000-00-00 00:00:00"',
			'statut'             => 'varchar(20)  DEFAULT "0" NOT NULL',
			'lang'               => 'VARCHAR(10) NOT NULL DEFAULT ""',
			'langue_choisie'     => 'VARCHAR(3) DEFAULT "non"',
			'id_trad'            => 'bigint(21) NOT NULL DEFAULT 0',
			'maj'                => 'TIMESTAMP'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_bibliographie',
			'KEY id_rubrique'    => 'id_rubrique',
			'KEY id_secteur'     => 'id_secteur',
			'KEY lang'           => 'lang',
			'KEY id_trad'        => 'id_trad',
			'KEY statut'         => 'statut',
		),
		'titre' => 'titre AS titre, lang AS lang',
		'date' => 'date_publication',
		'champs_editables'  => array('type', 'auteurs', 'titre', 'titredocumenthote', 'lieudedition', 'nomdelediteur', 'datededition', 'serviceproducteur', 'texte', 'auteursdocumenthote', 'mentiondedition', 'collation', 'collationdudocumenthote', 'collection', 'travauxuniversitaires', 'localisation', 'cote', 'topocommune', 'motscles', 'chronologie', 'signet', 'illustrations', 'issn', 'notes', 'isbn', 'auteurnotice', 'lien', 'telechargement', 'document', 'timecreate', 'codecreateur', 'codederniermodif', 'timemodif', 'vedette'),
		'champs_versionnes' => array('type', 'auteurs', 'titre', 'titredocumenthote', 'lieudedition', 'nomdelediteur', 'datededition', 'serviceproducteur', 'texte', 'auteursdocumenthote', 'mentiondedition', 'collation', 'collationdudocumenthote', 'collection', 'travauxuniversitaires', 'localisation', 'cote', 'topocommune', 'motscles', 'chronologie', 'signet', 'illustrations', 'issn', 'notes', 'isbn', 'auteurnotice', 'lien', 'telechargement', 'document', 'timecreate', 'codecreateur', 'codederniermodif', 'timemodif', 'vedette'),
		'rechercher_champs' => array("titre" => 10, "auteurs" => 5,"type" => 3, "titredocumenthote" => 1),
		'tables_jointures'  => array('spip_bibliographies_liens'),
		'statut_textes_instituer' => array(
			'prepa'    => 'texte_statut_en_cours_redaction',
			'prop'     => 'texte_statut_propose_evaluation',
			'publie'   => 'texte_statut_publie',
			'refuse'   => 'texte_statut_refuse',
			'poubelle' => 'texte_statut_poubelle',
		),
		'statut'=> array(
			array(
				'champ'     => 'statut',
				'publie'    => 'publie',
				'previsu'   => 'publie,prop,prepa',
				'post_date' => 'date',
				'exception' => array('statut','tout')
			)
		),
		'texte_changer_statut' => 'bibliographie:texte_changer_statut_bibliographie',

	);

	$tables['spip_colleges'] = array(
		'type' => 'college',
		'principale' => "oui",
		'table_objet_surnoms' => array('college'), // table_objet('college') => 'colleges'
		'field'=> array(
			'id_college'     => 'bigint(21) NOT NULL',
			'id_rubrique'        => 'bigint(21) NOT NULL DEFAULT 0',
			'id_secteur'         => 'bigint(21) NOT NULL DEFAULT 0',
			'titre'              => 'text NOT NULL DEFAULT ""',
			'codesite'           => 'varchar(10) NOT NULL DEFAULT ""',
			'codedcaf'           => 'varchar(50) NOT NULL DEFAULT ""',
			'codeia'             => 'varchar(50) NOT NULL DEFAULT ""',
			'programmedorigine'  => 'varchar(255) NOT NULL DEFAULT ""',
			'programmeactuel'    => 'varchar(255) NOT NULL DEFAULT ""',
			'programmefutur'     => 'varchar(255) NOT NULL DEFAULT ""',
			'surfaces'           => 'text NOT NULL DEFAULT ""',
			'programmedetaille'  => 'text NOT NULL DEFAULT ""',
			'couts'              => 'text NOT NULL DEFAULT ""',
			'acteurs'            => 'text NOT NULL DEFAULT ""',
			'chronologie'        => 'text NOT NULL DEFAULT ""',
			'date_publication'   => 'datetime NOT NULL DEFAULT "0000-00-00 00:00:00"',
			'statut'             => 'varchar(20)  DEFAULT "0" NOT NULL',
			'lang'               => 'VARCHAR(10) NOT NULL DEFAULT ""',
			'langue_choisie'     => 'VARCHAR(3) DEFAULT "non"',
			'id_trad'            => 'bigint(21) NOT NULL DEFAULT 0',
			'maj'                => 'TIMESTAMP'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_college',
			'KEY id_rubrique'    => 'id_rubrique',
			'KEY id_secteur'     => 'id_secteur',
			'KEY lang'           => 'lang',
			'KEY id_trad'        => 'id_trad',
			'KEY statut'         => 'statut',
		),
		'titre' => 'titre AS titre, lang AS lang',
		'date' => 'date_publication',
		'champs_editables'  => array('titre', 'codesite', 'codedcaf', 'codeia', 'programmedorigine', 'programmeactuel', 'programmefutur', 'surfaces', 'programmedetaille', 'couts', 'acteurs', 'chronologie'),
		'champs_versionnes' => array('titre', 'codesite', 'codedcaf', 'codeia', 'programmedorigine', 'programmeactuel', 'programmefutur', 'surfaces', 'programmedetaille', 'couts', 'acteurs', 'chronologie'),
		'rechercher_champs' => array("titre" => 10, "codesite" => 5, "codedcaf" => 3, "codeia" => 3, "acteurs" => 3, "chronologie" => 3),
		'tables_jointures'  => array('spip_colleges_liens'),
		'statut_textes_instituer' => array(
			'prepa'    => 'texte_statut_en_cours_redaction',
			'prop'     => 'texte_statut_propose_evaluation',
			'publie'   => 'texte_statut_publie',
			'refuse'   => 'texte_statut_refuse',
			'poubelle' => 'texte_statut_poubelle',
		),
		'statut'=> array(
			array(
				'champ'     => 'statut',
				'publie'    => 'publie',
				'previsu'   => 'publie,prop,prepa',
				'post_date' => 'date',
				'exception' => array('statut','tout')
			)
		),
		'texte_changer_statut' => 'college:texte_changer_statut_college',


	);

	$tables['spip_protections'] = array(
		'type' => 'protection',
		'principale' => "oui",
		'table_objet_surnoms' => array('protection'), // table_objet('protection') => 'protections'
		'field'=> array(
			'id_protection'  => 'bigint(21) NOT NULL',
			'id_rubrique'        => 'bigint(21) NOT NULL DEFAULT 0',
			'id_secteur'         => 'bigint(21) NOT NULL DEFAULT 0',
			'nomusage'           => 'text NOT NULL',
			'codeprotection'     => 'varchar(7) DEFAULT NULL',
			'codeculture'        => 'varchar(25) DEFAULT NULL',
			'protobjet'          => 'varchar(255) DEFAULT NULL',
			'mode'               => 'varchar(57) DEFAULT NULL',
			'datedemande'        => 'varchar(10) DEFAULT NULL',
			'datemiseenplace'    => 'varchar(10) DEFAULT NULL',
			'commentaire'        => 'text',
			'etat'               => 'varchar(10) DEFAULT NULL',
			'datecreation'       => 'datetime DEFAULT CURRENT_TIMESTAMP',
			'commune'            => 'varchar(23) DEFAULT NULL',
			'commune2'           => 'varchar(255) DEFAULT NULL',
			'datation'           => 'text NOT NULL',
			'adresse'            => 'text NOT NULL',
			'codesite'           => 'varchar(10) NOT NULL DEFAULT ""',
			'merimee'            => 'tinyint(4) NOT NULL DEFAULT "0"',
			'date_publication'   => 'datetime NOT NULL DEFAULT "0000-00-00 00:00:00"',
			'statut'             => 'varchar(20)  DEFAULT "0" NOT NULL',
			'lang'               => 'VARCHAR(10) NOT NULL DEFAULT ""',
			'langue_choisie'     => 'VARCHAR(3) DEFAULT "non"',
			'id_trad'            => 'bigint(21) NOT NULL DEFAULT 0',
			'maj'                => 'TIMESTAMP'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_protection',
			'KEY id_rubrique'    => 'id_rubrique',
			'KEY id_secteur'     => 'id_secteur',
			'KEY lang'           => 'lang',
			'KEY id_trad'        => 'id_trad',
			'KEY statut'         => 'statut',
		),
		'titre' => 'nomusage AS titre, lang AS lang',
		'date' => 'date_publication',
		'champs_editables'  => array('nomusage', 'codeprotection', 'codeculture', 'protobjet', 'mode', 'datedemande', 'datemiseenplace', 'commentaire', 'etat', 'datecreation', 'commune', 'commune2', 'datation', 'adresse', 'codesite', 'merimee'),
		'champs_versionnes' => array('nomusage', 'codeprotection', 'codeculture', 'protobjet', 'mode', 'datedemande', 'datemiseenplace', 'commentaire', 'etat', 'datecreation', 'commune', 'commune2', 'datation', 'adresse', 'codesite', 'merimee'),
		'rechercher_champs' => array("nomusage" => 10, "codeprotection" => 5, "codeculture" => 2, "protobjet" => 5, "mode" => 1, "datemiseenplace" => 6, "codesite" => 3),
		'tables_jointures'  => array('spip_protections_liens'),
		'statut_textes_instituer' => array(
			'prepa'    => 'texte_statut_en_cours_redaction',
			'prop'     => 'texte_statut_propose_evaluation',
			'publie'   => 'texte_statut_publie',
			'refuse'   => 'texte_statut_refuse',
			'poubelle' => 'texte_statut_poubelle',
		),
		'statut'=> array(
			array(
				'champ'     => 'statut',
				'publie'    => 'publie',
				'previsu'   => 'publie,prop,prepa',
				'post_date' => 'date',
				'exception' => array('statut','tout')
			)
		),
		'texte_changer_statut' => 'protection:texte_changer_statut_protection',


	);

	$tables['spip_communes'] = array(
		'type' => 'commune',
		'principale' => "oui",
		'table_objet_surnoms' => array('commune'), // table_objet('commune') => 'communes'
		'field'=> array(
			'id_commune'     => 'bigint(21) NOT NULL',
			'id_rubrique'        => 'bigint(21) NOT NULL DEFAULT 0',
			'id_secteur'         => 'bigint(21) NOT NULL DEFAULT 0',
			'nomcommune'         => 'varchar(23) DEFAULT NULL',
			'codecommunal'       => 'char(5) DEFAULT NULL',
			'codearrondissmt'    => 'mediumint(8) unsigned DEFAULT NULL',
			'arrondissement'     => 'varchar(12) DEFAULT NULL',
			'superficie'         => 'int(11) DEFAULT NULL',
			'feux1709'           => 'int(11) DEFAULT NULL',
			'feux1788'           => 'int(11) DEFAULT NULL',
			'population1801'     => 'int(11) DEFAULT NULL',
			'population1851'     => 'int(11) DEFAULT NULL',
			'population1906'     => 'int(11) DEFAULT NULL',
			'population1954'     => 'int(11) DEFAULT NULL',
			'population1999'     => 'int(11) DEFAULT NULL',
			'diocese'            => 'varchar(5) DEFAULT NULL',
			'archidiaconne'      => 'varchar(5) DEFAULT NULL',
			'doyenne'            => 'varchar(11) DEFAULT NULL',
			'paroisse'           => 'varchar(23) DEFAULT NULL',
			'intendance'         => 'varchar(5) DEFAULT NULL',
			'election'           => 'varchar(5) DEFAULT NULL',
			'subdelegation'      => 'varchar(11) DEFAULT NULL',
			'greniersel'         => 'varchar(5) DEFAULT NULL',
			'coutume'            => 'varchar(5) DEFAULT NULL',
			'parlement'          => 'varchar(5) DEFAULT NULL',
			'bailliage'          => 'varchar(16) DEFAULT NULL',
			'gouvernement'       => 'varchar(13) DEFAULT NULL',
			'texte'              => 'text NOT NULL DEFAULT ""',
			'datecreation'       => 'datetime DEFAULT CURRENT_TIMESTAMP',
			'codesite'           => 'varchar(10) NOT NULL DEFAULT ""',
			'date_publication'   => 'datetime NOT NULL DEFAULT "0000-00-00 00:00:00"',
			'statut'             => 'varchar(20)  DEFAULT "0" NOT NULL',
			'lang'               => 'VARCHAR(10) NOT NULL DEFAULT ""',
			'langue_choisie'     => 'VARCHAR(3) DEFAULT "non"',
			'id_trad'            => 'bigint(21) NOT NULL DEFAULT 0',
			'maj'                => 'TIMESTAMP'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_commune',
			'KEY id_rubrique'    => 'id_rubrique',
			'KEY id_secteur'     => 'id_secteur',
			'KEY lang'           => 'lang',
			'KEY id_trad'        => 'id_trad',
			'KEY statut'         => 'statut',
		),
		'titre' => 'nomcommune AS titre, lang AS lang',
		'date' => 'date_publication',
		'champs_editables'  => array('nomcommune', 'codecommunal', 'codearrondissmt', 'arrondissement', 'superficie', 'feux1709', 'feux1788', 'population1801', 'population1851', 'population1906', 'population1954', 'population1999', 'diocese', 'archidiaconne', 'doyenne', 'paroisse', 'intendance', 'election', 'subdelegation', 'greniersel', 'coutume', 'parlement', 'bailliage', 'gouvernement', 'texte', 'datecreation', 'codesite'),
		'champs_versionnes' => array('nomcommune', 'codecommunal', 'codearrondissmt', 'arrondissement', 'superficie', 'feux1709', 'feux1788', 'population1801', 'population1851', 'population1906', 'population1954', 'population1999', 'diocese', 'archidiaconne', 'doyenne', 'paroisse', 'intendance', 'election', 'subdelegation', 'greniersel', 'coutume', 'parlement', 'bailliage', 'gouvernement', 'texte', 'datecreation', 'codesite'),
		'rechercher_champs' => array('nomcommune' => 10, 'codecommunal' => 8, 'texte' => 4),
		'tables_jointures'  => array('spip_communes_liens'),
		'statut_textes_instituer' => array(
			'prepa'    => 'texte_statut_en_cours_redaction',
			'prop'     => 'texte_statut_propose_evaluation',
			'publie'   => 'texte_statut_publie',
			'refuse'   => 'texte_statut_refuse',
			'poubelle' => 'texte_statut_poubelle',
		),
		'statut'=> array(
			array(
				'champ'     => 'statut',
				'publie'    => 'publie',
				'previsu'   => 'publie,prop,prepa',
				'post_date' => 'date',
				'exception' => array('statut','tout')
			)
		),
		'texte_changer_statut' => 'commune:texte_changer_statut_commune',


	);

	$tables['spip_images'] = array(
		'type' => 'image',
		'principale' => "oui",
		'table_objet_surnoms' => array('image'), // table_objet('image') => 'images'
		'field'=> array(
			'id_image'       => 'bigint(21) NOT NULL',
			'titre'              => 'varchar(255) NOT NULL DEFAULT ""',
			'idimage'            => 'int(11) DEFAULT NULL',
			'idorigine'          => 'varchar(120) DEFAULT NULL',
			'datesaisie'         => 'datetime DEFAULT NULL',
			'naturesource'       => 'varchar(40) DEFAULT NULL',
			'format'             => 'varchar(12) DEFAULT NULL',
			'typologiephototype' => 'varchar(20) DEFAULT NULL',
			'datecreation'       => 'varchar(13) DEFAULT NULL',
			'auteurimg'          => 'varchar(100) DEFAULT NULL',
			'copyright'          => 'varchar(100) DEFAULT NULL',
			'legende'            => 'text',
			'adressageecran'     => 'varchar(255) DEFAULT NULL',
			'numcd'              => 'smallint(6) DEFAULT NULL',
			'numrangcd'          => 'varchar(50) DEFAULT NULL',
			'serviceproducteur'  => 'varchar(255) DEFAULT NULL',
			'idsite'             => 'int(11) DEFAULT NULL',
			'auteurdocreproduit' => 'varchar(150) DEFAULT NULL',
			'precisionsdocreproduit' => 'varchar(255) DEFAULT NULL',
			'localisation'       => 'varchar(255) DEFAULT NULL',
			'cote'               => 'varchar(50) DEFAULT NULL',
			'droitsdiffusion'    => 'varchar(100) DEFAULT NULL',
			'codesite'           => 'varchar(9) DEFAULT NULL',
			'refbiblio'          => 'varchar(255) DEFAULT NULL',
			'catalogue'          => 'varchar(255) DEFAULT NULL',
			'adressagelocal'     => 'text',
			'fichesite'          => 'enum("True","False") NOT NULL DEFAULT "True"',
			'imgcomp'            => 'varchar(255) NOT NULL DEFAULT ""',
			'numordre'           => 'int(11) NOT NULL DEFAULT "999"',
			'versementatlas'     => 'enum("True","False") NOT NULL DEFAULT "False"',
			'duree'              => 'varchar(50) NOT NULL DEFAULT ""',
			'son'                => 'enum("True","False") DEFAULT NULL',
			'lieninternet'       => 'varchar(255) NOT NULL DEFAULT ""',
			'timecreate'         => 'varchar(50) DEFAULT NULL',
			'codecreateur'       => 'varchar(50) NOT NULL DEFAULT ""',
			'codederniermodif'   => 'varchar(50) DEFAULT NULL',
			'timemodif'          => 'varchar(50) DEFAULT NULL',
			'date_publication'   => 'datetime NOT NULL DEFAULT "0000-00-00 00:00:00"',
			'statut'             => 'varchar(20)  DEFAULT "0" NOT NULL',
			'lang'               => 'VARCHAR(10) NOT NULL DEFAULT ""',
			'langue_choisie'     => 'VARCHAR(3) DEFAULT "non"',
			'id_trad'            => 'bigint(21) NOT NULL DEFAULT 0',
			'maj'                => 'TIMESTAMP'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_image',
			'KEY lang'           => 'lang',
			'KEY id_trad'        => 'id_trad',
			'KEY statut'         => 'statut',
		),
		'titre' => 'titre AS titre, lang AS lang',
		'date' => 'date_publication',
		'champs_editables'  => array('titre', 'idimage', 'idorigine', 'datesaisie', 'naturesource', 'format', 'typologiephototype', 'datecreation', 'auteurimg', 'copyright', 'legende', 'adressageecran', 'numcd', 'numrangcd', 'serviceproducteur', 'idsite', 'auteurdocreproduit', 'precisionsdocreproduit', 'localisation', 'cote', 'droitsdiffusion', 'codesite', 'refbiblio', 'catalogue', 'adressagelocal', 'fichesite', 'imgcomp', 'numordre', 'versementatlas', 'duree', 'son', 'lieninternet', 'timecreate', 'codecreateur', 'codederniermodif', 'timemodif'),
		'champs_versionnes' => array('titre', 'idimage', 'idorigine', 'datesaisie', 'naturesource', 'format', 'typologiephototype', 'datecreation', 'auteurimg', 'copyright', 'legende', 'adressageecran', 'numcd', 'numrangcd', 'serviceproducteur', 'idsite', 'auteurdocreproduit', 'precisionsdocreproduit', 'localisation', 'cote', 'droitsdiffusion', 'codesite', 'refbiblio', 'catalogue', 'adressagelocal', 'fichesite', 'imgcomp', 'numordre', 'versementatlas', 'duree', 'son', 'lieninternet', 'timecreate', 'codecreateur', 'codederniermodif', 'timemodif'),
		'rechercher_champs' => array("titre" => 5, "legende" => 1, "codesite" => 2),
		'tables_jointures'  => array('spip_images_liens'),
		'statut_textes_instituer' => array(
			'prepa'    => 'texte_statut_en_cours_redaction',
			'prop'     => 'texte_statut_propose_evaluation',
			'publie'   => 'texte_statut_publie',
			'refuse'   => 'texte_statut_refuse',
			'poubelle' => 'texte_statut_poubelle',
		),
		'statut'=> array(
			array(
				'champ'     => 'statut',
				'publie'    => 'publie',
				'previsu'   => 'publie,prop,prepa',
				'post_date' => 'date',
				'exception' => array('statut','tout')
			)
		),
		'texte_changer_statut' => 'image:texte_changer_statut_image',


	);
	/* on surcharge les champs pour la recherche
	*/
  $tables['spip_documents']['rechercher_champs']['titre'] = 8;
	$tables['spip_documents']['rechercher_champs']['descriptif'] = 4;
	$tables['spip_documents']['rechercher_champs']['credits'] = 2;

	return $tables;
}


/**
 * Déclaration des tables secondaires (liaisons)
 *
 * @pipeline declarer_tables_auxiliaires
 * @param array $tables
 *     Description des tables
 * @return array
 *     Description complétée des tables
 */
function patrimoine_declarer_tables_auxiliaires($tables) {

	$tables['spip_patrimoines_liens'] = array(
		'field' => array(
			'id_patrimoine'      => 'bigint(21) DEFAULT "0" NOT NULL',
			'id_objet'           => 'bigint(21) DEFAULT "0" NOT NULL',
			'objet'              => 'VARCHAR(25) DEFAULT "" NOT NULL',
			'type_liaison'       => 'VARCHAR(25) DEFAULT ""',
			'vu'                 => 'VARCHAR(6) DEFAULT "non" NOT NULL',
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_patrimoine,id_objet,objet',
			'KEY id_patrimoine'  => 'id_patrimoine',
		)
	);
	$tables['spip_bibliographies_liens'] = array(
		'field' => array(
			'id_bibliographie' => 'bigint(21) DEFAULT "0" NOT NULL',
			'id_objet'           => 'bigint(21) DEFAULT "0" NOT NULL',
			'objet'              => 'VARCHAR(25) DEFAULT "" NOT NULL',
			'role'               => 'VARCHAR(25) DEFAULT ""',
			'vu'                 => 'VARCHAR(6) DEFAULT "non" NOT NULL',
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_bibliographie,id_objet,objet,role',
			'KEY id_bibliographie' => 'id_bibliographie',
		)
	);
	$tables['spip_colleges_liens'] = array(
		'field' => array(
			'id_college'     => 'bigint(21) DEFAULT "0" NOT NULL',
			'id_objet'           => 'bigint(21) DEFAULT "0" NOT NULL',
			'objet'              => 'VARCHAR(25) DEFAULT "" NOT NULL',
			'vu'                 => 'VARCHAR(6) DEFAULT "non" NOT NULL',
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_college,id_objet,objet',
			'KEY id_college' => 'id_college',
		)
	);
	$tables['spip_protections_liens'] = array(
		'field' => array(
			'id_protection'  => 'bigint(21) DEFAULT "0" NOT NULL',
			'id_objet'           => 'bigint(21) DEFAULT "0" NOT NULL',
			'objet'              => 'VARCHAR(25) DEFAULT "" NOT NULL',
			'vu'                 => 'VARCHAR(6) DEFAULT "non" NOT NULL',
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_protection,id_objet,objet',
			'KEY id_protection' => 'id_protection',
		)
	);
	$tables['spip_communes_liens'] = array(
		'field' => array(
			'id_commune'     => 'bigint(21) DEFAULT "0" NOT NULL',
			'id_objet'           => 'bigint(21) DEFAULT "0" NOT NULL',
			'objet'              => 'VARCHAR(25) DEFAULT "" NOT NULL',
			'vu'                 => 'VARCHAR(6) DEFAULT "non" NOT NULL',
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_commune,id_objet,objet',
			'KEY id_commune' => 'id_commune',
		)
	);
	$tables['spip_images_liens'] = array(
		'field' => array(
			'id_image'       => 'bigint(21) DEFAULT "0" NOT NULL',
			'id_objet'           => 'bigint(21) DEFAULT "0" NOT NULL',
			'objet'              => 'VARCHAR(25) DEFAULT "" NOT NULL',
			'vu'                 => 'VARCHAR(6) DEFAULT "non" NOT NULL',
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_image,id_objet,objet',
			'KEY id_image'   => 'id_image',
		)
	);


	return $tables;
}

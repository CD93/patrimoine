<?php

/**
 *  Fichier généré par la Fabrique de plugin v6
 *   le 2016-07-26 11:34:59
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined("_ECRIRE_INC_VERSION")) return;

$data = array (
  'fabrique' => 
  array (
    'version' => 6,
  ),
  'paquet' => 
  array (
    'prefixe' => 'patrimoine',
    'nom' => 'Patrimoine',
    'slogan' => '',
    'description' => '',
    'logo' => 
    array (
      0 => '',
    ),
    'version' => '1.0.16',
    'auteur' => 'damien',
    'auteur_lien' => '',
    'licence' => 'GNU/GPL',
    'categorie' => 'divers',
    'etat' => 'dev',
    'compatibilite' => '[3.0.20;3.1.*]',
    'documentation' => '',
    'administrations' => 'on',
    'schema' => '1.0.7',
    'formulaire_config' => 'on',
    'formulaire_config_titre' => 'patrimoines',
    'fichiers' => 
    array (
      0 => 'autorisations',
      1 => 'fonctions',
      2 => 'options',
      3 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '<necessite nom="patrimoineplus"   /> ',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => '',
  ),
  'objets' => 
  array (
    0 => 
    array (
      'nom' => 'Patrimoines',
      'nom_singulier' => 'Patrimoine',
      'genre' => 'masculin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'logo_variantes' => '',
      'table' => 'spip_patrimoines',
      'cle_primaire' => 'id_patrimoine',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'patrimoine',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Id_parent',
          'champ' => 'id_parent',
          'sql' => 'bigint(21) NOT NULL DEFAULT 0',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Titre',
          'champ' => 'titre',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '5',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Appellation',
          'champ' => 'appellation',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'Denomination',
          'champ' => 'denomination',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'rows=4',
        ),
        4 => 
        array (
          'nom' => 'Texte',
          'champ' => 'texte',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '1',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'rows=16',
        ),
        5 => 
        array (
          'nom' => 'Dateconstruction',
          'champ' => 'dateconstruction',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'rows=4',
        ),
        6 => 
        array (
          'nom' => 'Datemodif',
          'champ' => 'datemodif',
          'sql' => 'text',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => 'rows=4',
        ),
        7 => 
        array (
          'nom' => 'Redacteurs',
          'champ' => 'redacteurs',
          'sql' => 'varchar(50) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        8 => 
        array (
          'nom' => 'Organisme',
          'champ' => 'organisme',
          'sql' => 'varchar(75) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        9 => 
        array (
          'nom' => 'Typeetude',
          'champ' => 'typeetude',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        10 => 
        array (
          'nom' => 'Dateredaction',
          'champ' => 'dateredaction',
          'sql' => 'varchar(25) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        11 => 
        array (
          'nom' => 'Codesite',
          'champ' => 'codesite',
          'sql' => 'varchar(9) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        12 => 
        array (
          'nom' => 'Anneedecouvenq',
          'champ' => 'anneedecouvenq',
          'sql' => 'varchar(25) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        13 => 
        array (
          'nom' => 'Inventinforenq',
          'champ' => 'inventinforenq',
          'sql' => 'varchar(155) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        14 => 
        array (
          'nom' => 'Destsuccactu',
          'champ' => 'destsuccactu',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        15 => 
        array (
          'nom' => 'Doutedatation',
          'champ' => 'doutedatation',
          'sql' => 'enum(\'True\',\'False\') DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        16 => 
        array (
          'nom' => 'Oldid',
          'champ' => 'oldid',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        17 => 
        array (
          'nom' => 'Source',
          'champ' => 'source',
          'sql' => 'varchar(50) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        18 => 
        array (
          'nom' => 'Descriptif',
          'champ' => 'descriptif',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'rows=8',
        ),
        19 => 
        array (
          'nom' => 'Codepatriarche',
          'champ' => 'codepatriarche',
          'sql' => 'varchar(30) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        20 => 
        array (
          'nom' => 'Codemerimee',
          'champ' => 'codemerimee',
          'sql' => 'varchar(30) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        21 => 
        array (
          'nom' => 'Commune',
          'champ' => 'commune',
          'sql' => 'varchar(23) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        22 => 
        array (
          'nom' => 'Commune2',
          'champ' => 'commune2',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        23 => 
        array (
          'nom' => 'Adresse',
          'champ' => 'adresse',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        24 => 
        array (
          'nom' => 'Etatdecouverte',
          'champ' => 'etatdecouverte',
          'sql' => 'varchar(10) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        25 => 
        array (
          'nom' => 'Niveauinterpretation',
          'champ' => 'niveauinterpretation',
          'sql' => 'varchar(19) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        26 => 
        array (
          'nom' => 'Precisionemprise',
          'champ' => 'precisionemprise',
          'sql' => 'varchar(41) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        27 => 
        array (
          'nom' => 'Precisiondeno',
          'champ' => 'precisiondeno',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        28 => 
        array (
          'nom' => 'Auteur',
          'champ' => 'auteur',
          'sql' => 'blob',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        29 => 
        array (
          'nom' => 'Qualifdatation',
          'champ' => 'qualifdatation',
          'sql' => 'varchar(50) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        30 => 
        array (
          'nom' => 'Datation',
          'champ' => 'datation',
          'sql' => 'blob',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        31 => 
        array (
          'nom' => 'Sousdossierde',
          'champ' => 'sousdossierde',
          'sql' => 'varchar(9) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        32 => 
        array (
          'nom' => 'Sousdossiersrattaches',
          'champ' => 'sousdossiersrattaches',
          'sql' => 'text',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        33 => 
        array (
          'nom' => 'Maitreouvrage',
          'champ' => 'maitreouvrage',
          'sql' => 'varchar(150) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        34 => 
        array (
          'nom' => 'Protectionmh',
          'champ' => 'protectionmh',
          'sql' => 'varchar(100) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        35 => 
        array (
          'nom' => 'Lieuditquartier',
          'champ' => 'lieuditquartier',
          'sql' => 'varchar(150) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        36 => 
        array (
          'nom' => 'Locprecise',
          'champ' => 'locprecise',
          'sql' => 'enum(\'True\',\'False\') DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        37 => 
        array (
          'nom' => 'Versementatlas',
          'champ' => 'versementatlas',
          'sql' => 'enum(\'True\',\'False\') DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        38 => 
        array (
          'nom' => 'Versementatlas2',
          'champ' => 'versementatlas2',
          'sql' => 'enum(\'True\',\'False\') DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        39 => 
        array (
          'nom' => 'Appreciationloc',
          'champ' => 'appreciationloc',
          'sql' => 'varchar(40) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        40 => 
        array (
          'nom' => 'Typesite',
          'champ' => 'typesite',
          'sql' => 'varchar(16) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        41 => 
        array (
          'nom' => 'Naturesite',
          'champ' => 'naturesite',
          'sql' => 'varchar(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        42 => 
        array (
          'nom' => 'Etatactuel',
          'champ' => 'etatactuel',
          'sql' => 'varchar(8) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        43 => 
        array (
          'nom' => 'Structures',
          'champ' => 'structures',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        44 => 
        array (
          'nom' => 'Presencemobilier',
          'champ' => 'presencemobilier',
          'sql' => 'enum(\'True\',\'False\') DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        45 => 
        array (
          'nom' => 'Contextemobilier',
          'champ' => 'contextemobilier',
          'sql' => 'varchar(38) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        46 => 
        array (
          'nom' => 'Inventairemobilier',
          'champ' => 'inventairemobilier',
          'sql' => 'text',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        47 => 
        array (
          'nom' => 'Chronodebut',
          'champ' => 'chronodebut',
          'sql' => 'varchar(150) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        48 => 
        array (
          'nom' => 'Chronofin',
          'champ' => 'chronofin',
          'sql' => 'varchar(150) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        49 => 
        array (
          'nom' => 'Datationinitiale',
          'champ' => 'datationinitiale',
          'sql' => 'smallint(6) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        50 => 
        array (
          'nom' => 'Datationfinale',
          'champ' => 'datationfinale',
          'sql' => 'smallint(6) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        51 => 
        array (
          'nom' => 'Qualifdatationin',
          'champ' => 'qualifdatationin',
          'sql' => 'varchar(50) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        52 => 
        array (
          'nom' => 'Qualifdatationfinale',
          'champ' => 'qualifdatationfinale',
          'sql' => 'varchar(50) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        53 => 
        array (
          'nom' => 'Attributionculturelle',
          'champ' => 'attributionculturelle',
          'sql' => 'varchar(40) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        54 => 
        array (
          'nom' => 'Commentairedatation',
          'champ' => 'commentairedatation',
          'sql' => 'text',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        55 => 
        array (
          'nom' => 'Partiesconstituantes',
          'champ' => 'partiesconstituantes',
          'sql' => 'text',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        56 => 
        array (
          'nom' => 'Dateinit',
          'champ' => 'dateinit',
          'sql' => 'smallint(6) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        57 => 
        array (
          'nom' => 'Datefin',
          'champ' => 'datefin',
          'sql' => 'smallint(6) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        58 => 
        array (
          'nom' => 'Interet',
          'champ' => 'interet',
          'sql' => 'varchar(50) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        59 => 
        array (
          'nom' => 'Zonagesposplu',
          'champ' => 'zonagesposplu',
          'sql' => 'varchar(30) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        60 => 
        array (
          'nom' => 'Servitudeprotection',
          'champ' => 'servitudeprotection',
          'sql' => 'varchar(15) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        61 => 
        array (
          'nom' => 'Gestionadm',
          'champ' => 'gestionadm',
          'sql' => 'text',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        62 => 
        array (
          'nom' => 'Diagnostic',
          'champ' => 'diagnostic',
          'sql' => 'text',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        63 => 
        array (
          'nom' => 'Timecreate',
          'champ' => 'timecreate',
          'sql' => 'date NOT NULL DEFAULT \'0000-00-00\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        64 => 
        array (
          'nom' => 'Codecreateur',
          'champ' => 'codecreateur',
          'sql' => 'varchar(50) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        65 => 
        array (
          'nom' => 'Codederniermodif',
          'champ' => 'codederniermodif',
          'sql' => 'varchar(50) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        66 => 
        array (
          'nom' => 'Timemodif',
          'champ' => 'timemodif',
          'sql' => 'date NOT NULL DEFAULT \'0000-00-00\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        67 => 
        array (
          'nom' => 'Informations pratiques',
          'champ' => 'infospratiques',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        68 => 
        array (
          'nom' => 'Description',
          'champ' => 'description',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=4',
        ),
      ),
      'champ_titre' => 'titre',
      'rubriques' => 
      array (
        0 => 'id_rubrique',
        1 => 'id_secteur',
        2 => 'vue_rubrique',
        3 => 'statut_rubrique',
        4 => 'plan',
      ),
      'langues' => 
      array (
        0 => 'lang',
        1 => 'id_trad',
      ),
      'champ_date' => 'date_publication',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Patrimoines',
        'titre_objet' => 'Patrimoine',
        'info_aucun_objet' => 'Aucun patrimoine',
        'info_1_objet' => 'Un patrimoine',
        'info_nb_objets' => '@nb@ patrimoines',
        'icone_creer_objet' => 'Créer un patrimoine',
        'icone_modifier_objet' => 'Modifier ce patrimoine',
        'titre_logo_objet' => 'Logo de ce patrimoine',
        'titre_langue_objet' => 'Langue de ce patrimoine',
        'texte_definir_comme_traduction_objet' => 'Ce patrimoine est une traduction du patrimoine numéro :',
        'titre_objets_rubrique' => 'Patrimoines de la rubrique',
        'info_objets_auteur' => 'Les patrimoines de cet auteur',
        'retirer_lien_objet' => 'Retirer ce patrimoine',
        'retirer_tous_liens_objets' => 'Retirer tous les patrimoines',
        'ajouter_lien_objet' => 'Ajouter ce patrimoine',
        'texte_ajouter_objet' => 'Ajouter un patrimoine',
        'texte_creer_associer_objet' => 'Créer et associer un patrimoine',
        'texte_changer_statut_objet' => 'Ce patrimoine est :',
        'supprimer_objet' => 'Supprimer cet patrimoine',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cet patrimoine ?',
      ),
      'table_liens' => 'on',
      'roles' => '',
      'auteurs_liens' => 'on',
      'vue_auteurs_liens' => 'on',
      'fichiers' => 
      array (
        'echafaudages' => 
        array (
          0 => 'prive/squelettes/contenu/objets.html',
          1 => 'prive/objets/infos/objet.html',
          2 => 'prive/squelettes/contenu/objet.html',
        ),
        'explicites' => 
        array (
          0 => 'action/supprimer_objet.php',
        ),
      ),
      'saisies' => 
      array (
        0 => 'objets',
      ),
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
        1 => 'outils_rapides',
      ),
    ),
    1 => 
    array (
      'nom' => 'Bibliographies',
      'nom_singulier' => 'Bibliographie',
      'genre' => 'feminin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'logo_variantes' => '',
      'table' => 'spip_bibliographies',
      'cle_primaire' => 'id_bibliographie',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'bibliographie',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Type',
          'champ' => 'type',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'selection',
          'explication' => '',
          'saisie_options' => 'datas=[(#ARRAY{monographie,monographie,article,article})]',
        ),
        1 => 
        array (
          'nom' => 'Auteurs',
          'champ' => 'auteurs',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Titre',
          'champ' => 'titre',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '10',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'Titredocumenthote',
          'champ' => 'titredocumenthote',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        4 => 
        array (
          'nom' => 'Lieudedition',
          'champ' => 'lieudedition',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        5 => 
        array (
          'nom' => 'Nomdelediteur',
          'champ' => 'nomdelediteur',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        6 => 
        array (
          'nom' => 'Datededition',
          'champ' => 'datededition',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        7 => 
        array (
          'nom' => 'Serviceproducteur',
          'champ' => 'serviceproducteur',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        8 => 
        array (
          'nom' => 'Texte',
          'champ' => 'texte',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=4',
        ),
        9 => 
        array (
          'nom' => 'Auteursdocumenthote',
          'champ' => 'auteursdocumenthote',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        10 => 
        array (
          'nom' => 'Mentiondedition',
          'champ' => 'mentiondedition',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        11 => 
        array (
          'nom' => 'Collation',
          'champ' => 'collation',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        12 => 
        array (
          'nom' => 'Collationdudocumenthote',
          'champ' => 'collationdudocumenthote',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        13 => 
        array (
          'nom' => 'Collection',
          'champ' => 'collection',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        14 => 
        array (
          'nom' => 'Travauxuniversitaires',
          'champ' => 'travauxuniversitaires',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        15 => 
        array (
          'nom' => 'Localisation',
          'champ' => 'localisation',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        16 => 
        array (
          'nom' => 'Cote',
          'champ' => 'cote',
          'sql' => 'varchar(50) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        17 => 
        array (
          'nom' => 'Topocommune',
          'champ' => 'topocommune',
          'sql' => 'text',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        18 => 
        array (
          'nom' => 'Motscles',
          'champ' => 'motscles',
          'sql' => 'text',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        19 => 
        array (
          'nom' => 'Chronologie',
          'champ' => 'chronologie',
          'sql' => 'text',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        20 => 
        array (
          'nom' => 'Signet',
          'champ' => 'signet',
          'sql' => 'varchar(100) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        21 => 
        array (
          'nom' => 'Illustrations',
          'champ' => 'illustrations',
          'sql' => 'varchar(50) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        22 => 
        array (
          'nom' => 'Issn',
          'champ' => 'issn',
          'sql' => 'varchar(50) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        23 => 
        array (
          'nom' => 'Notes',
          'champ' => 'notes',
          'sql' => 'text',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        24 => 
        array (
          'nom' => 'Isbn',
          'champ' => 'isbn',
          'sql' => 'varchar(50) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        25 => 
        array (
          'nom' => 'Auteurnotice',
          'champ' => 'auteurnotice',
          'sql' => 'varchar(100) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        26 => 
        array (
          'nom' => 'Fichier',
          'champ' => 'fichier',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        27 => 
        array (
          'nom' => 'Telechargement',
          'champ' => 'telechargement',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        28 => 
        array (
          'nom' => 'Document',
          'champ' => 'document',
          'sql' => 'enum(\'True\',\'False\') NOT NULL DEFAULT \'False\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        29 => 
        array (
          'nom' => 'Timecreate',
          'champ' => 'timecreate',
          'sql' => 'date NOT NULL DEFAULT \'0000-00-00\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        30 => 
        array (
          'nom' => 'Codecreateur',
          'champ' => 'codecreateur',
          'sql' => 'varchar(50) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        31 => 
        array (
          'nom' => 'Codederniermodif',
          'champ' => 'codederniermodif',
          'sql' => 'date NOT NULL DEFAULT \'0000-00-00\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        32 => 
        array (
          'nom' => 'Timemodif',
          'champ' => 'timemodif',
          'sql' => 'varchar(50) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        33 => 
        array (
          'nom' => 'Vedette',
          'champ' => 'vedette',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'vedette',
      'rubriques' => 
      array (
        0 => 'id_rubrique',
        1 => 'id_secteur',
        2 => 'vue_rubrique',
        3 => 'statut_rubrique',
        4 => 'plan',
      ),
      'langues' => 
      array (
        0 => 'lang',
        1 => 'id_trad',
      ),
      'champ_date' => 'date_publication',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Bibliographies',
        'titre_objet' => 'Bibliographie',
        'info_aucun_objet' => 'Aucune bibliographie',
        'info_1_objet' => 'Une bibliographie',
        'info_nb_objets' => '@nb@ bibliographies',
        'icone_creer_objet' => 'Créer une bibliographie',
        'icone_modifier_objet' => 'Modifier cette bibliographie',
        'titre_logo_objet' => 'Logo de cette bibliographie',
        'titre_langue_objet' => 'Langue de cette bibliographie',
        'texte_definir_comme_traduction_objet' => 'Cette bibliographie est une traduction de la bibliographie numéro :',
        'titre_objets_rubrique' => 'Bibliographies de la rubrique',
        'info_objets_auteur' => 'Les bibliographies de cet auteur',
        'retirer_lien_objet' => 'Retirer cette bibliographie',
        'retirer_tous_liens_objets' => 'Retirer toutes les bibliographies',
        'ajouter_lien_objet' => 'Ajouter cette bibliographie',
        'texte_ajouter_objet' => 'Ajouter une bibliographie',
        'texte_creer_associer_objet' => 'Créer et associer une bibliographie',
        'texte_changer_statut_objet' => 'Cette bibliographie est :',
        'supprimer_objet' => 'Supprimer cette bibliographie',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cette bibliographie ?',
      ),
      'table_liens' => 'on',
      'vue_liens' => 
      array (
        0 => 'spip_communes',
        1 => 'spip_patrimoines',
      ),
      'roles' => 'page,page',
      'auteurs_liens' => 'on',
      'vue_auteurs_liens' => 'on',
      'fichiers' => 
      array (
        'echafaudages' => 
        array (
          0 => 'prive/squelettes/contenu/objets.html',
          1 => 'prive/objets/infos/objet.html',
          2 => 'prive/squelettes/contenu/objet.html',
        ),
        'explicites' => 
        array (
          0 => 'action/supprimer_objet.php',
        ),
      ),
      'saisies' => 
      array (
        0 => 'objets',
      ),
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
        1 => 'outils_rapides',
      ),
    ),
    2 => 
    array (
      'nom' => 'Colleges',
      'nom_singulier' => 'college',
      'genre' => 'masculin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'logo_variantes' => '',
      'table' => 'spip_colleges',
      'cle_primaire' => 'id_college',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'college',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'titre',
          'champ' => 'titre',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'codesite',
          'champ' => 'codesite',
          'sql' => 'varchar(10) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'codedcaf',
          'champ' => 'codedcaf',
          'sql' => 'varchar(50) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'codeia',
          'champ' => 'codeia',
          'sql' => 'varchar(50) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        4 => 
        array (
          'nom' => 'Programme d\'origine',
          'champ' => 'programmedorigine',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=4',
          'saisie_options' => '',
        ),
        5 => 
        array (
          'nom' => 'Programme actuel',
          'champ' => 'programmeactuel',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=4',
          'saisie_options' => '',
        ),
        6 => 
        array (
          'nom' => 'Programme futur',
          'champ' => 'programmefutur',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=4',
          'saisie_options' => '',
        ),
        7 => 
        array (
          'nom' => 'Surfaces',
          'champ' => 'surfaces',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=4',
          'saisie_options' => '',
        ),
        8 => 
        array (
          'nom' => 'Programme détaillé',
          'champ' => 'programmedetaille',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=20',
          'saisie_options' => 'rows=16',
        ),
        9 => 
        array (
          'nom' => 'Coûts',
          'champ' => 'couts',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=4',
          'saisie_options' => 'rows=20',
        ),
        13 => 
        array (
          'nom' => 'Les acteurs de la construction',
          'champ' => 'acteurs',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=10',
          'saisie_options' => 'rows=20',
        ),
        14 => 
        array (
          'nom' => 'Chronologie',
          'champ' => 'chronologie',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=10',
          'saisie_options' => 'rows=10',
        ),
      ),
      'champ_titre' => 'titre',
      'rubriques' => 
      array (
        0 => 'id_rubrique',
        1 => 'id_secteur',
        2 => 'vue_rubrique',
        3 => 'statut_rubrique',
        4 => 'plan',
      ),
      'langues' => 
      array (
        0 => 'lang',
        1 => 'id_trad',
      ),
      'champ_date' => 'date_publication',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Colleges',
        'titre_objet' => 'College',
        'info_aucun_objet' => 'Aucun college',
        'info_1_objet' => 'Un college',
        'info_nb_objets' => '@nb@ colleges',
        'icone_creer_objet' => 'Créer un college',
        'icone_modifier_objet' => 'Modifier ce college',
        'titre_logo_objet' => 'Logo de ce college',
        'titre_langue_objet' => 'Langue de ce college',
        'texte_definir_comme_traduction_objet' => 'Ce college est une traduction du college numéro :',
        'titre_objets_rubrique' => 'Colleges de la rubrique',
        'info_objets_auteur' => 'Les colleges de cet auteur',
        'retirer_lien_objet' => 'Retirer ce college',
        'retirer_tous_liens_objets' => 'Retirer tous les colleges',
        'ajouter_lien_objet' => 'Ajouter ce college',
        'texte_ajouter_objet' => 'Ajouter un college',
        'texte_creer_associer_objet' => 'Créer et associer un college',
        'texte_changer_statut_objet' => 'Ce college est :',
        'supprimer_objet' => 'Supprimer cet college',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cet college ?',
      ),
      'table_liens' => 'on',
      'vue_liens' => 
      array (
        0 => 'spip_patrimoines',
      ),
      'roles' => '',
      'auteurs_liens' => 'on',
      'vue_auteurs_liens' => 'on',
      'fichiers' => 
      array (
        'echafaudages' => 
        array (
          0 => 'prive/squelettes/contenu/objets.html',
          1 => 'prive/objets/infos/objet.html',
          2 => 'prive/squelettes/contenu/objet.html',
        ),
        'explicites' => 
        array (
          0 => 'action/supprimer_objet.php',
        ),
      ),
      'saisies' => 
      array (
        0 => 'objets',
      ),
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
        1 => 'outils_rapides',
      ),
    ),
    3 => 
    array (
      'nom' => 'Protections',
      'nom_singulier' => 'Protection',
      'genre' => 'feminin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'logo_variantes' => '',
      'table' => 'spip_protections',
      'cle_primaire' => 'id_protection',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'protection',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Nomusage',
          'champ' => 'nomusage',
          'sql' => 'text NOT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'rows=4',
        ),
        1 => 
        array (
          'nom' => 'Codeprotection',
          'champ' => 'codeprotection',
          'sql' => 'varchar(7) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Codeculture',
          'champ' => 'codeculture',
          'sql' => 'varchar(25) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'Protobjet',
          'champ' => 'protobjet',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=10',
          'saisie_options' => 'rows=4',
        ),
        4 => 
        array (
          'nom' => 'Mode',
          'champ' => 'mode',
          'sql' => 'varchar(57) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'rows=4',
        ),
        5 => 
        array (
          'nom' => 'Datedemande',
          'champ' => 'datedemande',
          'sql' => 'varchar(10) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        6 => 
        array (
          'nom' => 'Datemiseenplace',
          'champ' => 'datemiseenplace',
          'sql' => 'varchar(10) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        7 => 
        array (
          'nom' => 'Commentaire',
          'champ' => 'commentaire',
          'sql' => 'text',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'rows=4',
        ),
        8 => 
        array (
          'nom' => 'Etat',
          'champ' => 'etat',
          'sql' => 'varchar(10) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        9 => 
        array (
          'nom' => 'Datecreation',
          'champ' => 'datecreation',
          'sql' => 'datetime DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        10 => 
        array (
          'nom' => 'Commune',
          'champ' => 'commune',
          'sql' => 'varchar(23) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        11 => 
        array (
          'nom' => 'Commune2',
          'champ' => 'commune2',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        12 => 
        array (
          'nom' => 'Datation',
          'champ' => 'datation',
          'sql' => 'text NOT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        13 => 
        array (
          'nom' => 'Adresse',
          'champ' => 'adresse',
          'sql' => 'text NOT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        14 => 
        array (
          'nom' => 'Codesite',
          'champ' => 'codesite',
          'sql' => 'varchar(10) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        15 => 
        array (
          'nom' => 'Merimee',
          'champ' => 'merimee',
          'sql' => 'tinyint(4) NOT NULL DEFAULT \'0\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'nomusage',
      'rubriques' => 
      array (
        0 => 'id_rubrique',
        1 => 'id_secteur',
        2 => 'vue_rubrique',
        3 => 'statut_rubrique',
        4 => 'plan',
      ),
      'langues' => 
      array (
        0 => 'lang',
        1 => 'id_trad',
      ),
      'champ_date' => 'date_publication',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Protections',
        'titre_objet' => 'Protection',
        'info_aucun_objet' => 'Aucune protection',
        'info_1_objet' => 'Une protection',
        'info_nb_objets' => '@nb@ protections',
        'icone_creer_objet' => 'Créer une protection',
        'icone_modifier_objet' => 'Modifier cette protection',
        'titre_logo_objet' => 'Logo de cette protection',
        'titre_langue_objet' => 'Langue de cette protection',
        'texte_definir_comme_traduction_objet' => 'Cette protection est une traduction de la protection numéro :',
        'titre_objets_rubrique' => 'Protections de la rubrique',
        'info_objets_auteur' => 'Les protections de cet auteur',
        'retirer_lien_objet' => 'Retirer cette protection',
        'retirer_tous_liens_objets' => 'Retirer toutes les protections',
        'ajouter_lien_objet' => 'Ajouter cette protection',
        'texte_ajouter_objet' => 'Ajouter une protection',
        'texte_creer_associer_objet' => 'Créer et associer une protection',
        'texte_changer_statut_objet' => 'Cette protection est :',
        'supprimer_objet' => 'Supprimer cette protection',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cette protection ?',
      ),
      'table_liens' => 'on',
      'vue_liens' => 
      array (
        0 => 'spip_patrimoines',
      ),
      'roles' => '',
      'auteurs_liens' => 'on',
      'vue_auteurs_liens' => 'on',
      'fichiers' => 
      array (
        'echafaudages' => 
        array (
          0 => 'prive/squelettes/contenu/objets.html',
          1 => 'prive/objets/infos/objet.html',
          2 => 'prive/squelettes/contenu/objet.html',
        ),
        'explicites' => 
        array (
          0 => 'action/supprimer_objet.php',
        ),
      ),
      'saisies' => 
      array (
        0 => 'objets',
      ),
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
        1 => 'outils_rapides',
      ),
    ),
    4 => 
    array (
      'nom' => 'Communes',
      'nom_singulier' => 'Commune',
      'genre' => 'feminin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'logo_variantes' => '',
      'table' => 'spip_communes',
      'cle_primaire' => 'id_commune',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'commune',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Nomcommune',
          'champ' => 'nomcommune',
          'sql' => 'varchar(23) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Codecommunal',
          'champ' => 'codecommunal',
          'sql' => 'char(5) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Codearrondissmt',
          'champ' => 'codearrondissmt',
          'sql' => 'mediumint(8) unsigned DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'Arrondissement',
          'champ' => 'arrondissement',
          'sql' => 'varchar(12) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        4 => 
        array (
          'nom' => 'Superficie',
          'champ' => 'superficie',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        5 => 
        array (
          'nom' => 'Feux1709',
          'champ' => 'feux1709',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        6 => 
        array (
          'nom' => 'Feux1788',
          'champ' => 'feux1788',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        7 => 
        array (
          'nom' => 'Population1801',
          'champ' => 'population1801',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        8 => 
        array (
          'nom' => 'Population1851',
          'champ' => 'population1851',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        9 => 
        array (
          'nom' => 'Population1906',
          'champ' => 'population1906',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        10 => 
        array (
          'nom' => 'Population1954',
          'champ' => 'population1954',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        11 => 
        array (
          'nom' => 'Population1999',
          'champ' => 'population1999',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        12 => 
        array (
          'nom' => 'Diocese',
          'champ' => 'diocese',
          'sql' => 'varchar(5) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        13 => 
        array (
          'nom' => 'Archidiaconne',
          'champ' => 'archidiaconne',
          'sql' => 'varchar(5) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        14 => 
        array (
          'nom' => 'Doyenne',
          'champ' => 'doyenne',
          'sql' => 'varchar(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        15 => 
        array (
          'nom' => 'Paroisse',
          'champ' => 'paroisse',
          'sql' => 'varchar(23) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        16 => 
        array (
          'nom' => 'Intendance',
          'champ' => 'intendance',
          'sql' => 'varchar(5) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        17 => 
        array (
          'nom' => 'Election',
          'champ' => 'election',
          'sql' => 'varchar(5) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        18 => 
        array (
          'nom' => 'Subdelegation',
          'champ' => 'subdelegation',
          'sql' => 'varchar(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        19 => 
        array (
          'nom' => 'Greniersel',
          'champ' => 'greniersel',
          'sql' => 'varchar(5) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        20 => 
        array (
          'nom' => 'Coutume',
          'champ' => 'coutume',
          'sql' => 'varchar(5) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        21 => 
        array (
          'nom' => 'Parlement',
          'champ' => 'parlement',
          'sql' => 'varchar(5) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        22 => 
        array (
          'nom' => 'Bailliage',
          'champ' => 'bailliage',
          'sql' => 'varchar(16) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        23 => 
        array (
          'nom' => 'Gouvernement',
          'champ' => 'gouvernement',
          'sql' => 'varchar(13) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        24 => 
        array (
          'nom' => 'Texte',
          'champ' => 'texte',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=20',
        ),
        25 => 
        array (
          'nom' => 'Datecreation',
          'champ' => 'datecreation',
          'sql' => 'datetime DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        26 => 
        array (
          'nom' => 'Codesite',
          'champ' => 'codesite',
          'sql' => 'varchar(10) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'nomcommune',
      'rubriques' => 
      array (
        0 => 'id_rubrique',
        1 => 'id_secteur',
        2 => 'vue_rubrique',
        3 => 'statut_rubrique',
        4 => 'plan',
      ),
      'langues' => 
      array (
        0 => 'lang',
        1 => 'id_trad',
      ),
      'champ_date' => 'date_publication',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Communes',
        'titre_objet' => 'Commune',
        'info_aucun_objet' => 'Aucune commune',
        'info_1_objet' => 'Une commune',
        'info_nb_objets' => '@nb@ communes',
        'icone_creer_objet' => 'Créer une commune',
        'icone_modifier_objet' => 'Modifier cette commune',
        'titre_logo_objet' => 'Logo de cette commune',
        'titre_langue_objet' => 'Langue de cette commune',
        'texte_definir_comme_traduction_objet' => 'Cette commune est une traduction de la commune numéro :',
        'titre_objets_rubrique' => 'Communes de la rubrique',
        'info_objets_auteur' => 'Les communes de cet auteur',
        'retirer_lien_objet' => 'Retirer cette commune',
        'retirer_tous_liens_objets' => 'Retirer toutes les communes',
        'ajouter_lien_objet' => 'Ajouter cette commune',
        'texte_ajouter_objet' => 'Ajouter une commune',
        'texte_creer_associer_objet' => 'Créer et associer une commune',
        'texte_changer_statut_objet' => 'Cette commune est :',
        'supprimer_objet' => 'Supprimer cette commune',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cette commune ?',
      ),
      'table_liens' => 'on',
      'vue_liens' => 
      array (
        0 => 'spip_mots',
        1 => 'spip_patrimoines',
      ),
      'roles' => '',
      'auteurs_liens' => 'on',
      'vue_auteurs_liens' => 'on',
      'fichiers' => 
      array (
        'echafaudages' => 
        array (
          0 => 'prive/squelettes/contenu/objets.html',
          1 => 'prive/objets/infos/objet.html',
          2 => 'prive/squelettes/contenu/objet.html',
        ),
        'explicites' => 
        array (
          0 => 'action/supprimer_objet.php',
        ),
      ),
      'saisies' => 
      array (
        0 => 'objets',
      ),
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
        1 => 'outils_rapides',
      ),
    ),
    5 => 
    array (
      'nom' => 'Images',
      'nom_singulier' => 'Image',
      'genre' => 'feminin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'logo_variantes' => '',
      'table' => 'spip_images',
      'cle_primaire' => 'id_image',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'image',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Titre',
          'champ' => 'titre',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Idimage',
          'champ' => 'idimage',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Idorigine',
          'champ' => 'idorigine',
          'sql' => 'varchar(120) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'Datesaisie',
          'champ' => 'datesaisie',
          'sql' => 'datetime DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        4 => 
        array (
          'nom' => 'Naturesource',
          'champ' => 'naturesource',
          'sql' => 'varchar(40) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        5 => 
        array (
          'nom' => 'Format',
          'champ' => 'format',
          'sql' => 'varchar(12) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        6 => 
        array (
          'nom' => 'Typologiephototype',
          'champ' => 'typologiephototype',
          'sql' => 'varchar(20) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        7 => 
        array (
          'nom' => 'Datecreation',
          'champ' => 'datecreation',
          'sql' => 'varchar(13) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        8 => 
        array (
          'nom' => 'Auteurimg',
          'champ' => 'auteurimg',
          'sql' => 'varchar(100) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        9 => 
        array (
          'nom' => 'Copyright',
          'champ' => 'copyright',
          'sql' => 'varchar(100) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        10 => 
        array (
          'nom' => 'Legende',
          'champ' => 'legende',
          'sql' => 'text',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=4',
        ),
        11 => 
        array (
          'nom' => 'Adressageecran',
          'champ' => 'adressageecran',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        12 => 
        array (
          'nom' => 'Numcd',
          'champ' => 'numcd',
          'sql' => 'smallint(6) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        13 => 
        array (
          'nom' => 'Numrangcd',
          'champ' => 'numrangcd',
          'sql' => 'varchar(50) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        14 => 
        array (
          'nom' => 'Serviceproducteur',
          'champ' => 'serviceproducteur',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        15 => 
        array (
          'nom' => 'Idsite',
          'champ' => 'idsite',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        16 => 
        array (
          'nom' => 'Auteurdocreproduit',
          'champ' => 'auteurdocreproduit',
          'sql' => 'varchar(150) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        17 => 
        array (
          'nom' => 'Precisionsdocreproduit',
          'champ' => 'precisionsdocreproduit',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        18 => 
        array (
          'nom' => 'Localisation',
          'champ' => 'localisation',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        19 => 
        array (
          'nom' => 'Cote',
          'champ' => 'cote',
          'sql' => 'varchar(50) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        20 => 
        array (
          'nom' => 'Droitsdiffusion',
          'champ' => 'droitsdiffusion',
          'sql' => 'varchar(100) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        21 => 
        array (
          'nom' => 'Codesite',
          'champ' => 'codesite',
          'sql' => 'varchar(9) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        22 => 
        array (
          'nom' => 'Refbiblio',
          'champ' => 'refbiblio',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        23 => 
        array (
          'nom' => 'Catalogue',
          'champ' => 'catalogue',
          'sql' => 'varchar(255) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        24 => 
        array (
          'nom' => 'Adressagelocal',
          'champ' => 'adressagelocal',
          'sql' => 'text',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        25 => 
        array (
          'nom' => 'Fichesite',
          'champ' => 'fichesite',
          'sql' => 'enum(\'True\',\'False\') NOT NULL DEFAULT \'True\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        26 => 
        array (
          'nom' => 'Imgcomp',
          'champ' => 'imgcomp',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        27 => 
        array (
          'nom' => 'Numordre',
          'champ' => 'numordre',
          'sql' => 'int(11) NOT NULL DEFAULT \'999\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        28 => 
        array (
          'nom' => 'Versementatlas',
          'champ' => 'versementatlas',
          'sql' => 'enum(\'True\',\'False\') NOT NULL DEFAULT \'False\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        29 => 
        array (
          'nom' => 'Duree',
          'champ' => 'duree',
          'sql' => 'varchar(50) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        30 => 
        array (
          'nom' => 'Son',
          'champ' => 'son',
          'sql' => 'enum(\'True\',\'False\') DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        31 => 
        array (
          'nom' => 'Lieninternet',
          'champ' => 'lieninternet',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        32 => 
        array (
          'nom' => 'Timecreate',
          'champ' => 'timecreate',
          'sql' => 'date NOT NULL DEFAULT \'0000-00-00\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        33 => 
        array (
          'nom' => 'Codecreateur',
          'champ' => 'codecreateur',
          'sql' => 'varchar(50) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        34 => 
        array (
          'nom' => 'Codederniermodif',
          'champ' => 'codederniermodif',
          'sql' => 'varchar(50) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        35 => 
        array (
          'nom' => 'Timemodif',
          'champ' => 'timemodif',
          'sql' => 'date NOT NULL DEFAULT \'0000-00-00\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'titre',
      'langues' => 
      array (
        0 => 'lang',
        1 => 'id_trad',
      ),
      'champ_date' => 'date_publication',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Images',
        'titre_objet' => 'Image',
        'info_aucun_objet' => 'Aucune image',
        'info_1_objet' => 'Une image',
        'info_nb_objets' => '@nb@ images',
        'icone_creer_objet' => 'Créer une image',
        'icone_modifier_objet' => 'Modifier cette image',
        'titre_logo_objet' => 'Logo de cette image',
        'titre_langue_objet' => 'Langue de cette image',
        'texte_definir_comme_traduction_objet' => 'Cette image est une traduction de la image numéro :',
        'titre_objets_rubrique' => 'Images de la rubrique',
        'info_objets_auteur' => 'Les images de cet auteur',
        'retirer_lien_objet' => 'Retirer cette image',
        'retirer_tous_liens_objets' => 'Retirer toutes les images',
        'ajouter_lien_objet' => 'Ajouter cette image',
        'texte_ajouter_objet' => 'Ajouter une image',
        'texte_creer_associer_objet' => 'Créer et associer une image',
        'texte_changer_statut_objet' => 'Cette image est :',
        'supprimer_objet' => 'Supprimer cette image',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cette image ?',
      ),
      'table_liens' => 'on',
      'vue_liens' => 
      array (
        0 => 'spip_documents',
      ),
      'roles' => '',
      'auteurs_liens' => 'on',
      'vue_auteurs_liens' => 'on',
      'fichiers' => 
      array (
        'echafaudages' => 
        array (
          0 => 'prive/squelettes/contenu/objets.html',
          1 => 'prive/objets/infos/objet.html',
          2 => 'prive/squelettes/contenu/objet.html',
        ),
        'explicites' => 
        array (
          0 => 'action/supprimer_objet.php',
        ),
      ),
      'saisies' => 
      array (
        0 => 'objets',
      ),
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
        1 => 'outils_rapides',
      ),
    ),
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => '',
          'contenu' => '',
        ),
      ),
    ),
    'objets' => 
    array (
      0 => 
      array (
      ),
      1 => 
      array (
      ),
      2 => 
      array (
      ),
      7 => 
      array (
      ),
      8 => 
      array (
      ),
      9 => 
      array (
      ),
      10 => 
      array (
      ),
    ),
  ),
);
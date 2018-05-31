<?php
/**
 * Utilisations de pipelines par Patrimoine
 *
 * @plugin     Patrimoine
 * @copyright  2016
 * @author     damien
 * @licence    GNU/GPL
 * @package    SPIP\Patrimoine\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Ajouter les objets sur les vues de rubriques
 *
 * @pipeline affiche_enfants
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
**/
function patrimoine_affiche_enfants($flux) {
	if ($e = trouver_objet_exec($flux['args']['exec'])
		AND $e['type'] == 'rubrique'
		AND $e['edition'] == false) {

		$id_rubrique = $flux['args']['id_rubrique'];
		$lister_objets = charger_fonction('lister_objets', 'inc');

		$bouton = '';
		if (autoriser('creerpatrimoinedans', 'rubrique', $id_rubrique)) {
			$bouton .= icone_verticale(_T("patrimoine:icone_creer_patrimoine"), generer_url_ecrire("patrimoine_edit", "id_rubrique=$id_rubrique"), "patrimoine-24.png", "new", "right")
					. "<br class='nettoyeur' />";
		}

		$flux['data'] .= $lister_objets('patrimoines', array('titre'=>_T('patrimoine:titre_patrimoines_rubrique') , 'id_rubrique'=>$id_rubrique));
		$flux['data'] .= $bouton;

	}
	return $flux;
}


/**
 * Ajout de contenu sur certaines pages,
 * notamment des formulaires de liaisons entre objets
 *
 * @pipeline affiche_milieu
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
 */
function patrimoine_affiche_milieu($flux) {
	$texte = "";
	$e = trouver_objet_exec($flux['args']['exec']);

	// auteurs sur les patrimoines, bibliographies, colleges, protections, communes, images
	if (!$e['edition'] AND in_array($e['type'], array('patrimoine', 'bibliographie', 'college', 'protection', 'commune', 'image'))) {
		$texte .= recuperer_fond('prive/objets/editer/liens', array(
			'table_source' => 'auteurs',
			'objet' => $e['type'],
			'id_objet' => $flux['args'][$e['id_table_objet']]
		));
	}


	// bibliographies sur les communes, patrimoines, documents
	if (!$e['edition'] AND in_array($e['type'], array('commune', 'patrimoine', 'document'))) {
		$texte .= recuperer_fond('prive/objets/editer/liens', array(
			'table_source' => 'bibliographies',
			'objet' => $e['type'],
			'id_objet' => $flux['args'][$e['id_table_objet']]
		));
	}
	// colleges sur les patrimoines
	if (!$e['edition'] AND in_array($e['type'], array('patrimoine'))) {
		$texte .= recuperer_fond('prive/objets/editer/liens', array(
			'table_source' => 'colleges',
			'objet' => $e['type'],
			'id_objet' => $flux['args'][$e['id_table_objet']]
		));
	}
	// protections sur les patrimoines
	if (!$e['edition'] AND in_array($e['type'], array('patrimoine'))) {
		$texte .= recuperer_fond('prive/objets/editer/liens', array(
			'table_source' => 'protections',
			'objet' => $e['type'],
			'id_objet' => $flux['args'][$e['id_table_objet']]
		));
	}
	// communes sur les patrimoines, protections
	if (!$e['edition'] AND in_array($e['type'], array('patrimoine','protection'))) {
		$texte .= recuperer_fond('prive/objets/editer/liens', array(
			'table_source' => 'communes',
			'objet' => $e['type'],
			'id_objet' => $flux['args'][$e['id_table_objet']]
		));
	}
	// images sur les documents
	if (!$e['edition'] AND in_array($e['type'], array('document'))) {
		$texte .= recuperer_fond('prive/objets/editer/liens', array(
			'table_source' => 'images',
			'objet' => $e['type'],
			'id_objet' => $flux['args'][$e['id_table_objet']]
		));
	}


	if ($texte) {
		if ($p=strpos($flux['data'],"<!--affiche_milieu-->"))
			$flux['data'] = substr_replace($flux['data'],$texte,$p,0);
		else
			$flux['data'] .= $texte;
	}

	return $flux;
}


/**
 * Ajout de liste sur la vue d'un auteur
 *
 * @pipeline affiche_auteurs_interventions
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
 */
function patrimoine_affiche_auteurs_interventions($flux) {
	if ($id_auteur = intval($flux['args']['id_auteur'])) {

		$flux['data'] .= recuperer_fond('prive/objets/liste/patrimoines', array(
			'id_auteur' => $id_auteur,
			'titre' => _T('patrimoine:info_patrimoines_auteur')
		), array('ajax' => true));

		$flux['data'] .= recuperer_fond('prive/objets/liste/bibliographies', array(
			'id_auteur' => $id_auteur,
			'titre' => _T('bibliographie:info_bibliographies_auteur')
		), array('ajax' => true));

		$flux['data'] .= recuperer_fond('prive/objets/liste/colleges', array(
			'id_auteur' => $id_auteur,
			'titre' => _T('college:info_colleges_auteur')
		), array('ajax' => true));

		$flux['data'] .= recuperer_fond('prive/objets/liste/protections', array(
			'id_auteur' => $id_auteur,
			'titre' => _T('protection:info_protections_auteur')
		), array('ajax' => true));

		$flux['data'] .= recuperer_fond('prive/objets/liste/communes', array(
			'id_auteur' => $id_auteur,
			'titre' => _T('commune:info_communes_auteur')
		), array('ajax' => true));

		$flux['data'] .= recuperer_fond('prive/objets/liste/images', array(
			'id_auteur' => $id_auteur,
			'titre' => _T('image:info_images_auteur')
		), array('ajax' => true));

	}
	return $flux;
}


/**
 * Compter les enfants d'une rubrique
 *
 * @pipeline objets_compte_enfants
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
**/
function patrimoine_objet_compte_enfants($flux) {
	if ($flux['args']['objet']=='rubrique' AND $id_rubrique=intval($flux['args']['id_objet'])) {
		// juste les publiés ?
		if (array_key_exists('statut', $flux['args']) and ($flux['args']['statut'] == 'publie')) {
			$flux['data']['patrimoines'] = sql_countsel('spip_patrimoines', "id_rubrique = ".intval($id_rubrique)." AND (statut = 'publie')");
		} else {
			$flux['data']['patrimoines'] = sql_countsel('spip_patrimoines', "id_rubrique = ".intval($id_rubrique)." AND (statut <> 'poubelle')");
		} 		// juste les publiés ?
		if (array_key_exists('statut', $flux['args']) and ($flux['args']['statut'] == 'publie')) {
			$flux['data']['bibliographies'] = sql_countsel('spip_bibliographies', "id_rubrique = ".intval($id_rubrique)." AND (statut = 'publie')");
		} else {
			$flux['data']['bibliographies'] = sql_countsel('spip_bibliographies', "id_rubrique = ".intval($id_rubrique)." AND (statut <> 'poubelle')");
		} 		// juste les publiés ?
		if (array_key_exists('statut', $flux['args']) and ($flux['args']['statut'] == 'publie')) {
			$flux['data']['colleges'] = sql_countsel('spip_colleges', "id_rubrique = ".intval($id_rubrique)." AND (statut = 'publie')");
		} else {
			$flux['data']['colleges'] = sql_countsel('spip_colleges', "id_rubrique = ".intval($id_rubrique)." AND (statut <> 'poubelle')");
		} 		// juste les publiés ?
		if (array_key_exists('statut', $flux['args']) and ($flux['args']['statut'] == 'publie')) {
			$flux['data']['protections'] = sql_countsel('spip_protections', "id_rubrique = ".intval($id_rubrique)." AND (statut = 'publie')");
		} else {
			$flux['data']['protections'] = sql_countsel('spip_protections', "id_rubrique = ".intval($id_rubrique)." AND (statut <> 'poubelle')");
		} 		// juste les publiés ?
		if (array_key_exists('statut', $flux['args']) and ($flux['args']['statut'] == 'publie')) {
			$flux['data']['communes'] = sql_countsel('spip_communes', "id_rubrique = ".intval($id_rubrique)." AND (statut = 'publie')");
		} else {
			$flux['data']['communes'] = sql_countsel('spip_communes', "id_rubrique = ".intval($id_rubrique)." AND (statut <> 'poubelle')");
		}
	}
	return $flux;
}


/**
 * Optimiser la base de données
 *
 * Supprime les liens orphelins de l'objet vers quelqu'un et de quelqu'un vers l'objet.
 * Supprime les liens orphelins de l'objet vers quelqu'un et de quelqu'un vers l'objet.
 * Supprime les liens orphelins de l'objet vers quelqu'un et de quelqu'un vers l'objet.
 * Supprime les liens orphelins de l'objet vers quelqu'un et de quelqu'un vers l'objet.
 * Supprime les liens orphelins de l'objet vers quelqu'un et de quelqu'un vers l'objet.
 * Supprime les liens orphelins de l'objet vers quelqu'un et de quelqu'un vers l'objet.
 * Supprime les objets à la poubelle.
 * Supprime les objets à la poubelle.
 * Supprime les objets à la poubelle.
 * Supprime les objets à la poubelle.
 * Supprime les objets à la poubelle.
 * Supprime les objets à la poubelle.
 *
 * @pipeline optimiser_base_disparus
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
 */
function patrimoine_optimiser_base_disparus($flux){

	include_spip('action/editer_liens');
	$flux['data'] += objet_optimiser_liens(array('patrimoine'=>'*', 'bibliographie'=>'*', 'college'=>'*', 'protection'=>'*', 'commune'=>'*', 'image'=>'*'),'*');

	sql_delete("spip_patrimoines", "statut='poubelle' AND maj < " . $flux['args']['date']);

	sql_delete("spip_bibliographies", "statut='poubelle' AND maj < " . $flux['args']['date']);

	sql_delete("spip_colleges", "statut='poubelle' AND maj < " . $flux['args']['date']);

	sql_delete("spip_protections", "statut='poubelle' AND maj < " . $flux['args']['date']);

	sql_delete("spip_communes", "statut='poubelle' AND maj < " . $flux['args']['date']);

	sql_delete("spip_images", "statut='poubelle' AND maj < " . $flux['args']['date']);

	return $flux;
}

/**
 * Synchroniser la valeur de id secteur
 *
 * @pipeline trig_propager_les_secteurs
 * @param  string $flux Données du pipeline
 * @return string       Données du pipeline
**/
function patrimoine_trig_propager_les_secteurs($flux) {

	// synchroniser spip_patrimoines
	$r = sql_select("A.id_patrimoine AS id, R.id_secteur AS secteur", "spip_patrimoines AS A, spip_rubriques AS R",
		"A.id_rubrique = R.id_rubrique AND A.id_secteur <> R.id_secteur");
	while ($row = sql_fetch($r)) {
		sql_update("spip_patrimoines", array("id_secteur" => $row['secteur']), "id_patrimoine=" . $row['id']);
	}

	// synchroniser spip_bibliographies
	$r = sql_select("A.id_bibliographie AS id, R.id_secteur AS secteur", "spip_bibliographies AS A, spip_rubriques AS R",
		"A.id_rubrique = R.id_rubrique AND A.id_secteur <> R.id_secteur");
	while ($row = sql_fetch($r)) {
		sql_update("spip_bibliographies", array("id_secteur" => $row['secteur']), "id_bibliographie=" . $row['id']);
	}

	// synchroniser spip_colleges
	$r = sql_select("A.id_college AS id, R.id_secteur AS secteur", "spip_colleges AS A, spip_rubriques AS R",
		"A.id_rubrique = R.id_rubrique AND A.id_secteur <> R.id_secteur");
	while ($row = sql_fetch($r)) {
		sql_update("spip_colleges", array("id_secteur" => $row['secteur']), "id_college=" . $row['id']);
	}

	// synchroniser spip_protections
	$r = sql_select("A.id_protection AS id, R.id_secteur AS secteur", "spip_protections AS A, spip_rubriques AS R",
		"A.id_rubrique = R.id_rubrique AND A.id_secteur <> R.id_secteur");
	while ($row = sql_fetch($r)) {
		sql_update("spip_protections", array("id_secteur" => $row['secteur']), "id_protection=" . $row['id']);
	}

	// synchroniser spip_communes
	$r = sql_select("A.id_commune AS id, R.id_secteur AS secteur", "spip_communes AS A, spip_rubriques AS R",
		"A.id_rubrique = R.id_rubrique AND A.id_secteur <> R.id_secteur");
	while ($row = sql_fetch($r)) {
		sql_update("spip_communes", array("id_secteur" => $row['secteur']), "id_commune=" . $row['id']);
	}

	return $flux;
}

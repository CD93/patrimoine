<?php
/**
 * Fichier gérant l'installation et désinstallation du plugin Patrimoine
 *
 * @plugin     Patrimoine
 * @copyright  2016
 * @author     damien
 * @licence    GNU/GPL
 * @package    SPIP\Patrimoine\Installation
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Fonction d'installation et de mise à jour du plugin Patrimoine.
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @param string $version_cible
 *     Version du schéma de données dans ce plugin (déclaré dans paquet.xml)
 * @return void
**/
function patrimoine_upgrade($nom_meta_base_version, $version_cible) {
	$maj = array();

	$maj['create'] = array(array('maj_tables', array('spip_patrimoines', 'spip_patrimoines_liens', 'spip_bibliographies', 'spip_bibliographies_liens', 'spip_colleges', 'spip_colleges_liens', 'spip_protections', 'spip_protections_liens', 'spip_communes', 'spip_communes_liens', 'spip_images', 'spip_images_liens')));

	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
}


/**
 * Fonction de désinstallation du plugin Patrimoine.
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @return void
**/
function patrimoine_vider_tables($nom_meta_base_version) {

	sql_drop_table("spip_patrimoines");
	sql_drop_table("spip_patrimoines_liens");
	sql_drop_table("spip_bibliographies");
	sql_drop_table("spip_bibliographies_liens");
	sql_drop_table("spip_colleges");
	sql_drop_table("spip_colleges_liens");
	sql_drop_table("spip_protections");
	sql_drop_table("spip_protections_liens");
	sql_drop_table("spip_communes");
	sql_drop_table("spip_communes_liens");
	sql_drop_table("spip_images");
	sql_drop_table("spip_images_liens");

	# Nettoyer les versionnages et forums
	sql_delete("spip_versions",              sql_in("objet", array('patrimoine', 'bibliographie', 'college', 'protection', 'commune', 'image')));
	sql_delete("spip_versions_fragments",    sql_in("objet", array('patrimoine', 'bibliographie', 'college', 'protection', 'commune', 'image')));
	sql_delete("spip_forum",                 sql_in("objet", array('patrimoine', 'bibliographie', 'college', 'protection', 'commune', 'image')));

	effacer_meta($nom_meta_base_version);
}
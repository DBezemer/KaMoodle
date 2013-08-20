<?php
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Kaltura video assignment grade preferences form
 *
 * @package    Repository
 * @subpackage Kaltura
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Required strings
$string['pluginname'] = 'Kaltura';
$string['configplugin'] = 'Kaltura Configuratie';
$string['pluginname_help'] = 'Een Kaltura Repository';

// Settings page strings
$string['itemsperpage'] = 'Weergegeven bestanden op een pagina';
$string['itemsperpage_help'] = '<p>Dit is het aantal video entries dat wordt weergegeven op de pagina. Aanvullende video entries worden op de volgende paginas weergegeven.</p>';
$string['five'] = '5';
$string['ten'] = '10';
$string['fifteen'] = '15';
$string['twenty'] = '20';
$string['twentyfive'] = '25';
$string['thirty'] = '30';
$string['fifty'] = '50';
$string['onehundred'] = '100';
$string['twohundred'] = '200';
$string['threehundred'] = '300';
$string['fourhundred'] = '400';
$string['fivehundred'] = '500';
$string['connection_status'] = 'Connectie Status';
$string['connected'] = 'Connectie met Kaltura is succesvol';
$string['not_connected'] = 'Connectie met Kaltura is mislukt';
$string['using_metadata_profile'] = 'Metadata Profiel';
$string['metadata_profile_found'] = 'Gebruiker Metadata %a';
$string['metadata_profile_not_found'] = 'Geen Metadata profiel gevonden';
$string['metadata_profile_error'] = 'Er is een fout opgetreden bij het creeren van metadata profiel';
$string['metadata_profile_info'] = '{$a->profilename} (Profile Id: {$a->profileid} | Created: {$a->created})';
$string['rootcategory'] = 'Root categorie pad';
$string['rootcategory_help'] = '<p>Stel de root categorie pad in om een categorie/sub-categorie structuur te creeren, in de KMC, om alle Moodle cursus categorieen te organiseren.  '.
                               'Bijvoorbeeld: <b>Sites>My Moodle Site</b>, creeert een KMC categorie genaamd "Sites" en een subcategorie genaamd "My Moodle Site".  '.
                               'Al jouw Moodle cursus categorieen worden ingesteld als submappen van "My Moodle Site".</p>';
$string['rootcategory_warning'] = 'De root categorie is al ingesteld. Als je de naam verandert zullen alle gerelateerde Moodle cursus categorieen in de KMC verdwijnen.';
$string['rootcategory_created'] = 'De root categorie is gecreeerd met de volgende structuur <b>{$a}</b>';
$string['rootcategory_create'] = 'Specificeer een root categorie.';
$string['unable_to_create'] = 'Niet mogelijk om root categorie te creeeren <b>{$a}</b>. Kies een andere naam of namen voor de root categorie';
$string['resetroot'] = 'Reset categorie locatie';
$string['confirm_category_reset'] = '<p>Ben je een gebruiker en wil je de root categorie locatie resetten?</p><p>Na het uitvoeren van deze actie zullen alle gedeelde videos in de cursus en gebruikersinformatie in Moodle verloren raken.</p>'.
                                    '<p>Indien je per ongeluk op "continue" klikt, dan is het mogelijk jouw informatie terug te krijgen, maar alleen als je het categorie pad terug zet in de <b>originele</b> waarde.</p>'.
                                    '<p>Kies verstandig.</p>';
$string['category_reset_complete'] = '<b>Root categorie is gereset</b>';
$string['no_permission_metadata'] = 'Om de Kaltura repository plug-in in jouw account te gebruiken moet je aangepaste metadata inschakelen. Raadpleeg alsjeblief jouw Kaltura rep.';
$string['no_permission_metadata_error'] = 'Fout';

// File Picker Strings
$string['keyword'] = 'Zoeken';
$string['filter'] = 'Filter';


// Capability strings
$string['kaltura:view'] = 'Bekijk Kaltura repository';
$string['kaltura:systemvisibility'] = 'Cursus Video Zichtbaarheid';
$string['kaltura:sharedvideovisibility'] = 'Gedeelde Video Zichtbaarheid';

// Search UI
$string['search_name_tooltip'] = 'Typ de naam van de media of tag in en druk op enter';
$string['search_tags'] = 'Media tags';
$string['search_site'] = 'Videos gedeeld met site';
$string['search_site'] = 'Videos gedeeld met cursus(sen)';
$string['course_filter'] = 'Cursussen wiens naam';
$string['contains'] = 'Bevatten';
$string['equals'] = 'Identieke';
$string['startswith'] = 'Begint met';
$string['endswith'] = 'Eindigt met';
$string['search_own_upload'] = 'Media in eigen beheer';
$string['search_shared_or_used'] = 'Zoek naar';
$string['search_shared'] = 'Media gedeeld met cursussen';
$string['search_used'] = 'Media gebruikt in cursussen';
$string['search_site_shared'] = 'Media gedeeld met site';
$string['course_filter_select_title'] = 'Cursus naam filter type';

// Browse UI
$string['folder_shared_videos'] = 'Media gedeeld met cursussen';
$string['folder_shared_videos_shortname'] = 'Gedeelde Media';
$string['folder_used_videos'] = 'Media gebruikt in cursussen';
$string['folder_used_videos_shortname'] = 'Gebruikte Media';
$string['folder_site_shared_videos'] = 'Media gedeeld met site';
$string['folder_site_shared_videos_shortname'] = 'Site gedeelde Media';

$string['crumb_home'] = 'Beginscherm';
$string['crumb_shared'] = 'Gedeeld met cursussen';
$string['crumb_used'] = 'Gebruikt in cursussen';
$string['crumb_site_shared'] = 'Gedeeld met site';
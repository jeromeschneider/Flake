<?php
#################################################################
#  Copyright notice
#
#  (c) 2012 Jérôme Schneider <mail@jeromeschneider.fr>
#  All rights reserved
#
#  http://flake.codr.fr
#
#  This script is part of the Flake project. The Flake
#  project is free software; you can redistribute it
#  and/or modify it under the terms of the GNU General Public
#  License as published by the Free Software Foundation; either
#  version 2 of the License, or (at your option) any later version.
#
#  The GNU General Public License can be found at
#  http://www.gnu.org/copyleft/gpl.html.
#
#  This script is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU General Public License for more details.
#
#  This copyright notice MUST APPEAR in all copies of the script!
#################################################################

if(defined("PROJECT_LOCALE")) {
	define("FLAKE_LOCALE", PROJECT_LOCALE);
} else {
	define("FLAKE_LOCALE", "fr_FR.UTF-8");
}

if(defined("PROJECT_TIMEZONE")) {
	define("FLAKE_TIMEZONE", PROJECT_TIMEZONE);
} else {
	define("FLAKE_TIMEZONE", "Europe/Paris");
}

/**
 * The constant PROJECT_DOCUMENTROOT_FOLDER allows the project to 
 * define a folder, relative to the PROJECT_PATH_ROOT, which will 
 * be used instead of the default "html" folder when constructing 
 * PROJECT_PATH_DOCUMENTROOT.
 */
if(defined("PROJECT_DOCUMENTROOT_FOLDER")) {
	define("FLAKE_DOCUMENTROOT_FOLDER", PROJECT_DOCUMENTROOT_FOLDER);
} else {
	define("FLAKE_DOCUMENTROOT_FOLDER", 'html');
}
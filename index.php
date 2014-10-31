<?php

/*
 * EmmaPHP Model View Controller Framework.
 * @author Bob Desaunois
 * 
 * @version v1.X.X-BETA DEVELOPMENT BUILD
 */

define ("VERSION", "v1.X.X-BETA DEVELOPMENT BUILD");

require_once ("config/config.php");
require_once ("config/application_config.php");
require_once ("config/database.php");

require_once ("system/systemcomponent.php");
require_once ("system/core.php");


$emma = Core::getInstance ();
$emma->run ();

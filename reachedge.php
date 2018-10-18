<?php
######################################################################
# LOCALiQ Tracking Code                                              #
# Copyright (C) 2015 by ReachLocal, Inc.                             #
# Homepage   : www.reachlocal.com                                    #
# Author     : ReachLocal, Inc.                                      #
# Email      : support@reachlocal.com                                #
# Version    : 1.1.0.0                                               #
# License    : https://opensource.org/licenses/MIT                   #
######################################################################

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin');
jimport( 'joomla.html.parameter');

class plgSystemReachEdge extends JPlugin
{
	function plgSystemReachEdge(&$subject, $config)
	{
		parent::__construct($subject, $config);
		$this->_plugin = JPluginHelper::getPlugin( 'system', 'reachedge' );
		$this->_params = new JRegistry( $this->_plugin->params );
	}

/**
 * Convert site_id from 'fc62c28f-3f38-4812-85c3-b3fe1329dba8' to '555/6e6/569/cfc4c23ac7e7ab663b58748.js';
 * Return '//cdn.rlets.com/capture_configs/fc6/2c2/8f3/f38481285c3b3fe1329dba8.js'
 */
	function reachedge_code_snippet_src($reachlocal_tracking_id) {
		$site_id = array();
		array_push($site_id, (substr($reachlocal_tracking_id, 0, 8)));
		array_push($site_id, (substr($reachlocal_tracking_id, 9, 4)));
		array_push($site_id, (substr($reachlocal_tracking_id, 14, 4)));
		array_push($site_id, (substr($reachlocal_tracking_id, 19, 4)));
		array_push($site_id, (substr($reachlocal_tracking_id, 24, 12)));
		$flattened_site_id = implode("",$site_id);
		$snippet_src = array();
		array_push($snippet_src, '//cdn.rlets.com/capture_configs/');
		array_push($snippet_src, (substr($flattened_site_id, 0, 3)));
		array_push($snippet_src, '/');
		array_push($snippet_src, (substr($flattened_site_id, 3, 3)));
		array_push($snippet_src, '/');
		array_push($snippet_src, (substr($flattened_site_id, 6, 3)));
		array_push($snippet_src, '/');
		array_push($snippet_src, (substr($flattened_site_id, 9, 23)));
		array_push($snippet_src, '.js');
		return implode('', $snippet_src);
	}


	function onAfterRender()
	{
		$mainframe = JFactory::getApplication();
		$reachedge_site_id = $this->params->get('reachedge_site_id', '');
		$snippet = $this->reachedge_code_snippet_src($reachedge_site_id);

		if($reachedge_site_id == '' || $mainframe->isAdmin() || strpos($_SERVER["PHP_SELF"], "index.php") === false)
		{
			return;
		}

		$buffer = JResponse::getBody();
		$reachedge_javascript = "
				<script type='text/javascript' src='".$snippet."' async='async'></script>	
		";
		
		$buffer = str_replace ("</head>", $reachedge_javascript."</head>", $buffer);
		JResponse::setBody($buffer);
		return true;
	}

}
?>

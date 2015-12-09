<?php
######################################################################
# ReachLocal Capture          	          	          	             #
# Copyright (C) 2015 by ReachLocal, Inc.   	   	   	                 #
# Homepage   : www.reachlocal.com		   	   	   	   	   	   		 #
# Author     : ReachLocal, Inc.	    		   	   	   	   	   	   	 #
# Email      : support@reachlocal.com 	   	   	   	   	   	   	     #
# Version    : 1.0.3.0                        	   	    	   	   	 #
# License    : http://www.gnu.org/copyleft/gpl.html GNU/GPL          #
######################################################################

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin');
jimport( 'joomla.html.parameter');

class plgSystemReachLocalTracking extends JPlugin
{
	function plgSystemReachLocalTracking(&$subject, $config)
	{
		parent::__construct($subject, $config);
		$this->_plugin = JPluginHelper::getPlugin( 'system', 'reachlocaltracking' );
		$this->_params = new JRegistry( $this->_plugin->params );
	}
	
	function onAfterRender()
	{
		$mainframe = JFactory::getApplication();
		$reachlocal_tracking_id = $this->params->get('reachlocal_tracking_id', '');
		if($reachlocal_tracking_id == '' || $mainframe->isAdmin() || strpos($_SERVER["PHP_SELF"], "index.php") === false)
		{
			return;
		}

		$buffer = JResponse::getBody();
		$reachlocaltracking_javascript = "
		<script type='text/javascript'>
				var rl_siteid = '".$reachlocal_tracking_id."'</script>
		<script type='text/javascript' src='//cdn.rlets.com/capture_static/mms/mms.js' async='async'></script>		
		";
		
		$buffer = str_replace ("</head>", $reachlocaltracking_javascript."</head>", $buffer);
		JResponse::setBody($buffer);
		return true;
	}
}
?>
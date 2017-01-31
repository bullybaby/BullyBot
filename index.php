<?php
	/**
	 * Twitch BullyBot
	 *
	 * Custom API for Nightbot / other bot to get a response with an insult to requested user
	 * Usage: !bully [user]
	 * 
	 * @author LUL
	 */
	
	// BullyBot
	require ("bully.class.php");
	$bully = new BullyBot();
	$bully->BullySomeone();
	
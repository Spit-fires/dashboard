<?php
$discord_url = "https://discord.com/api/oauth2/authorize?client_id=847181607592525875&redirect_uri=https%3A%2F%2Fdashboard-sitius.vercel.app%2Fprocess-oauth.php&response_type=code&scope=identify%20guilds.join";
$header("Location: $discord_url");
$exit();
?>
<?php  
$fb = new Facebook\Facebook([
  'app_id' => '1719170275000904', // Replace {app-id} with your app id
  'app_secret' => 'f05039410b59deff1e124d1c179dc4ac',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

?>
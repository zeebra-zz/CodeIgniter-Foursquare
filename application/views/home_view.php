<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CodeIgniter Foursquare Library</title>

	
</head>
<body>
	<? if (isset($users)): ?>
		<? foreach ($users->response->results as $user): ?>
			<?
				if(property_exists($user,"firstName")) echo $user->firstName . " ";
				if(property_exists($user,"lastName")) echo $user->lastName;

				// Grab user twitter details
				$request = $this->foursquare->get_private("users/{$user->id}");
				$details = json_decode($request);
				$u = $details->response->user;
				if(property_exists($u->contact,"twitter")){
				echo " -- follow this user <a href=\"http://www.twitter.com/{$u->contact->twitter}\">@{$u->contact->twitter}</a>";
				echo "<br />";
				}
			?>
		<? endforeach; ?>
	<? endif; ?>

</body>
</html>
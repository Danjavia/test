<?php
	include ( 'api.php' );
	$response = ( object ) json_decode( Messages::get() );
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>API Messages</title>
</head>
<body>

	<main class="main-section">

		<section id="messages">

			<?php foreach ( $response->messages as $message ) : ?>

				<article>
					<div class="message-content"><?php echo $message->message; ?></div>
					<div class="message-author"><strong><?php echo $message->author; ?></div></strong>
					<div class="message-actions">
						<a href="" class="remove">Remove message</a>
					</div>
				</article>

			<?php endforeach; ?>


		</section>

		<a href="" class="add-message">Add a new message</a>

	</main>

</body>
</html>
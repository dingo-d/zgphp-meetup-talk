<?php
// For PHP < 8.0

$tokens = token_get_all('<?php echo "Hi!"; ?>');

foreach ($tokens as $token) {
	$line = 1;
	if (is_array($token)) {
		$line = $token[2];
		echo "Line {$line}: ", token_name($token[0]), " ('{$token[1]}')", PHP_EOL;
	} else {
		echo "Line {$line}: {$token}", PHP_EOL;
	}
}

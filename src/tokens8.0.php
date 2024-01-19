<?php
// For PHP >= 8.0

$tokens = PhpToken::tokenize('<?php echo "Hi!"; ?>');

foreach ($tokens as $token) {
	echo "Line {$token->line}: ", $token->getTokenName(), " ('{$token->text}')", PHP_EOL;
}

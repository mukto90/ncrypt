<?php
// include 'src/class.ncrypt.php'; // un-comment this if needed

$ncrypt = new mukto90\Ncrypt;

$ncrypt->set_secret_key( '^&-my-key-&^' );	// optional, but STRONGLY recommended
$ncrypt->set_secret_iv( '#@)-my-iv-#*$' );	// optional, but STRONGLY recommended
$ncrypt->set_cipher( 'AES-256-CBC' );		// optional

// encrypt a plain text/string
$encrypted = $ncrypt->encrypt( 'Hello World!' ); // output: SFpQVWk0WjFxdW5lSGFXaUdWUEx3Zz09

// decrypt an encrypted string to it's original plain text/string
$decrypted = $ncrypt->decrypt( 'SFpQVWk0WjFxdW5lSGFXaUdWUEx3Zz09' ); // output: Hello World!
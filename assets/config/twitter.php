<?php

$conf_dir = getenv('OPENSHIFT_DATA_DIR');

if ($conf_dir && file_exists($conf_dir . 'twitter.php')) {
  return require $conf_dir . 'twitter.php';
}

return array(
    'consumer_key'              => "",
    'consumer_secret'           => ""
);

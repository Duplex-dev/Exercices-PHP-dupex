<?php
$table = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
array_splice($table, 4, 0, ['leeloo']);
print_r($table);

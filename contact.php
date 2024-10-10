<?php

$veriler = [
    'mesaj' => $_POST['mesaj'],
    'mail' => $_POST['mail'],
];

mail('contact@comu.edu.tr', 'İletişim', $veriler['mesah']);
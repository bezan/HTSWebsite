<?php
session_start();
session_destroy();
header('Location: http://localhost/HTS/MinWebsida/index.html');
?>
<?php

setcookie("id", "", time() - 3600*24*30*12, "/");
setcookie("username", "", time() - 3600*24*30*12, "/");

header("Location: /"); exit;

?>
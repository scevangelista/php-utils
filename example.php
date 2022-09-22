<?php
require('bootstrap.php');

use Utilities\CommHttp;
use Utilities\Strings;

print_r(CommHttp::get("https://localhost:8000", ['page' => Strings::clear('teste')]));
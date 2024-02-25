<?php

session_start();

include "autoload.php";
include "functions.php";
include "app/core/Route.php";
include "app/models/Model.php";
include "app/core/View.php";
include "app/controllers/Controller_Base.php";

Route::start();
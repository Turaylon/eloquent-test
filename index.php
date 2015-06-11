<?php
    require_once "vendor/autoload.php";
    require_once "config/database.php";

    var_dump(DB::table("users")->where("id",1)->get());

    var_dump(Users::all()->toArray());
<?php

namespace app\Controllers;
use App\Controllers\BaseController;

class Migrate extends BaseController
{
  public function index()
  {
    $migrate = \Config\Services::migrations();

    try {
      $migrate->lastest();

      echo "migrated";

    } catch (\Exception $e) {

      echo $e->getMessage();

    }
  }
}
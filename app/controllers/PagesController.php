<?php


class PagesController extends BaseController {

  public function home()
  {
    $name = 'tombola';
    return View::make('hello')->with('name', $name);
  }

}
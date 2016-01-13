<?php

class FormController extends BaseController {
    public function showForm()
    {
        //var_dump(Hash::make('rajni'));
        return View::make('forms/'.'fillform')->with('title', 'Fill the following form')->with('message', 'Fill the following form');
    } 
}

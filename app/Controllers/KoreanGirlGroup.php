<?php namespace App\Controllers;
class KoreanGirlGroup  extends BaseController
{
    public function index()
    {
        // connect to the model
    $member = new \App\Models\member();
        // retrieve all the records
    $records = $member->findAll();
    
        // get a template parser
    $parser = \Config\Services::parser();
        // tell it about the substitions
    return $parser->setData(['records' => $records])
        // and have it render the template with those
    ->render('memberslist');
    }
    public function showme($id)
    {
        // connect to the model
      $member = new \App\Models\member();
        // retrieve all the records
      $record = $member->find($id);
      // get a template parser
      $parser = \Config\Services::parser();
      // tell it about the substitions
      return $parser->setData($record)
      // and have it render the template with those
      ->render('onemembers');
    }
}
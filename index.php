<?php 

require 'Form.php';



$form = new Form();


 $form->begin('/kun','POST');

// Form::begin('','POST');

// echo $form->submitInput('form','submit');
echo $form->submitButton('fdjkfg','gkfdngf');
echo $form->radio('name','irfgn');

$form->end();
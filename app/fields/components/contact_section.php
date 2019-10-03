<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$contact = new FieldsBuilder('contact_section');

$contact
->addImage('background-image')
->addText('title',['title'=>'Tekst'])
->addText('slogan',['title'=>'Tekst'])
->addText('description',['title'=>'Tekst'])
    ;
return $contact;
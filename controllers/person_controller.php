<?php

require '../models/db.php';
require '../models/person.php';
require '../helpers/functions.php';

extract($_POST);
if (!isset($person)) {
    $person = new Person();
}

switch ($type_of_operation) {
    case 'create':
        if (not_empty(['firstname', 'lastname', 'phone', 'sexe'])) {
            $result = $person->create($firstname, $lastname, $phone, $sexe);
            $result ? 
            json(['status' => 200, 'message' => "$firstname $lastname à été ajouter avec success"]) : 
            json(['status' => 500, 'message' => 'Internal server error']);
        } else {
            json(['status' => 402, 'message' => 'Veuillez rempli tout les champs']);
        }
        break;

    case 'read':
        $persons = $person->read();
        $persons ? 
        json(['status' => 200, 'message' => 'OK', 'persons' => $persons]) : 
        json(['status' => 500, 'message' => 'Internal server error']);
        break;

    case 'update':
        if (not_empty(['id', 'firstname', 'lastname', 'phone', 'sexe'])) {
            $result = $person->update($id, $firstname, $lastname, $phone, $sexe);
            $result ? 
            json(['status' => 200, 'message' => "$firstname $lastname à été mise a jour avec success"]) : 
            json(['status' => 500, 'message' => 'Internal server error']);
        } else {
            json(['status' => 402, 'message' => 'Veuillez rempli tout les champs']);
        }
        break;

    case 'destroy':
        $resul = $person->destroy($id);
        $result ? 
        json(['status' => 200, 'message' => 'Suppression effectuez avec success']) : 
        json(['status' => 500, 'message' => 'Internal server error']);
        break;
    
    default:
        json(['status' => 404, 'message' => 'Not found']);
        break;
}
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// src/Model/Entity/User.php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class Usuario extends Entity{
    
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

}


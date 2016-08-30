<?php

namespace Admin\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\Entity;
use ArrayObject;

/**
 * Acoes behavior
 */
class AcoesBehavior extends Behavior {

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [
        'implementedMethods' => [
            'beforeDelete' => 'beforeDelete',
        ]
    ];

}

<?php

declare(strict_types=1);

namespace App\Entity;

use Cycle\Annotated\Annotation\Column;
use Cycle\Annotated\Annotation\Entity;

/** @Entity */
class VaccinationStatus
{
    /**
     * @var int
     * @Column(type="primary")
     */
    public $id;

    /**
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $name;

    /**
     * @var int
     * @Column(type="integer", nullable=false)
     */
    public $count = 0;

    /**
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $comment;
}

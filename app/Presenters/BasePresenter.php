<?php

declare(strict_types=1);

namespace App\Presenters;

use Cycle\ORM\ORMInterface;
use Nette\Application\UI\Presenter;

class BasePresenter extends Presenter
{
    protected ORMInterface $orm;

    public function injectORM(ORMInterface $orm): void
    {
        $this->orm = $orm;
    }
}

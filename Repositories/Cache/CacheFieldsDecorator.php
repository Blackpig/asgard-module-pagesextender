<?php namespace Modules\PagesExtender\Repositories\Cache;

use Modules\PagesExtender\Repositories\FieldsRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheFieldsDecorator extends BaseCacheDecorator implements FieldsRepository
{
    public function __construct(FieldsRepository $fields)
    {
        parent::__construct();
        $this->entityName = 'pagesextender.fields';
        $this->repository = $fields;
    }
}

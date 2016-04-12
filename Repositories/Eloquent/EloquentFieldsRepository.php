<?php namespace Modules\PagesExtender\Repositories\Eloquent;

use Modules\PagesExtender\Repositories\FieldsRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentFieldsRepository extends EloquentBaseRepository implements FieldsRepository
{
    public function findForPage($pageId) {
        return $this->model->wherePageId($pageId)->first();

    }
}

<?php namespace Modules\PagesExtender\Composers;

use Illuminate\Contracts\View\View;
use Modules\PagesExtender\Entities\Fields as Fields;
use Modules\PagesExtender\Repositories\FieldsRepository;

class PagesExtenderComposer
{
    /**
     * @var fieldsRepository
     */
    private $fieldsRepository;

    /**
     * @var fields
     */
    private $fields;

    public function __construct(FieldsRepository $fieldsRepository)
    {
        $this->fieldsRepository = $fieldsRepository;
    }

    public function compose(View $view)
    {
        $fields = $this->fieldsRepository->findForPage(request()->route('page')->id);

        $view->with('fields', $fields);

    }
}

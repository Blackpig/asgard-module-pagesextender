<?php namespace Modules\PagesExtender\Events\Handlers;

use Modules\PagesExtender\Repositories\FieldsRepository;

class HandlePageWasUpdatedData
{

   public function __construct (FieldsRepository $fieldsRepository)
   {
        $this->fieldsRepository = $fieldsRepository;
   }

    /*
    * @param    PageWasUpdated $event
    * @return   mixed
    */

    public function handle ($event)
    {
        if (isset($event->data['is_home']) && $event->data['is_home']) {
            $fields = $this->fieldsRepository->findForPage($event->pageId);

            $data = $event->data;
            $data['page_id'] = $event->pageId;

            if ($fields) {
                return $this->fieldsRepository->update($fields, $data);
            } else {
                return $this->fieldsRepository->create($data);
            }
        }
    }
}

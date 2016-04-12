<?php namespace Modules\PagesExtender\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\PagesExtender\Entities\Fields;
use Modules\PagesExtender\Repositories\FieldsRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class FieldsController extends AdminBaseController
{
    /**
     * @var FieldsRepository
     */
    private $fields;

    public function __construct(FieldsRepository $fields)
    {
        parent::__construct();

        $this->fields = $fields;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$fields = $this->fields->all();

        return view('pagesextender::admin.fields.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pagesextender::admin.fields.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->fields->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('pagesextender::fields.title.fields')]));

        return redirect()->route('admin.pagesextender.fields.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Fields $fields
     * @return Response
     */
    public function edit(Fields $fields)
    {
        return view('pagesextender::admin.fields.edit', compact('fields'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Fields $fields
     * @param  Request $request
     * @return Response
     */
    public function update(Fields $fields, Request $request)
    {
        $this->fields->update($fields, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('pagesextender::fields.title.fields')]));

        return redirect()->route('admin.pagesextender.fields.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Fields $fields
     * @return Response
     */
    public function destroy(Fields $fields)
    {
        $this->fields->destroy($fields);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('pagesextender::fields.title.fields')]));

        return redirect()->route('admin.pagesextender.fields.index');
    }
}

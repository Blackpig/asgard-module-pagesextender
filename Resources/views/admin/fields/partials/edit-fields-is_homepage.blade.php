
    @if ($page->is_home)
        <div class="col-md-12">
            <h4>Home Page Boxes</h4>
            <div class="col-md-4">
               {!! Form::i18nInput('commercial', trans('stockloc::common.sections.commercial'), $errors, $lang, $fields) !!}
            </div>

            <div class="col-md-4">
               {!! Form::i18nInput('self_storage', trans('stockloc::common.sections.self-storage'), $errors, $lang, $fields) !!}
            </div>

            <div class="col-md-4">
               {!! Form::i18nInput('packing_materials', trans('stockloc::common.sections.packing-materials'), $errors, $lang, $fields) !!}
           </div>
        </div>
    @else
        <div class="hidden">
            {!! Form::i18nInput('commercial', trans('stockloc::common.sections.commercial'), $errors, $lang, $fields, ['class'=>'hidden']) !!}

           {!! Form::i18nInput('self-_torage', trans('stockloc::common.sections.self-storage'), $errors, $lang, $fields, ['class'=>'hidden']) !!}

           {!! Form::i18nInput('packing_materials', trans('stockloc::common.sections.packing-materials'), $errors, $lang, $fields, ['class'=>'hidden']) !!}
        </div>
    @endif

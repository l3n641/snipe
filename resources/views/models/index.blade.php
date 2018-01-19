@extends('layouts/default')

{{-- Page title --}}
@section('title')

  @if (Input::get('status')=='deleted')
    {{ trans('admin/models/general.view_deleted') }}
    {{ trans('admin/models/table.title') }}
    @else
    {{ trans('admin/models/general.view_models') }}
  @endif
@parent
@stop

{{-- Page title --}}
@section('header_right')
  <a href="{{ route('models.create') }}" class="btn btn-primary pull-right"></i> {{ trans('general.create') }}</a>

  @if (Input::get('status')=='deleted')
    <a class="btn btn-default pull-right" href="{{ route('models.index') }}" style="margin-right: 5px;">{{ trans('admin/models/general.view_models') }}</a>
  @else
    <a class="btn btn-default pull-right" href="{{ route('models.index', ['status' => 'deleted']) }}" style="margin-right: 5px;">{{ trans('admin/models/general.view_deleted') }}</a>
  @endif

@stop


{{-- Page content --}}
@section('content')


<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-body">
        {{ Form::open([
          'method' => 'POST',
          'route' => ['models.bulkedit.index'],
          'class' => 'form-inline',
           'id' => 'bulkForm']) }}
        <div class="row">
          <div class="col-md-12">

            @if (Input::get('status')!='deleted')
              <div id="toolbar">
                <select name="bulk_actions" class="form-control select2" style="width: 300px;">
                  <option value="edit">批量编辑</option>
                  <option value="delete">批量删除</option>
                </select>
                <button class="btn btn-primary" id="bulkEdit" disabled>开始</button>
              </div>
            @endif



        <table
        name="models"
        class="table table-striped snipe-table"
        id="table"
        data-url="{{ route('api.models.index', ['status'=> e(Input::get('status'))]) }}"
        data-cookie="true"
        data-click-to-select="true"
        data-cookie-id-table="modelsTable-{{ config('version.hash_version') }}">
          <thead>
            <tr>
              <th data-checkbox="true" data-field="checkbox"></th>
              <th data-sortable="true" data-field="id" data-visible="false">{{ trans('general.id') }}</th>
              <th data-sortable="true" data-field="name" data-formatter="modelsLinkFormatter">{{ trans('general.name') }}</th>
              <th data-sortable="true" data-field="image" data-formatter="imageFormatter" data-visible="false">{{ trans('admin/hardware/table.image') }}</th>
              <th data-sortable="true" data-field="manufacturer" data-formatter="manufacturersLinkObjFormatter">{{ trans('general.manufacturer') }}</th>
              <th data-sortable="true" data-field="model_number">{{ trans('admin/models/table.modelnumber') }}</th>
              <th data-sortable="false" data-field="assets_count">{{ trans('admin/models/table.numassets') }}</th>
              <th data-sortable="false" data-field="depreciation" data-formatter="depreciationsLinkObjFormatter">{{ trans('general.depreciation') }}</th>
              <th data-sortable="false" data-field="category" data-formatter="categoriesLinkObjFormatter">{{ trans('general.category') }}</th>
              <th data-sortable="true" data-field="eol">{{ trans('general.eol') }}</th>
              <th data-sortable="false" data-field="fieldset" data-formatter="fieldsetsLinkObjFormatter">{{ trans('admin/models/general.fieldset') }}</th>
              <th data-sortable="true" data-field="notes">{{ trans('general.notes') }}</th>
              <th data-switchable="false" data-formatter="modelsActionsFormatter" data-searchable="false" data-sortable="false" data-field="actions">{{ trans('table.actions') }}</th>
            </tr>
          </thead>
        </table>
              {{ Form::close() }}
          </div>
        </div>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div>

@stop

@section('moar_scripts')
@include ('partials.bootstrap-table', ['exportFile' => 'models-export', 'search' => true])

@stop
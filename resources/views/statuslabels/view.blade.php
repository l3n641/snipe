@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ $statuslabel->name }} {{ trans('general.assets') }}
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    {{ Form::open([
                      'method' => 'POST',
                      'route' => ['hardware/bulkedit'],
                      'class' => 'form-inline',
                       'id' => 'bulkForm']) }}
                    <div class="row">
                        <div class="col-md-12">
                            @if (Input::get('status')!='Deleted')
                                <div id="toolbar">
                                    <select name="bulk_actions" class="form-control select2">
                                        <option value="edit">编辑</option>
                                        <option value="delete">删除</option>
                                        <option value="labels">创建标签</option>
                                    </select>
                                    <button class="btn btn-default" id="bulkEdit" disabled>开始</button>
                                </div>
                            @endif

                            <table
                                    name="assets"
                                    {{-- data-row-style="rowStyle" --}}
                                    data-toolbar="#toolbar"
                                    class="table table-striped snipe-table"
                                    id="table"
                                    data-advanced-search="true"
                                    data-id-table="advancedTable"
                                    data-url="{{ route('api.assets.index',
                                      array('status_id'=>$statuslabel->id))}}"
                                    data-click-to-select="true"
                                    data-cookie-id-table="{{ e(Input::get('status')) }}assetTable-{{ config('version.hash_version') }}">
                            </table>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    {{ Form::close() }}
                </div><!-- ./box-body -->
            </div><!-- /.box -->
        </div>
    </div>
@stop

@section('moar_scripts')
    @include ('partials.bootstrap-table', [
        'exportFile' => 'assets-export',
        'search' => true,
        'columns' => \App\Presenters\AssetPresenter::dataTableLayout()
    ])

@stop

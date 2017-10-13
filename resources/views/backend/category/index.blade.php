@extends ('backend.layouts.app')

@section ('title', '分类管理')

@section('after-styles')
    {{ Html::style("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.css") }}
@endsection

@section('page-header')
    <h1>
        类别管理
        <small>培训类别、可视化数据等</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.access.users.active') }}</h3>

        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table id="categories-table" class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>类别名称</th>
                        <th>类别类型</th>
                        <th>最后更新</th>
                        <th>{{ trans('labels.general.actions') }}</th>
                    </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('history.backend.recent_history') }}</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            {{-- history()->renderType('User') --}}
        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection

@section('after-scripts')
    {{ Html::script("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables-extend.js") }}

    <script>
        $(function () {
            $('#categories-table').DataTable({
                dom: 'lfrtip',
                processing: true,
                serverSide: true,
                autoWidth: false,
                ajax: {
                    url: '{{ route("admin.category.get") }}',
                    type: 'post',
                    data: {type: null, trashed: false},
                    error: function (xhr, err) {
                        if (err === 'parsererror')
                            location.reload();
                    }
                },
                columns: [
                    {data: 'category_name', name: 'category_name'},
                    {data: 'category_type', name: 'category_type'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500,
                language:{
                            "sProcessing":   "处理中...",
                            "sLengthMenu":   "显示 _MENU_ 项结果",
                            "sZeroRecords":  "没有匹配结果",
                            "sInfo":         "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
                            "sInfoEmpty":    "显示第 0 至 0 项结果，共 0 项",
                            "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
                            "sInfoPostFix":  "",
                            "sSearch":       "搜索:",
                            "sUrl":          "",
                            "sEmptyTable":     "表中数据为空",
                            "sLoadingRecords": "载入中...",
                            "sInfoThousands":  ",",
                            "oPaginate": {
                            "sFirst":    "首页",
                                "sPrevious": "上页",
                                "sNext":     "下页",
                                "sLast":     "末页"
                        },
                            "oAria": {
                            "sSortAscending":  ": 以升序排列此列",
                                "sSortDescending": ": 以降序排列此列"
                        }
               }

            });
        });
    </script>
@endsection

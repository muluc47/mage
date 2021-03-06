<div class="sales-analytics">
    <div class="grid-header clearfix">
        <h4><i class="fa fa-bar-chart" aria-hidden="true"></i>Sales Analystics</h4>
    </div>

    <div class="canvas">
        <canvas class="chart" width="400" height="250"></canvas>
    </div>
</div>

@push('globals')
    <script>
        Baslat.langs['admin::dashboard.sales_analytics.orders'] = '{{ trans('admin::dashboard.sales_analytics.orders') }}';
        Baslat.langs['admin::dashboard.sales_analytics.sales'] = '{{ trans('admin::dashboard.sales_analytics.sales') }}';
    </script>
@endpush

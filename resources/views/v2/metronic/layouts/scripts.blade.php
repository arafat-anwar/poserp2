<script>var hostUrl = "{{ asset('metronic/assets') }}/";</script>
<script src="{{ asset('metronic/assets') }}/plugins/global/plugins.bundle.js"></script>
<script src="{{ asset('metronic/assets') }}/js/scripts.bundle.js"></script>
<script src="{{ asset('metronic/assets') }}/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="{{ asset('metronic/assets') }}/js/widgets.bundle.js"></script>
<script src="{{ asset('metronic/assets') }}/js/custom/widgets.js"></script>
<script src="{{ asset('metronic/assets') }}/js/custom/apps/chat/chat.js"></script>
<script src="{{ asset('metronic/assets') }}/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="{{ asset('metronic/assets') }}/js/custom/utilities/modals/create-app.js"></script>
<script src="{{ asset('metronic/assets') }}/js/custom/utilities/modals/new-target.js"></script>
<script src="{{ asset('metronic/assets') }}/js/custom/utilities/modals/users-search.js"></script>

<script src="{{ asset('metronic/assets') }}/plugins/custom/datatables/datatables.bundle.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var table = $(".metronic-datatable");
        var datatable = table.DataTable({ info: !1, order: [], pageLength: 10 });

        new $.fn.dataTable.Buttons(table, {
            buttons: [
                { extend: "copyHtml5", title: table.attr('data-export-file-name') },
                { extend: "excelHtml5", title: table.attr('data-export-file-name') },
                { extend: "csvHtml5", title: table.attr('data-export-file-name') },
                { extend: "pdfHtml5", title: table.attr('data-export-file-name') },
            ],
        }).container().appendTo($("#metronic-datatable-export"));

        $.each($('#metronic-datatable-export-menu [data-metronic-datatable-export]'), function(index, val) {
            var ex = $(this);
            ex.click(function(event) {
                $('.dt-buttons .buttons-' + ex.attr('data-metronic-datatable-export')).click();
            });
        });

        $.each($('[data-metronic-datatable-filter="search"]'), function(index, val) {
            var field = $(this);
            field.on('keyup', function(event) {
                console.log(field.val());
                datatable.search(field.val()).draw();
            });
        });
    });
</script>
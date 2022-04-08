<script>
    function initDatatablePost(tableElement, showAll=false, config={}){ // table jquery element
        Object.assign(datatableConfig,config);
        var table = $('#list-posts').DataTable(datatableConfig);

        // đánh stt
        table.on('order.dt search.dt', function () {
            table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();

        // search trong cột
        table.columns().every(function () {
            var that = this;
            $('input', this.header()).on('keyup change', function () {
                if (that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            });
        });

        if(showAll){
            showAllRowsDatatable(table)
        }
        return table;
    }
</script>
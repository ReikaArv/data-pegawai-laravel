<script type="text/javascript">
    $.noConflict();

    let table = new DataTable('#employeesTable', {
        responsive: true,
        searchable: true,
        layout: {
            bottomEnd: {
                paging: {
                    firstLast: false
                }
            }
        },
    });

</script>
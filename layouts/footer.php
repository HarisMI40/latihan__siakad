    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.4/b-2.2.2/b-html5-2.2.2/datatables.min.js"></script>

    <script>
        $(document).ready( function () {
        $('#table_id').DataTable({
            dom: 'B<"clear">lfrtip',
            buttons: true,
                buttons: [ 'copy', 'excel', 'pdf' ]
        });
    } );
    </script>


</body>
</html>
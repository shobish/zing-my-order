<script>
    $(document).ready(function() {

        $(document).on('click', 'pagination a', function(e) {
            e.preventDefault();
            let page = $(this).attr('href').split('page=')[1];
            pagination(page);
        });

        function pagination(page) {

            $.ajax({
                type: 'GET',
                url: '/pagination?page=' + page,
                success: function(res) {
                    $('.table-data').html(res);
                }
            });

        }

    });
</script>
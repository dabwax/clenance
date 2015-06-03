<script type="text/javascript">
    $(document).ready(function() {

        $.notify("<?= h($message) ?>", {
            autoHide: false,
            className: 'error',
            showAnimation: 'fadeIn',
            showDuration: 800,
            position: 'top left'
        });
    });
</script>

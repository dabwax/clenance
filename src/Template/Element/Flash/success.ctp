<script type="text/javascript">
    $(document).ready(function() {

        $.notify("<?= h($message) ?>", {
            autoHide: false,
            className: 'success',
            showAnimation: 'fadeIn',
            showDuration: 800,
            position: 'top left'
        });
    });
</script>

{{-- Vue and Jquery --}}

<script	type="text/javascript" src="/js/app.js">
</script>

{{-- Google Maps --}} 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRETvRUJDu6TrlQb9VYGTx3DbKbgdpjkA&libraries=places">
</script>

{{-- My Scripts --}}
<script	type="text/javascript" src="/js/scripts.js">
</script>

{{-- Laravel Token --}}
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
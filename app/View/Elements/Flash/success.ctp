<div class="flash-success">
    <span><?php echo __($message); ?></span>
</div>

<script>
    setTimeout(function() {
        $('.flash-success').fadeOut(300);
    },3000)
    
</script>
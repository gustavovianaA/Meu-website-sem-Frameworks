<footer>
    <?php
    echo 'Tempo aproximado de execução: ' . (microtime(true) - $time_start) . ' microsegundos.';
    ?>
</footer>

<script>
    console.log(window.performance);
</script>

</body>

</html>


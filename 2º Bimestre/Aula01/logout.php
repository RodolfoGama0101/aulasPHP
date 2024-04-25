<?php 
    session_start();
    session_destroy();

    echo "<b>Saindo do sistema...</b>";
    print "<script>location='index.html'</script>";
?>
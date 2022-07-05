</div>
    <footer class="text-right">
        <hr>
        <p><strong>Pata de Pagina</strong></p>
    </footer>
</body>

    <?php

        for($f=0; $f < count($varAccesos['framework']); $f++){
            switch($varAccesos['framework'][$f]){
                case 'jquery';                                     
                    echo '<script type="text/javascript" language="javascript" src ="lib/js/jquery/jquery-3.6.0.min.js"></script>';                
                    break;
                case 'bootstrap';                                        
                    echo '<script type="text/javascript" language="javascript" src="lib/css/bootstrap-3.3.7-dist/css/bootstrap.min.css"></script>';                    
                    break;
            }
        }

    ?>
    
    <script type="text/javascript" language="javascript" src ="js/system.js?v=<?php echo 
    $parametro['webversion']; ?>"></script>
    <script type="text/javascript" language="javascript" src ="js/<?php echo $pagina; ?>.js?v=<?php echo 
    $parametro['webversion']; ?>"></script>

</html>
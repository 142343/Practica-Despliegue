<?php
session_start();  //verificar sesion
session_unset();   //inavilitar sesion
session_destroy();  //cerrar sesion




?>
<html> 
<head><script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<script>
                swal.fire({
                    icon: 'info',
                    title: 'Sesión cerrada correctamente',
                    text: 'Vuelve pronto!',
                    showConfirmButton: true,
                    confirmbuttontext: "cerrar",
                }).then(function() {
                    window.location = "../index.html";

                });
                
        
    
            </script>
</body>
</html>
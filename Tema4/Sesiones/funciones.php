<?php
    require_once("settings.php");
    
    function get_post_data() {
        $hash = "";
        
        if (isset($_POST['user']) && isset($_POST['pass'])) {
            $hash = md5($_POST['user'] . $_POST['pass']);
        }

        return $hash;
    }

    function validar_user_y_pass() {
        $user_hash = get_post_data();
        $system_hash = HASH_ACCESO;

        if ($user_hash == $system_hash) {
            return True;
        }
    }

    function login() {
        $user_valido = validar_user_y_pass();

        if ($user_valido) {
            $_SESSION['login_date'] = time();
        }

        goto_page(PAGINA_RESTRINGIDA_POR_DEFECTO);
    }

    function logout() {
        unset($_SESSION);
        $datos_cookie = session_get_cookie_params();
        setcookie(session_name(), NULL, time()-999999, $datos_cookie["path"], $datos_cookie["domain"], $datos_cookie["secure"], $datos_cookie["httponly"]);
        goto_page(PAGINA_LOGIN);
    }

    function obtener_ultimo_acceso() {
        $ultimo_acceso = 0;
        if (isset($_SESSION['login_date'])) {
            $ultimo_acceso = $_SESSION['login_date'];
        }

        return $ultimo_acceso;
    }

    function sesion_activa() {
        $estado_activo = False;
        $ultimo_acceso = obtener_ultimo_acceso();

        $limite_ultimo_acceso = $ultimo_acceso + 1800;

        if ($limite_ultimo_acceso > time()) {
            $estado_activo = True;
            $_SESSION['login_date'] = time();
        }

        return $estado_activo;
    }

    function validar_sesion() {
        if (!sesion_activa()) {
            logout();
        }
    }

    function goto_page($pagina) {
        header("Location: $pagina");
    }
?>
<?php
    setlocale(LC_ALL, 'pt_BR');
    date_default_timezone_set('America/Sao_Paulo');

    include_once('pags/cabecalho.html');
    include_once('pags/nav.php');

    @$pg = $_GET['pg'];

    switch($pg){
        case 'home':
            include('pags/inicio.html');
            break;
        case 'controledeversao':
            include('pags/controledeversao.html');
            break;
        case 'git':
            include('pags/git.html');
            break;
        case 'github':
            include('pags/github.html');
            break;
        case 'gitlab':
            include('pags/gitlab.html');
            break;
        case 'githubconta':
            include('pags/githubconta.html');
            break;
        case 'gitlinux':
            include('pags/gitlinux.html');
            break;
        case 'gitwidows':
            include('pags/gitwidows.html');
            break;
        case 'gitconfigurar':
            include('pags/gitconfigurar.html');
            break;
        case 'gitcomandos':
            include('pags/gitcomandos.html');
            break;
        case 'giterro':
            include('pags/giterro.html');
            break;
        case 'gitefaculdade':
            include('pags/gitefaculdade.html');
            break;
        case 'referencias':
            include('pags/referencias.html');
            break;
        default:
            include('pags/inicio.html');
            break;
    }

?>
</body>
</html>
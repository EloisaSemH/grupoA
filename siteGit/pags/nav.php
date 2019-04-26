<nav class="col-sm-4 float-left mt-2"">
    <ul class="list-group" style="list-style: none;">

<?php
    if(is_null($_GET['pg'])){
        $pg = 'home';
    }else{
        $pg = $_GET['pg'];
    }

    if($pg == 'controledeversao'){
        echo '<li><a href="index.php?pg=controledeversao" class="list-group-item list-group-item-action active">Controle de versão</a></li>';
    }else{
        echo '<li><a href="index.php?pg=controledeversao" class="list-group-item list-group-item-action">Controle de versão</a></li>';
    }

    if($pg == 'git'){
        echo '<li><a href="index.php?pg=git" class="list-group-item list-group-item-action active">Git</a></li>';
    }else{
        echo '<li><a href="index.php?pg=git" class="list-group-item list-group-item-action">Git</a></li>';
    }

    if($pg == 'github'){
        echo '<li><a href="index.php?pg=github" class="list-group-item list-group-item-action active">Github</a></li>';
    }else{
        echo '<li><a href="index.php?pg=github" class="list-group-item list-group-item-action">Github</a></li>';
    }

    if($pg == 'gitlab'){
        echo '<li><a href="index.php?pg=gitlab" class="list-group-item list-group-item-action active">Gitlab</a></li>';
    }else{
        echo '<li><a href="index.php?pg=gitlab" class="list-group-item list-group-item-action">Gitlab</a></li>';
    }

    if($pg == 'githubconta'){
        echo '<li><a href="index.php?pg=githubconta" class="list-group-item list-group-item-action active">Criando uma conta no Github</a></li>';
    }else{
        echo '<li><a href="index.php?pg=githubconta" class="list-group-item list-group-item-action">Criando uma conta no Github</a></li>';
    }

    if($pg == 'gitlinux'){
        echo '<li><a href="index.php?pg=gitlinux" class="list-group-item list-group-item-action active">Git no Linux</a></li>';
    }else{
        echo '<li><a href="index.php?pg=gitlinux" class="list-group-item list-group-item-action">Git no Linux</a></li>';
    }

    if($pg == 'gitwidows'){
        echo '<li><a href="index.php?pg=gitwidows" class="list-group-item list-group-item-action active">Git no Windows</a></li>';
    }else{
        echo '<li><a href="index.php?pg=gitwidows" class="list-group-item list-group-item-action">Git no Windows</a></li>';
    }

    if($pg == 'gitconfigurar'){
        echo '<li><a href="index.php?pg=gitconfigurar" class="list-group-item list-group-item-action active">Configurando o Git</a></li>';
    }else{
        echo '<li><a href="index.php?pg=gitconfigurar" class="list-group-item list-group-item-action">Configurando o Git</a></li>';
    }

    if($pg == 'gitcomandos'){
        echo '<li><a href="index.php?pg=gitcomandos" class="list-group-item list-group-item-action active">Os principais comandos do Git</a></li>';
    }else{
        echo '<li><a href="index.php?pg=gitcomandos" class="list-group-item list-group-item-action">Os principais comandos do Git</a></li>';
    }

    if($pg == 'giterro'){
        echo '<li><a href="index.php?pg=giterro" class="list-group-item list-group-item-action active">Arrumando uma mensagem errada em um commit</a></li>';
    }else{
        echo '<li><a href="index.php?pg=giterro" class="list-group-item list-group-item-action">Arrumando uma mensagem errada em um commit</a></li>';
    }

    if($pg == 'gitefaculdade'){
        echo '<li><a href="index.php?pg=gitefaculdade" class="list-group-item list-group-item-action active">Como um grupo de faculdade pode usar git para colaborar em um projeto</a></li>';
    }else{
        echo '<li><a href="index.php?pg=gitefaculdade" class="list-group-item list-group-item-action">Como um grupo de faculdade pode usar git para colaborar em um projeto</a></li>';
    }
?>      
    </ul>
</nav>
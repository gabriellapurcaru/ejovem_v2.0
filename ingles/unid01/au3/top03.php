<?php 
    require("../../../tpl/Template.class.php"); 
    $tpl = new Template("../../../templates/ingles/unid-01/au-3/top03.tpl"); 
    $tpl->addFile("topo", "../../../topo.tpl"); 
    $tpl->addFile("menu", "../../../templates/ingles/unid-01/au-3/menu.tpl"); 
    $tpl->addFile("tituloAula", "../../../templates/ingles/unid-01/au-3/tituloAula.tpl"); 
    $tpl->addFile("barra_tools", "../../../templates/ingles/unid-01/au-1/barra_tools.tpl");
    $tpl->addFile("rodape", "../../../rodape.tpl"); 
    $tpl->show(); 
?>

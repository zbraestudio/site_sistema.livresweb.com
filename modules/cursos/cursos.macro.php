<?
function macroBeforePost($tableName, $id){

  $titulo = $_POST['Nome'];
  $titulo = GeraLinkAmigavel($titulo);
  $titulo = ValidaLinkAmigavel($tableName, $titulo, $id);

  $_POST['Link'] = $titulo;
}
?>
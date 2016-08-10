<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title><?= ($page->title . ' - ' . $site->title); ?></title>

    <!-- Banners do Topo -->
    <script src="<?= $cms->GetFrontJavaScriptUrl(); ?>cycle/jquery.cycle.js"></script>
    <script src="<?= $cms->GetFrontJavaScriptUrl(); ?>cycle/responsivo.js"></script>

    <!-- Controle de acesso pelo Mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?
    //Imprime cabeçalho automatizado do CMS
    $page->printHeader();
    ?>

    <script type="text/javascript">
        /** Variáries Usadas no Site **/
        var site_url  = '<?= $GLOBALS['ROOT_URL'] ?>';
        var link_url  = '<?= $GLOBALS['ROOT_URL'] . $GLOBALS['LINK_PREFIX'] ?>';
        var theme_url = '<?= $cms->GetThemeUrl(); ?>';
        var pagename = '<?= $router->getPage(); ?>';
    </script>
</head>

<body>
    <!-- CONTEUDO - INICIO -->
    <? include($FRONT_PAGES_PATH . $fileHtml); ?>
    <!-- CONTEUDO - FIM -->
</body>
</html>
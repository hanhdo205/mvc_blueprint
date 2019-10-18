<?php
startHeader();
setTitle('Simple page title');
includeStyle('main.css');
endHeader();
?>
<body class='app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show'>
<div id="container">
    <?php echo "This is a sample page - ".$testVar;?>
</div>
<?php
startFooter();
endFooter();
?>
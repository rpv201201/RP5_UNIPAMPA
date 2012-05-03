<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8" />
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 18px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 17px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body>
<!-- Beginning header -->
    <div>
        <a href='<?php echo site_url('salas')?>'>Gerenciamento de Disponibilidade</a>
 
    </div>
<!-- End of header-->
    <div style='height:15px;'></div>  
    <div>
        <?php echo $output; ?>
 
    </div>
<!-- Beginning footer -->
<div></div>
<!-- End of Footer -->

</body>
</html>

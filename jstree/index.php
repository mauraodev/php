<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jstree/jquery.jstree.js"></script>
<script type="text/javascript">
	$(function() {
        $("#demo1").jstree({
            "plugins": ["themes", "html_data", "ui", "types"]
        }).bind("select_node.jstree", function(event, data) {
            /*var path = data.rslt.obj.attr("path");
            carregar_arquivos(path);
            $('[name="pasta"]').val(path);*/
        });
    });
</script>
<?php

$base = dirname(__FILE__);

function listaPasta($base) {

	echo '<ul>';

    if (is_dir($base)) {

        $iterator = new DirectoryIterator($base);

        foreach ($iterator as $fileinfo) {

            if ($fileinfo->isDir() && $fileinfo->isDot() == false) {

            	echo '<li><a href="#">' . $fileinfo->getFileName() . '</a>';

            	listaPasta($fileinfo->getPathname());

                echo '</li>';
            }
        }
    }

    echo '</ul>';
}
?>
<div id="demo1">
	<?php listaPasta($base); ?>
</div>
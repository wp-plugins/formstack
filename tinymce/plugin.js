(function(){

    tinymce.create('tinymce.plugins.formstack', {

        init : function(ed, url) {

            ed.addCommand('fs_embed_window', function() {

                ed.windowManager.open({
                    file   : url + '/dialog.php',
                    width  : 300, //+ ed.getLang('cetsHelloWorld.delta_width', 0),
                    height : 140, //+ ed.getLang('cetsHelloWorld.delta_height', 0),
                    inline : 1
                }, { plugin_url : url });
            });
            
            ed.addButton('formstack', {
                title : 'Formstack',
		cmd : 'fs_embed_window',
		image : url + '/stack.gif'
            });
        }
    });

    tinymce.PluginManager.add('formstack', tinymce.plugins.formstack);

})()


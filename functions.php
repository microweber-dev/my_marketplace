<?php



event_bind('mw.admin', function ($params = false) {
   	$btn = array();
    $btn['module'] = 'my_marketplace';
    $btn['title'] = "My market";
    mw()->modules->ui('admin.modules.sidebar', $btn);
});

 

 
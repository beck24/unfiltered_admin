<?php

function unfiltered_admin_init() {
    if (elgg_is_admin_logged_in()) {
        elgg_unregister_plugin_hook_handler('validate', 'input', 'htmlawed_filter_tags');
    }
}

elgg_register_event_handler('init', 'system', 'unfiltered_admin_init');
<?php // ADD in p1.1

// обработка существующих объектов
$act = filter_input(INPUT_POST, 'transliterate');
if (!empty($act)) {
    $r1 = filter_input(INPUT_POST, 'r1');
    $r2 = filter_input(INPUT_POST, 'r2');
    if (!empty($r1)) {
        wp_translitera::do_transliterate($wpdb->posts, 'ID', 'post_name');
    }
    if (!empty($r2)) {
        wp_translitera::do_transliterate($wpdb->terms, 'term_id', 'slug');
    }
    //wpforo добавлено p1.0.3
    $f1 = filter_input(INPUT_POST, 'f1');
    $f2 = filter_input(INPUT_POST, 'f2');
    if (!empty($f1) || !empty($f2)) {
        $blogprefix = $wpdb->get_blog_prefix();
        if (!empty($f1)) {
            wp_translitera::do_transliterate($blogprefix . 'wpforo_forums', 'forumid', 'slug');
        }
        if (!empty($f2)) {
            wp_translitera::do_transliterate($blogprefix . 'wpforo_topics', 'topicid', 'slug');
        }
        wpforo_clean_cache();
    }
    //---
}

//Настройки
$setupd = filter_input(INPUT_POST, 'apply');
$sets = array();
if (!empty($setupd)) {
    $sets['tranliterate_uploads_file'] = filter_input(INPUT_POST, 'tranliterate_uploads_file');
    $sets['tranliterate_404'] = filter_input(INPUT_POST, 'tranliterate_404');
    $sets['fileext'] = explode(',', filter_input(INPUT_POST, 'typefiles'));
    $sets['use_force_transliterations'] = filter_input(INPUT_POST, 'use_force_transliterations');
    $sets['init_in_front'] = filter_input(INPUT_POST, 'init_in_front');
    $sets['lowercase_filename'] = filter_input(INPUT_POST, 'lowercase_filename'); //добавлено p1.1
    $sets['use_global_mu_settings'] = filter_input(INPUT_POST, 'use_global_mu_settings'); //добавлено p1.2
    $rulesstring = filter_input(INPUT_POST, 'customrules');
    $rulesrawarray = explode(PHP_EOL, $rulesstring);
    $rulesarray = array();
    foreach ($rulesrawarray as $value) {
        if (empty($value) || $value == '=') {
            continue;
        }
        $tmp = explode('=', $value);
        $rulesarray[$tmp[0]] = $tmp[1];
    }
    $sets['custom_rules'] = json_encode($rulesarray);
    wp_translitera::updsets($sets);
}


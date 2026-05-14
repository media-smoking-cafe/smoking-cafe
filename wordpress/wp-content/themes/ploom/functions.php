<?php
// CSS・JS読み込み
function ploom_files()
{

    // TOPページ（index.php）
    if (is_front_page()) {
        if (file_exists(get_template_directory() . '/styles/index.css')) {
            wp_enqueue_style(
                'index-style',
                get_template_directory_uri() . '/styles/index.css',
                array(),
                filemtime(get_template_directory() . '/styles/index.css'),
                'all'
            );
        }

        if (file_exists(get_template_directory() . '/js/index.js')) {
            wp_enqueue_script(
                'index-js',
                get_template_directory_uri() . '/js/index.js',
                array(),
                filemtime(get_template_directory() . '/js/index.js'),
                true
            );
        }
    }

    // ブログ一覧ページ（blog.php）
    if (is_home()) {
        if (file_exists(get_template_directory() . '/styles/home.css')) {
            wp_enqueue_style(
                'home-style',
                get_template_directory_uri() . '/styles/home.css',
                array(),
                filemtime(get_template_directory() . '/styles/home.css'),
                'all'
            );
        }
    }

    // 記事詳細ページ（single.php）
    if (is_single()) {
        if (file_exists(get_template_directory() . '/styles/single.css')) {
            wp_enqueue_style(
                'single-style',
                get_template_directory_uri() . '/styles/single.css',
                array(),
                filemtime(get_template_directory() . '/styles/single.css'),
                'all'
            );
        }
    }

    // ヘッダーCSS
    if (file_exists(get_template_directory() . '/styles/header.css')) {
        wp_enqueue_style(
            'header-style',
            get_template_directory_uri() . '/styles/header.css',
            array(),
            filemtime(get_template_directory() . '/styles/header.css'),
            'all'
        );
    }

    // 共通JSを使う場合
    /*
    if (file_exists(get_template_directory() . '/js/main.js')) {
        wp_enqueue_script(
            'main-js',
            get_template_directory_uri() . '/js/main.js',
            array(),
            filemtime(get_template_directory() . '/js/main.js'),
            true
        );
    }
    */
}

// 実行
add_action('wp_enqueue_scripts', 'ploom_files');

// テーマサポート
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('custom-logo');

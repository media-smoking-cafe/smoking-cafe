<?php

// CSS・JS読み込み
function ploom_files()
{
    // 共通CSS
    if (file_exists(get_template_directory() . '/styles/common.css')) {
        wp_enqueue_style(
            'common-style',
            get_template_directory_uri() . '/styles/common.css',
            array(),
            filemtime(get_template_directory() . '/styles/common.css'),
            'all'
        );
    }

    // TOPページ（front-page.php）
    if (is_front_page()) {
        if (file_exists(get_template_directory() . '/styles/front-page.css')) {
            wp_enqueue_style(
                'front-page-style',
                get_template_directory_uri() . '/styles/front-page.css',
                array(),
                filemtime(get_template_directory() . '/styles/front-page.css'),
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

    // ブログ一覧ページ（page-blog.php）
    if (is_page('blog')) {
        if (file_exists(get_template_directory() . '/styles/page-blog.css')) {
            wp_enqueue_style(
                'page-blog-style',
                get_template_directory_uri() . '/styles/page-blog.css',
                array(),
                filemtime(get_template_directory() . '/styles/page-blog.css'),
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

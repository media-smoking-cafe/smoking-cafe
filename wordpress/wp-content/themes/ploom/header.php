<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("title"); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/styles/ress.css'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav>
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo.svg'); ?>" alt="ロゴ">
            </a>
            <a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a>
        </nav>
    </header>
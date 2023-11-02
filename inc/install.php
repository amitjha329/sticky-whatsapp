<?php

function plugin_install()
{
    create_tables();
    init_data();
}

function create_tables()
{
    global $wpdb;

    $table_name = $wpdb->prefix . "sticky_whatsapp";

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
  id mediumint(9) NOT NULL AUTO_INCREMENT,
  time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
  number varchar(55) DEFAULT '' NOT NULL,
  PRIMARY KEY  (id)
) $charset_collate;";
    dbDelta($sql);
}

function init_data()
{
    global $wpdb;
    $welcome_number = '+919999999999';

    $table_name = $wpdb->prefix . 'sticky_whatsapp';

    $wpdb->replace(
        $table_name,
        array(
            'id' => 1,
            'time' => current_time('mysql'),
            'number' => $welcome_number,
        )
    );
}

function load_stylesheets()
{
    wp_enqueue_style('sticky_whatsapp_style', plugin_dir_url(__FILE__) . '../css/style.css');
}

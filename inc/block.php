<?php

function sticky_whatsapp()
{
    global $wpdb;
    $table = $wpdb->prefix . "sticky_whatsapp";
    $data = $wpdb->get_row("SELECT * FROM $table WHERE id = 1");
    echo '
    <div class="sticky_bottom">
		<a class="whatsapp" href="https://wa.me/' . $data->number . '">Whatsapp</a>
		<a class="call" href="tel:' . $data->number . '">Call</a>
	</div>
    ';
}

<?php

function create_admin_link()
{
    add_menu_page("Sticky Whatsapp Settings", "Sticky Whatsapp", "manage_options", "sticky-whatsapp/admin/options-page.php","", plugins_url("sticky-whatsapp/icon.png"));
}

<?php

/**
 * adding custom menu ites to menu
 *
 * @param  [type]  $item_id
 * @param  [type]  $item
 * @return void
 */
function regicorp_custom_menu_items($item_id, $item)
{

    $menu_item_desc = get_post_meta($item_id, '_menu_amq_short_desc', true);
    $menu_item_color = get_post_meta($item_id, '_amq_menu_color', true);

    $sub_menu_item_1 = get_post_meta($item_id, '_amq_sub_menu_item_1', true);
    $sub_menu_item_2 = get_post_meta($item_id, '_amq_sub_menu_item_2', true);
    $sub_menu_item_3 = get_post_meta($item_id, '_amq_sub_menu_item_3', true);
?>
    <div style="clear: both; margin-bottom:10px; margin-top:10px">
        <span class="menu-color"><?php _e("Short Description", 'menu-item-desc'); ?></span><br />
        <input type="hidden" class="nav-menu-id" value="<?php echo $item_id; ?>" />
        <div class="logged-input-holder">
            <input type="text" class="widefat" name="menu_amq_short_desc[<?php echo $item_id; ?>]" id="menu-item-desc-<?php echo $item_id; ?>" value="<?php echo esc_attr($menu_item_desc); ?>" />
        </div>
    </div>

    <div style="clear: both; margin-bottom:10px">
        <span class="menu-color"><?php _e("Item Color", 'divi'); ?></span><br />
        <input type="hidden" class="nav-menu-id" value="<?php echo $item_id; ?>" />
        <div class="logged-input-holder">
            <input type="color" class="color-picker" name="amq_menu_color[<?php echo $item_id; ?>]" id="menu-amq-color-<?php echo $item_id; ?>" value="<?php echo esc_attr($menu_item_color); ?>" />
        </div>
    </div>

    <!-- sub Item One -->
    <div style="clear: both; margin-bottom:10px">
        <span class="menu-sub-item-1"><?php _e("Sub Item 1", 'divi'); ?></span><br />
        <input type="hidden" class="nav-menu-id" value="<?php echo $item_id; ?>" />
        <div class="logged-input-holder">
            <input type="text" class="widefat" name="amq_sub_item_1[<?php echo $item_id; ?>]" id="menu-amq-sub-1-<?php echo $item_id; ?>" value="<?php echo esc_attr($sub_menu_item_1); ?>" />
        </div>
    </div>

    <!-- sub Item Two -->
    <div style="clear: both; margin-bottom:10px">
        <span class="menu-sub-item-2"><?php _e("Sub Item 2", 'divi'); ?></span><br />
        <input type="hidden" class="nav-menu-id" value="<?php echo $item_id; ?>" />
        <div class="logged-input-holder">
            <input type="text" class="widefat" name="amq_sub_item_2[<?php echo $item_id; ?>]" id="menu-amq-sub-2-<?php echo $item_id; ?>" value="<?php echo esc_attr($sub_menu_item_2); ?>" />
        </div>
    </div>

    <!-- sub Item Three -->
    <div style="clear: both; margin-bottom:10px">
        <span class="menu-sub-item-3"><?php _e("Sub Item 3", 'divi'); ?></span><br />
        <input type="hidden" class="nav-menu-id" value="<?php echo $item_id; ?>" />
        <div class="logged-input-holder">
            <input type="text" class="widefat" name="amq_sub_item_3[<?php echo $item_id; ?>]" id="menu-amq-sub-3-<?php echo $item_id; ?>" value="<?php echo esc_attr($sub_menu_item_3); ?>" />
        </div>
    </div>
<?php
}
add_action('wp_nav_menu_item_custom_fields', 'regicorp_custom_menu_items', 10, 2);


/**
 * save menu custom fields
 *
 * @param  [type]  $menu_id
 * @param  [type]  $menu_item_db_id
 * @return void
 */
function regicorp_save_custom_menu_item_fields($menu_id, $menu_item_db_id)
{

    if (isset($_POST['menu_amq_short_desc'][$menu_item_db_id]) && !empty($_POST['menu_amq_short_desc'][$menu_item_db_id])) {
        $sanitized_data = sanitize_text_field($_POST['menu_amq_short_desc'][$menu_item_db_id]);
        update_post_meta($menu_item_db_id, '_menu_amq_short_desc', $sanitized_data);
    } else {
        delete_post_meta($menu_item_db_id, '_menu_amq_short_desc');
    }

    // item color 
    if (isset($_POST['amq_menu_color'][$menu_item_db_id]) && $_POST['amq_menu_color'][$menu_item_db_id] !== '#000000') {
        $sanitized_color = sanitize_hex_color($_POST['amq_menu_color'][$menu_item_db_id]);
        update_post_meta($menu_item_db_id, '_amq_menu_color', $sanitized_color);
    } else {
        delete_post_meta($menu_item_db_id, '_amq_menu_color');
    }

    // sub items
    if (isset($_POST['amq_sub_item_1'][$menu_item_db_id]) && !empty($_POST['amq_sub_item_1'][$menu_item_db_id])) {
        $sanitized_color = sanitize_text_field($_POST['amq_sub_item_1'][$menu_item_db_id]);
        update_post_meta($menu_item_db_id, '_amq_sub_menu_item_1', $sanitized_color);
    } else {
        delete_post_meta($menu_item_db_id, '_amq_sub_menu_item_1');
    }

    if (isset($_POST['amq_sub_item_2'][$menu_item_db_id]) && !empty($_POST['amq_sub_item_2'][$menu_item_db_id])) {
        $sanitized_color = sanitize_text_field($_POST['amq_sub_item_2'][$menu_item_db_id]);
        update_post_meta($menu_item_db_id, '_amq_sub_menu_item_2', $sanitized_color);
    } else {
        delete_post_meta($menu_item_db_id, '_amq_sub_menu_item_2');
    }

    if (isset($_POST['amq_sub_item_3'][$menu_item_db_id]) && !empty($_POST['amq_sub_item_3'][$menu_item_db_id])) {
        $sanitized_color = sanitize_text_field($_POST['amq_sub_item_3'][$menu_item_db_id]);
        update_post_meta($menu_item_db_id, '_amq_sub_menu_item_3', $sanitized_color);
    } else {
        delete_post_meta($menu_item_db_id, '_amq_sub_menu_item_3');
    }
}
add_action('wp_update_nav_menu_item', 'regicorp_save_custom_menu_item_fields', 10, 2);

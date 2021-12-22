<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

//global $WOOBE;
?>

<div class="woobe-button" onclick="woobe_act_popupeditor(this, <?php echo intval($post['post_parent']) ?>)" data-product_id="<?php echo $post['ID'] ?>" id="popup_val_<?php echo $field_key ?>_<?php echo $post['ID'] ?>" data-key="<?php echo $field_key ?>" data-terms_ids="" data-name="<?php echo sprintf(esc_html__('Product: %s', 'woo-bulk-editor'), $post['post_title']) ?>">
    <?php echo esc_html__('Content', 'woo-bulk-editor') ?>
</div>

<?php defined('ABSPATH') or die('No script kiddies please!'); ?>
<div class="eg-each-gallery-item" data-gallery-item-key="<?php echo $gallery_item_key; ?>">
    <div class="eg-gallery-image-preview">
        <div class="eg-gallery-item-actions-wrap">
            <a href="javascript:void(0)" class="eg-move-item"><span><?php _e('Move', 'everest-gallery'); ?></span></a>
            <a href="javascript:void(0)" class="eg-settings-item"><span><?php _e('Settings', 'everest-gallery'); ?></span></a>
            <a href="javascript:void(0)" class="eg-copy-item"><span><?php _e('Copy', 'everest-gallery'); ?></span></a>
            <a href="javascript:void(0)" class="eg-delete-item"><span><?php _e('Delete', 'everest-gallery'); ?></span></a>
        </div>
        <?php
        if ( $gallery_item_type == 'image' ) {
            $image_url_array = wp_get_attachment_image_src(esc_attr($gallery_item_details[ 'attachment_id' ]), 'full');
            $preview_image_url = $image_url_array[ 0 ];
        } else {
            $default_preview_image = EG_IMG_DIR . 'no-preview.jpg';
            $preview_image_url = (isset($gallery_item_details[ 'post_preview_image_url' ]) && $gallery_item_details[ 'post_preview_image_url' ] != '') ? esc_url($gallery_item_details[ 'post_preview_image_url' ]) : $default_preview_image;
        }
		$final_img_url=$gallery_item_details[ 'item_url' ]. '&' . $gallery_item_details[ 'item_url_two' ]. '&' . $gallery_item_details[ 'item_url_three' ]. '&' . $gallery_item_details[ 'item_url_four' ]. '&' . $gallery_item_details[ 'item_url_five' ]. '&' . $gallery_item_details[ 'item_url_six' ]. '&' . $gallery_item_details[ 'item_url_seven' ]. '&' . $gallery_item_details[ 'item_url_eight' ]. '&' . $gallery_item_details[ 'item_url_nine' ];
        //$this->print_array($image_url_array);
        ?>
        <img src="<?php
        echo esc_attr($final_img_url); ?>" value="<?php
        echo esc_attr($final_img_url); ?>" class="eg-preview-image">
    </div>
    <div class="eg-gallery-item-detail-wrap eg-backend-popup" style="display:none;">
        <div class="eg-overlay"></div>
        <div class="eg-gallery-item-detail-fields">
            <h4><?php _e('Item Details', 'everest-gallery'); ?><span class="dashicons dashicons-no eg-close-popup"></span></h4>
            <div class="eg-field-wrap">
                <label><?php _e('Item Title', 'everest-gallery'); ?></label>
                <div class="eg-field">
                    <input type="text" class="eg-gallery-form-field" name="gallery_details[gallery_items][<?php echo $gallery_item_key; ?>][item_title]" value="<?php echo esc_attr($gallery_item_details[ 'item_title' ]); ?>">
                </div>
            </div>
			<div class="eg-field-wrap">
                <label><?php _e('Item Url', 'everest-gallery'); ?></label>
                <div class="eg-field">
                    <input type="text" class="eg-gallery-form-field" name="gallery_details[gallery_items][<?php echo $gallery_item_key; ?>][item_url]" value="<?php echo esc_attr($gallery_item_details[ 'item_url' ]); ?>">
                </div>
            </div>
            <div class="eg-field-wrap url-division">
                <label><?php _e('Item Url 2', 'everest-gallery'); ?></label>
                <div class="eg-field">
                    <input type="text" class="eg-gallery-form-field" name="gallery_details[gallery_items][<?php echo $gallery_item_key; ?>][item_url_two]" value="<?php echo esc_attr($gallery_item_details[ 'item_url_two' ]); ?>">
                </div>
            </div>
            <div class="eg-field-wrap url-division">
                <label><?php _e('Item Url 3', 'everest-gallery'); ?></label>
                <div class="eg-field">
                    <input type="text" class="eg-gallery-form-field" name="gallery_details[gallery_items][<?php echo $gallery_item_key; ?>][item_url_three]" value="<?php echo esc_attr($gallery_item_details[ 'item_url_three' ]); ?>">
                </div>
            </div>
            <div class="eg-field-wrap url-division">
                <label><?php _e('Item Url 4', 'everest-gallery'); ?></label>
                <div class="eg-field">
                    <input type="text" class="eg-gallery-form-field" name="gallery_details[gallery_items][<?php echo $gallery_item_key; ?>][item_url_four]" value="<?php echo esc_attr($gallery_item_details[ 'item_url_four' ]); ?>">
                </div>
            </div>
            <div class="eg-field-wrap url-division">
                <label><?php _e('Item Url 5', 'everest-gallery'); ?></label>
                <div class="eg-field">
                    <input type="text" class="eg-gallery-form-field" name="gallery_details[gallery_items][<?php echo $gallery_item_key; ?>][item_url_five]" value="<?php echo esc_attr($gallery_item_details[ 'item_url_five' ]); ?>">
                </div>
            </div>
            <div class="eg-field-wrap url-division">
                <label><?php _e('Item Url 6', 'everest-gallery'); ?></label>
                <div class="eg-field">
                    <input type="text" class="eg-gallery-form-field" name="gallery_details[gallery_items][<?php echo $gallery_item_key; ?>][item_url_six]" value="<?php echo esc_attr($gallery_item_details[ 'item_url_six' ]); ?>">
                </div>
            </div>
            <div class="eg-field-wrap url-division">
                <label><?php _e('Item Url 7', 'everest-gallery'); ?></label>
                <div class="eg-field">
                    <input type="text" class="eg-gallery-form-field" name="gallery_details[gallery_items][<?php echo $gallery_item_key; ?>][item_url_seven]" value="<?php echo esc_attr($gallery_item_details[ 'item_url_seven' ]); ?>">
                </div>
            </div>
            <div class="eg-field-wrap url-division">
                <label><?php _e('Item Url 8', 'everest-gallery'); ?></label>
                <div class="eg-field">
                    <input type="text" class="eg-gallery-form-field" name="gallery_details[gallery_items][<?php echo $gallery_item_key; ?>][item_url_eight]" value="<?php echo esc_attr($gallery_item_details[ 'item_url_eight' ]); ?>">
                </div>
            </div>
            <div class="eg-field-wrap url-division">
                <label><?php _e('Item Url 9', 'everest-gallery'); ?></label>
                <div class="eg-field">
                    <input type="text" class="eg-gallery-form-field" name="gallery_details[gallery_items][<?php echo $gallery_item_key; ?>][item_url_nine]" value="<?php echo esc_attr($gallery_item_details[ 'item_url_nine' ]); ?>">
                </div>
            </div>
            <div class="eg-field-wrap">
                <label><?php _e('Item Caption', 'everest-gallery'); ?></label>
                <div class="eg-field">
                    <textarea class="eg-gallery-form-field" name="gallery_details[gallery_items][<?php echo $gallery_item_key; ?>][item_caption]"><?php echo esc_attr($gallery_item_details[ 'item_caption' ]); ?></textarea>
                </div>
            </div>
            <div class="eg-field-wrap">
                <label><?php _e('Item Link', 'everest-gallery'); ?></label>
                <div class="eg-field">
                    <input type="text" class="eg-gallery-form-field" name="gallery_details[gallery_items][<?php echo $gallery_item_key; ?>][item_link]" value="<?php echo esc_url($gallery_item_details[ 'item_link' ]); ?>">
                </div>
            </div>

            <div class="eg-field-wrap">
                <label><?php _e('Filters', 'everest-gallery'); ?></label>
                <div class="eg-field eg-gallery-item-filter-wrap" data-item-key="<?php echo $gallery_item_key; ?>">
                    <?php
                    if ( isset($gallery_details[ 'filter_options' ][ 'filters' ]) && count($gallery_details[ 'filter_options' ][ 'filters' ]) > 0 ) {
                        $item_filters = isset($gallery_details[ 'gallery_items' ][ $gallery_item_key ][ 'filters' ]) ? array_map('esc_attr', $gallery_details[ 'gallery_items' ][ $gallery_item_key ][ 'filters' ]) : array();
                        foreach ( $gallery_details[ 'filter_options' ][ 'filters' ] as $filter_key => $filter_details ) {
                            ?>
                            <div class="eg-gallery-item-each-filter eg-inline-block" data-filter-key="<?php echo $filter_key; ?>">
                                <label><span class="eg-filter-label"><?php echo $filter_details[ 'label' ]; ?></span><input type="checkbox" name="gallery_details[gallery_items][<?php echo $gallery_item_key; ?>][filters][]" value="<?php echo $filter_key; ?>" class="eg-gallery-form-field" <?php echo (in_array($filter_key, $item_filters)) ? 'checked="checked"' : ''; ?>></label>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <input type="hidden" class="eg-gallery-form-field" name="gallery_details[gallery_items][<?php echo $gallery_item_key; ?>][preview_image_url]'; ?>" value="<?php echo $gallery_item_details[ 'preview_image_url' ]; ?>"/>
        <input type="hidden" class="eg-gallery-form-field" name="gallery_details[gallery_items][<?php echo $gallery_item_key; ?>][total_likes]'; ?>" value="<?php echo $gallery_item_details[ 'total_likes' ]; ?>"/>
        <input type="hidden" class="eg-gallery-form-field" name="gallery_details[gallery_items][<?php echo $gallery_item_key; ?>][total_comments]'; ?>" value="<?php echo $gallery_item_details[ 'total_comments' ]; ?>"/>
        <input type="hidden" class="eg-gallery-form-field" name="gallery_details[gallery_items][<?php echo $gallery_item_key; ?>][gallery_item_type]'; ?>" value="instagram"/>
    </div>
</div>
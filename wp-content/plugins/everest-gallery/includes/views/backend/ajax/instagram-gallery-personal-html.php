<?php
// die('sdasdghjgh');
$username = sanitize_text_field($_POST[ 'instagram_username' ]);
$total_number = sanitize_text_field($_POST[ 'total_number' ]);
$access_token = sanitize_text_field($_POST[ 'access_token' ]);
$user_id = sanitize_text_field( $_POST[ 'user_id' ] );
require_once(EG_PATH . 'includes/views/backend/insta-fetch-personal-media.php');
 $response = $insta -> userMedia();
$body = $response;
    foreach ( $body['data'] as $instagram_feed ) {
        $preview_image_url =$instagram_feed['media_url'];
// 		die($preview_image_url);
        $title = $instagram_feed['username'];
        $link = $instagram_feed['permalink'];
        $caption = isset($instagram_feed['caption']) ? esc_attr($instagram_feed['caption']) : '';
        $total_likes = (isset($instagram_feed['like_count']) && $instagram_feed['like_count'] == 1) ? $instagram_feed['like_count'] : 0;
        $total_comments = (isset($instagram_feed['comments_count'])) ? $instagram_feed['comments_count'] : 0;
        $gallery_item_key = $this->generate_random_string(15);
        $field_name_prefix = "gallery_details[gallery_items][eg_item_$gallery_item_key]";
        ?>
        <div class="eg-each-gallery-item" data-gallery-item-key="<?php echo 'eg_item_' . $gallery_item_key; ?>">
            <div class="eg-gallery-image-preview">
                <div class="eg-gallery-item-actions-wrap">
                    <a href="javascript:void(0)" class="eg-move-item"><span><?php _e('Move', 'everest-gallery'); ?></span></a>
                    <a href="javascript:void(0)" class="eg-settings-item"><span><?php _e('Settings', 'everest-gallery'); ?></span></a>
                    <a href="javascript:void(0)" class="eg-copy-item"><span><?php _e('Copy', 'everest-gallery'); ?></span></a>
                    <a href="javascript:void(0)" class="eg-delete-item"><span><?php _e('Delete', 'everest-gallery'); ?></span></a>
                </div>
                
                        
                <img src="<?php echo $preview_image_url; ?>"/>
            </div>
            <div class="eg-gallery-item-detail-wrap" style="display:none;">
                <div class="eg-overlay"></div>
                <div class="eg-gallery-item-detail-fields">
                    <h4><?php _e('Item Details', 'everest-gallery'); ?><span class="dashicons dashicons-no eg-close-popup"></span></h4>
                    <div class="eg-field-wrap">
                        <label><?php _e('Item Title', 'everest-gallery'); ?></label>
                        <div class="eg-field">
                            <input type="text" class="eg-gallery-form-field" name="<?php echo $field_name_prefix . '[item_title]'; ?>" value="<?php echo $title; ?>"/>
                        </div>
                    </div>
					<div class="eg-field-wrap">
                        <label><?php _e('Item Url', 'everest-gallery'); ?></label>
                        <div class="eg-field">
                            <input type="text" class="eg-gallery-form-field" name="<?php echo $field_name_prefix . '[item_url]'; ?>" value="<?php echo $preview_image_url; ?>"/>
                        </div>
                    </div>
                    <?php
$texter=parse_url($preview_image_url, PHP_URL_QUERY);
list($urlone , $urltwo, $urlthree, $urlfour, $urlfive, $urlsix,$urlseven,$urleight,$urlnine) = explode("&", $texter);
?>
                    <div class="eg-field-wrap url-division">
                        <label><?php _e('Item Url 2', 'everest-gallery'); ?></label>
                        <div class="eg-field">
                            
                            <input type="text" class="eg-gallery-form-field" name="<?php echo $field_name_prefix . '[item_url_two]'; ?>" value="<?php 
                            echo $urltwo;
                              ?>"/>
                        </div>
                    </div>
                    <div class="eg-field-wrap url-division">
                        <label><?php _e('Item Url 3', 'everest-gallery'); ?></label>
                        <div class="eg-field">
                            
                            <input type="text" class="eg-gallery-form-field" name="<?php echo $field_name_prefix . '[item_url_three]'; ?>" value="<?php 
                            echo $urlthree;
                              ?>"/>
                        </div>
                    </div>
                    <div class="eg-field-wrap url-division">
                        <label><?php _e('Item Url 4', 'everest-gallery'); ?></label>
                        <div class="eg-field">
                            
                            <input type="text" class="eg-gallery-form-field" name="<?php echo $field_name_prefix . '[item_url_four]'; ?>" value="<?php 
                            echo $urlfour;
                              ?>"/>
                        </div>
                    </div>
                    <div class="eg-field-wrap url-division">
                        <label><?php _e('Item Url 5', 'everest-gallery'); ?></label>
                        <div class="eg-field">
                            
                            <input type="text" class="eg-gallery-form-field" name="<?php echo $field_name_prefix . '[item_url_five]'; ?>" value="<?php 
                            echo $urlfive;
                              ?>"/>
                        </div>
                    </div>
                    <div class="eg-field-wrap url-division">
                        <label><?php _e('Item Url 6', 'everest-gallery'); ?></label>
                        <div class="eg-field">
                            
                            <input type="text" class="eg-gallery-form-field" name="<?php echo $field_name_prefix . '[item_url_six]'; ?>" value="<?php 
                            echo $urlsix;
                              ?>"/>
                        </div>
                    </div>
                    <div class="eg-field-wrap url-division">
                        <label><?php _e('Item Url 7', 'everest-gallery'); ?></label>
                        <div class="eg-field">
                            
                            <input type="text" class="eg-gallery-form-field" name="<?php echo $field_name_prefix . '[item_url_seven]'; ?>" value="<?php 
                            echo $urlseven;
                              ?>"/>
                        </div>
                    </div>
                     <div class="eg-field-wrap url-division">
                        <label><?php _e('Item Url 8', 'everest-gallery'); ?></label>
                        <div class="eg-field">
                            
                            <input type="text" class="eg-gallery-form-field" name="<?php echo $field_name_prefix . '[item_url_eight]'; ?>" value="<?php 
                            echo $urleight;
                              ?>"/>
                        </div>
                    </div>
                     <div class="eg-field-wrap url-division">
                        <label><?php _e('Item Url 9', 'everest-gallery'); ?></label>
                        <div class="eg-field">
                            
                            <input type="text" class="eg-gallery-form-field" name="<?php echo $field_name_prefix . '[item_url_nine]'; ?>" value="<?php 
                            echo $urlnine;
                              ?>"/>
                        </div>
                    </div>
                    <div class="eg-field-wrap">
                        <label><?php _e('Item Caption', 'everest-gallery'); ?></label>
                        <div class="eg-field">
                            <textarea class="eg-gallery-form-field" name="<?php echo $field_name_prefix . '[item_caption]'; ?>"><?php echo $caption; ?></textarea>
                        </div>
                    </div>
                    <div class="eg-field-wrap">
                        <label><?php _e('Item Link', 'everest-gallery'); ?></label>
                        <div class="eg-field">
                            <input type="text" class="eg-gallery-form-field" name="<?php echo $field_name_prefix . '[item_link]'; ?>" value="<?php echo $link; ?>"/>
                        </div>
                    </div>
                    <div class="eg-field-wrap">
                        <label><?php _e('Filters', 'everest-gallery'); ?></label>
                        <div class="eg-field eg-gallery-item-filter-wrap" data-item-key="eg_item_<?php echo $gallery_item_key; ?>">
                            <?php
                            if ( isset($_POST[ 'filters' ]) && !empty($_POST[ 'filters' ]) ) {
                                $filters = array_map('sanitize_text_field', $_POST[ 'filters' ]);
                                foreach ( $filters as $filter_key => $filter_label ) {
                                    ?>
                                    <div class="eg-gallery-item-each-filter eg-inline-block" data-filter-key="<?php echo $filter_key; ?>">
                                        <label><span class="eg-filter-label"><?php echo $filter_label; ?></span><input type="checkbox" name="<?php echo $field_name_prefix . '[filters][]' ?>" value="<?php echo $filter_key ?>" class="eg-gallery-form-field"/></label>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>


                <input type="hidden" class="eg-gallery-form-field" name="<?php echo $field_name_prefix . '[preview_image_url]'; ?>" value="<?php echo $preview_image_url; ?>"/>
                <input type="hidden" class="eg-gallery-form-field" name="<?php echo $field_name_prefix . '[total_likes]'; ?>" value="<?php echo $total_likes; ?>"/>
                <input type="hidden" class="eg-gallery-form-field" name="<?php echo $field_name_prefix . '[total_comments]'; ?>" value="<?php echo $total_comments; ?>"/>
                <input type="hidden" class="eg-gallery-form-field" name="<?php echo $field_name_prefix . '[gallery_item_type]'; ?>" value="instagram"/>
                <?php // $this->print_array($attachment);   ?>
            </div>
        </div>
        <?php
    }
//     $gallery_html = ob_get_contents();
//     ob_end_clean();
//     $error = 0;
//     $response = $gallery_html;
// } else {

//     $error = 1;
//     $response = isset($body[ 'error_message' ]) ? esc_attr($body[ 'error_message' ]) : __('Something went wrong.Please try again later.', 'everest-gallery');
// }
// $response_array = array( 'error' => $error, 'response' => $response );
// echo json_encode($response_array);
// die();
////$this->print_array($connection);
//var_dump($url);
//$instagram_images = $this->fetch_instagram_images(0, $url, 0, 0);
//var_dump($instagram_images);
//$this->print_array($connection);

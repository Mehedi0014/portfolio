<?php
// die('ghjgh');
defined( 'ABSPATH' ) or die( "No script kiddies please!" );

class InstaWCDPF{

    function userID(){
        $username = strtolower( $this -> username ); // sanitization
        $token = $this -> access_token;
		$instaid = $this -> user_id;
        if ( ! empty( $username ) && ! empty( $token ) ) {
            $url = "https://api.instagram.com/v1/users/search?q=" . $username . "&access_token=" . $token;
            $get = wp_remote_get( $url );
            $response = wp_remote_retrieve_body( $get );
            $json = json_decode( $response );
            if ( isset( $json -> data ) ) {
                foreach ( $json -> data as $user ) {
                    if ( $user -> username == $username ) {
//                         return $user -> id;
                        return $instaid;
                    }
                }
            }
            return '00000000'; // return this if nothing is found
        }
    }

    function get_remote_data_from_instagram_in_json( $url ){
        $content = wp_remote_get( $url );
        if ( isset( $content -> errors ) ) {
            $content = json_encode( array( 'meta' => array( 'error_message' => $content -> errors[ 'http_request_failed' ][ '0' ] ) ) );
            $content = json_decode( $content, true );
            return $content;
        } else {
            $response = wp_remote_retrieve_body( $content );
            $json = json_decode( $response, true );
            return $json;
        }
    }

    /**
     * get the user media
     * @return json
     */
    function userMedia(){
		$total_number = sanitize_text_field($_POST[ 'total_number' ]);
        $url = 'https://graph.instagram.com/'. $this -> user_id.'/media?fields=id,caption,media_type,media_url,permalink,thumbnail_url,timestamp,username&limit='.$total_number.'&access_token='. $this -> access_token;
        $json = self::get_remote_data_from_instagram_in_json( $url );
        return $json;
    }

    //retrive user info
    function userInfo(){
//         $url = 'https://api.instagram.com/v1/users/self/?access_token=' . $this -> access_token;
        $url = 'https://graph.facebook.com/v10.0/'. $this -> user_id.'?fields=username,website,name,ig_id,id,profile_picture_url,biography,follows_count,followers_count,media_count&access_token='. $this -> access_token;
        $json = self:: get_remote_data_from_instagram_in_json( $url );
        return $json;
    }

}

$insta = new InstaWCDPF();
$insta -> username = $username;
$insta -> access_token = $access_token;
$insta -> user_id = $user_id;
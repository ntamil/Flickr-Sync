<h3> Flickr Sync </h3>
<h5> Synced photos will be shown in Media library </h5>
<form action="" method="post" enctype="multipart/form-data">
	<p>API Key * <br/>
		<input type="text" name="apiKey" size="60" required="true" value="2d7547049310f5b1a66bb39a206f46e5"/>
	</p>
	<p>User Id * <br/>
		<input type="text" name="userId" size="42" required="true" value="163280394@N04" />
	</p>
	<p>Tag<br/>
		<textarea rows="3" cols="40" name="tag">sunset</textarea>
	</p>
	<p>
		<input type="submit" name="submit" value="Sync Now">
	</p>

<h4> Update photos into Footer Options ( Column 1-4 Images ) </h4>
	<p>
		<input type="submit" name="update" value="Update Now">
	</p>
</form>

<?php

	if ( isset( $_POST['submit'] ) ){
		//$api_key = '2d7547049310f5b1a66bb39a206f46e5';
		//$user_id = '163280394@N04';
		//$tag = 'sunset';

		$api_key = $_POST['apiKey'];
		$user_id = $_POST['userId'];
		$tag = $_POST['tag'];

		$perPage = 25;
		$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
		$url.= '&api_key='.$api_key;
		$url.= '&user_id='.$user_id;
		$url.= '&tags='.$tag;
		$url.= '&per_page='.$perPage;
		$url.= '&format=json';
		$url.= '&nojsoncallback=1';

		$response = json_decode(file_get_contents($url));
		if(count($response) > 0) {
			if(isset($response->photos->photo) && count($response->photos->photo) > 0) {
				$photo_array = $response->photos->photo;
				foreach($photo_array as $single_photo){
					$farm_id = $single_photo->farm;
					$server_id = $single_photo->server;
					$photo_id = $single_photo->id;
					$secret_id = $single_photo->secret;
					$size = 'm';
					$title = $single_photo->title;
					$found_post = null;
					$filename = $photo_id.'_'.$secret_id.'.jpg';

					if ( $posts = get_posts( array( 
						'name' => $filename, 
						'post_type' => 'attachment',
					) ) ) $found_post = $posts[0];
					if (  is_null( $found_post ) ){
						//$photo_url = 'https://farm'.$farm_id.'.staticflickr.com/'.$server_id.'/'.$photo_id.'_'.$secret_id.'_'.$size.'.'.'jpg';
						$photo_url = 'https://farm'.$farm_id.'.staticflickr.com/'.$server_id.'/'.$photo_id.'_'.$secret_id.'.jpg';

						$uploaddir = wp_upload_dir();
						$uploadfile = $uploaddir['path'] . '/' . $filename;

						//$contents= file_get_contents('https://farm5.staticflickr.com/4772/26875324398_05f224b938.jpg');
						$contents= file_get_contents($photo_url);
						$savefile = fopen($uploadfile, 'w');
						fwrite($savefile, $contents);
						fclose($savefile);
						chmod($uploadfile,0777);
						$wp_filetype = wp_check_filetype(basename($filename), null );

						$attachment = array(
							'post_mime_type' => $wp_filetype['type'],
							'post_title' => $filename,
							'post_content' => 'fromFlickr',
							'post_status' => 'inherit'
						);

						$attach_id = wp_insert_attachment( $attachment, $uploadfile );

						$imagenew = get_post( $attach_id );
						$fullsizepath = get_attached_file( $imagenew->ID );
						$attach_data = wp_generate_attachment_metadata( $attach_id, $fullsizepath );
						wp_update_attachment_metadata( $attach_id, $attach_data );	
						echo '<br> </b> Success </b> - '.$filename.' <br>';
					} else {
						echo '<br> <b> Already exists ! </b> - '.$filename.' <br>';
					}
				}
			} else {
				echo '<br> <b> No Photos - </b> '.$response->message.' <br>';
			}
		} else {
			echo '<br> <b> No Results - </b> '.$response->message.' <br>';
		}
		exit;
	}

	if ( isset( $_POST['update'] ) ){
 		//get last 16 attachment in wp_post.
		global $wpdb;
		$results = $wpdb->get_results( "SELECT ID as 'id' FROM wp_posts WHERE post_content = 'fromFlickr' order by id limit 0,16" );
		$divCnt = count($results)/4;
		$i=0;
		$j=1;
		foreach($results as $res) {
			$result1[$i][]=$res->id;
			if($j >= $divCnt) {
				$i++;
				$j=1;
			} else {
				$j++;
			}
		}
		foreach($result1 as $key1=>$val1) {
			$res1[] = implode(',',$val1);
		}
 		//get footer theme options.
		$optsArr = get_option("vpt_option");
		$optsArr['col_1_images'] = isset($res1[0]) ? $res1[0] : '';
		$optsArr['col_2_images'] = isset($res1[1]) ? $res1[1] : '';
		$optsArr['col_3_images'] = isset($res1[2]) ? $res1[2] : '';
		$optsArr['col_4_images'] = isset($res1[3]) ? $res1[3] : '';
		update_option('vpt_option',$optsArr);
		echo '<br> Updated successfully... <br>';
		exit;
	}

?>

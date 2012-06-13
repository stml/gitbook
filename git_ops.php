<?
class GitOps {

	function curl($url) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($ch); 
		curl_close($ch); 
		try {
			$output = json_decode($output);
			return $output;
			}
		catch( Exception $exception ) {
			return null;
			}
		}
		
	function getRepo($user,$repo) {
		$url = 'https://api.github.com/repos/'.$user.'/'.$repo;
		echo $url;
		$response = self::curl($url);
		return $response;
		}
	
	}	
	
	
?>
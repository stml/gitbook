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

//stdClass Object ( [open_issues] => 0 [mirror_url] => [svn_url] => https://github.com/stml/timelinez [pushed_at] => 2012-06-13T12:16:00Z [language] => JavaScript [description] => [git_url] => git://github.com/stml/timelinez.git [full_name] => stml/timelinez [has_downloads] => 1 [watchers] => 1 [fork] => [clone_url] => https://github.com/stml/timelinez.git [ssh_url] => git@github.com:stml/timelinez.git [html_url] => https://github.com/stml/timelinez [created_at] => 2012-06-11T14:22:29Z [url] => https://api.github.com/repos/stml/timelinez [size] => 180 [homepage] => [private] => [updated_at] => 2012-06-13T12:16:00Z [owner] => stdClass Object ( [login] => stml [gravatar_id] => 5f9a6b2895899bf32c9f803af4923f4b [avatar_url] => https://secure.gravatar.com/avatar/5f9a6b2895899bf32c9f803af4923f4b?d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-140.png [url] => https://api.github.com/users/stml [id] => 229521 ) [name] => timelinez [has_wiki] => 1 [has_issues] => 1 [id] => 4625824 [forks] => 1 )	
	function getRepo($user,$repo) {
		$url = 'https://api.github.com/repos/'.$user.'/'.$repo;
		$response = self::curl($url);
		return $response;
		}

// Array ( [0] => stdClass Object ( [type] => file [sha] => db4b85dfd7b4d4bda74766c6afd0cac29e9ddceb [_links] => stdClass Object ( [html] => https://github.com/stml/timelinez/blob/master/README.md [git] => https://api.github.com/repos/stml/timelinez/git/blobs/db4b85dfd7b4d4bda74766c6afd0cac29e9ddceb [self] => https://api.github.com/repos/stml/timelinez/contents/README.md ) [size] => 19 [name] => README.md [path] => README.md ) 

	function getContents($user,$repo,$path) {
		$url = 'https://api.github.com/repos/'.$user.'/'.$repo.'/contents/'.$path;
		$response = self::curl($url);
		return $response;
		}
	
	}	
	
	
?>
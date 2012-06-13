<?

include('git_ops.php');
$git = new GitOps();

$user = 'stml';
$repo = 'timelinez';

$repodata = $git->getRepo($user,$repo);

?>

<h1><?=$repodata->full_name;?></h1>

<ul>
<li>URL: <?=$repodata->html_url;?></li>
<li>Watchers: <?=$repodata->watchers;?></li>
<li>Open issues: <?=$repodata->open_issues;?></li>
<li>Last push: <?=$repodata->pushed_at;?></li>
<li>Created at: <?=$repodata->created_at;?></li>
<li>Size: <?=$repodata->size;?></li>
<li>Updated at: <?=$repodata->updated_at;?></li>
<li>Forks: <?=$repodata->forks;?></li>
</ul>

<h4>Files</h4>
<ul>
<? 
$path = ''; 
$contents = $git->getContents($user,$repo,$path); 
foreach($contents as $content) {
	if ($content->type == 'file') {
		echo '<li>'.$content->name.'</a></li>';
		}
	else if ($content->type == 'dir') {
		echo '<li>'.$content->name.' &rarr;</li>';
		}
	else {	
		echo '<li>'.$content->name.' <strong>'.$content->type.'</strong></li>';
		}
	}
?>
</ul>
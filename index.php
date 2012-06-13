<?

include('git_ops.php');
$git = new GitOps();

$user = 'stml';
$repo = 'timelinez';

print_r($git->getRepo($user,$repo));

?>
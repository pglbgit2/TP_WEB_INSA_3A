<?php
class core {
    protected $currentController = 'pages';
    protected $currentMadhat = 'index';
    protected $params = [];

    public function __construct(){
        $url = $this->getUrl();
        //controleur

        $this->params = $url ? array_values(url):[];
    }

    public function getUrl(){
        $notUpdatedUrl = $_GET['url'];
        // time or ctrom pour nettoyer
        $updatedUrl = explode($notUpdatedUrl,'/');
        return $updatedUrl;
    }
}

$c = new core();
$u = $c->getUrl();
var_dump($u)

?>

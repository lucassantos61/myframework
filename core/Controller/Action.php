<?php
namespace Core\Controller;
class Action
{
    protected $view;
    protected $action;

    public function __construct()
    {
        $this->view = new \stdClass();
    }
    private function renderLayout()
    {
        return include_once '../App/Views/layout.phtml';
    }
    public function render($action,$layout = true)
    {
        $this->action = $action;
        return $layout === true && file_exists('../App/Views/layout.phtml')?
        $this->renderLayout() : $this->content($view);
    }
    public function content()
    {
        $class = get_class($this);
        $singleClassName = strtolower(str_replace("App\\Controllers\\","",$class));
        include_once '../App/Views/'.$singleClassName."/".$this->action.".phtml";
    }
}


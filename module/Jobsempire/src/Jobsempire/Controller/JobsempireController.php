<?php
namespace Jobsempire\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class JobsempireController extends AbstractActionController
{
    public function indexAction() {
        $views = new ViewModel(array('text' => 'Hello World!'));
        return $views;
    }
}
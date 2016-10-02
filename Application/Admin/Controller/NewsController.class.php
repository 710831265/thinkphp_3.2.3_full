<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function index(){
        $this->show('123456','utf-8');
    }
}
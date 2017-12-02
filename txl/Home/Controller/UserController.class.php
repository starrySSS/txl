<?php

    namespace Home\Controller;
    use Think\Controller;

    class UserController extends Controller{
        function login(){
            $this->display();
            echo "loginning";
        }
    }
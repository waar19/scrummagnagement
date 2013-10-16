<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TareasController extends AppController{
    Var $name = 'Tareas';
    function index(){
        $this->set('tareas',$this->Tarea->find('all'));
    }
}
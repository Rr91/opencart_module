<?php  

class ControllerModuledivide extends Controller {

 public function index() {

 

 $this->load->language('module/divide'); //подключаем любой языковой файл

 $data['heading_title'] = $this->language->get('heading_title'); //объявляем переменную heading_title с данными из языкового файла

 

 $data['content']="Ваш контент";        //можно задать данные, сразу в контроллере

 

 $this->load->model('catalog/product'); //подключаем любую модель из OpenCart

 

 $data['product_info']=$this->model_catalog_product->getProduct(7); //используем метод подключенной модели, например getProduct(42) – информация о продукте id  42

 

 //стандартная процедура для контроллеров OpenCart, выбираем файл представления модуля для вывода данных

 if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/divide.tpl')) {

 return $this->load->view($this->config->get('config_template') . '/template/module/divide.tpl', $data);

 } else {

 return $this->load->view('default/template/module/divide.tpl', $data);

 } 

 

 }

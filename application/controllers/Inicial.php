<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inicial extends CI_Controller
{
    private $_include = "include/inicial/";
    private $_base    = "inicial/";

    public function index()
    {
        $lang_param = $this->input->get('lang');
        if ($lang_param && in_array($lang_param, ['en', 'pt'])) {
            $this->session->set_userdata('lang', $lang_param);
        }

        $current_lang = $this->session->userdata('lang') ?: 'en';

        $this->config->load('translations');
        $translations = $this->config->item('translations');

        $data = [
            'lang'         => $translations[$current_lang],
            'current_lang' => $current_lang,
        ];

        $this->load->view($this->_include . 'cabecalho', $data);
        $this->load->view($this->_include . 'menu', $data);
        $this->load->view($this->_base . 'index', $data);
        $this->load->view($this->_include . 'rodape', $data);
    }
}

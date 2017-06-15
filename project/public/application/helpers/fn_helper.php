<?php
function getBanner()
{
    $ci =& get_instance();
    $ci->load->model('banner_model', 'banner');
    $ci->banner->sort('id', 'DESC');
    $ci->banner->isActive();
    $rs = $ci->banner->fetchAll();
    return $rs;
}
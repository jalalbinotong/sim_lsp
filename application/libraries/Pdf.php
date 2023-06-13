<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once dirname(__FILE__) . '/TCPDF/tcpdf.php';
class Pdf extends TCPDF
{
    protected $CI;
    function __construct()
    {
        $this->CI =& get_instance();
    }
}
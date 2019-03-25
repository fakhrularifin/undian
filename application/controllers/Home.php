<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data['nama'] = ['Udin', 'Usro', 'Upin', 'Ipin', 'Unyil', 'Qwerty', 'Asdf', 'Ucok'];
        $this->load->view('v_undian', $data, FALSE);
    }

}

/* End of file Home.php */

?>
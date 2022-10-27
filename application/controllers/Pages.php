<?php
class Pages extends CI_Controller {

    public function view($page = 'home')
    {
        // file_existsでファイルの存在有無をチェック
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404(); // 404ページ（デフォルトのエラーページ）を表示
        }

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}

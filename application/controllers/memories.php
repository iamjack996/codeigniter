<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class memories extends CI_Controller {

  public function view(){
			// if(!file_exists(APPPATH.'views/memories/'.$page.'.php')){
			// 	show_404();
			// }
			$data['title'] = 'memories';
      $data['memories'] = $this->memories_model->get_memories();
      $this->load->view('memories/memories', $data);
		}

    public function viewOne($slug = NULL){
      $data['memories'] = $this->memories_model->get_memories($slug);
      if(empty($data['memories'])){
        show_404();
      }
      $data['title'] = $data['memories']['title'];

      $this->load->view('memories/showOneMemo', $data);
    }

    public function createMemo(){
      $data['title'] = 'Create Memories';
      $this->load->view('memories/createMemo', $data);
  	}

    public function createPost(){

      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('slug', 'Slug', 'required');
			$this->form_validation->set_rules('ps', 'Description Content', 'required');

      if($this->form_validation->run() === FALSE){
        $data['title'] = 'Create Memories';
        $this->load->view('memories/createMemo', $data);
        // redirect('GetCreate');
      }else{
        $this->memories_model->create();
        redirect('memories');
        // $this->load->view('memories/memories', $data);
      }
  	}

    public function updateMemo($slug = NULL){
      $data['memories'] = $this->memories_model->get_memories($slug);
      if(empty($data['memories'])){
        show_404();
      }
      $data['title'] = 'Edit This Memories';
      $datatype = $data['memories']['type'];
      switch ($datatype) {
          case 'table-secondary':
              $color = '白色';
              break;
          case 'table-primary':
              $color = '天空藍';
              break;
          case 'table-success':
              $color = '草地綠';
              break;
          case 'table-danger':
              $color = '標記紅';
              break;
          case 'table-warning':
              $color = '清新橘';
              break;
          case 'table-info':
              $color = '靛藍色';
              break;
          default:
              $color = '預設';
              break;
      }
      $data['color'] = $color;
      $this->load->view('memories/editMemo', $data);
    }

    public function updatePost($slug = NULL){
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('slug', 'Slug', 'required');
      $this->form_validation->set_rules('ps', 'Description Content', 'required');

      if($this->form_validation->run() === FALSE){
        $data['title'] = 'Edit This Memories';
        $this->load->view('memories/editMemo', $data);
      }else{
        $this->memories_model->update($slug);
        redirect('memories');
      }
    }

    public function delete($slug = NULL){
      $this->memories_model->delete($slug);
      redirect('memories');
    }


}

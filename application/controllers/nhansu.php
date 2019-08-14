<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nhansu extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
	}

    public function index()
	{
        $this->load->view('login_view');
    }
    public function ns()
	{
       
        $this->load->model('nhansu_model');
        $ketqua = $this->nhansu_model->getAllData();
        $ketqua = array("mangketqua"=>$ketqua);
        // truyền sang view
        $this->load->view('nhansu_view',$ketqua);
        
	
        
    }

    public function add_nhansu()
    {
        
       $ten = $this->input->post('ten');
       $tuoi = $this->input->post('tuoi');
       $gia = $this->input->post('gia');
       $linkfb = $this->input->post('linkfb');
       $sdt = $this->input->post('sdt');
       

            $target_dir = "anh/";
            $target_file = $target_dir . basename($_FILES["anhavatar"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["anhavatar"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "trùng";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["anhavatar"]["size"] > 50000000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Chỉ nhận, file JPG, JPEG, PNG & GIF .";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["anhavatar"]["tmp_name"], $target_file)) {
                   // echo "The file ". basename( $_FILES["anhavatar"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            $anhavatar = base_url()."anh/". basename( $_FILES["anhavatar"]["name"]);
           
            //load_mode
            $this->load->model('nhansu_model');
            $trangthai = $this->nhansu_model->insertDataToMysql($ten, $tuoi, $sdt, $anhavatar, $linkfb, $gia);
            if ($trangthai)
            {
                
                $this->load->view('insert_thanhcong_view');
                
            }
            else
            {
                echo "thất bại";
            }
            
    }
  public function getdata()
  {
     
  }    
}

/* End of file  */
/* Location: ./application/controllers/ */
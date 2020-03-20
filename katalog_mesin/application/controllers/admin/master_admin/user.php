
    <?php 
 
 class User extends CI_Controller{
  
     function __construct(){
         parent::__construct();		
         $this->load->model('m_user');
                 $this->load->helper('url');
     }
  
     function index(){
         $data['admin'] = $this->m_user->tampil_data()->result();
         $this->load->view('headerfooter/header');
     $this->load->view('headerfooter/topbar');
         $this->load->view('admin/master_admin/data_admin',$data);
     }

     function tambah(){
         $this->load->view('headerfooter/header');
     $this->load->view('headerfooter/topbar');
         $this->load->view('admin/master_admin/v_input');
     }

     function tambah_aksi(){
         $nama = $this->input->post('nama');
         $alamat = $this->input->post('alamat');
         $tlp = $this->input->post('tlp');
         $username = $this->input->post('username');
         $password = $this->input->post('password');

         $data = array(
             'nama' => $nama,
             'alamat' => $alamat,
             'tlp' => $tlp,
             'username' => $username,
             'password' => $password
         );
         $this->m_user->input_data($data,'admin');
         redirect('admin/master_admin/user/index');

         $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                 </div>');
     }

     function hapus($id){
         $where = array('id' => $id);
         $this->m_user->hapus_data($where,'admin');
         redirect('admin/master_admin/user');
     }

     function edit($id){
         $where = array('id' => $id);
         $data['admin'] = $this->m_user->edit_data($where,'admin')->result();
         $this->load->view('headerfooter/header');
         $this->load->view('headerfooter/topbar');
         $this->load->view('admin/master_admin/v_edit',$data);

     }

     function update(){
         $id = $this->input->post('id');
         $nama = $this->input->post('nama');
         $alamat = $this->input->post('alamat');
         $tlp = $this->input->post('tlp');
         $username = $this->input->post('username');
         $password = $this->input->post('password');

         $data = array(
             'nama' => $nama,
             'alamat' => $alamat,
             'tlp' => $tlp,
             'username' => $username,
             'password' => $password
         );

         $where = array(
             'id' => $id
         );

         $this->m_user->update_data($where,$data,'admin');
         redirect('admin/master_admin/user/index');
     }


 }
 
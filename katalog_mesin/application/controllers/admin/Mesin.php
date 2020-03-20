    <!-- controller untuk mengatur CRUD katalog mesin -->
    <?php 
 
    class Mesin extends CI_Controller{
     // code construct akan berjalan otomatis saat controller diakses
        function __construct(){
            parent::__construct();	
            // untuk me load models m_mesin		
            $this->load->model('m_mesin');
            // untuk me load helper url
                    $this->load->helper('url');
        }
     // fungsi ini untuk menampilkan data dari database pad view tampil_data
        function index(){
            $data['katalog_mesin'] = $this->m_mesin->tampil_data()->result();
            $this->load->view('headerfooter/header');
        $this->load->view('headerfooter/topbar');
            $this->load->view('admin/data_mesin',$data);
        }
        // menginputkan data baru
        function tambah(){
            $this->load->view('headerfooter/header');
        $this->load->view('headerfooter/topbar');
            $this->load->view('admin/v_input');
        }

        // method yang berjalan ketika button submit ditekan
	    // merekam data dar view, meyimpan ke database dan mengembalikan ke index
        function tambah_aksi(){
            $nm_mesin = $this->input->post('nm_mesin');
            $jm_baik = $this->input->post('jm_baik');
            $jm_rusak = $this->input->post('jm_rusak');
        
         // array yang menjadikan ketiga data diatas menjadi 1 variabel
		// query ini akan disertakan ke dalam query insert pada m_mesin
            $data = array(
                'nm_mesin' => $nm_mesin,
                'jm_baik' => $jm_baik,
                'jm_rusak' => $jm_rusak
            );
            $this->m_mesin->input_data($data,'katalog_mesin');
            redirect('admin/mesin/index');

            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                    </div>');
        }

   // method hapus berfungsi untuk menghapus data dari database
	// parameter yang dibutuhka adalah $id yg berasal dari id mesin
        function hapus($id){
            $where = array('id_mesin' => $id);
            $this->m_mesin->hapus_data($where,'katalog_mesin');
            redirect('admin/mesin');
        }

    // method edit berfungsi untuk mengarahkan user ke v_edit yang merupakan form view edit
	// dan mengedit data dari database
        function edit($id){
            $where = array('id_mesin' => $id);
            $data['katalog_mesin'] = $this->m_mesin->edit_data($where,'katalog_mesin')->result();
            $this->load->view('headerfooter/header');
            $this->load->view('headerfooter/topbar');
            $this->load->view('admin/v_edit',$data);

        }

    // method update dapat dijalankan ketika tombol submit pada v_edit
	// method ini berfungsi untuk merekam data, memperbarui data yang dituju
	// dan mengarahkan user menuju crud method index
        function update(){
            $id = $this->input->post('id_mesin');
            $nm_mesin = $this->input->post('nm_mesin');
            $jm_baik = $this->input->post('jm_baik');
            $jm_rusak = $this->input->post('jm_rusak');

            $data = array(
                'nm_mesin' => $nm_mesin,
                'jm_baik' => $jm_baik,
                'jm_rusak' => $jm_rusak
            );

            
		// berfungsi untuk menyimpan id user ke array $where
            $where = array(
                'id_mesin' => $id
            );

        // merupakan method untuk menjalankan query update
		// $where merupakan id yang diperlukan
		// $data merupakan ketiga values yg terdefinisi tadi
		// user merupakan nama tabel pada database
            $this->m_mesin->update_data($where,$data,'katalog_mesin');
            
            //method untuk kembali pada index 
            redirect('admin/mesin/index');
        }


    }
    
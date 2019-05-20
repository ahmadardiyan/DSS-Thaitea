<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['waralaba'] = $this->Admin_model->getAll('waralaba');

        $this->load->view('partials/header');
        $this->load->view('home/index', $data);
        $this->load->view('partials/footer');
    }

    public function rekomendasi()
    {
        $this->form_validation->set_rules('jarak', 'jarak', 'required|numeric');
        $this->form_validation->set_rules('laba', 'laba', 'required|numeric');
        $this->form_validation->set_rules('modal', 'modal', 'required|numeric');
        $this->form_validation->set_rules('jumlah_cabang', 'jumlah_cabang', 'required|numeric');

        if ($this->form_validation->run() === false) {

            $this->load->view('partials/header');
            $this->load->view('home/rekomendasi');
            $this->load->view('partials/footer');

        } else {
            // 1. Bobot kriteria dari user (C)
            // $C1 = JARAK
            // $C2 = LABA
            // $C3 = MODAL
            // $C4 = JUMLAH CABANG

            $C1 = $this->input->post('jarak');
            $C2 = $this->input->post('laba');
            $C3 = $this->input->post('modal');
            $C4 = $this->input->post('jumlah_cabang');

            // 2. Perbaikan Bobot
            // Jumlah Bobot Kriteria
            // $totalW = $C1 + $C2 + $C3 + $C4;
            // $W[i] = $C[i]/$totalW;

            $totalW = $C1 + $C2 + $C3 + $C4;

            $W1 = $C1 / $totalW; // -
            $W2 = $C2 / $totalW; //+
            $W3 = $C3 / $totalW; // -
            $W4 = $C4 / $totalW; // +

            // 3. Menghitung Vektor S
            // S[i] = C1^-W1 * C2^W2 * C3^-W3 * C4^W4

            $data['waralaba'] = $this->Admin_model->getAll('waralaba');

            foreach ($data['waralaba'] as $waralaba) {
                $vektorS[] = [
                    'id'    => $waralaba['id'],
                    'nama'  => $waralaba['nama_waralaba'],
                    'nilai' => pow($waralaba['bobot_jarak'], -$W1) * pow($waralaba['bobot_laba'], $W2) * pow($waralaba['bobot_modal'], -$W3) * pow($waralaba['bobot_jumlah_cabang'], $W4)];
            }

            // 4. Menghitung Preferensi (V)
            // V[i] = S[i] / totalS
            //totalS = S1 + S2 + S3 + S4 + S5

            $totalS = 0;
            foreach ($vektorS as $s) {
                $totalS = $totalS + $s['nilai'];
            }

            //V (Preferensi)
            $i = 0;
            foreach ($vektorS as $s) {
                $v = $s['nilai'] / $totalS;
                $vektorS[$i]['nilai'] = $v;
                $i++;
            }
    
            // 5. Pengurutan / Perangkingan
            
            function array_orderby()
            {
                $args = func_get_args();
                $data = array_shift($args);
                foreach ($args as $n => $field) {
                    if (is_string($field)) {
                        $tmp = array();
                        foreach ($data as $key => $row) {
                            $tmp[$key] = $row[$field];
                        }

                        $args[$n] = $tmp;
                    }
                }
                $args[] = &$data;
                call_user_func_array('array_multisort', $args);
                return array_pop($args);
            }

            $sorted = array_orderby($vektorS, 'nilai', SORT_DESC);
            $data['sorted'] = $sorted;

            $this->hasilRekomendasi($data);
        }
    }

    public function hasilRekomendasi($data = null)
    {
        $this->load->view('partials/header');
        $this->load->view('home/hasil', $data);
        $this->load->view('partials/footer');
    }

}

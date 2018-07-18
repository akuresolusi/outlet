<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
	}

	public function today(){
		$data['isi'] =  "laporan/laporan-today";
		$data['title'] = 'Pendapatan Hari Ini';
		$this->load->view('layout',$data);
	}

	// PEMBELIAN
	public function pembelian(){
		$data['isi'] =  "laporan/laporan-pembelian";
		$data['title'] = 'Laporan Pembelian';
		$this->load->view('layout',$data);
	}
	public function rincianpembelian(){
		$data['isi'] =  "laporan/filter-pembelian";
		$data['title'] = 'Laporan Pembelian';
		$this->load->view('layout',$data);
	}
	public function tglpembelian(){
		$data['isi'] =  "laporan/filter-tglpembelian";
		$data['title'] = 'Berdasarkan Tanggal Pembelian';
		$this->load->view('layout',$data);
	}
	public function suppembelian(){
		$data['isi'] =  "laporan/filter-suppembelian";
		$data['title'] = 'Berdasarkan Supplier';
		$this->load->view('layout',$data);
	}
	public function lunasbeli(){
		$data['isi'] =  "laporan/laporan-lunasbeli";
		$data['title'] = 'Pelunasan Pembelian';
		$this->load->view('layout',$data);
	}
	public function returbeli(){
		$data['isi'] =  "laporan/laporan-returpembelian";
		$data['title'] = 'Retur Pembelian';
		$this->load->view('layout',$data);
	}
	// END PEMBELIAN

	// PENJUALAN
	public function penjualan(){
		$data['isi'] =  "laporan/laporan-penjualan";
		$data['title'] = 'Laporan penjualan';
		$this->load->view('layout',$data);
	}
	public function rincianpenjualan(){
		$data['isi'] =  "laporan/filter-penjualan";
		$data['title'] = 'Laporan Penjualan';
		$this->load->view('layout',$data);
	}
	public function tglpenjualan(){
		$data['isi'] =  "laporan/filter-tglpenjualan";
		$data['title'] = 'Berdasarkan Tanggal Penjualan';
		$this->load->view('layout',$data);
	}
	public function suppenjualan(){
		$data['isi'] =  "laporan/filter-suppenjualan";
		$data['title'] = 'Berdasarkan Supplier';
		$this->load->view('layout',$data);
	}
	public function lunasjual(){
		$data['isi'] =  "laporan/laporan-lunasjual";
		$data['title'] = 'Pelunasan Penjualan';
		$this->load->view('layout',$data);
	}
	public function returjual(){
		$data['isi'] =  "laporan/laporan-returpenjualan";
		$data['title'] = 'Retur Penjualan';
		$this->load->view('layout',$data);
	}
	// END PENJUALAN

	// PRODUK
	public function produk(){
		$data['isi'] =  "laporan/laporan-produk";
		$data['title'] = 'Laporan Produk';
		$this->load->view('layout',$data);
	}
	public function stok(){
		$data['isi'] =  "laporan/filter-stok";
		$data['title'] = 'Laporan Stok';
		$this->load->view('layout',$data);
	}
	// END PRODUK

	// LAINNYA
	public function etc(){
		$data['isi'] =  "laporan/laporan-etc";
		$data['title'] = 'Laporan Lainnya';
		$this->load->view('layout',$data);
	}
	public function hutang(){
		$data['isi'] =  "laporan/laporan-hutang";
		$data['title'] = 'Laporan Hutang';
		$this->load->view('layout',$data);
	}
	public function piutang(){
		$data['isi'] =  "laporan/laporan-piutang";
		$data['title'] = 'Laporan Piutang';
		$this->load->view('layout',$data);
	}
	// END LAINNYA
}

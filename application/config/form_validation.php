<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 $config = array(
      'dashboard/inproduct' => array(
              array(
                      'field' => 'nama',
                      'label' => 'Nama',
                      'rules' => 'required|min_length[3]|max_length[12]'
              ),
              array(
                      'field' => 'jenis',
                      'label' => 'Jenis',
                      'rules' => 'required'
              ),
              array(
                      'field' => 'harga',
                      'label' => 'Harga',
                      'rules' => 'required'
              ),
              array(
                'field' => 'stok',
                'label' => 'Stok',
                'rules' => 'required'
              ),
              array(
                'field' => 'gambar',
                'label' => 'gambar',
                'rules' => 'callback_file_check'
                )
              ),

        'dashboard/indaftar' => array(
                array(
                        'field' => 'nama',
                        'label' => 'Nama',
                        'rules' => 'required|min_length[3]|max_length[12]'
                ),
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'trim|required|valid_email'
                ),
                array(
                        'field' => 'pass',
                        'label' => 'Password',
                        'rules' => 'required'
                )
                ),
        'dashboard/inmasuk' => array(
                        array(
                                'field' => 'email',
                                'label' => 'Email',
                                'rules' => 'trim|required|valid_email'
                        ),
                        array(
                                'field' => 'pass',
                                'label' => 'Password',
                                'rules' => 'required'
                        )
                )
);
<?php $config = array(
                 'company_master' => array(
                                    array(
                                            'field' => 'cname',
                                            'label' => 'Username',
                                            'rules' => 'required'
                                         ),
                                    
                                    ),
                 'category_master'=>array(
                            array(
                                    'field'=>'catname',
                                    'label'=>'Category Name',
                                    'rules'=>'required'
                                )
                    ),
                 'transactions'=>array(
                        array(
                                    'field'=>'transaction_type',
                                    'label'=>'Transaction Type',
                                    'rules'=>'required'
                            ),
                        array(
                                    'field'=>'amount',
                                    'label'=>'Amount',
                                    'rules'=>'required|numeric'
                            ),
                        array(
                                    'field'=>'company',
                                    'label'=>'Company',
                                    'rules'=>'required'
                            ),
                        array(
                                    'field'=>'category',
                                    'label'=>'Category',
                                    'rules'=>'required'
                            ),
                        array(
                                    'field'=>'description',
                                    'label'=>'Transaction description',
                                    'rules'=>'min_length[6]|alpha_dash_space'
                            )
                    ),
                                          
               );
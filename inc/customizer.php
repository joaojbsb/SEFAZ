<?php

    function customizer_acesso_rapido( $wp_customize ){

        //sessao para acesso rapido da primeira linha
        $wp_customize-> add_section(

            'sec_rapido', array(
                'title'=> 'Acesso Rápido',
                'Description' => 'Sessão para o Acesso Rápido',

            )
        );

        //Preenchendo o nome do acesso rapido 0
        $wp_customize-> add_setting(
            'set_rapido_nome0', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'wp_filter_nohtml_kses',
            )
        );

        $wp_customize-> add_control(
            'set_rapido_nome0', array(
                'label' => 'Campo 0',
                'Description' => 'Campo para preencher o espaço de acesso rápido',
                'section' => 'sec_rapido',
                'type' => 'text',

            )
        );
        //Preenchendo o link 0
        $wp_customize-> add_setting(
            'set_rapido_link0', array(
               'type' => 'theme_mod',
                'default' => '',
               'sanitize_callback' => 'esc_url_raw',
            )
        );
        $wp_customize-> add_control(
            'set_rapido_link0', array(
                'label' => 'Informe a url',
                'Description' => 'Campo para preencher o link',
                'section' => 'sec_rapido',
                'type' => 'text',
            )
        );
        //preenchendo o icone 0
        $wp_customize-> add_setting(
            'set_rapido_icone0', array(
                'type' => 'theme_mod',
                'default' => '',
            )
        );

        $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
            'set_rapido_icone0', array(
                'label' => 'Ícone - tamanho 32 X 32',
                    'Description' => 'Inserir o icone tamanho 32 X 32',
                    'section' => 'sec_rapido',
                    'mime_type' => 'image',
             )
        ));



        //Preenchendo o nome do acesso rapido 1
        $wp_customize-> add_setting(
            'set_rapido_nome1', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'wp_filter_nohtml_kses',
            )
        );

        $wp_customize-> add_control(
            'set_rapido_nome1', array(
                'label' => 'Campo 1',
                'Description' => 'Campo para preencher o espaço de acesso rápido',
                'section' => 'sec_rapido',
                'type' => 'text',

            )
        );
        //Preenchendo o link 1
        $wp_customize-> add_setting(
            'set_rapido_link1', array(
               'type' => 'theme_mod',
                'default' => '',
               'sanitize_callback' => 'esc_url_raw',
            )
        );
        $wp_customize-> add_control(
            'set_rapido_link1', array(
                'label' => 'Informe a url',
                'Description' => 'Campo para preencher o link',
                'section' => 'sec_rapido',
                'type' => 'text',
            )
        );
        //preenchendo o icone 1
        $wp_customize-> add_setting(
            'set_rapido_icone1', array(
                'type' => 'theme_mod',
                'default' => '',
            )
        );

        $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
            'set_rapido_icone1', array(
                'label' => 'Ícone - tamanho 32 X 32',
                    'Description' => 'Inserir o icone tamanho 32 X 32',
                    'section' => 'sec_rapido',
                    'mime_type' => 'image',
             )
        ));

//----------------------------------------------------------------------------------------------------------------------------
                //Preenchendo o nome do acesso rapido 2
                $wp_customize-> add_setting(
                   'set_rapido_nome2', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'wp_filter_nohtml_kses',
                    )
                );

               $wp_customize-> add_control(
                    'set_rapido_nome2', array(
                        'label' => 'Campo 2',
                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

               //Preenchendo o link 2
                $wp_customize-> add_setting(
                    'set_rapido_link2', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_link2', array(
                        'label' => 'Informe a url',
                        'Description' => 'Campo para preencher o link',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //preenchendo o icone 2
                $wp_customize-> add_setting(
                    'set_rapido_icone2', array(
                        'type' => 'theme_mod',
                        'default' => '',
                    )
                );

                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                    'set_rapido_icone2', array(
                        'label' => 'Ícone - tamanho 32 X 32',
                            'Description' => 'Inserir o icone tamanho 32 X 32',
                            'section' => 'sec_rapido',
                            'mime_type' => 'image',
                     )
                ));

 //---------------------------------------------------------------------------------------------------------------------------       
            //Preenchendo o nome do acesso rapido 3
               $wp_customize-> add_setting(
                    'set_rapido_nome3', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'wp_filter_nohtml_kses',
                    )
                );

               $wp_customize-> add_control(
                    'set_rapido_nome3', array(
                        'label' => 'Campo 3',
                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );     

                //Preenchendo o link 3
                $wp_customize-> add_setting(
                   'set_rapido_link3', array(
                       'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )

                );

                $wp_customize-> add_control(
                    'set_rapido_link3', array(
                        'label' => 'Informe a url',
                        'Description' => 'Campo para preencher o link',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //preenchendo o icone 3
                $wp_customize-> add_setting(
                    'set_rapido_icone3', array(
                        'type' => 'theme_mod',
                        'default' => '',
                    )
                );

                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                    'set_rapido_icone3', array(
                        'label' => 'Ícone - tamanho 32 X 32',
                            'Description' => 'Inserir o icone tamanho 32 X 32',
                            'section' => 'sec_rapido',
                            'mime_type' => 'image',
                    )
                ));

//---------------------------------------------------------------------------------------------------------------------------
                //Preenchendo o nome do acesso rapido 4
                $wp_customize-> add_setting(
                    'set_rapido_nome4', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'wp_filter_nohtml_kses',
                    )
                );

               $wp_customize-> add_control(
                    'set_rapido_nome4', array(
                        'label' => 'Campo 4',
                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

               //Preenchendo o link 4
                $wp_customize-> add_setting(
                    'set_rapido_link4', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_link4', array(
                        'label' => 'Informe a url',
                        'Description' => 'Campo para preencher o link',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //preenchendo o icone 4
                $wp_customize-> add_setting(
                    'set_rapido_icone4', array(
                        'type' => 'theme_mod',
                        'default' => '',
                    )
                );

               $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                    'set_rapido_icone4', array(
                        'label' => 'Ícone - tamanho 32 X 32',
                            'Description' => 'Inserir o icone tamanho 32 X 32',
                            'section' => 'sec_rapido',
                            'mime_type' => 'image',
                     )
                ));
//---------------------------------------------------------------------------------------------------------------------------
                //Preenchendo o nome do acesso rapido 5
                $wp_customize-> add_setting(
                    'set_rapido_nome5', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'wp_filter_nohtml_kses',
                    )
                );

               $wp_customize-> add_control(
                    'set_rapido_nome5', array(
                        'label' => 'Campo 5',
                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //Preenchendo o link 5
                $wp_customize-> add_setting(
                    'set_rapido_link5', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_link5', array(
                        'label' => 'Informe a url',
                        'Description' => 'Campo para preencher o link',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //preenchendo o icone 5
                $wp_customize-> add_setting(
                    'set_rapido_icone5', array(
                        'type' => 'theme_mod',
                        'default' => '',
                    )
                );
  
                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                    'set_rapido_icone5', array(
                        'label' => 'Ícone - tamanho 32 X 32',
                            'Description' => 'Inserir o icone tamanho 32 X 32',
                            'section' => 'sec_rapido',
                            'mime_type' => 'image',
                     )
                ));
//---------------------------------------------------------------------------------------------------------------------------
                //Preenchendo o nome do acesso rapido 6
                $wp_customize-> add_setting(
                    'set_rapido_nome6', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'wp_filter_nohtml_kses',
                   )
                );

              $wp_customize-> add_control(
                    'set_rapido_nome6', array(
                        'label' => 'Campo 6',
                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //Preenchendo o link 6
                $wp_customize-> add_setting(
                    'set_rapido_link6', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_link6', array(
                        'label' => 'Informe a url',
                        'Description' => 'Campo para preencher o link',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //preenchendo o icone 6
                $wp_customize-> add_setting(
                    'set_rapido_icone6', array(
                        'type' => 'theme_mod',
                        'default' => '',
                    )
                );

                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                    'set_rapido_icone6', array(
                        'label' => 'Ícone - tamanho 32 X 32',
                            'Description' => 'Inserir o icone tamanho 32 X 32',
                            'section' => 'sec_rapido',
                            'mime_type' => 'image',
                    )
                ));

        //---------------------------------------------------------------------------------------------------------------------------

                //Preenchendo o nome do acesso rapido 7
                $wp_customize-> add_setting(
                    'set_rapido_nome7', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'wp_filter_nohtml_kses',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_nome7', array(
                        'label' => 'Campo 7',
                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //Preenchendo o link 7
                $wp_customize-> add_setting(
                    'set_rapido_link7', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_link7', array(
                        'label' => 'Informe a url',
                        'Description' => 'Campo para preencher o link',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //preenchendo o icone 7
                $wp_customize-> add_setting(
                    'set_rapido_icone7', array(
                        'type' => 'theme_mod',
                        'default' => '',
                    )
                );

                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                    'set_rapido_icone7', array(
                        'label' => 'Ícone - tamanho 32 X 32',
                            'Description' => 'Inserir o icone tamanho 32 X 32',
                            'section' => 'sec_rapido',
                            'mime_type' => 'image',
                    )
                ));
        //---------------------------------------------------------------------------------------------------------------------------

                //Preenchendo o nome do acesso rapido 8
                $wp_customize-> add_setting(
                    'set_rapido_nome8', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'wp_filter_nohtml_kses',

                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_nome8', array(
                        'label' => 'Campo 8',
                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                        'section' => 'sec_rapido',
                        'type' => 'text',

                    )
                );

                //Preenchendo o link 8
                $wp_customize-> add_setting(
                    'set_rapido_link8', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',

                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_link8', array(
                        'label' => 'Informe a url',
                        'Description' => 'Campo para preencher o link',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //preenchendo o icone 8
                $wp_customize-> add_setting(
                    'set_rapido_icone8', array(
                       'type' => 'theme_mod',
                        'default' => '',
                    )
                );

                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                    'set_rapido_icone8', array(
                        'label' => 'Ícone - tamanho 32 X 32',
                            'Description' => 'Inserir o icone tamanho 32 X 32',
                            'section' => 'sec_rapido',
                            'mime_type' => 'image',
                    )
                ));

        //---------------------------------------------------------------------------------------------------------------------------

                //Preenchendo o nome do acesso rapido 9
                $wp_customize-> add_setting(
                    'set_rapido_nome9', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'wp_filter_nohtml_kses',

                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_nome9', array(
                        'label' => 'Campo 9',
                       'Description' => 'Campo para preencher o espaço de acesso rápido',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //Preenchendo o link 9
                $wp_customize-> add_setting(
                    'set_rapido_link9', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )

                );

                $wp_customize-> add_control(
                    'set_rapido_link9', array(
                        'label' => 'Informe a url',
                        'Description' => 'Campo para preencher o link',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //preenchendo o icone 9
                $wp_customize-> add_setting(
                    'set_rapido_icone9', array(
                        'type' => 'theme_mod',
                        'default' => '',
                    )
                );

                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                    'set_rapido_icone9', array(
                        'label' => 'Ícone - tamanho 32 X 32',
                            'Description' => 'Inserir o icone tamanho 32 X 32',
                            'section' => 'sec_rapido',
                            'mime_type' => 'image',
                    )
                ));
        //---------------------------------------------------------------------------------------------------------------------------
                //Preenchendo o nome do acesso rapido 10
                $wp_customize-> add_setting(
                    'set_rapido_nome10', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'wp_filter_nohtml_kses',

                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_nome10', array(
                        'label' => 'Campo 10',
                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                       'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //Preenchendo o link 10
                $wp_customize-> add_setting(
                    'set_rapido_link10', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_link10', array(
                        'label' => 'Informe a url',
                        'Description' => 'Campo para preencher o link',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //preenchendo o icone 10
                $wp_customize-> add_setting(
                    'set_rapido_icone10', array(
                        'type' => 'theme_mod',
                        'default' => '',
                   )
                );

                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                    'set_rapido_icone10', array(
                        'label' => 'Ícone - tamanho 32 X 32',
                            'Description' => 'Inserir o icone tamanho 32 X 32',
                            'section' => 'sec_rapido',
                            'mime_type' => 'image',
                     )
                ));

                            //Preenchendo o nome do acesso rapido 11
                            $wp_customize-> add_setting(
                                'set_rapido_nome11', array(
                                    'type' => 'theme_mod',
                                    'default' => '',
                                    'sanitize_callback' => 'wp_filter_nohtml_kses',
                                )
                            );

                            $wp_customize-> add_control(
                                'set_rapido_nome11', array(
                                    'label' => 'Campo 11',
                                    'Description' => 'Campo para preencher o espaço de acesso rápido',
                                    'section' => 'sec_rapido',
                                    'type' => 'text',
                                )
                            );

                            //Preenchendo o link 11
                            $wp_customize-> add_setting(
                                'set_rapido_link11', array(
                                    'type' => 'theme_mod',
                                    'default' => '',
                                    'sanitize_callback' => 'esc_url_raw',
                                )
                            );

                            $wp_customize-> add_control(
                                'set_rapido_link11', array(
                                    'label' => 'Informe a url',
                                    'Description' => 'Campo para preencher o link',
                                    'section' => 'sec_rapido',
                                    'type' => 'text',
                                )
                            );

                            //preenchendo o icone 11
                            $wp_customize-> add_setting(
                                'set_rapido_icone11', array(
                                    'type' => 'theme_mod',
                                    'default' => '',
                                )
                            );

                            $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                                'set_rapido_icone11', array(
                                    'label' => 'Ícone - tamanho 32 X 32',
                                        'Description' => 'Inserir o icone tamanho 32 X 32',
                                        'section' => 'sec_rapido',
                                        'mime_type' => 'image',
                                 )
                            ));

                                //Preenchendo o nome do acesso rapido 12
                               $wp_customize-> add_setting(
                                    'set_rapido_nome12', array(
                                        'type' => 'theme_mod',
                                        'default' => '',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses',
                                    )
                                );

                              $wp_customize-> add_control(
                                    'set_rapido_nome12', array(
                                        'label' => 'Campo 12',
                                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                                        'section' => 'sec_rapido',
                                        'type' => 'text',
                                    )
                                );

                                //Preenchendo o link 12
                                $wp_customize-> add_setting(
                                    'set_rapido_link12', array(
                                        'type' => 'theme_mod',
                                        'default' => '',
                                        'sanitize_callback' => 'esc_url_raw',
                                    )
                                );

                              $wp_customize-> add_control(
                                    'set_rapido_link12', array(
                                        'label' => 'Informe a url',
                                        'Description' => 'Campo para preencher o link',
                                        'section' => 'sec_rapido',
                                        'type' => 'text',
                                    )
                                );

                               //preenchendo o icone 12
                                $wp_customize-> add_setting(
                                    'set_rapido_icone12', array(
                                        'type' => 'theme_mod',
                                        'default' => '',
                                    )
                                );

                                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                                   'set_rapido_icone12', array(
                                        'label' => 'Ícone - tamanho 32 X 32',
                                            'Description' => 'Inserir o icone tamanho 32 X 32',
                                            'section' => 'sec_rapido',
                                            'mime_type' => 'image',
                                      )
                                ));

                                //Preenchendo o nome do acesso rapido 13
                               $wp_customize-> add_setting(
                                    'set_rapido_nome13', array(
                                        'type' => 'theme_mod',
                                        'default' => '',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses',
                                    )
                                );

                                $wp_customize-> add_control(
                                    'set_rapido_nome13', array(
                                        'label' => 'Campo 13',
                                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                                        'section' => 'sec_rapido',
                                        'type' => 'text',
                                    )
                                );

                                //Preenchendo o link 13
                                $wp_customize-> add_setting(
                                    'set_rapido_link13', array(
                                        'type' => 'theme_mod',
                                        'default' => '',
                                        'sanitize_callback' => 'esc_url_raw',
                                    )
                                );

                                $wp_customize-> add_control(
                                    'set_rapido_link13', array(
                                        'label' => 'Informe a url',
                                        'Description' => 'Campo para preencher o link',
                                        'section' => 'sec_rapido',
                                        'type' => 'text',
                                   )
                                );

                                //preenchendo o icone 13
                                $wp_customize-> add_setting(
                                    'set_rapido_icone13', array(
                                        'type' => 'theme_mod',
                                        'default' => '',
                                    )
                                );

                                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                                    'set_rapido_icone13', array(
                                        'label' => 'Ícone - tamanho 32 X 32',
                                            'Description' => 'Inserir o icone tamanho 32 X 32',
                                            'section' => 'sec_rapido',
                                            'mime_type' => 'image',
                                    )
                                ));

                                //Preenchendo o nome do acesso rapido 14
                $wp_customize-> add_setting(
                    'set_rapido_nome14', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'wp_filter_nohtml_kses',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_nome14', array(
                        'label' => 'Campo 14',
                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //Preenchendo o link 14

                $wp_customize-> add_setting(
                    'set_rapido_link14', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_link14', array(
                        'label' => 'Informe a url',
                        'Description' => 'Campo para preencher o link',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //preenchendo o icone 14
                $wp_customize-> add_setting(
                    'set_rapido_icone14', array(
                        'type' => 'theme_mod',
                        'default' => '',
                    )
                );

                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                    'set_rapido_icone14', array(
                        'label' => 'Ícone - tamanho 32 X 32',
                            'Description' => 'Inserir o icone tamanho 32 X 32',
                            'section' => 'sec_rapido',
                            'mime_type' => 'image',
                     )
                ));

                //Preenchendo o nome do acesso rapido 15
                                $wp_customize-> add_setting(
                                    'set_rapido_nome15', array(
                                        'type' => 'theme_mod',
                                        'default' => '',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses',
                                    )
                                );

                                $wp_customize-> add_control(
                                    'set_rapido_nome15', array(
                                        'label' => 'Campo 15',
                                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                                        'section' => 'sec_rapido',
                                        'type' => 'text',
                                    )
                                );

                                //Preenchendo o link 15
                                $wp_customize-> add_setting(
                                    'set_rapido_link15', array(
                                        'type' => 'theme_mod',
                                        'default' => '',
                                        'sanitize_callback' => 'esc_url_raw',
                                    )
                                );

                                $wp_customize-> add_control(
                                    'set_rapido_link15', array(
                                        'label' => 'Informe a url',
                                        'Description' => 'Campo para preencher o link',
                                        'section' => 'sec_rapido',
                                        'type' => 'text',
                                    )
                                );

                                //preenchendo o icone 15
                                $wp_customize-> add_setting(
                                    'set_rapido_icone15', array(
                                        'type' => 'theme_mod',
                                        'default' => '',
                                    )
                                );

                                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                                    'set_rapido_icone15', array(
                                        'label' => 'Ícone - tamanho 32 X 32',
                                            'Description' => 'Inserir o icone tamanho 32 X 32',
                                            'section' => 'sec_rapido',
                                            'mime_type' => 'image',
                                     )
                                ));

//---------------------------------------------------------------------------------------------------------------------------
                //Preenchendo o nome do acesso rapido 16

                $wp_customize-> add_setting(
                    'set_rapido_nome16', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'wp_filter_nohtml_kses',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_nome16', array(
                        'label' => 'Campo 16',
                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //Preenchendo o link 16

                $wp_customize-> add_setting(
                    'set_rapido_link16', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_link16', array(
                        'label' => 'Informe a url',
                        'Description' => 'Campo para preencher o link',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //preenchendo o icone 16

                $wp_customize-> add_setting(
                    'set_rapido_icone16', array(
                        'type' => 'theme_mod',
                        'default' => '',
                    )
                );

                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                    'set_rapido_icone16', array(
                        'label' => 'Ícone - tamanho 32 X 32',
                            'Description' => 'Inserir o icone tamanho 32 X 32',
                            'section' => 'sec_rapido',
                            'mime_type' => 'image',
                        )
                ));   

//---------------------------------------------------------------------------------------------------------------------------

                //Preenchendo o nome do acesso rapido 17

                $wp_customize-> add_setting(
                    'set_rapido_nome17', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'wp_filter_nohtml_kses',
                    )
                );



                $wp_customize-> add_control(
                    'set_rapido_nome17', array(
                        'label' => 'Campo 17',
                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //Preenchendo o link 17

                $wp_customize-> add_setting(
                    'set_rapido_link17', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )
                );


                $wp_customize-> add_control(
                    'set_rapido_link17', array(
                        'label' => 'Informe a url',
                        'Description' => 'Campo para preencher o link',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                ); 


                //preenchendo o icone 17

                $wp_customize-> add_setting(
                    'set_rapido_icone17', array(
                        'type' => 'theme_mod',
                        'default' => '',
                    )
                );

                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                    'set_rapido_icone17', array(
                        'label' => 'Ícone - tamanho 32 X 32',
                            'Description' => 'Inserir o icone tamanho 32 X 32',
                            'section' => 'sec_rapido',
                            'mime_type' => 'image', 
                     )
                ));                

                //Preenchendo o nome do acesso rapido 18

                $wp_customize-> add_setting(

                    'set_rapido_nome18', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'wp_filter_nohtml_kses',
                    )
                );



                $wp_customize-> add_control(
                    'set_rapido_nome18', array(
                        'label' => 'Campo 18',
                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //Preenchendo o link 18
                $wp_customize-> add_setting(
                    'set_rapido_link18', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_link18', array(
                        'label' => 'Informe a url',
                        'Description' => 'Campo para preencher o link',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                ); 


                //preenchendo o icone 18
                $wp_customize-> add_setting(
                    'set_rapido_icone18', array(
                        'type' => 'theme_mod',
                        'default' => '',
                    )
                );

                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                    'set_rapido_icone18', array(
                        'label' => 'Ícone - tamanho 32 X 32',
                            'Description' => 'Inserir o icone tamanho 32 X 32',
                            'section' => 'sec_rapido',
                            'mime_type' => 'image', 
                     )
                ));

                //Preenchendo o nome do acesso rapido 19
                $wp_customize-> add_setting(
                    'set_rapido_nome19', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'wp_filter_nohtml_kses',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_nome19', array(
                        'label' => 'Campo 19',
                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //Preenchendo o link 19
                $wp_customize-> add_setting(
                    'set_rapido_link19', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_link19', array(
                        'label' => 'Informe a url',
                        'Description' => 'Campo para preencher o link',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                ); 


                //preenchendo o icone 19
                $wp_customize-> add_setting(
                    'set_rapido_icone19', array(
                        'type' => 'theme_mod',
                        'default' => '',
                   )
                );

                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                    'set_rapido_icone19', array(
                        'label' => 'Ícone - tamanho 32 X 32',
                            'Description' => 'Inserir o icone tamanho 32 X 32',
                            'section' => 'sec_rapido',
                            'mime_type' => 'image', 
                     )
                ));

                //Preenchendo o nome do acesso rapido 20
                $wp_customize-> add_setting(
                    'set_rapido_nome20', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'wp_filter_nohtml_kses',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_nome20', array(
                        'label' => 'Campo 20',
                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //Preenchendo o link 20
                $wp_customize-> add_setting(
                    'set_rapido_link20', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_link20', array(
                        'label' => 'Informe a url',
                        'Description' => 'Campo para preencher o link',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                ); 


                //preenchendo o icone 20
                $wp_customize-> add_setting(
                    'set_rapido_icone20', array(
                        'type' => 'theme_mod',
                        'default' => '',
                   )
                );

                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                    'set_rapido_icone20', array(
                        'label' => 'Ícone - tamanho 32 X 32',
                            'Description' => 'Inserir o icone tamanho 32 X 32',
                            'section' => 'sec_rapido',
                            'mime_type' => 'image', 
                     )
                ));
                
                //Preenchendo o nome do acesso rapido 21
                $wp_customize-> add_setting(
                    'set_rapido_nome21', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'wp_filter_nohtml_kses',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_nome21', array(
                        'label' => 'Campo 21',
                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //Preenchendo o link 21
                $wp_customize-> add_setting(
                    'set_rapido_link21', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_link21', array(
                        'label' => 'Informe a url',
                        'Description' => 'Campo para preencher o link',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                ); 


                //preenchendo o icone 21
                $wp_customize-> add_setting(
                    'set_rapido_icone21', array(
                        'type' => 'theme_mod',
                        'default' => '',
                   )
                );

                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                    'set_rapido_icone21', array(
                        'label' => 'Ícone - tamanho 32 X 32',
                            'Description' => 'Inserir o icone tamanho 32 X 32',
                            'section' => 'sec_rapido',
                            'mime_type' => 'image', 
                     )
                ));

                //Preenchendo o nome do acesso rapido 22
                $wp_customize-> add_setting(
                    'set_rapido_nome22', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'wp_filter_nohtml_kses',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_nome22', array(
                        'label' => 'Campo 22',
                        'Description' => 'Campo para preencher o espaço de acesso rápido',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                );

                //Preenchendo o link 22
                $wp_customize-> add_setting(
                    'set_rapido_link22', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )
                );

                $wp_customize-> add_control(
                    'set_rapido_link22', array(
                        'label' => 'Informe a url',
                        'Description' => 'Campo para preencher o link',
                        'section' => 'sec_rapido',
                        'type' => 'text',
                    )
                ); 


                //preenchendo o icone 22
                $wp_customize-> add_setting(
                    'set_rapido_icone22', array(
                        'type' => 'theme_mod',
                        'default' => '',
                   )
                );

                $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                    'set_rapido_icone22', array(
                        'label' => 'Ícone - tamanho 32 X 32',
                            'Description' => 'Inserir o icone tamanho 32 X 32',
                            'section' => 'sec_rapido',
                            'mime_type' => 'image', 
                     )
                ));


        // Adicionando a paleta de cores ________________________________________________________________________________________

           // Text color
    $wp_customize->add_setting( 'text_color', array(
        'default'   => '',
        'transport' => 'refresh',
      ) );

     $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Text color', 'theme' ),
      ) ) );

      // Link color
      $wp_customize->add_setting( 'link_color', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
      ) );

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Link color', 'theme' ),
      ) ) );

      // Accent color

      $wp_customize->add_setting( 'accent_color', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',

      ) );

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Accent color', 'theme' ),
      ) ) );

      // Border color

      $wp_customize->add_setting( 'border_color', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',

      ) );

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Border color', 'theme' ),

      ) ) );

      // Sidebar background
      $wp_customize->add_setting( 'sidebar_background', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',

      ) );

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_background', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Sidebar Background', 'theme' ),

      ) ) );  

        //Adicionando configurações do contatos---------------------------------------------------------------------------------------------------------------

                        //Criando a sessão
                        $wp_customize-> add_section(
                            'sec_contatos', array(
                                'title'=> 'Contatos',
                                'Description' => 'Sessão para Contato',
                            )
                        ); 
    
                        //Contatos do IPTU---------------------------------------------
                     //inserindo o telefone

                        $wp_customize-> add_setting(
                            'set_telefone', array(
                                'type' => 'theme_mod',
                                'default' => '',
                                'sanitize_callback' => 'wp_filter_nohtml_kses',
                            )
                        );

                        $wp_customize-> add_control(
                            'set_telefone', array(
                                'label' => 'Telefone IPTU',
                                'Description' => 'Campo para preencher o telefone',
                                'section' => 'sec_contatos',
                                'type' => 'text',
                            )
                        );

                        //inserindo o endereço

                        $wp_customize-> add_setting(
                            'set_endereco', array(
                                'type' => 'theme_mod',
                                'default' => '',
                                'sanitize_callback' => 'wp_filter_nohtml_kses',
                            )
                        );

                        $wp_customize-> add_control(
                            'set_endereco', array(
                                'label' => 'Endereço IPTU',
                                'Description' => 'Campo para preencher o endereço',
                                'section' => 'sec_contatos',
                                'type' => 'text',
                            )
                        );

                        //inserindo o email                

                        $wp_customize-> add_setting(
                            'set_email_iptu', array(
                                'type' => 'theme_mod',
                                'default' => '',
                            )
                        );

                        $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                            'set_email_iptu', array(
                                'label' => 'Email IPTU',
                                    'Description' => 'Inserir o email',
                                    'section' => 'sec_contatos',
                                    'type' => 'text',
                            )
                        ));

                          //Contatos do ITBI---------------------------------------------

                                    //inserindo o telefone
                                    $wp_customize-> add_setting(
                                        'set_telefone_itbi', array(
                                            'type' => 'theme_mod',
                                            'default' => '',
                                            'sanitize_callback' => 'wp_filter_nohtml_kses',
                                        )
                                    );

                                    $wp_customize-> add_control(
                                        'set_telefone_itbi', array(
                                            'label' => 'Telefone ITBI',
                                            'Description' => 'Campo para preencher o telefone',
                                            'section' => 'sec_contatos',
                                            'type' => 'text',
                                        )
                                    );

                                    //inserindo o endereço

                                    $wp_customize-> add_setting(
                                        'set_endereco_itbi', array(
                                            'type' => 'theme_mod',
                                            'default' => '',
                                            'sanitize_callback' => 'wp_filter_nohtml_kses',
                                        )
                                    );

                                    $wp_customize-> add_control(
                                        'set_endereco_itbi', array(
                                            'label' => 'Endereço ITBI',
                                            'Description' => 'Campo para preencher o endereço',
                                            'section' => 'sec_contatos',
                                            'type' => 'text',
                                        )
                                    );

                                    //inserindo o email                
                                    $wp_customize-> add_setting(
                                        'set_email_itbi', array(
                                            'type' => 'theme_mod',
                                           'default' => '',
                                        )

                                    );

                                    $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                                        'set_email_itbi', array(
                                            'label' => 'Email ITBI',
                                                'Description' => 'Inserir o email',
                                                'section' => 'sec_contatos',
                                                'type' => 'text',
                                         )
                                    ));
                   //Contatos do Fiscalização Tributária---------------------------------------------                 
                                        //inserindo o telefone
                                        $wp_customize-> add_setting(
                                            'set_telefone_fiscatributaria', array(
                                                'type' => 'theme_mod',
                                                'default' => '',
                                                'sanitize_callback' => 'wp_filter_nohtml_kses',
                                            )
                                        );

                                        $wp_customize-> add_control(
                                            'set_telefone_fiscatributaria', array(
                                                'label' => 'Telefone Fiscalização Tributaria',
                                                'Description' => 'Campo para preencher o telefone',
                                                'section' => 'sec_contatos',
                                                'type' => 'text',
                                            )
                                        );

                                        //inserindo o endereço
                                        $wp_customize-> add_setting(
                                            'set_endereco_fiscatributaria', array(
                                                'type' => 'theme_mod',
                                                'default' => '',
                                                'sanitize_callback' => 'wp_filter_nohtml_kses',
                                            )
                                        );

                                        $wp_customize-> add_control(
                                            'set_endereco_fiscatributaria', array(
                                                'label' => 'Endereço Fiscalização Tributaria',
                                                'Description' => 'Campo para preencher o endereço',
                                                'section' => 'sec_contatos',
                                                'type' => 'text',
                                            )
                                        );

                                        //inserindo o email                
                                        $wp_customize-> add_setting(
                                            'set_email_fiscatributaria', array(
                                                'type' => 'theme_mod',
                                                'default' => '',
                                            )
                                        );

                                        $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                                            'set_email_fiscatributaria', array(
                                                'label' => 'Email Fiscalização Tributaria',
                                                    'Description' => 'Inserir o email',
                                                    'section' => 'sec_contatos',
                                                    'type' => 'text',
                                             )
                                        ));


                    //Inserindo Campos da Divida Ativa---------------------------------------------
                                        //inserindo o telefone
                                        $wp_customize-> add_setting(
                                            'set_telefone_dividaativa', array(
                                                'type' => 'theme_mod',
                                                'default' => '',
                                                'sanitize_callback' => 'wp_filter_nohtml_kses',
                                            )
                                        );

                                        $wp_customize-> add_control(
                                            'set_telefone_dividaativa', array(
                                                'label' => 'Telefone Divdia Ativa',
                                                'Description' => 'Campo para preencher o telefone',
                                                'section' => 'sec_contatos',
                                                'type' => 'text',
                                            )
                                        );

                                        //inserindo o endereço
                                        $wp_customize-> add_setting(
                                            'set_endereco_dividaativa', array(
                                                'type' => 'theme_mod',
                                                'default' => '',
                                                'sanitize_callback' => 'wp_filter_nohtml_kses',
                                            )
                                        );

                                        $wp_customize-> add_control(
                                            'set_endereco_dividaativa', array(
                                                'label' => 'Endereço Divida Ativa',
                                                'Description' => 'Campo para preencher o endereço',
                                                'section' => 'sec_contatos',
                                                'type' => 'text',
                                            )
                                        );

                                       //inserindo o email                
                                        $wp_customize-> add_setting(
                                            'set_email_dividaativa', array(
                                                'type' => 'theme_mod',
                                                'default' => '',
                                            )
                                        );

                                        $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                                            'set_email_dividaativa', array(
                                                'label' => 'Email Divida Ativa',
                                                    'Description' => 'Inserir o email',
                                                    'section' => 'sec_contatos',
                                                    'type' => 'text',
                                             )
                                        ));

                     //Inserindo Campos da SEJUC---------------------------------------------
                                      //inserindo o telefone
                                        $wp_customize-> add_setting(
                                            'set_telefone_sejuc', array(
                                                'type' => 'theme_mod',
                                                'default' => '',
                                                'sanitize_callback' => 'wp_filter_nohtml_kses',
                                            )
                                        );

                                        $wp_customize-> add_control(
                                            'set_telefone_sejuc', array(
                                                'label' => 'Telefone SEJUC',
                                                'Description' => 'Campo para preencher o telefone',
                                                'section' => 'sec_contatos',
                                                'type' => 'text',
                                            )
                                        );

                                        //inserindo o endereço
                                        $wp_customize-> add_setting(
                                            'set_endereco_sejuc', array(
                                                'type' => 'theme_mod',
                                                'default' => '',
                                                'sanitize_callback' => 'wp_filter_nohtml_kses',
                                            )
                                        );

                                        $wp_customize-> add_control(
                                            'set_endereco_sejuc', array(
                                                'label' => 'Endereço SEJUC',
                                                'Description' => 'Campo para preencher o endereço',
                                                'section' => 'sec_contatos',
                                                'type' => 'text',
                                            )
                                        );

                                        //inserindo o email                
                                        $wp_customize-> add_setting(
                                            'set_email_sejuc', array(
                                                'type' => 'theme_mod',
                                                'default' => '',
                                            )
                                        );

                                        $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                                            'set_email_sejuc', array(
                                                'label' => 'Email SEJUC',
                                                    'Description' => 'Inserir o email',
                                                    'section' => 'sec_contatos',
                                                    'type' => 'text',
                                             )
                                        ));

               //Inserindo Campos do Alvara ---------------------------------------------
                                        //inserindo o telefone
                                        $wp_customize-> add_setting(
                                            'set_telefone_alvara', array(
                                                'type' => 'theme_mod',
                                                'default' => '',
                                                'sanitize_callback' => 'wp_filter_nohtml_kses',
                                            )
                                        );

                                        $wp_customize-> add_control(
                                            'set_telefone_alvara', array(
                                                'label' => 'Telefone Setor de Alvará',
                                                'Description' => 'Campo para preencher o telefone',
                                                'section' => 'sec_contatos',
                                                'type' => 'text',
                                            )
                                        );

                                        //inserindo o endereço
                                        $wp_customize-> add_setting(
                                            'set_endereco_alvara', array(
                                                'type' => 'theme_mod',
                                                'default' => '',
                                                'sanitize_callback' => 'wp_filter_nohtml_kses',
                                            )
                                        );

                                        $wp_customize-> add_control(
                                            'set_endereco_alvara', array(
                                                'label' => 'Endereço Setor de Alvará',
                                                'Description' => 'Campo para preencher o endereço',
                                                'section' => 'sec_contatos',
                                                'type' => 'text',
                                            )
                                        );

                                        //inserindo o email                
                                        $wp_customize-> add_setting(
                                            'set_email_alvara', array(
                                                'type' => 'theme_mod',
                                                'default' => '',
                                            )
                                        );

                                        $wp_customize-> add_control( new WP_Customize_Media_Control($wp_customize, 
                                            'set_email_alvara', array(
                                                'label' => 'Email Setor de Alvará',
                                                    'Description' => 'Inserir o email',
                                                    'section' => 'sec_contatos',
                                                    'type' => 'text',
                                             )
                                        ));


                //sessao para acesso rapido das Redes Sociais
                $wp_customize-> add_section(
                    'sec_redes_sociais', array(
                        'title'=> 'Redes Sociais',
                        'Description' => 'Sessão para o link das redes sociais',
                    )
                );        

                //Preenchendo o link do twiter
                $wp_customize-> add_setting(
                    'set_twiter', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )
                );

                $wp_customize-> add_control(
                    'set_twiter', array(
                        'label' => 'Insira o link do Twiter',
                        'Description' => 'Campo para preencher o link das redes sociais',
                        'section' => 'sec_redes_sociais',
                        'type' => 'text',
                    )
                );
                //Preenchendo o link do twiter
                 $wp_customize-> add_setting(
                    'set_facebook', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )
                );

                $wp_customize-> add_control(
                    'set_facebook', array(
                        'label' => 'Insira o link do Facebook',
                        'Description' => 'Campo para preencher o link das redes sociais',
                        'section' => 'sec_redes_sociais',
                        'type' => 'text',
                    )
                );

                //Preenchendo o link do Instagram
                $wp_customize-> add_setting(
                    'set_instagram', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'esc_url_raw',
                    )
                );

                $wp_customize-> add_control(
                    'set_instagram', array(
                        'label' => 'Insira o link do Instagram',
                        'Description' => 'Campo para preencher o link das redes sociais',
                        'section' => 'sec_redes_sociais',
                        'type' => 'text',
                    )
                );
    }


    add_action( 'customize_register', 'customizer_acesso_rapido');








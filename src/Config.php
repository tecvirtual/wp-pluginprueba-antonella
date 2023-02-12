<?php

namespace RP;

class Config
{
   
    /*
    * Plugins option
    * storage in database the option value
    * Array ('option_name'=>'default value')
    * @example ["example_data" => 'foo',]
    * @return void
    */
    public $plugin_options=[];
    /**
    * Language Option
    * define a unique word for translate call
    */
    public $language_name='antonella';
    /**
    * Plugin text prefix
    * define a unique word for this plugin
    */
    public $plugin_prefix='ch_nella';
    /**
    * POST data process
    * get the post data and execute the function
    * @example ['post_data'=>'RP::function']
    */
    public $post=[];
    /**
    * GET data process
    * get the get data and execute the function
    * @example ['get_data'=>'RP::function']
    */
    public $get=[];
    /**
    * add_filter data functions
    * @input array
    * @example ['body_class','RP::function',10,2]
    * @example ['body_class',['RP','function'],10,2]
    */
    public $add_filter=[];
    /**
    * add_action data functions
    * @input array
    * @example ['body_class','RP::function',10,2]
    * @example ['body_class',['RP','function'],10,2]
    */
    public $add_action=[];
    /**
    * add custom shortcodes
    * @input array
    * @example [['example','RP\ExampleController::example_shortcode']]
    */
    public $shortcodes=[
        ['example','RP\ExampleController::example_shortcode'],
        ['hola','RP\ShortCodeController::MiShortCode'],
    ];
    /**
    * Dashboard
    * @reference: https://codex.wordpress.org/Function_Reference/wp_add_dashboard_widget
    */
    public $dashboard=[
        [
        'slug'      => '',
        'name'      => '',
        'function'  => '',
        'callback'  => '',
        'args'      => '',
        ]

    ];
    /**
    * Files for use in Dashboard
    */
    public $files_dashboard=[];

    /*
    * Plugin menu
    * set your menu option here
    * capability default => 'manage_options'
    * list capability -> https://wordpress.org/support/article/roles-and-capabilities/
    */
    public $plugin_menu=[
    /*
        [
            "path"      => ["page"],
            "name"      => "My Custom Page",
            "function"  => __NAMESPACE__."\Admin\PageAdmin::index",
            "icon"      => "antonella-icon.png",
            "slug"      => "my-custom-page",
            "capability"=> 'manage_options',
            "position"  => 5,
        ]
        
            [
                "path"      => ["page"],
                "name"      => "My Custom Page",
                "function"  => __NAMESPACE__."\Admin::option_page",
               // "icon"      => "antonella-icon.png",
                "slug"      => "my-custom-page",
                "subpages"  =>
                [
                    [
                        "name"      => "My Custom sub Page",
                        "slug"      => "my-top-sub-level-slug",
                        "function"  => __NAMESPACE__."\Admin::option_page",
                    ],
                    [
                        "name"      => "My  Sencond Custom sub Page",
                        "slug"      => "my-second-sub-level-slug",
                        "function"  => __NAMESPACE__."\Admin::option_page",
                    ],
                ]
            ],
            [
                "path"      => ["page"],
                "name"      => "My SECOND Custom Page",
                "function"  => __NAMESPACE__."\Admin::option_page",
                "icon"      => "antonella-icon.png",
                "slug"      => "my-SECOND-custom-page",
                "subpages"  =>
                [
                    [
                        "name"      => "My Custom sub Page",
                        "slug"      => "my-top-sub-level-slug-2",
                        "function"  => __NAMESPACE__."\Admin::option_page",
                    ],
                    [
                        "name"      => "My  Sencond Custom sub Page",
                        "slug"      => "my-second-sub-level-slug-2",
                        "function"  => __NAMESPACE__."\Admin::option_page",
                    ],
                ]
            ],
            [
                "path"      => ["subpage","tools.php"],
                "name"      => "sub page in tools",
                "slug"      => "sub-tools",
                "function"  => __NAMESPACE__."\Admin::option_page",
            ],
            [
                "path"      => ["option"],
                "name"      => "sub page in option",
                "slug"      => "sub-option",
                "function"  => __NAMESPACE__."\Admin::option_page",
            ]
        */
        ];

        /**
         * Custom Post Type
         * for make simple Custom PostType
         */
    
        public $post_types =[
            [
                'singular'      => '',
                'plural'        => '',
                'slug'          => '',
                'translate'     => false,
                'position'      => 4,
                'taxonomy'      =>['category'],
                'image'         =>'',
            ],

        ];
        /**
         * Widget
         * For register a Widget please:
         * Console: php antonella Widget "NAME_OF_WIDGET"
         * @input array
         * @example public $widget = [__NAMESPACE__.'\YouClassWidget']  //only the class
         */
        public $widgets=[];
    
    }

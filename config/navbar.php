<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "index" => [
                "text"  => t("Om Peder"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Vem är Peder Tornberg"),
                "mark-if-parent" => true,
            ],

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisning för kmom uppgifterna"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om Sidan"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om Sidan")
            ],

            "assignments" => [
                "text"  => t("Uppgifter"),
                "url"   => $this->di->get("url")->create("assignments"),
                "title" => t("Uppgifter"),
                "mark-if-parent" => true,
                "submenu" => [

                    "items" => [

                        "blog" => [
                            "text"  => t("Blogg"),
                            "url"   => $this->di->get("url")->create("blogg"),
                            "title" => t("Min blogg"),
                        ],

                        "images" => [
                            "text"  => t("Bilder"),
                            "url"   => $this->di->get("url")->create("images"),
                            "title" => t("Bilder")
                        ],

                        "analysis" => [
                            "text"  => t("Analys"),
                            "url"   => $this->di->get("url")->create("analysis/intro"),
                            "title" => t("Analys av 4 sidor"),
                            "mark-if-parent" => true,
                        ],

                        "theme" => [
                            "text"  => t("Teman"),
                            "url"   => $this->di->get("url")->create("theme"),
                            "title" => t("Teman"),
                        ],

                        "typography" => [
                            "text"  => t("Typografi"),
                            "url"   => $this->di->get("url")->create("typography"),
                            "title" => t("Testa typografi"),
                        ],

                        "grid" => [
                            "text"  => t("Grid"),
                            "url"   => $this->di->get("url")->create("grid"),
                            "title" => t("Visa kolumner"),
                        ],

                        "testcode" => [
                            "text"  => t("Testa Kod"),
                            "url"   => $this->di->get("url")->create("testcode"),
                            "title" => t("Om Sidan")
                        ],
                    ],
                ],
            ],
        ],
    ],



    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "index" => [
                "text"  => t("Om Peder"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Vem är Peder Tornberg"),
                "mark-if-parent" => true,
            ],

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisning för kmom uppgifterna"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om Sidan"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om Sidan")
            ],

            "assignments" => [
                "text"  => t("Uppgifter"),
                "url"   => $this->di->get("url")->create("assignments"),
                "title" => t("Uppgifter"),
                "mark-if-parent" => true,
                "submenu" => [

                    "items" => [

                        "blog" => [
                            "text"  => t("Blogg"),
                            "url"   => $this->di->get("url")->create("blogg"),
                            "title" => t("Min blogg"),
                        ],

                        "images" => [
                            "text"  => t("Bilder"),
                            "url"   => $this->di->get("url")->create("images"),
                            "title" => t("Bilder")
                        ],

                        "analysis" => [
                            "text"  => t("Analys"),
                            "url"   => $this->di->get("url")->create("analysis/intro"),
                            "title" => t("Analys av 4 sidor"),
                            "mark-if-parent" => true,
                        ],

                        "theme" => [
                            "text"  => t("Teman"),
                            "url"   => $this->di->get("url")->create("theme"),
                            "title" => t("Teman"),
                        ],

                        "typography" => [
                            "text"  => t("Typografi"),
                            "url"   => $this->di->get("url")->create("typography"),
                            "title" => t("Testa typografi"),
                        ],

                        "grid" => [
                            "text"  => t("Grid"),
                            "url"   => $this->di->get("url")->create("grid"),
                            "title" => t("Visa kolumner"),
                        ],

                        "testcode" => [
                            "text"  => t("Testa Kod"),
                            "url"   => $this->di->get("url")->create("testcode"),
                            "title" => t("Om Sidan")
                        ],
                    ],
                ],
            ],

            // "blog" => [
            //     "text"  => t("Blogg"),
            //     "url"   => $this->di->get("url")->create("blogg"),
            //     "title" => t("Min blogg"),
            // ],
            //
            // "grid" => [
            //     "text"  => t("Grid"),
            //     "url"   => $this->di->get("url")->create("grid"),
            //     "title" => t("Visa kolumner"),
            // ],
            //
            // "typography" => [
            //     "text"  => t("Typografi"),
            //     "url"   => $this->di->get("url")->create("typography"),
            //     "title" => t("Testa typografi"),
            // ],
            //
            // "images" => [
            //     "text"  => t("Bilder"),
            //     "url"   => $this->di->get("url")->create("images"),
            //     "title" => t("Bilder")
            // ],
            //
            // "analysis" => [
            //     "text"  => t("Analys"),
            //     "url"   => $this->di->get("url")->create("analysis"),
            //     "title" => t("Analys av 4 sidor"),
            //     "mark-if-parent" => true,
            // ],
            //
            // "theme" => [
            //     "text"  => t("Teman"),
            //     "url"   => $this->di->get("url")->create("theme"),
            //     "title" => t("Teman"),
            // ],

            // "testcode" => [
            //     "text"  => t("Testa Kod"),
            //     "url"   => $this->di->get("url")->create("testcode"),
            //     "title" => t("Om Sidan")
            // ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];

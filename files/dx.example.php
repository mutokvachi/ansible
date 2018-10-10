<?php

return [
    
    /*
    |--------------------------------------------------------------------------
    | Excel eksporta datnes maksimāli pieļaujamais rindu skaits
    |--------------------------------------------------------------------------
    |
    | Lai nepārslogotu serveri un neizsauktu Timeout kļūdas, ir jākombinē timeout limits un Excel maksimālo rindu skaita limits.
    */
    
    'excel_export_maximum_rows' => 1000,
    
    /*
    |--------------------------------------------------------------------------
    | Ierakstu skaits tabulāro sarakstu 1 lapā
    |--------------------------------------------------------------------------
    |
    | Lai uzlabotu ātrdarbību un nepārslogotu serveri, ir tabulāro sarakstu dati ir jāatgriež pa porcijām (lapām).
    | Ar šo parametru var konfigurēt maksimālo ierakstu skaitu vienā lapā.
    */   
    
    'grid_page_rows_count' => 20,
    
    /*
    |--------------------------------------------------------------------------
    | Tabulārā saraksta HTML elementa tekstuālais idnetifikators
    |--------------------------------------------------------------------------
    |
    | Tabulārie saraksti tiek ielādēti DIV elementā ar norādīto idnetifikatoru. Tas nepieciešams, lai varētu atjaunināt saraksta datus ar AJAX pieprasījumiem nepārlādējot visu lapu.
    */   
    
    'grid_html_element_id' => 'td_data',
    
    /*
    |--------------------------------------------------------------------------
    | Publiskā lietotāja identifikators
    |--------------------------------------------------------------------------
    |
    | Intranet publiskajām sadaļām var piekļūt jebkurš uzņēmuma tīkla lietotājs. Sistēmā ir speciāls lietotājs, kuram var definēt lomas. 
    | Tādā veidā var konfigurēt publiski pieejamos resursus.
    */   
    
    'public_user_id' => 2,
    
    /*
    |--------------------------------------------------------------------------
    | Ierakstu skaits ziņu plūsmas vienā lapas skatījumā
    |--------------------------------------------------------------------------
    |
    | Ziņu plūsmas tiek ielādētas ritinot lapu uz leju pa porcijām. Šis iestatījums paredzēts porcijas ierkastu skaita norādīšanai.
    */   
    
    'feeds_page_rows_count' => 25,

    /*
    |--------------------------------------------------------------------------
    | Ierakstu skaits galeriju un izdevumu lapas skatījumā
    |--------------------------------------------------------------------------
    */   
    
    'gallery_publish_item_count' => 9,
    
    /*
    |--------------------------------------------------------------------------
    | Datuma formāts
    |--------------------------------------------------------------------------
    |
    | Datuma formāts attēlošanai formās un reģistros
    */   
    
    'date_format' => 'dd.mm.yyyy',
    
    /*
    |--------------------------------------------------------------------------
    | Funkciju datuma formāts
    |--------------------------------------------------------------------------
    |
    | Izmantojams formatēšanas funkcijās, lai pārvērstu datumu kā tekstu kā arī attēlošanai datuma laukos
    */ 
    'txt_date_format' => 'd.m.Y',
    
    
    /*
    |--------------------------------------------------------------------------
    | Funkciju datuma/laika formāts
    |--------------------------------------------------------------------------
    |
    | Izmantojams formatēšanas funkcijās, lai pārvērstu datumu un laiku kā tekstu kā arī attēlošanai datuma laukos
    */ 
    'txt_datetime_format' => 'd.m.Y H:i',
    
    /*
    |--------------------------------------------------------------------------
    | Maksimālais iezīmju skaits, ko attēlot pie ziņas/attēla/video
    |--------------------------------------------------------------------------
    |
    | Ar šo parametru ir iespējams ierobežot attēlojamo iezīmju skaitu, lai nodrošinātu sakarīgu informācijas attēlošanu gadījumos, ja ziņai pievienoti nesamērīgi daudz iezīmes
    */   
    
    'max_tags_count' => 5,
    
    /*
    |--------------------------------------------------------------------------
    | Ierakstu skaits dinamiskajā darbinieku meklēšanā
    |--------------------------------------------------------------------------
    |
    | Ar šo parametru var iestatīt, cik ierakstus attēlot dinamiskajā darbinieku meklēšanā. Jo lielāka vērība, jo lielāka slodze uz serveri
    */   
    
    'ajax_employees_count' => 100,
    
    /*
    |--------------------------------------------------------------------------
    | Izvēlnes grupas ID
    |--------------------------------------------------------------------------
    |
    | Arhitektrā, kad SVS un portāls ir 2 dažādos projektos, bet izmanto vienu datu bāzi, ir jānodala izvēlnes.
    | Ar šo parametru norāda, kādas izvēlnes rādīt SVS (tabulā dx_menu_group ir varianti)
    | 
    */   
    
    'menu_group_id' => 1,
    
    /*
    |--------------------------------------------------------------------------
    | Darbinieku tabulas nosaukums
    |--------------------------------------------------------------------------
    |
    | Darbinieki var būt atsevišķā tabulā, bet var arī izmantot to pašu tabulu, kas lietotājiem.
    | Konfigurācijas parametrā tāpēc var norādīt, kuru tabulu izmantot.
    | 
    */ 
    
    'empl_table' => 'dx_users',
    
    /*
    |--------------------------------------------------------------------------
    | Darbinieku tabulas lauki
    |--------------------------------------------------------------------------
    |
    | Norāda, kuri lauki atbilsts darbinieka nosaukumam un amatam
    | 
    */ 
    
    'empl_fields' => array(
            'empl_name' => 'display_name',
            'empl_position' => 'position_title',
            'empl_end_date' => 'termination_date'
        ),
    
    /*
    |--------------------------------------------------------------------------
    | Ignorējamo darbinieku ierakstu ID
    |--------------------------------------------------------------------------
    |
    | Ja darbinieku dati glabājas lietotāju tabulā, tad masīvā var nodādīt ierakstus, kuri nav jāattēlo darbinieku meklēšanas rezultātos
    | 
    */ 
    'empl_ignore_ids' => [1,2],
    
    /*
    |--------------------------------------------------------------------------
    | Publiskā portāla root foldera nosaukums (bez pilnā ceļa)
    |--------------------------------------------------------------------------
    |
    | Nepieciešams, lai izpildītu portāla komandas no CMS sistēmas
    | 
    */ 
    'portal_root_folder' => env('APP_PORTAL_ROOT_FOLDER', 'vk_public'),
    
    /*
    |--------------------------------------------------------------------------
    | Pazīme, vai pilnīgi visām lapām nepieciešama lietotāja autorizācija
    |--------------------------------------------------------------------------
    |
    | Ja uzstādīts šis parametrs, tad pēc noklusēšanas lietotājam vispirms būs jāautorizējas, lai piekļūtu jebkurai lapai neatkarīgi no iestatījuma public_user_id
    | 
    */   
    
    'is_all_login_required' => env('APP_LOGIN_REQUIRED', false),
    
    /*
    |--------------------------------------------------------------------------
    | Publisko resursu datņu foldera nosaukums. Tam jāatrodas uzreiz /public folderī
    |--------------------------------------------------------------------------
    |
    | Resursu datnes pievieno no satura redaktora
    | 
    */
    'resources_folder_name' => env('APP_RESOURCES_FOLDER', 'resources'),
    
     /*
    |--------------------------------------------------------------------------
    | Publisko resursu datņu kopējamo folderu ceļi
    |--------------------------------------------------------------------------
    |
    | Masīvs ar ceļiem, uz kurieni tiks kopēti resursu faili pēc to pievienošanas no satura redaktora.
    | Tas nepieciešams, ja ir cms un portāls kā atsevišķi projekti
    | Jānorāda pilnie ceļi, beigās nevajag likt slash, piemēram, jānorāda c:\cels\usz\folderi
    | 
    */
    'resources_copy_paths' => [        
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Darbinieku reģistra ID
    |--------------------------------------------------------------------------
    |
    | Norāda ID no tabulas dx_lists, kurā definēts reģistrs tabulai dx_users.
    | Parametru izmanto, lai darbinieku profilu blokam Block_EMPL_PROFILE var noteikt vai ir/nav profila rediģēšanas tiesības
    | HR - 259, MPS - 4006
    | 
    */
    
    'employee_list_id' => env('APP_EMPL_LIST_ID', 21),
    
    /*
    |--------------------------------------------------------------------------
    | Employee profile page URL
    |--------------------------------------------------------------------------
    |
    | Public employee profile widget is placed in an Mindwo page as widget.
    | Here we need to provide relative path to page, for example, /employee/profile/
    | If not provided, then profiles functionality will be dissabled
    | 
    */
    'employee_profile_page_url' => env('APP_EMPL_PROFILE_URL', '/employee/profile/'),
    
    /*
    |--------------------------------------------------------------------------
    | UI setting for menu/slider
    |--------------------------------------------------------------------------
    |
    | It's possible to run Mindwo in 2 UIs:
    |   1) Menu on the left side - then set false
    |   2) No menu, but slidin panel - then set true
    */
    'is_slidable_menu' => false,
    
    /*
    |--------------------------------------------------------------------------
    | UI setting for menu
    |--------------------------------------------------------------------------
    |
    | It's possible to display menu in 2 ways:
    |   1) Menu on the left side - vertical - set false
    |   2) Meu on the top side - horizontal - set true
    */
    'is_horizontal_menu' => env('APP_IS_HORIZONTAL_MENU',true),
    
    /*
    |--------------------------------------------------------------------------
    | UI setting for logo (not in login page but at the top left corner)
    |--------------------------------------------------------------------------
    |
    | Logo can be text or img. Textual setting is set in /resources/lang/en/index.php in parameter "logo_txt".
    | If it is set logo_txt then this setting "logo_small" will be ignored.
    */
    'logo_small' => env('APP_SMALL_LOGO','assets/global/logo/logo-default.png'),
    
    /*
    |--------------------------------------------------------------------------
    | UI setting for big logo used in login page
    |--------------------------------------------------------------------------
    */
    'logo_big' => env('APP_BIG_LOGO', 'assets/global/logo/mindwo_logo_big.png'),
    
    /*
    |--------------------------------------------------------------------------
    | UI setting for logo used for printing (on white background)
    | In order to export to PDF work it is needed that Linux have those libs:
    | * libxtst6
    | * libxrender1
    |--------------------------------------------------------------------------
    */
    'logo_print' => env('APP_PRINT_LOGO', 'assets/global/logo/mindwo_logo_small.png'),
    
    /*
    |--------------------------------------------------------------------------
    | Working day hours - used for HR timeoff calculations
    |--------------------------------------------------------------------------
    */
    'working_day_h' => 8,
    
    /*
    |--------------------------------------------------------------------------
    | Default search - in top menu (must be set accroding to language)
    | English: Employees, Documents, News
    | Latvian: Darbinieki, Dokumenti, Ziņas
    |--------------------------------------------------------------------------
    */
    'default_search' => env('APP_DEFAULT_SEARCH','Employees'),
    
    /*
    |--------------------------------------------------------------------------
    | Default time zone - see http://php.net/manual/en/timezones.europe.php
    |--------------------------------------------------------------------------
    */
    'time_zone' => 'Europe/Riga',
    
    /*
    |--------------------------------------------------------------------------
    | Indicates if there is posibility to edit files with Word/OpenOffice etc - will be launched MindwoApp.exe (via protocol mindwo:// )
    | This means, users must have installed MindwoApp on their computers
    | This works only for Microsoft Windows OS.
    |--------------------------------------------------------------------------
    */
    'is_files_editor' => true,
    
    'company' => [
        'title' => 'ACME Corporation',
        'short_title' => 'ACME Corp.',
        'logo' => 'assets/global/avatars/default_avatar_big.jpg',
    ],
 
    'orgchart' => [
        'default_levels' => 2,
        'default_root_employee_id' => 0,
        'access_role_id' => 1,
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Email interface options
    |--------------------------------------------------------------------------
    */
    'email' => [
            // Here we provide role ID (from table dx_roles) which can use email sending functionality
            'access_role_id' => 1,
            // Number of emails to show in folder index
            'items_per_page' => 20,
            // Delay between sending emails
            'send_delay' => 0,
            // Path for storing thumbnails, relative to public directory
            'thumbnail_path' => 'formated_img/mail_thumbn',
            // Use roles as group recipients
			'search_roles' => true,
    ],
    
    /*
    |--------------------------------------------------------------------------
    | How much rows can be returned for autocompleate without any criteria
    |
    | Autocompleate for small classifiers can show all values (this setting declares what is treated as "small") 
    | For large tables there will be search criteria required (at least 3 characters)
    |--------------------------------------------------------------------------
    */
    'autocompleate_max_count' => 20,
    
    /*
    |--------------------------------------------------------------------------
    | Is backuping enabled
    |
    | Backup policy is defined in config file laravel-backup.php
    | It's made one ZIP archive with db dump and all resources files
    |--------------------------------------------------------------------------
    */
    'is_backuping_enabled' => env('APP_BACKUP_ON', false),
    
    /*
    |--------------------------------------------------------------------------
    | Indicates which role will see left employees in search results
    |--------------------------------------------------------------------------
    */
    'left_employees_access_role_id' => 39,
    
    /*
    |--------------------------------------------------------------------------
    | Use as much as possible CSS instead of JS for responsive positioning
    |--------------------------------------------------------------------------
    |
    | This feature brings increased performance of the UI on resize events.
    | It also enables 'tabdrop' behavior for main menu.
    */
    'is_cssonly_ui' => true,
    
    /*
    |--------------------------------------------------------------------------
    | Indicates if timeoff must be calculated daily by CRON JOB
    |--------------------------------------------------------------------------
    */
    'is_timeoff_calculation' => env('APP_CALCULATE_TIMEOFF', false),
    
    /*
    |--------------------------------------------------------------------------
    | UI constructor settings
    |--------------------------------------------------------------------------
    */
    'constructor' => [
        // Role which have rights to use constructor
        'access_role_id' => 1,
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Refresh rate in seconds. Chat messages will be pulled from server after specified time
    |-------------------------------------------------------------------------- 
    */
    'chat_refresh_rate' => env('CHAT_REFRESH_RATE', 1),
    
    /*
    |--------------------------------------------------------------------------
    | Parameter if chat enabled
    |-------------------------------------------------------------------------- 
    */
    'is_chat_enabled' => true,
    
    /*
    |--------------------------------------------------------------------------
    | Is tasks logic enabled - will be available informative tasks button
    |-------------------------------------------------------------------------- 
    */
    'is_tasks_logic' => true,
    
    /*
    |--------------------------------------------------------------------------
    | Is news logic enabled - will be available news search on top right corner
    |-------------------------------------------------------------------------- 
    */
    'is_news_logic' => true,
    
    /*
    |--------------------------------------------------------------------------
    | Application namings and textual logo-replacers settings
    |-------------------------------------------------------------------------- 
    */
    'app' => [
        'name' => env('APP_NAME', 'MINDWO'),
        'logo_txt' => env('APP_LOGO_TXT', ''),
        'logo_big_txt' => env('APP_LOGO_BIG_TXT', ''),
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Is education processes modules enabled. 
    |
    | Used to organize large companies employees education or provide educational services as a business.
    | To use this option several database tables must be filled with proper values.
    | This option can be turned on/off safely only by system provider.
    |-------------------------------------------------------------------------- 
    */
    'is_edu_modules' => env('APP_EDU_MODULES_ON', false),

    /*
    |--------------------------------------------------------------------------
    | Is grid resizing off
    |
    | There is JavaScript function which resizes grid page after loading so no double vertical scrollbars in page.
    | This option turns off this resizing - can be used in cases if resizing causes undesired effects on some slow browsers
    |-------------------------------------------------------------------------- 
    */
    'no_grid_height_resize' => env('APP_NO_GRID_HEIGT_RESIZE', 0),

    /*
    |--------------------------------------------------------------------------
    | Is developer mode enabled. 
    |
    | This allows to write translation files on the fly and then it's possible to commit changes via GIT
    | This options must not be set on test or production environments - otherwise Jenkins wont work (GIT stash needed)
    |-------------------------------------------------------------------------- 
    */
    'is_develop_mode' => env('APP_DEVELOP_MODE_ON', false),

    /*
    |--------------------------------------------------------------------------
    | Allowed public widgets
    |
    | In this array can be provided widgets (from app\blocks) which can be accessed via special route /public/widgets without authorization
    |-------------------------------------------------------------------------- 
    */
    'public_widgets' => [
        'GROUPS_CALENDAR',
        'EDU_LESSONS',
        'GROUPS_SCHEDULE',
        'EDU_FILTER_CALENDAR',
        'GROUPS_SCHEDULE',
    ],

    /*
    |--------------------------------------------------------------------------
    | Indicates if VISS authroziation functionality is enabled
    |
    | https://viss.gov.lv/lv/Informacijai/Dokumentacija/Koplietosanas_komponentes/Vienotas_pieteiksanas_modulis
    | https://viss.gov.lv/lv/Informacijai/Partneriem/Sadarbibas_proceduras/kopeja_shema_VP/2
    |-------------------------------------------------------------------------- 
    */
    'is_viss_authorization' => env('APP_IS_VISS_AUTHORIZATION', false),

    /*
    |--------------------------------------------------------------------------
    | Indicates if system is configuret for other companies employees access
    |
    | There might be 2 subdomains working with 1 db. 2nd subdomain can be for subcotractors employees.
    | This mode disables access to company news, employees and other non-public information.
    |-------------------------------------------------------------------------- 
    */
    'subcontract_domain' => env('APP_SUBCONTRACT_DOMAIN', ''),

    /*
    |--------------------------------------------------------------------------
    | TOP left search box configuration
    |
    | It is possible to set up which search objects are supported and their look&feel parameters.
    | 
    | Example object array structure:
    |
    |        'OBJECT_KEY' => [ // Object key - must exists class SearchObj_OBJECT_KEY in folder app/Libraries/SearchObj 
    |            'title' => 'search_top.documents', // Menu title in dropdown button, here we provide key from translation file
    |            'icon' => 'fa fa-file-text', // Menu icon class name
    |            'placeholder' => 'search_top.search_documents', // Search input placeholder text (translation file key)
    |            'is_dynamic_search' => false, // Indicates if AJAX search is enabled and search results are shown in dynamic sliding DIV
    |            'dynamic_search_info' => '', // AJAX search hint regarding what will be searched
    |        ],
    |
    | default_obj - here we set default search object key
    |-------------------------------------------------------------------------- 
    */
    'top_search' => [
        'objects' => [ 
                             
            'DOCUMENTS' => [
                'title' => 'search_top.documents',
                'icon' => 'fa fa-file-text',
                'placeholder' => 'search_top.search_documents',
                'is_dynamic_search' => false,
                'dynamic_search_info' => '',
            ],            
            'EMPLOYEES' => [
                'title' => 'search_top.employees',
                'icon' => 'fa fa-users',
                'placeholder' => 'search_top.search_employees',
                'is_dynamic_search' => true,
                'dynamic_search_info' => 'search_top.default_info',
            ],            
            /*
            'EDU_STUDENTS' => [
                'title' => 'education.search_top_students',
                'icon' => 'fa fa-users',
                'placeholder' => 'education.search_top_search_students',
                'is_dynamic_search' => true,
                'dynamic_search_info' => 'education.search_top_default_info',
                'roles' => [
                    1,
                    74
                ],
            ],
            'EDU_CATALOG_COURSES' => [
                'title' => 'search_top.edu_courses',
                'icon' => 'fa fa-university',
                'placeholder' => 'search_top.search_edu_courses',
                'is_dynamic_search' => false,
                'dynamic_search_info' => '',
            ],
            'FORUM' => [
                'title' => 'education.search_top_forums',
                'icon' => 'fa fa-newspaper-o',
                'placeholder' => 'education.search_top_search_forums',
                'is_dynamic_search' => false,
                'dynamic_search_info' => 'education.search_top_forum_default_info',
            ],
            'EDU_CATALOG_MATERIALS' => [
                'title' => 'search_top.edu_materials',
                'icon' => 'fa fa-book',
                'placeholder' => 'search_top.search_edu_materials',
                'is_dynamic_search' => false,
                'dynamic_search_info' => '',
            ],            
            */
            /*
            'ARTICLES' => [
                'title' => 'search_top.news',
                'icon' => 'fa fa-newspaper-o',
                'placeholder' => 'search_top.search_news',
                'is_dynamic_search' => false,
                'dynamic_search_info' => '',
            ], 
            */   
        ],
        'default_obj' => 'DOCUMENTS',
    ],

    /*
    |--------------------------------------------------------------------------
    | Test scenarios students email address
    |
    | Used to generate student data in PHPUnit tests
    |-------------------------------------------------------------------------- 
    */
    'test_email' => env('APP_DEV_TEST_EMAIL', 'janis.supe@gmail.com'),  
    
    /*
    |--------------------------------------------------------------------------
    | Indicates if employee address hidden for simple employees
    |
    | Detailed info is visible only for HR
    |-------------------------------------------------------------------------- 
    */
    'is_empl_address_hidden' => env('APP_HR_IS_EMPL_ADDRRESS_HIDDEN', false), 

    /*
    |--------------------------------------------------------------------------
    | Indicates if CSRF tokens functionality is turned on or off
    |
    | This can be used to debug session files locking isssues
    |-------------------------------------------------------------------------- 
    */
    'is_csrf_off' => env('APP_IS_CSRF_OFF', false),

    /*
    |--------------------------------------------------------------------------
    | Set custom http error code for Exceptions.
    |
	| This is needed for passing security tests (202)
    |--------------------------------------------------------------------------
	*/
    'http_error_code' => 500,
    
    /*
    |--------------------------------------------------------------------------
    | Indicates if finance modules functionality is turned on
    |
	| Finance modules to support de minimis accounting functionality
    |--------------------------------------------------------------------------
	*/
    'is_fmd_modules' => env('APP_FMD_MODULES_ON', false),

    /*
    |--------------------------------------------------------------------------
    | Finance module options
    |--------------------------------------------------------------------------
	*/
    'finance' => [
        'control_role_id' => 82,
        'support_role_id' => 81,
        'admin_role_id' => 83,
        'pretend_role_id' => 80,
    ],

    /*
    |--------------------------------------------------------------------------
    | List ID for all company tasks
    |
    | Only TOP managers can access all company tasks
    | This setting is needed to check rights on particular task form opening
    |--------------------------------------------------------------------------
	*/
    'company_tasks_list_id' => 284,

    /*
    |--------------------------------------------------------------------------
    | Documents fields mappings
    |
    | Used when created answer document to incomming document (from task)
    |--------------------------------------------------------------------------
    */    
    'doc_mapping' => [
        'dx_doc' => [
            'copy_fields' => [
                'person1_id',
                'about',
                'due_date',
                'receiver_id',
            ],
            'rel_doc_field' => 'answer_doc_id',
            'out_type_id' => 1, // default sending type for coppied person in table dx_doc_pers
            'main_file_field' => 'file_name', // file field name where signable document resides for esigning
            'esigned_file_field' => 'file_scan_name', // file field name where signed document will be copied
            'received_date_field' => 'event_time', // date field when document received, used for inbox processed emails registering as documents
            'received_type_field' => 'data_id', // classifier field for received types
            'received_type_email_id' => 2, // ID for type 'Email'
            'received_type_eaddress_id' => 13, // ID for type 'Eaddress'
            'task_doc_field' => 'task_doc_id', // Used when document was created from an task (here we insert then original doc id for which task was created)
            'main_rel_doc_field' => 'rel_doc_id', // Used to map additional outgoing documents with main incoming document
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Notification emails (about tasks etc) look & feel
    |
    | Her can be setup colors for emails headings - background and font color
    |--------------------------------------------------------------------------
	*/
    'notify_email' => [
        'head_bg_color' => '#57aa05',
        'head_fore_color' => '#ffffff',
    ],

    /*
    |--------------------------------------------------------------------------
    | Tasks widget related documents opening setting
    |
    | Indicates if document form will be opened in read mode or edit mode (depending on task type)
    |--------------------------------------------------------------------------
	*/
    'is_tasks_widget_docs_read_mode_allways' => env('APP_TASKS_WIDGET_DOCS_READ_MODE_ALLWAYS', false),

    /*
    |--------------------------------------------------------------------------
    | Document preview generation settings
    |
    | Generates JPG file from DOCX
    |--------------------------------------------------------------------------
	*/
	'document_preview' => [
		'dest_dir' => storage_path('app' . DIRECTORY_SEPARATOR . 'doc_previews'),
		'unoconv' => env('DOC_PREVIEW_UNOCONV', '/usr/bin/unoconv'),
		'ghostscript' => env('DOC_PREVIEW_GHOSTSCRIPT','/usr/bin/gs'),
		'quality' => 100,
		'dpi' => 200,
        'page' => 1,
        'is_win' =>  env('DOC_PREVIEW_IS_WIN', false),
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Default VRAA sender eadress ID
    | 
    | Used if no sender provided in document
    |--------------------------------------------------------------------------
	*/
    'vraa_default_sender_address_id' => 121,

    /*
    |--------------------------------------------------------------------------
    | Indicates if in login page is visible link "Forgot password"
    | 
    | This option can be used in case of Active Directory where there is no need for password recovery logic
    |--------------------------------------------------------------------------
	*/
    'is_forgot_password_link' => env('IS_FORGOT_PASSWORD_LINK', true),

    /*
    |--------------------------------------------------------------------------
    | Is link to particular task item in tasks emails
    | 
    | Used in case when tasks widget have more priority than particular task form
    |--------------------------------------------------------------------------
	*/
    'is_task_link_to_first_page' => env('IS_TASK_LINK_TO_FIRST_PAGE', false),

    /*
    |--------------------------------------------------------------------------
    | Is link to open task form from tasks widget
    | 
    | Used in case when tasks widget have more functionality than task form
    |--------------------------------------------------------------------------
	*/
    'is_task_widget_task_form' => env('IS_TASK_WIDGET_TASK_FORM', true),

    /*
    |--------------------------------------------------------------------------
    | Is possible to provide role to which users will be send info tasks
    | 
    | Used in case when client dont have defined correct roles with users to avoid wrong info tasks creation
    |--------------------------------------------------------------------------
	*/
    'is_info_task_for_roles' => env('IS_INFO_TASK_FOR_ROLES', true),

    /*
    |--------------------------------------------------------------------------
    | Is grid filters row allways visible
    | 
    | Sometimes users want to allways search grids, but sometimes they misunderstand filtering fields and expects to enter/save here new rows
    | Use this setting depending on client needs and knowledge/skills level
    |--------------------------------------------------------------------------
	*/
    'grid_filters_allways_on' => env('IS_GRID_FILTERS_ALLWAYS_ON', true),

    /*
    |--------------------------------------------------------------------------
    | Is user menu available
    | 
    | If client have 1 fixed UI design theme and users authorization is via Active Directory then no need to change password or change UI theme
    |--------------------------------------------------------------------------
	*/
    'show_user_menu' => env('IS_USER_MENU_ON', true),

    /*
    |--------------------------------------------------------------------------
    | Is INBOX email echecking enabled
    | 
    | If client have public email which receives incoming documents - this services registers emails in system
    |--------------------------------------------------------------------------
	*/
    'is_inbox_enabled' => env('IS_INBOX_ENABLED', true),
];

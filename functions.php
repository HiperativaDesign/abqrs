<?php 
// Estilizando logo da página de login do administrador
function login_logo() { 
?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo-blue.png);
            height: 47px;
            width: 184px;
            background-size: 184px 47px;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
<?php 
}
add_action( 'login_enqueue_scripts', 'login_logo' );

// Modificando o link do logo da página de login do administrador
function login_logo_url() {
    return home_url();
}
add_filter('login_headerurl', 'login_logo_url');

// Alterando o título do logo da página de login do administrador
function login_logo_title() {
    return 'Voltar para a página inicial';
}
add_filter('login_headertitle', 'login_logo_title');

// Estilizando o logo da barra de navegação
add_theme_support( 'custom-logo', array(
    'height'      => 40,
    'width'       => 100,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

// Alterar o fundo do site
add_theme_support('custom-background');

// Adicionando inserção de imagem nos posts
add_theme_support('post-thumbnails');

// Post types adicionais
function add_slide_type() {
    // Slide
    register_post_type('slide',
        array(
            'labels' => array(
                'name' => __('Slides'),
                'singular_name' => __('Slide')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-slides',
            'supports' => array('title', 'thumbnail', 'editor'),
        )
    );
}
add_action('init', 'add_slide_type');

function add_comment_type() {
    // Comentários de personas
    register_post_type('comment',
        array(
            'labels' => array(
                'name' => __('Reviews'),
                'singular_name' => __('Opinion')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-quote',
            'supports' => array('title', 'thumbnail', 'editor'),
        )
    );
}
add_action('init', 'add_comment_type');

// function add_curso_type() {
//     // Cursos
//     register_post_type('curso',
//         array(
//             'labels' => array(
//                 'name' => __('Cursos'),
//                 'singular_name' => __('Curso')
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'menu_icon' => 'dashicons-welcome-learn-more',
//             'supports' => array('title', 'thumbnail', 'editor'),
//         )
//     );
// }
// add_action('init', 'add_curso_type');

// function add_palestra_type() {
//     // Palestra
//     register_post_type('palestra',
//         array(
//             'labels' => array(
//                 'name' => __('Palestras'),
//                 'singular_name' => __('Palestra')
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'menu_icon' => 'dashicons-welcome-learn-more',
//             'supports' => array('title', 'thumbnail', 'editor'),
//         )
//     );
// }
// add_action('init', 'add_palestra_type');
<?php
/**
 * Plugin Name:       Galdar Survey
 * Plugin URI:        https://github.com/darciro/
 * Description:       @TODO
 * Version:           1.0.0
 * Author:            Ricardo Carvalho
 * Author URI:        https://github.com/darciro/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! class_exists( 'GaldarSurvey' ) ) :

	class GaldarSurvey {

		/**
		 * GaldarSurvey constructor.
		 *
		 */
		public function __construct() {
			register_activation_hook( __FILE__, array( $this, 'activate_galdar_survey' ) );

			add_action( 'wp_enqueue_scripts', array( $this, 'register_galdar_survey_styles' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'register_galdar_survey_scripts' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'register_galdar_survey_admin_styles' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'register_galdar_survey_admin_scripts' ) );
			add_action( 'init', array( $this, 'cpt_survey' ) );
			add_action( 'add_meta_boxes', array( $this, 'galdar_survey_add_meta_box' ) );
			add_action( 'manage_posts_custom_column', array( $this, 'survey_custom_columns' ), 10, 2 );
			add_action( 'acf/save_post', array( $this, 'galdar_survey_save_postdata' ) );
			add_action( 'wp_ajax_answer_survey', array( $this, 'answer_survey' ) );
			add_action( 'wp_ajax_nopriv_answer_survey', array( $this, 'answer_survey' ) );

			add_filter( 'manage_survey_posts_columns', array( $this, 'add_survey_columns' ) );
			add_filter( 'acf/prepare_field/name=votos', array( $this, 'galdar_survey_hidden_field' ), 1, 1 );

			add_shortcode( 'galdar-survey', array( $this, 'galdar_survey_shortcode' ) );
		}

		/**
		 * Fired during plugin activation, check for dependency
		 *
		 */
		public static function activate_galdar_survey() {
			if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) && ! is_plugin_active( 'advanced-custom-fields/acf.php' ) ) {
				echo 'Para que este plugin funcione corretamente, é necessário a instalação e ativação do plugin ACF - <a href="http://advancedcustomfields.com/" target="_blank">Advanced custom fields</a>.';
				die;
			}
		}

		/**
		 * Register our public styles
		 *
		 */
		public function register_galdar_survey_styles() {
			wp_enqueue_style( 'dashicons' );
			wp_register_style( 'galdar_survey-styles', plugins_url( '/assets/css/galdar-survey-styles.css', __FILE__ ) );
			wp_enqueue_style( 'galdar_survey-styles' );
		}

		/**
		 * Register our admin styles
		 *
		 */
		public function register_galdar_survey_admin_styles() {
			global $post_type;
			if ( $post_type !== 'survey' ) {
				return;
			}

			wp_register_style( 'galdar_survey-admin-styles', plugins_url( '/assets/css/galdar-survey-admin-styles.css', __FILE__ ) );
			wp_enqueue_style( 'galdar_survey-admin-styles' );
		}

		/**
		 * Register our public scripts
		 *
		 */
		public function register_galdar_survey_scripts() {
			wp_register_script( 'galdar_survey-scripts', plugins_url( '/assets/js/galdar-survey-scripts.js', __FILE__ ), array( 'jquery' ) );
			wp_enqueue_script( 'galdar_survey-scripts' );
			wp_localize_script( 'galdar_survey-scripts', 'GS', array(
					'ajaxurl'  => admin_url( 'admin-ajax.php' ),
					'gs_nonce' => wp_create_nonce( 'galdar-survey' ),
				)
			);
		}

		/**
		 * Register our admin scripts
		 *
		 */
		public function register_galdar_survey_admin_scripts() {
			// wp_enqueue_script( 'media-upload' );
			wp_register_script( 'galdar_survey-admin-scripts', plugins_url( '/assets/js/galdar-survey-admin-scripts.js', __FILE__ ), array( 'jquery' ) );
			wp_enqueue_script( 'galdar_survey-admin-scripts' );
		}

		/**
		 * Create a custom post type with custom taxonomy for our documents
		 *
		 */
		public function cpt_survey() {
			register_post_type( 'survey',
				array(
					'labels'             => array(
						'name'               => 'Enquetes',
						'singular_name'      => 'Enquete',
						'add_new'            => 'Nova enquete',
						'add_new_item'       => 'Nova enquete',
						'edit_item'          => 'Editar enquete',
						'search_items'       => 'Buscar enquete',
						'not_found'          => 'Nada encontrado',
						'not_found_in_trash' => 'Nada encontrado',
					),
					'public'             => true,
					'has_archive'        => true,
					'publicly_queryable' => true,
					'supports'           => array( 'title' ),
					'menu_icon'          => 'dashicons-chart-area',
					'show_in_rest'       => true
				)
			);
		}

		/**
		 * Add a meta box to upload our document
		 *
		 */
		public function galdar_survey_add_meta_box() {
			add_meta_box(
				'galdar-survey-metabox',
				'Resultado dessa enquete',
				array( $this, 'render_meta_box_content' ),
				'survey',
				'side',
				'default'
			);
		}

		/**
		 * Metabox content
		 *
		 * @param $post
		 */
		public function render_meta_box_content( $post ) {
			$survey_votes = get_post_meta($post->ID, 'survey_votes', true );
			$survey_data = get_post_meta($post->ID, 'survey_data', true );

			if( $survey_votes ) : ?>

            <div class="galdar-survey-metabox">
                <p>Total de votos até o momento: <b><?php echo $survey_votes; ?></b></p>
                <?php
                foreach($survey_data['perguntas'] as $i => $sd): ?>
                    <!--<p>Questão #<?php /*echo ( $i + 1 ); */?></p>-->
                    <p><?php echo $sd['titulo']; ?></p>

                    <?php foreach ( $sd['opcoes'] as $res ) : ?>
                        <p>Votos para a resposta: <?php echo $res['resposta']; ?></p>
                        <div class="survey-loader-wrapper">
                            <div class="survey-loader" style="width: <?php echo round( ( intval ($res['votos'] ) / $survey_votes * 100), 1 ); ?>%"></div>
                            <span class="right"><?php echo round( ( intval ( $res['votos'] ) / $survey_votes * 100), 1 ); ?>%</span>
                            <span class="left"><?php echo $res['votos']; ?> Votos</span>
                        </div>
                    <?php endforeach; ?>
                    <hr style="margin-top: 50px">
                <?php endforeach; ?>
            </div>

            <?php else: ?>
                <div class="galdar-survey-metabox">
                    <p>Essa enquete ainda não possui votos.</p>
                </div>
            <?php endif; ?>

			<?php
		}

		/**
		 * Shortcode to add a list of documents to show
		 *
		 * @param $atts
		 *
		 * @return string
		 */
		public function galdar_survey_shortcode( $atts ) {
			$atts = shortcode_atts( array(
				'survey' => '',
				// 'items'           => '5',
			), $atts );

			ob_start();
			$galdar_survey_query = new WP_Query( array(
				'post_type' => 'survey',
				'p'         => $atts['survey'],
			) );

			if ( $galdar_survey_query->have_posts() ) :
				while ( $galdar_survey_query->have_posts() ) : $galdar_survey_query->the_post();

					echo '
						<style>
							html { margin: 0 !important; }

							body {
								overflow-x: hidden;
								background: #ccc !important;
							}

							body > header,
							.singular .entry-header,
							#wpadminbar,
							.footer-nav-widgets-wrapper,
							#site-footer,
							.post-meta-wrapper { display: none !important; }

							.post-inner { padding: 0 !important; }

							.fundo-form {
								width: 0 !important;
								max-width: none !important;
								position: absolute;
								top: 0;
								left: 0;
								border-top: 408px solid #3366cc !important;
								border-left: 540px solid #3366cc !important;
								border-right: 540px solid transparent !important;
								border-bottom: 408px solid transparent !important;
								z-index: -1;
							}
							.box-questao {
								opacity: 1;
								z-index: 1;
								transition: opacity 200ms ease-in-out 200ms !important;
							}
							.box-questao.inactive {
								opacity: 0;
								z-index: -2;
								transition: opacity 200ms ease-in-out, z-index 0s ease-in-out 400ms !important;
							}
							.box-questao + .box-questao { margin-top: 81px; }
							.galdar-survey-form {
								width: 100% !important;
								max-width: 730px !important;
								margin-top: 0;
								margin-bottom: 0;
								padding: 130px 0 0;
							}
							.galdar-survey-form fieldset {
								width: 100%;
								margin: 0;
								padding: 55px;
								position: relative;
								border: none;
								background: #fff;
							}
							.form__pergunta {
								margin: 0 0 23px;
								font-weight: 900;
								font-style: italic;
								font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
								font-size: 53px;
								color: #293648 !important;
								line-height: 52px !important;
								text-transform: uppercase;
								display: block;
							}
							.form__questao {
								margin-bottom: 15px;
								font-weight: 500;
								font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
								font-size: 23px;
								color: #fd8049;
								text-transform: uppercase;
								display: block;
							}
							.form__descricao {
								margin: 0 0 37px;
								font-weight: 500;
								font-style: italic;
								font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
								font-size: 25px;
								color: #979797;
								line-height: 34px !important;
								text-transform: uppercase;
							}
							.form__alternativas {
								margin: 0 -5px;
								display: grid;
								grid-template-columns: 20% 20% 20% 20% 20%;
								justify-content: space-between;
							}
							.form__alternativa {
								margin: 0 0 10px;
								padding: 0 5px;
								position: relative;
								overflow: hidden;
							}
							.form__alternativa input[type=radio] {
								position: absolute;
								left: -99999px;
							}
							.form__alternativa label {
								margin: 0;
								padding: 6px 0 5px;
								font-weight: 500;
								font-style: italic;
								font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
								font-size: 25px;
								color: #3366cc;
								cursor: pointer;
								text-align: center;
								display: block;
								border-radius: 6px;
								border: 1px solid #3366cc;
								background-color: #fff;
								transition: color 200ms ease-in-out, background-color 200ms ease-in-out !important;
							}
							.form__alternativa label:hover,
							.form__alternativa input[type=radio]:checked + label {
								color: #fff;
								background-color: #3366cc;
							}
							.answer-survey-button {
								width: 100%;
								margin: 40px 0 0;
								padding: 16px 0;
								font-weight: 700;
								font-style: italic;
								font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
								font-size: 25px;
								color: #fff !important;
								text-transform: uppercase;
								text-decoration: none !important;
								display: block;
								border-radius: 5px;
								background: #fd8049 !important;
								opacity: 1;
								z-index: 1;
								transition: opacity 200ms ease-in-out 200ms !important;
							}
							.answer-survey-button:hover { text-decoration: none !important; }
							.answer-survey-button.inactive {
								opacity: 0;
								z-index: -2;
								transition: opacity 200ms ease-in-out, z-index 0s ease-in-out 400ms !important;
							}

							.footer-enquete {
								width: 100% !important;
								max-width: none !important;
								height: 290px;
								margin-top: 190px;
								padding-top: 86px;
								background: #216eb7;
							}
							.footer-enquete img {
								margin: 0 auto;
								display: block;
							}
							.mensagem-agradecimento {
								padding: 55px;
								position: absolute;
								top: 0;
								left: 0;
								opacity: 0;
								z-index: -2;
								transition: opacity 200ms ease-in-out, z-index 0s ease-in-out 200ms !important;
							}
							.mensagem-agradecimento.active {
								opacity: 1;
								z-index: 1;
								transition: opacity 200ms ease-in-out 600ms !important;
							}
							.mensagem-erro {
								width: 100%;
								padding: 55px;
								font-weight: 700;
								font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
								font-size: 25px;
								color: red;
								text-transform: uppercase;
								text-align: right;
								display: block;
								position: absolute;
								top: 0;
								left: 0;
								opacity: 0;
								z-index: -2;
								transition: opacity 200ms ease-in-out, z-index 0s ease-in-out 200ms !important;
							}
							.mensagem-erro.active {
								opacity: 1;
								z-index: 1;
								transition: opacity 200ms ease-in-out !important;
							}

							@media screen and (max-width: 650px) {
								.form__pergunta {
									font-size: 40px !important;
									line-height: 39px !important;
								}
								.form__descricao {
									font-size: 20px;
									line-height: 29px !important;
								}
								.mensagem-erro {
									text-align: center;
									background: #fff;
								}
								.form__alternativas { grid-template-columns: 33% 33% 33%; }
							}
							@media screen and (max-width: 550px) {
								.form__pergunta {
									font-size: 30px !important;
									line-height: 29px !important;
								}
								.form__descricao {
									font-size: 18px;
									line-height: 24px !important;
								}
								.mensagem-erro { font-size: 20px; }
								.form__alternativas { grid-template-columns: 50% 50%; }
							}
							@media screen and (max-width: 400px) {
								.form__pergunta {
									font-size: 20px !important;
									line-height: 19px !important;
								}
								.form__alternativas { grid-template-columns: 100%; }
							}
						</style>
					';

					echo '<form method="post" class="galdar-survey-form" data-survey-id="'. get_the_ID() .'"><fieldset>';
					// the_title();

					$questoes = 1;
					if ( have_rows( 'perguntas' ) ):
						while ( have_rows( 'perguntas' ) ) : the_row();
							echo '<div class="box-questao">';
							echo '<strong class="form__questao">Questão ' . $questoes . '</strong>';
							echo '<label class="form__pergunta">' . get_sub_field( 'titulo' ) . '</label>';
							echo '<p class="form__descricao">' . get_sub_field( 'descricao' ) . '</p>';

							echo '<div class="form__alternativas">';
							if ( have_rows( 'opcoes' ) ):
								while ( have_rows( 'opcoes' ) ) : the_row();
									$identificador = get_sub_field( 'resposta' );

									echo '<div class="form__alternativa"><input type="radio" id="questao-' . $questoes . '-' . $identificador . '" name="questao-' . $questoes . '" value="' . $identificador . '"><label for="questao-' . $questoes . '-' . $identificador . '">' . $identificador . '</label></div>';
								endwhile;
							endif;

							echo '</div></div>';
							$questoes++;
						endwhile;
					endif;
					echo '<strong class="form__pergunta mensagem-agradecimento">Agradecemos a sua participação.</strong><strong class="mensagem-erro">Preenchimento obrigatório.</strong></fieldset><button class="answer-survey-button">Votar</button>';
					echo '</form><div class="fundo-form"></div>';

					echo '<footer class="footer-enquete"><img src="' . plugins_url( '/assets/img/lgo/sebrae.png', __FILE__ ) . '"></footer>';

				endwhile;
				wp_reset_postdata();
			endif;

			return ob_get_clean();
		}

		/**
		 * Add new columns to our custom post type
		 *
		 * @param $columns
		 *
		 * @return array
		 */
		public function add_survey_columns( $columns ) {
			return array_merge( $columns, array(
				'author'      => 'Autor',
				'votes' => 'Votos'
			) );
		}

		/**
		 * Fill custom columns with data
		 *
		 * @param $column
		 * @param $post_id
		 */
		public function survey_custom_columns( $column, $post_id ) {
			switch ( $column ) {
				case 'votes':
					$survey_votes = get_post_meta($post_id, 'survey_votes', true );
					echo $survey_votes ? $survey_votes : 0;
					break;
			}
		}

		public function galdar_survey_hidden_field( $field ) {
			$field['wrapper']['class'] = 'hidden';
			return $field;
		}

		/**
		 * Sanitize and save our data
		 *
		 * @param $post_id
		 */
		public function galdar_survey_save_postdata( $post_id ) {
			if ( 'survey' == $_POST['post_type'] ) {
				if ( ! current_user_can( 'edit_page', $post_id ) ) {
					return;
				}
			} else {
				if ( ! current_user_can( 'edit_post', $post_id ) ) {
					return;
				}
			}

			$survey_data = get_fields( $post_id );

			if( !get_post_meta( $post_id, 'survey_data', true ) )
				add_post_meta( $post_id, 'survey_data', $survey_data, true );

		}

		public function answer_survey() {
			check_ajax_referer( 'galdar-survey', 'nonce' );

			if ( isset( $_POST ) and $_SERVER['REQUEST_METHOD'] == "POST" ) {
				$survey_data = get_post_meta($_POST['data']['survey_id'], 'survey_data', true );

				foreach ($survey_data as $i => $questions) {
					foreach ($questions as $q => $question) {
						$key = array_search($_POST['data']['respostas'][$q], array_column($question['opcoes'], 'resposta'));
						$survey_data['perguntas'][$q]['opcoes'][$key]['votos']++;
					}
                }

				if( update_post_meta( $_POST['data']['survey_id'], 'survey_data', $survey_data) ) {
					$survey_votes = ( get_post_meta($_POST['data']['survey_id'], 'survey_votes', true ) ) ? get_post_meta($_POST['data']['survey_id'], 'survey_votes', true ) : 0;
					$survey_votes++;
					update_post_meta( $_POST['data']['survey_id'], 'survey_votes', $survey_votes);
					wp_send_json_success( $survey_data );
                }


			} else {
				error_log( 'Houve um problema no servidor ao enviar o vídeo com inscrição: ' . $_POST['post_id'], 0 );
				die;
			}

			die;
		}

	}

	// Initialize our plugin
	$galdar_survey = new GaldarSurvey();

endif;

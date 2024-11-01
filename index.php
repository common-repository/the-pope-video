<?php
/**
     * @package ThePopeVideo
     */
    /*
    Plugin Name: The Pope Video
    Plugin URI: https://thepopevideo.org/
    Description: Muestra El Video del Papa oficial del Vaticano, con la intención de oración del Papa Francisco. Siempre actualizado y fácil de instalar.
    Version: 1.1.2.11
    Author: thepopevideo
    License: LGPLv3 or later
    */

    $tpvplist['ThePopeVideo-EN'] = 'PLTroqZcBkue16MMgzz9LKRp-W1biit5sp';
    $tpvplist['ThePopeVideo-IT'] = 'PLmADjQKFi6OeWVbd550teBM-4koJju-Ik';
    $tpvplist['ThePopeVideo-ES'] = 'PLGPDOIdMOZigx5lkndwP9GTO5AzSfHPJR';
    $tpvplist['ThePopeVideo-FR'] = 'PLNuo11uPpIUKVBsLRnZ3n1ZHj9cFO7nL2';
    $tpvplist['ThePopeVideo-PT'] = 'PLbrmDDANazj3jkxsIzzs74YBaCCR5jM1l';
 
    function TPVP_ShortCode($atts, $content, $shortcode_tag){
        global $tpvplist;
        $shortcode = explode("-",$shortcode_tag);
        $url = "https://www.youtube.com/embed/videoseries?rel=0&list=" . $tpvplist[$shortcode[0]."-".$shortcode[1]];
        $content = "<iframe style='width:100%' width='1020' height='600' src='{$url}' allowfullscreen='allowfullscreen' mozallowfullscreen='mozallowfullscreen' msallowfullscreen='msallowfullscreen' oallowfullscreen='oallowfullscreen' webkitallowfullscreen='webkitallowfullscreen'></iframe>";
        $content_wpb = "<div class='wpb_video_widget wpb_content_element vc_clearfix vc_video-aspect-ratio-169 vc_video-el-width-100 vc_video-align-left'><div class='wpb_wrapper'><div class='wpb_video_wrapper'>".$content."</div></div></div>";
        return count($shortcode)>2 && $shortcode[2]==="WPBakery" ? $content_wpb : $content;
    }

    foreach ($tpvplist as $key => $value) {
      add_shortcode($key,'TPVP_ShortCode');
      add_shortcode($key."-WPBakery",'TPVP_ShortCode');
    }

    function TPVP_admin_es()
    {   ?>
        <div>
        <h2 class="dashicons-before dashicons-admin-post"> Instrucciones</h2>
        <p>
        <ol>
        <li>
        Descarga e instala <b>The Pope Video Plugin</b> desde la sección “Plugins” de tu administrador.
        </li>
        <li>
        Una vez instalado en el menú de tu administrador de WordPress (en la columna izquierda de opciones) encontrarás The Pope Video Plugin. Accede a esta sección.
        </li>
        <li>
        Para agregar el video en tu página debes ir al lugar donde quieres que aparezca (página) y allí copia el shortcode que corresponda según el idioma que desee del siguiente listado:
        <ul>
        <li>
        Videos en inglés shortcode: [ThePopeVideo-EN]
        </li>
        <li>
        Videos en español shortcode: [ThePopeVideo-ES]
        </li>
        <li>
        Videos en italiano shortcode: [ThePopeVideo-IT]
        </li>
        <li>
        Videos en portugués shortcode: [ThePopeVideo-PT]
        </li>
        <li>
        Videos en francés shortcode: [ThePopeVideo-FR]
        </li>
        </ul>
        Si tu WordPress usa WPBakery Page Builder utiliza los siguientes shortcodes:
        <ul>
            <li>
            [ThePopeVideo-EN-WPBakery]
            </li>
            <li>
            [ThePopeVideo-ES-WPBakery]
            </li>
            <li>
            [ThePopeVideo-IT-WPBakery]
            </li>
            <li>
            [ThePopeVideo-PT-WPBakery]
            </li>
            <li>
            [ThePopeVideo-FR-WPBakery]
            </li>
        </ul>
        </li>
        <li>
        Ya quedaría insertado, no necesitas nada más, es así de simple. 
        </li>
        </ol>
        </p>
        </div>
        <?php
    }
    
    function TPVP_admin_en()
    {   ?>
        <div>
        <h2 class="dashicons-before dashicons-admin-post"> Instructions</h2>
        <p>
        <ol>
        <li>
        Download and install <b>The Pope Video Plugin</b> from the “Plugins” section of your administrator.
        </li>
        <li>
        Once installed in the menu of your administrator of WordPress (in the column on the left of options) you will find The Pope Video Plugin. Open this section.
        </li>
        <li>
        To add the video to your page go to the place where you want it to appear (page) and copy there the shortcode which corresponds to the language that you desire from the following list:
        <ul>
        <li>
        Videos in English short code: [ThePopeVideo-EN]
        </li>
        <li>
        Videos in Spanish short code: [ThePopeVideo-ES]
        </li>
        <li>
        Videos in Italian short code: [ThePopeVideo-IT]
        </li>
        <li>
        Videos in Portuguese short code: [ThePopeVideo-PT]
        </li>
        <li>
        Video in French short code: [ThePopeVideo-FR]
        </li>
        </ul>
        If your WordPress uses WPBakery Page Builder use the following shortcodes:
        <ul>
            <li>
            [ThePopeVideo-EN-WPBakery]
            </li>
            <li>
            [ThePopeVideo-ES-WPBakery]
            </li>
            <li>
            [ThePopeVideo-IT-WPBakery]
            </li>
            <li>
            [ThePopeVideo-PT-WPBakery]
            </li>
            <li>
            [ThePopeVideo-FR-WPBakery]
            </li>
        </ul>
        </li>
        <li>
        Once the shortcode is inserted, you don’t need to do anything else, it’s that simple!
        </li>
        </ol>
        </p>
        </div>
        <?php
    }
    
    function TPVP_admin_pt()
    {   ?>
        <div>
        <h2 class="dashicons-before dashicons-admin-post"> Instruções</h2>
        <p>
        <ol>
        <li>
        Faz download e instala <b>The Pope Video Plugin</b> a partir da secção "Plugins" do teu administrador.
        </li>
        <li>
        Uma vez instalado no menu do teu administrador de WordPress (na coluna da esquerda das opções) encontrarás The Pope Video Plugin. Acede a esta secção.
        </li>
        <li>
        Para adicionar o vídeo à tua página deves ir ao lugar onde queres que apareça (página) e copiar para esse lugar o shortcode que corresponda ao idioma desejado da seguinte lista:
        <ul>
        <li>
        Vídeos em inglês shortcode: [ThePopeVideo-EN]
        </li>
        <li>
        Vídeos em espanhol shortcode: [ThePopeVideo-ES]
        </li>
        <li>
        Vídeos em italiano shortcode: [ThePopeVideo-IT]
        </li>
        <li>
        Vídeos em português shortcode: [ThePopeVideo-PT]
        </li>
        <li>
        Vídeos em francês shortcode: [ThePopeVideo-FR]
        </li>
        </ul>
        Se o seu WordPress utiliza o WPBakery Page Builder utilize os seguintes shortcodes:
        <ul>
            <li>
            [ThePopeVideo-EN-WPBakery]
            </li>
            <li>
            [ThePopeVideo-ES-WPBakery]
            </li>
            <li>
            [ThePopeVideo-IT-WPBakery]
            </li>
            <li>
            [ThePopeVideo-PT-WPBakery]
            </li>
            <li>
            [ThePopeVideo-FR-WPBakery]
            </li>
        </ul>
        </li>
        <li>
        Já está inserido, não é necessário mais nada. É tão simples como isso.
        </li>
        </ol>
        </p>
        </div>
        <?php
    }
    
    function TPVP_admin_it()
    {   ?>
        <div>
        <h2 class="dashicons-before dashicons-admin-post"> Istruzioni</h2>
        <p>
        <ol>
        <li>
        Scarica e installa <b>The Pope Video Plugin</b> dalla sezione “Plugin” del tuo “Pannello di Amministrazione”.
        </li>
        <li>
        Una volta installato, nel tuo menù di amministrazione di WordPress (nella colonna di sinistra delle opzioni) troverai The Pope Video Plugin. Accedi a questa sezione.
        </li>
        <li>
        Per aggiungere il video alla tua pagina, devi copiare nel luogo in cui vuoi che appaia (all’interno della pagina) il codice di scelta rapida che corrisponde alla lingua che preferisci, dalla seguente lista:
        <ul>
        <li>
        shortcode del video in inglese: [ThePopeVideo-EN]
        </li>
        <li>
        shortcode del video in spagnolo: [ThePopeVideo-ES]
        </li>
        <li>
        shortcode del video in italiano: [ThePopeVideo-IT]
        </li>
        <li>
        shortcode del video in portoghese: [ThePopeVideo-PT]
        </li>
        <li>
        shortcode del video in francese: [ThePopeVideo-FR]
        </li>
        </ul>
        Se il tuo WordPress usa WPBakery Page Builder usa i seguenti shortcodes:
        <ul>
            <li>
            [ThePopeVideo-EN-WPBakery]
            </li>
            <li>
            [ThePopeVideo-ES-WPBakery]
            </li>
            <li>
            [ThePopeVideo-IT-WPBakery]
            </li>
            <li>
            [ThePopeVideo-PT-WPBakery]
            </li>
            <li>
            [ThePopeVideo-FR-WPBakery]
            </li>
        </ul>
        </li>
        <li>
        Una volta inserito, non c’è bisogno di fare altro. È davvero semplice!
        </li>
        </ol>
        </p>
        </div>
        <?php
    }
    
    function TPVP_admin_fr()
    {   ?>
        <div>
        <h2 class="dashicons-before dashicons-admin-post"> Instructions</h2>
        <p>
        <ol>
        <li>
        télécharge et installe le <b>The Pope Video Plugin</b> dans la section "Plugins" de ton administration WordPress.
        </li>
        <li>
        Une fois le plugin The Pope Video installé tu vas le trouver dans le menu WordPress (colonne gauche des options). Rends-toi dans cette section.
        </li>
        <li>
        Pour ajouter la vidéo sur ta page, clique sur l’endroit où tu souhaites insérer la vidéo et copie le code suivant correspondant à la langue de ton choix : 
        <ul>
        <li>
        Vidéos en anglais shortcode: [ThePopeVideo-EN]
        </li>
        <li>
        Vidéos en espagnol shortcode: [ThePopeVideo-ES]
        </li>
        <li>
        Vidéos en italien shortcode: [ThePopeVideo-IT]
        </li>
        <li>
        Vidéos en portugais shortcode: [ThePopeVideo-PT]
        </li>
        <li>
        Vidéos en français shortcode: [ThePopeVideo-FR]
        </li>
        </ul>
        Si votre WordPress utilise WPBakery Page Builder, utilisez les shortcodes suivants:
        <ul>
            <li>
            [ThePopeVideo-EN-WPBakery]
            </li>
            <li>
            [ThePopeVideo-ES-WPBakery]
            </li>
            <li>
            [ThePopeVideo-IT-WPBakery]
            </li>
            <li>
            [ThePopeVideo-PT-WPBakery]
            </li>
            <li>
            [ThePopeVideo-FR-WPBakery]
            </li>
        </ul>
        </li>
        <li>
        Una volta inserito, non c’è bisogno di fare altro. È davvero semplice!
        </li>
        </ol>
        </p>
        </div>
        <?php
    }

    function TPVP_plugin_admin_menu()
      {
        $languageCode = substr(get_locale(),0,2);
        
        if ($languageCode == "es"){
            add_menu_page('The Pope Video','The Pope Video','manage_options','plugin-admin-menu','TPVP_admin_es','dashicons-video-alt3',200);
        }  elseif ($languageCode == "pt"){
            add_menu_page('The Pope Video','The Pope Video','manage_options','plugin-admin-menu','TPVP_admin_pt','dashicons-video-alt3',200);
        }  elseif ($languageCode == "it"){
            add_menu_page('The Pope Video','The Pope Video','manage_options','plugin-admin-menu','TPVP_admin_it','dashicons-video-alt3',200);
        }  elseif ($languageCode == "fr"){
            add_menu_page('The Pope Video','The Pope Video','manage_options','plugin-admin-menu','TPVP_admin_fr','dashicons-video-alt3',200);
        }  else {
            add_menu_page('The Pope Video','The Pope Video','manage_options','plugin-admin-menu','TPVP_admin_en','dashicons-video-alt3',200);
        }
    }

    add_action('admin_menu','TPVP_plugin_admin_menu');
?>

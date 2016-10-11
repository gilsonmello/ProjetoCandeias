<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * Sidebarleft component
 */
class SidebarleftComponent extends Component{
	
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function setSideBarLeft($usuariosSecoes = [], $url = ""){
        if(isset($usuariosSecoes)){
            $html = '<ul class="nav nav-pills nav-stacked custom-nav">';
            foreach ( $usuariosSecoes as $secao ){
                if($secao['titulo'] != 'Principal'){
                    $referencias = explode( "#", $secao['referencia'] );
                    $ativa = '';
                    $ativaLink = '';
                    while ( $referencia = array_pop( $referencias ) ) {
                        if ( strpos( $url, $referencia ) !== false ) {
                            $ativa = 'act';
                            break;
                        }
                    }
                    if ( $secao['titulo'] != "Dashboard") {
                        $html .= '<li class="menu-list '.$ativa.'">';
                            $secao['link'] = empty($secao['link']) ? "#" : $secao['link'];
                            $html .= '<a href="'.$secao['link'].'">';
                                $html .= '<i class="lnr lnr-spell-check"></i>';
                                $html .= '<span>'.$secao['titulo'].'</span>';
                            $html .= '</a>';
                            $html .= '<ul class="sub-menu-list">';
                            if(isset($secao['SubSecao']) && count($secao['SubSecao'])){
                                foreach($secao['SubSecao'] as $subsecao){
                                    $html .= '<li>';
                                        $html .= '<a href="'.BASE.'/admin/'.$subsecao['link'].'/" >';
                                        $html .= ''.$subsecao['titulo'].'';
                                        $html .= '</a>';
                                    $html .= '</li>';  
                                    
                                }
                            }
                            $html .= '</ul>'; 
                        $html .= '</li>';   
           	 	    } 
    	        }   
            }
            $html .= '</ul>';
            return $html;
    	}	
    }
}
<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * Breadcrumb component
 */
class BreadcrumbComponent extends Component
{
	public $crumb = NULL;
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function setCrumb($crumb = NULL, $link = NULL){
    	$this->crumb['crumb'][] = (isset($crumb)) ? $crumb : NULL;
    	$this->crumb['link'][] = (isset($link)) ? $link : NULL;
    }

    public function getCrumb() {
		
        $html = '';
		if(isset($this->crumb)){
			$html .= '<ol class="breadcrumb">';
			foreach ($this->crumb['crumb'] as $i=>$crumb) {
				
				$class 	= (count($this->crumb['crumb']) == $i+1) 	? 'class="active"' : "";
				$link 	= ($this->crumb['link'][$i]) 				? 'href="' . $this->crumb['link'][$i] . '"'	: "";
				
				$html 	.= 	'<li><a ' . $class . ' ' . $link . ' title="' . $crumb . '" alt="' . $crumb . '" >' . $crumb . '</a></li>';
			}
			$html .= '</ol>';
			return (!empty($html)) ? $html : NULL;
		}
	}
}

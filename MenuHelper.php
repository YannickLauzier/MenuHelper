<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use Cake\Routing\Router;

/**
 * Menu helper
 */
class MenuHelper extends Helper 
{
	public $helpers = ['Html', 'Url'];

	protected $_defaultConfig = 
	[
		'activeClass' => 'active'
	];
	
	/**
	 * L'url courante lors de l'exécution.
	 * @var string
	 */
	private $currentUrl;

	public function __construct(View $view, $config = []) 
	{
        parent::__construct($view, $config);
		$this->_defaultConfig = array_merge($this->_defaultConfig, $config);
		$this->currentUrl = Router::url($this->here, false);
	}
	
	/**
	 * Permet de créer un item de menu qui ajoute une classe active si jamais l'élément 
	 * doit être actif. Fonctionne exactement comme HtmlHelper::link(...).
	 * @param  string $title   le titre de l'élément du menu
	 * @param  mixed  $url     l'url du menu
	 * @param  array  $options les attributs HTML que doit contenir l'élément
	 */
	public function item($title, $url = null, $options = [])
	{
		$url = $this->Url->build($url);

		if ($this->currentUrl === $url)
			$options = array_merge($options, ['class' => $this->_defaultConfig['activeClass']]);

		echo $this->Html->link($title, $url, $options);		
	}
}
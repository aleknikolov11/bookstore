<?php
include_once 'model/Model.php';
include_once 'view/ViewFactory.php';

/**
 * Class Controller
 *
 * @author Alek Nikolov <anikolov111@gmail.com>
 */
class Controller 
{
	/**
	 * @var Model
	 */
	private $model;
	/**
	 * @var ViewFactory
	 */
	private $viewFactory;
	/**
	 * @static Controller
	 */
	private static $inst;

	/**
	 * Controller constructor.
	 */
	private function __construct() 
	{
		$this->model = new Model();
		$this->viewFactory = new ViewFactory();
	}

	/**
	 * Create static instance of Controller class
	 *
	 * @return Controller
	 */
	public static function instance(): Controller
	{
		if(self::$inst == null) {
			self::$inst = new Controller();
		}

		return self::$inst;
	}

	/**
	 * Get the required page from the request and create a View
	 */
	public function createPage(): void 
	{
		$content = null;
		$pageType = null;

		if(isset($_GET['page'])) {
			if($_GET['page'] == 'list') {
				$content = $this->model->getAllBooks();
			} else {
				$content = $this->model->getBook($_GET['book_name']);
			}
			$pageType = $_GET['page'];
		}

		$view = $this->viewFactory->getView($pageType, $content);

		$this->display($view);
	}

	/**
	 * Display contents of page
	 *
	 * @param ViewInterface $view
	 */
	private function display(ViewInterface $view): void
	{
		$view->display();
	}
}
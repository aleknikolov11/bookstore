<?php

include_once 'ViewInterface.php';

/**
 * Class HomeView
 *
 * @author Martin Krastev <m.krastev96@gmail.com>
 */
class HomeView implements ViewInterface
{
    /**
     * @var string
     */
    private $errorMsg;

    /**
     * HomeView constructor.
     *
     * @param string|null $errorMsg
     */
    public function __construct(string $errorMsg = null)
    {
        $this->errorMsg = $errorMsg;
    }

    /**
     * @inheritDoc
     */
    public function display(): void
    {
        $display_content = "<form action='search.php' method='post'>
						<input type='text' name='book_name' placeholder='Search for a book'>
						<button type='submit' name='search_button'>Search</button>
						<button type='submit' name='showall_button'>Show all</button>
						</form>";

        if ($this->errorMsg != null) {
            $display_content .= "<p style='color:red;'>" . $this->errorMsg . "</p>";
        }

        echo $display_content;
    }
}

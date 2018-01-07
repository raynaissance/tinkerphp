<?

class HomeView extends View {

	public function __construct($title)
	{
		Tinker::Log("Constructing Home view...");
		parent::Initialize($title, 'default', 'example');
		// TODO: How is current theme chosen? 'default' + chosen one in xml?
		// TODO: How is current layout chosen? does theme dictate layout?


	}
}
?>

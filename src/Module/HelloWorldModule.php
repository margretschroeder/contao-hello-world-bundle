<?php

namespace Margretschroeder\ContaoHelloWorldBundle\Module;

class HelloWorldModule extends \Haste\Frontend\AbstractFrontendModule
{
    /**
     * @var string
     */
    protected $strTemplate = 'mod_helloWorld';

    /**
     * Displays a wildcard in the back end.
     *
     * @return string
     */
    
    /**
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $template = new \BackendTemplate('be_wildcard');

            $template->wildcard = '### '.utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['helloWorld'][0]).' ###';
            $template->title = $this->headline;
            $template->id = $this->id;
            $template->link = $this->name;
            $template->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id='.$this->id;

            return $template->parse();
        }

        return parent::generate();
    }
**/
    /**
     * Generates the module.
     */
    protected function compile()
    {
       	 $messageGenerator = \Contao\System::getContainer()->get('margretschroeder.contao_hello_world_bundle.message_generator');
		 $message = $messageGenerator->sayHelloTo('All World');
			
        $this->Template->message = 'Hello World hier ist Margret';
		$this->Template->message = $message;
		
    }
}
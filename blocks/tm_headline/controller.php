<?php
namespace Concrete\Package\TmblocksDefault\Block\TmHeadline;

defined("C5_EXECUTE") or die("Access Denied.");

use Core;
use Loader;
use \File;
use Page;
use URL;
use Concrete\Package\Tmblocks\Src\TmBlockController;
use Concrete\Package\Tmblocks\Src\FieldTypes\BlockFieldTypeString;
use Concrete\Package\Tmblocks\Src\FieldTypes\BlockFieldTypeImage;
use Concrete\Package\Tmblocks\Src\FieldTypes\BlockFieldTypeRepeatable;

class Controller extends TmBlockController
{

  public $helpers = array(
    0 => 'form',
  );

  protected $btTable = 'btTmHeadline';
  protected $btDefaultSet = 'tmblocks-default';

  public function getBlockTypeDescription()
  {
    return t("Provides a headline with different layers and sub titles.");
  }

  public function getBlockTypeName()
  {
    return t("Headline");
  }

  function __construct($obj = null)
  {
    parent::__construct($obj);

    $this->tmTabs = array(
      'content' => array(
        'title' => t('Content'),
        'fields' => array('headline','layer','align')
      ),
      'style' => array(
        'title' => t('Style'),
        'fields' => array('cssClass','ignoreGrid')
      )
    );

    $this->tmFields['headline'] = new BlockFieldTypeString();
    $this->tmFields['headline']->setName("Headline");
    $this->tmFields['headline']->setRequired(true);

    $this->tmFields['align'] = new BlockFieldTypeSelect();
    $this->tmFields['align']->setName("Alignment");
    $this->tmFields['align']->setRequired(true);
    $this->tmFields['align']->setChoices(array(
      'left' => 'left',
      'center' => 'center',
      'right' => 'right'
    ));

    $this->tmFields['layer'] = new BlockFieldTypeSelect();
    $this->tmFields['layer']->setName("Layer");
    $this->tmFields['layer']->setRequired(true);
    $this->tmFields['layer']->setChoices(array(
      'h1' => 'h1 (recommended one time per page only)',
      'h2' => 'h2',
      'h3' => 'h3',
      'h4' => 'h4',
      'h5' => 'h5',
      'h6' => 'h6'
    ));

  }

}

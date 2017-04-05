<?php
namespace Concrete\Package\TmblocksDefault\Block\TmLinklist;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Package\Tmblocks\Src\TmBlockController;
use Core;
use Loader;
use Concrete\Package\Tmblocks\Src\FieldTypes\BlockFieldTypePage;
use Concrete\Package\Tmblocks\Src\FieldTypes\BlockFieldTypeString;
use Concrete\Package\Tmblocks\Src\FieldTypes\BlockFieldTypeRepeatable;

class Controller extends TmBlockController
{

  protected $btTable = 'btTmLinkList';
  protected $btDefaultSet = 'tmblocks-default';

  function __construct($obj = null)
  {

    parent::__construct($obj);

    $this->tmTabs = array(
      'links' => array(
        'title' => t('Links'),
        'fields' => array('links')
      ),
      'style' => array(
        'title' => t('Style'),
        'fields' => array('cssClass','ignoreGrid')
      )
    );

    $this->tmFields['cssClass']->setChoices(array(
      'none' => 'none',
      'bullets' => 'bullets'
    ));

    $link = new BlockFieldTypePage();
    $link->setName("Link");

    $linktext = new BlockFieldTypeString();
    $linktext->setName("Link Text");

    $anchor = new BlockFieldTypeString();
    $anchor->setName("Anker");

    $this->tmFields['links'] = new BlockFieldTypeRepeatable();
    $this->tmFields['links']->setAddButtonName("Add Link");
    $this->tmFields['links']->setChildTypes(array(
      "link" => $link,
      "linktext" => $linktext,
      "anchor" => $anchor
    ));
  }

  public function getBlockTypeDescription()
  {
    return t("A block providing a custom list of links.");
  }

  public function getBlockTypeName()
  {
    return t("Link List");
  }


}
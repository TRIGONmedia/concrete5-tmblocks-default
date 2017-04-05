<?php defined("C5_EXECUTE") or die("Access Denied.");
$c = Page::getCurrentPage();
$classes = array($cssClass,"tm_linklist");
?>
<div class="<?php echo implode(" ",$classes); ?>">
  <?php foreach ($links AS $link): ?>
    <?php if (!empty($link["link"]) && ($link_c = Page::getByID($link["link"])) && (!empty($link_c) || !$link_c->error)): ?>
      <?php
        if($c->getCollectionID() == $link_c->getCollectionID()){
          $link_classes = ' class="nav-selected"';
        }else{
          $link_classes = "";
        }
      ?>
      <?php echo '<a'.$link_classes.' href="' . $link_c->getCollectionLink() . '">' . (isset($link["linktext"]) && trim($link["linktext"]) != "" ? $link["linktext"] : $link_c->getCollectionName()) . '</a>'; ?>
    <?php endif; ?>
  <?php endforeach; ?>
</div>
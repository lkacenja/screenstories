<header id="header" role="banner">
  <div id="header-inner">
    <?php // Pull in text logo. ?>
    <?php if (isset($text_logo)): ?>
      <?php print $text_logo; ?>
    <?php endif; ?>
    <?php print render($page['header']); ?>
  </div>
</header>
<div id="page">
  <div id="page-inner">
    <div id="main">
    
      <div id="content" class="column" role="main">
        <?php print render($page['highlighted']); ?>
        <?php print $breadcrumb; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div><!-- /#content -->
    
      <div id="navigation">
        <?php print render($page['navigation']); ?>
      </div><!-- /#navigation -->
    
      <?php
        // Render the sidebars to see if there's anything in them.
        $sidebar_first  = render($page['sidebar_first']);
        $sidebar_second = render($page['sidebar_second']);
      ?>
    
      <?php if ($sidebar_first || $sidebar_second): ?>
        <aside class="sidebars">
          <?php print $sidebar_first; ?>
          <?php print $sidebar_second; ?>
        </aside><!-- /.sidebars -->
      <?php endif; ?>
    
    </div><!-- /#main -->
    
    <?php print render($page['footer']); ?>
  </div>
</div><!-- /#page -->

<?php print render($page['bottom']); ?>

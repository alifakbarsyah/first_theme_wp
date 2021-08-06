<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
    <p>
      Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur
      purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.
    </p>
  </div>
  <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
      <?php wp_get_archives('type=monthly'); ?>
    </ol>
  </div>
  <div class="sidebar-module">
    <h4>Elsewhere</h4>
    <ol class="list-unstyled">
      <li><a href="<?php echo get_option('github'); ?>">GitHub</a></li>
      <li><a href="<?php echo get_option('twitter'); ?>">Twitter</a></li>
    </ol>
  </div>
  <div class="sidebar-module">
    <h4>category</h4>
    <ol>
      <?php

      $taxonomies = get_terms('category', array("fields" => "all"));

      foreach ($taxonomies as $taxonomy) {

        echo '<li><a href="' . get_term_link($taxonomy) . '">' . $taxonomy->name . '</a></li>';
      }
      ?>
    </ol>
  </div>
  <div class="sidebar-module">
    <h4>post tag</h4>
    <ol>
      <?php

      $taxonomies = get_terms('post_tag', array('hide_empty' => false));

      foreach ($taxonomies as $taxonomy) {

        echo '<li><a href="' . get_term_link($taxonomy) . '">' . $taxonomy->name . '</a></li>';
      }
      ?>
    </ol>
  </div>
</div>
<!-- /.blog-sidebar -->
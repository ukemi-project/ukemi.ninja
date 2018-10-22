<?php
/**
 * Sidebar section
 * @package Ukemi Theme
 */
?>

<form method="get" class="widget-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="input-group position-relative">
    <input class="form-control" type="search" name="s" />
    <label class="text-black text-left">Search here...</label>
    <span class="focus-border bg-blue"></span>
    <div class="input-group-append">
        <button type="submit" class="btn btn-blue"><i class="fas fa-search"></i></button>
    </div>
  </div>
</form>

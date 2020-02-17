<div class="card my-4">
    <h5 class="card-header">Search</h5>
    <div class="card-body">
    <div class="input-group">
    <?php echo '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >' ?>
        <input type="text" class="form-control block" placeholder="Search for..." name="s" id="s">
        <br>
        <!-- <input type="submit" id="searchsubmit" value="<?php echo esc_attr__( 'Search' ) ?>"/> -->
        </form>
    </div>
    </div>
</div>
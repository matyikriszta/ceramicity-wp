      </main>
      <footer>
        <div class="disclaimer">
          <p>Create a free website or blog at <a href="https://wordpress.com/">wordpress.com</a></p>
          <p>Theme by <a href="http://cargocollective.com/krisztinamatyi">Krisztina Matyi</a></p>
        </div>
        <div class="archives">
          <h3>Archives</h3>
          <select class="custom-dropdown-select" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
            <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
            <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option' ) ); ?>
          </select>
        </div>
      </footer>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
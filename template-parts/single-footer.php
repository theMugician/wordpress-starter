<footer class="entry-footer default-max-width">
    <!-- <?php twenty_twenty_one_entry_meta_footer(); ?> -->
</footer><!-- .entry-footer -->

<?php if ( ! is_singular( 'attachment' ) ) : ?>
    <?php get_template_part( 'template-parts/post/author-bio' ); ?>
<?php endif; ?>
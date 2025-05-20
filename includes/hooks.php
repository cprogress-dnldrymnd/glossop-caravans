<?php
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_tax()) { //for custom post types
        $title = sprintf(__('%1$s'), single_term_title('', false));
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});


add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;

    if ($pagenow === 'edit-comments.php') {
        wp_safe_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});

function allow_svg_upload( $allowed_file_types ) {
    $allowed_file_types['svg'] = 'image/svg+xml';
    return $allowed_file_types;
  }
  add_filter( 'upload_mimes', 'allow_svg_upload' );
  
  // Optional: Additional security check (recommended)
  function restrict_svg_upload( $file ) {
    if ( isset( $file['ext'] ) && strtolower( $file['ext'] ) === 'svg' ) {
      // Check for malicious code within the SVG (basic check - for more robust security, use a dedicated library)
      $svg_content = file_get_contents( $file['file'] );
      if ( strpos( $svg_content, '<script' ) !== false || strpos( $svg_content, 'javascript:' ) !== false ) {
        $file['error'] = 'Invalid SVG: Contains potentially malicious code.';
        return $file;
      }
    }
    return $file;
  }
  add_filter( 'wp_check_filetype_and_ext', 'restrict_svg_upload', 10, 1 );
  
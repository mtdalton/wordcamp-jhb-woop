<?php

namespace app\postTypes;

/**
 * Class StoryPostType
 * @package app\postTypes
 */
class StoryPostType
{
    /**
     * @var array
     */
    public $supports = [
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    ];

    /**
     * @var array
     */
    public $labels = [];

    /**
     * @var array
     */
    public $args = [];

    public function __construct()
    {
        $this->labels = [
            'name' => _x('Stories', 'plural'),
            'singular_name' => _x('Story', 'singular'),
            'menu_name' => _x('Stories', 'admin menu'),
            'name_admin_bar' => _x('Stories', 'admin bar'),
            'add_new' => _x('Add new', 'add new'),
            'add_new_item' => __('Add new story'),
            'new_item' => __('New stories'),
            'edit_item' => __('Edit stories'),
            'view_item' => __('View stories'),
            'all_items' => __('All stories'),
            'search_items' => __('Search stories'),
            'not_found' => __('No stories found.'),
        ];

        $this->args = [
            'supports' => $this->supports,
            'labels' => $this->labels,
            'public' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'stories'),
            'has_archive' => true,
            'hierarchical' => false,
        ];

        $this->createStoryPostType();
    }

    public function createStoryPostType()
    {
        register_post_type('story', $this->args);
    }
}

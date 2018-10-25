<?php
/**
 * Created by PhpStorm.
 * User: Flicker
 * Date: 2018/10/24
 * Time: 16:46
 */

namespace app\postTypes;


use Woop\Config\EntityConfig;
use Woop\Config\FieldConfig;
use Woop\Core\Entity\PostType;

/**
 * Class CharacterPostType
 * @package app\postTypes
 */
class CharacterPostType extends PostType
{
    /**
     * CharacterPostType constructor.
     */
    public function __construct()
    {
        parent::__construct(new EntityConfig('character', 'Character', 'Characters'));
    }

    /**
     * @return \Woop\Config\FieldConfig[]
     */
    public function getFieldConfig()
    {
        return [
            new FieldConfig('name', 'Name', 'text', 'text'),
            new FieldConfig('gender', 'Gender', 'text', 'text', false, true)
        ];
    }

    public function setCapabilities()
    {
        $administrator = get_role('administrator');
        $administrator->add_cap("edit_{$this->config->getSlug()}");
        $administrator->add_cap("read_{$this->config->getSlug()}");
        $administrator->add_cap("edit_{$this->config->getSlug()}s");
        $administrator->add_cap("edit_others_{$this->config->getSlug()}s");
        $administrator->add_cap("edit_published_{$this->config->getSlug()}s");
        $administrator->add_cap("publish_{$this->config->getSlug()}s");
        $administrator->add_cap("delete_{$this->config->getSlug()}");
        $administrator->add_cap("delete_{$this->config->getSlug()}s");
    }

    /**
     *
     * @return array
     */
    public function getArgs()
    {
        $args = parent::getArgs();
        return array_merge(
            $args, [
                'menu_position' => 10,
                'capability_type' => $this->config->getSlug(),
                'menu_icon' => 'dashicons-admin-users',
            ]
        );
    }
}

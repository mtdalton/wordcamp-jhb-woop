# Wordcamp JHB 2018 - Wordpress OOP

## Introduction

We're excited to go through this workshop with you, where we will be looking at how to
create Wordpress plugins that use Object Oriented Programming principles.

## Preparing for the Workshop
Attendees who arrive prepared will get the most out of the workshop. 
Before you attend the workshop, there are a few activities to complete.
This project is based on the [Bedrock Wordpress Boilerplate](https://roots.io/bedrock/).
If you are stuck with something regarding how the project is laid out or getting it up and 
running, please refer to the [Bedrock Documentation](https://roots.io/bedrock/docs/installing-bedrock/).

## Requirements

* PHP >= 5.6
* Composer - [Install](https://getcomposer.org/doc/00-intro.md)

## Local PHP Dev Environment

To be able to develop and run a Wordpress site on your computer, you'll need to have a local 
dev environment installed on your computer. You use software like MAMP or XAMPP (which creates a local 
server environment for you) or you can use a virtual machine to run your site, like a vagrant box like Homestead or VVV.

If you're new to PHP development or haven't used a PHP development environment before, I would suggest MAMP or XAMPP.
These are the easiest to setup and get running. However, you're welcome to use any dev environment or virtual machine that
you're comfortable with.

Suggested Software:
* XAMPP (Windows, Linux, MacOS) - [Install](https://www.apachefriends.org/index.html)
* MAMP (Windows, MacOS) - [Install](https://www.mamp.info/en/)
* Homestead (Linux, MacOS) - [Install](https://laravel.com/docs/5.7/homestead#installation-and-setup)
* VVV (Windows, Linux, MacOS) - [Install](https://make.wordpress.org/core/handbook/tutorials/installing-a-local-server/installing-vvv/)

## Setup

1. Clone (or download) this project into a folder that is accessible by your PHP Dev Environment.

    `git clone https://github.com/mtdalton/wordcamp-jhb-woop.git`
  
2. Run `composer install` in the folder that you cloned/downloaded.

3. Create a database. You may call it anything you like, but for this workshop, we will be calling it
`wordcamp_oop`.

4. Update environment variables in `.env`  file:
    * `DB_NAME` - Database name
    * `DB_USER` - Database user
    * `DB_PASSWORD` - Database password
    * `DB_HOST` - Database host
    * `WP_ENV` - Set to environment (`development`, `staging`, `production`)
    * `WP_HOME` - Full URL to WordPress home (http://example.com)
    * `WP_SITEURL` - Full URL to WordPress including subdirectory (http://example.com/wp)
    * `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT`

    To get the security keys, you can cut and paste them from the [Roots WordPress Salt Generator][roots-wp-salt].

5. Go to `http://{your-site-url-here}/wp` to install the sie. It will take you through the usual Wordpress installation process.

6. Once you're done, you can access the WP admin at `http://{your-site-url-here}/wp/wp-admin`

## Extra Resources
- Great article explaining OOP in an easy to understand manner: [OOP](https://medium.freecodecamp.org/object-oriented-programming-concepts-21bb035f7260)
- The repository of WOOP, the in-development framework shown during the workshop:
    [WOOP](https://github.com/flickerleap/woop). (The documentation is non-existent right now but we will be actively working on it 
    and the framework during the next few months).

## Finally
If you are really stuck or need some guidance, you are welcome to email me at [matt@mattadorstarfish.com](mailto:matt@mattadorstarfish.com) or 
contact me on the WP South Africa Slack channel (@mattthestarfish).

[roots-wp-salt]:https://roots.io/salts.html

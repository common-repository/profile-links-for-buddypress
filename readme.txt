=== Profile Links for BuddyPress ===
Contributors: kierantaylorio
Tags: buddypress, profile, links, dynamic, user, member
Requires at least: 4.0
Tested up to: 5.2.3
Requires PHP: 5.6
Stable tag: 1.5
License: GNU GPL V3
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html

== Description ==
Adds the ability to generate dynamic profile links for BuddyPress users in pages, posts, CPTs and HTML / text widgets. When a user is logged out the message "You need to login to see this link" is displayed instead of the profile link.

Tested and working with BuddyPress 4.4.0 and WordPress 5.2.3

#### Usage examples

`[profile url="messages/" text="Inbox"]`

`[profile url="messages/sentbox/" text="Sent"]`

`[profile class="my-custom-class" url="profile/change-avatar/" text="Update your profile picture"]`

Using target and rel in the shortcode

`[profile  rel="nofollow" class="my-custom-class" url="messages" target="_blank" text="Check your inbox"]`

If you do not define a value for the URL attribute a generic link will be generated to the members profile. A value must always be defined for the text attribute.


#### Third party plugins

This will work with any third party plugin that generates a page within the BuddyPress members profile. Copy the remainder of the URL after the members username and paste into the url field.

#### Support

Support is offered via WordPress.org only. Feel free to [open a new topic](https://wordpress.org/support/plugin/profile-links-for-buddypress) and share any issues you've experienced.

#### Credits

User profile icon - [smashicons](https://www.flaticon.com/authors/smashicons)

== Installation ==
1. Go to WP Admin > Plugins > Add New
2. Search Profile Links for BuddyPress
3. Install and activate

There are no settings for this plugin.

== Changelog ==
1.5

New

- Added ability to define a target use `target="_blank"` etc in shortcode. See examples for more details. Thanks to @dogfishdesign for the suggestion. 
- Added ability to define a rel use `rel="nofollow"` etc in shortcode. See examples for more details.

1.4

New

- Added ability to define a class use `class="my-custom-class"` etc in shortcode. See examples for more details. 
- Added warning notice to WordPress plugins page if BuddyPress is not active

Fixes

- N/A

Tested

- WordPress 5.2.1
- BuddyPress 4.3.0

1.3

- Fixed an issue where members page slug was assumed rather than dynamically generated
- Removed need for first forward slash after username

1.2

- Fixed an error where logged out text was returned at the top of main content
- Code tidy

1.1

- Added the ability to translate the logged out text

1.0

- Initial Release
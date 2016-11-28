=== Phoenix Folding@Home Stats ===
Contributors: jamesjonesphoenix
Tags: folding, stanford, folding at home, folding@home
Donate link: https://www.phoenixwebdev.com.au/
Requires at least: 4.6
Tested up to: 4.7
Stable tag: 1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin allows you to display Folding@Home Stats for you or your team in a shortcode or widget.

== Description ==

This plugin retrieves stats from folding@home and displays it on your WordPress Website. You can display stats for your donor account or for a team. You can show the stats in your sidebar as a widget or in your content area as a shortcode. The following stats are shown:

* Work units.
* Total credit in points.
* Ranking.
* Date you completed the last work unit.
* Teams you are a member of/Donors who contribute to your team

Folding@home is a project run by Stanford University which allows anyone to assist with disease research by donating their unused computer processing power. Your processing power is used to simulate protein folding, a process whereby proteins assemble themselves into tools which your body can use. Joining in is a doddle; simply [download the F@H software](https://foldingathome.stanford.edu/download/) to get started.

The plugin includes a small amount of CSS which you can easily overwrite if desired.

If you uninstall this plugin, any stats the plugin recorded to your database will be deleted. No muck will be left behind.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. * To display the stats as a widget to to the Appearance->Widgets screen and add the widget 'Folding at Home' to a widget area.
   * To display the stats within a post or page, enter the post/page editing screen and add the shortcode.

== Shortcode ==

Display the shortcode in your content by writing [phoenix_folding_stats] in the post/page editing area.

* `type`             - The type of table to display. Set to either 'team' or 'donor'. Defaults to 'team'.
* `id`               - Your donor or team id. If displaying a team table, this must be your team number. If displaying a donor table this can be your donor name or numerical id. Defaults to 1.
* `class`            - CSS class to add to the HTML table. This can help with custom styling or getting the style in line with other theme tables. Defaults to empty.
* `show_donor_teams` - On a donor table, show or hide the teams the donor is a member of. Set as 'false' or 'no' to hide. Defaults to 'yes'.
* `show_donor_teams` - On a team table, show or hide the donors that contribute to the team. Set as 'false' or 'no' to hide. Defaults to 'yes'.
* `show_id`          - Show a table row with numerical id. Defaults to 'false'.
* `show_logo`        - Show F@H arrows just after the table header. Set as 'false' or 'no' to hide. Defaults to 'yes'.
* `show_tagline`     - Show very short spiel about F@H at the bottom of the table. Set as 'false' or 'no' to hide. Defaults to 'yes'.

An example of a shortcode with all these paramaters in use:

`[phoenix_folding_stats type="donor" class="table table-striped" show_id="yes" show_donor_teams="yes" id="James_Jones" show_logo="no" show_tagline="yes"]`

== Frequently Asked Questions ==
= Does it cost money? =

No. The plugin is free. The Folding@Home software is free. The only real cost is electricity usage while your computer processes calculations.

= I want to change something. How do I go about it? =

 - If you just want to change how something looks, the table elements are full of classes you can target with CSS.
 - I've sprinkled in some WordPress filters so you can change things.
 - You can overwrite the templates in the plugin by adding your own templates in your theme. Create a folder in your theme called `phoenix-folding-at-home-stats` and add templates in there. So for example if you want to overwrite the donor table, you would create a PHP file - `wp-content/themes/yourtheme/phoenix-folding-at-home-stats/donor.php` and make your own table in there.
 - Contact me at the support forums or [our website](http://phoenixwebdev.com.au/contact-us/) with your desired change. If it's good I will probably add it in.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png`
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 1.0 =
* Initial Release

== Upgrade Notice ==

= 1.0 =
* Initial Release
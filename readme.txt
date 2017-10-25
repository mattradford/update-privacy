=== Update Privacy ===
Contributors: mattrad
Requires at least: 4.9
Tested up to: 4.9-beta3-41967
Stable tag: 1.0.1
Requires PHP: 5.2.4
Tags: privacy, updates, GDPR
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Stop WordPress sending anything but essential data during the update check.

== Description ==

Stop WordPress sending anything but essential data during the update check.

By default, WordPress sends the following data during the version update check:

* Current WordPress version
* Language
* PHP version
* MySQL version
* If multisite in enabled
* Number of websites the WordPress install is running (this will be 1 unless it is a multisite)
* Number of users
* The WordPress database version during initial installation

The WordPress dashboard does not currently provide a way to opt-out of this data collection, but WordPress 4.9 introduced the ability to change whether this data is sent. 

This plugin ensures only essential data - current WordPress version and language - are sent during the update check.

There are no options to configure with this plugin.

== Frequently Asked Questions ==
 
= Why do I need this? =
 
Because WordPress sends non-essential data on every update check to wordpress.org's API.
 
= But that's ok, right? =
 
On a WordPress install with only one user, sure, that's up to you. But if you have more than one user, you need to consider their data as well.

Under the GDPR, even pseudonymised data (such as IP address) needs to be considered as data that you should be protecting on behalf of your users.

Also consider a WordPress install with WooCommerce - do you want to send the number of your customers to a 3rd party? If you do, you may need to get their consent to do so.

= Can I include this plugin using Composer? =

Yes. See https://github.com/mattradford/update-privacy>

= Who did the banner art? =

The image is licensed under the Creative Commons, Attribution 2.0 Generic (CC BY 2.0), and was taken by Tim Parkinson: <https://www.flickr.com/photos/timparkinson/>.

[Original image](https://www.flickr.com/photos/timparkinson/509774987/in/photolist-M3JkV-SBenGs-DTfnt-9D55KS-5dV6i4-DThif-ccE7GW-5mfo7h-dN6GbY-GtD7y-bVhSsv-9G8yCm-3fwgHt-TFUyB2-bVhSiX-5dZqJ1-5dV76t-5dZrL1-5mb6HT-4stVFT-6ftjX6-GtGwz-sX9CY-nPwQUR-3Zcbby-GtDJo-SEPetr-9FoGdT-2U3JM-ee9npF-5v7Wwg-v3u6aw-aMmB2a-sX9Ge-DTesZ-SzxxT1-GtCHd-5mfoTW-DTesN-TCbsq7-8t7YtD-96pPZ-7SD5w6-5dZrjE-5dV6ti-5dZsMN-TFQ9ND-DTeso-5dZsaQ-5dZtLJ)

== Changelog ==

1.0.2   Fix short description so it shows correctly.

1.0.1   Add composer.json, fix typo and add Github URL. 

1.0.0   Initial release.
=== Update Privacy ===
Contributors: mattrad
Requires at least: 4.9
Tested up to: 4.9-beta3-41967
Stable tag: 1.0.0
Requires PHP: 5.2.4
Tags: privacy, updates, GDPR
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Prevents WordPress sending anything but essential data during the update check.

== Description ==

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
 
Because WordPress sends non-essential data on every update check to wordpress.org.'s API.
 
= But that's ok, right? =
 
On a WordPress install with only one user, sure, that's up to you. But if you have more than one user, you need to consider their data as well.
Under the GDPR, even pseudonymised data (such as IP address) needs to be considered as data that you should be protecting on behalf of your users.
Also consider a WordPress install with WooCommerce - do you want to send the number of your customers to a 3rd party? If you do, you may need to get their consent to do so.

== Changelog ==

1.0.0 Initial release
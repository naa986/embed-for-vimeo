=== Embed for Vimeo ===
Contributors: naa986
Donate link: https://noorsplugin.com/
Tags: vimeo, video, embed, iframe, responsive
Requires at least: 3.0
Tested up to: 6.7
Requires PHP: 7.4
Stable tag: 1.0.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Embed Vimeo videos in WordPress with arguments.

== Description ==

[Embed for Vimeo](https://noorsplugin.com/embed-for-vimeo-wordpress-plugin/) plugin allows you to customize your Vimeo videos in WordPress. When this plugin is active, you can customize embedded Vimeo videos with arguments.

=== How to Use the Plugin ===

Create a new post/page and add a Vimeo block. Copy and paste the Vimeo video URL into it. For example:

`https&#58;//vimeo.com/1084536`

**airplay**

To disable AirPlay in the player you can add "airplay=false" to your Vimeo URL.

`https&#58;//vimeo.com/1084536?airplay=false`

**autopause**

This argument is enabled by default which pauses the current video when another Vimeo video on the same page starts to play. To permit simultaneous playback of all the videos on the page you can add "autopause=false" to your Vimeo URL.

`https&#58;//vimeo.com/1084536?autopause=false`

**byline**

If you do not want to display the author name in the player, add "byline=false" to your Vimeo URL.

`https&#58;//vimeo.com/1084536?byline=false`

**cc**

This argument is enabled by default which enables closed captions in the player. To disable closed captions you can add "cc=false" to your Vimeo URL.

`https&#58;//vimeo.com/1084536?cc=false`

This option has no effect if your video does not have captions or subtitles.

=== How to Add Multiple Arguments ===

You can add multiple arguments to your Vimeo URL with &.

`https&#58;//vimeo.com/1084536?autopause=false&byline=false`

For a single argument ? needs to be used.

=== Documentation ===

For documentation please visit this [Vimeo plugin page](https://noorsplugin.com/embed-for-vimeo-wordpress-plugin/)

== Installation ==

1. Go to the Add New plugins screen in your WordPress Dashboard
1. Click the upload tab
1. Browse for the plugin file (embed-for-vimeo.zip) on your computer
1. Click "Install Now" and then hit the activate button

== Frequently Asked Questions ==

= Is this plugin responsive? =

Yes.

== Screenshots ==

1. Vimeo Video Player

== Upgrade Notice ==
none

== Changelog ==

= 1.0.2 =
* Added options to control closed captions

= 1.0.1 =
* First commit

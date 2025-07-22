=== Embed for Vimeo ===
Contributors: naa986
Donate link: https://noorsplugin.com/
Tags: vimeo, video, embed, iframe, responsive
Requires at least: 3.0
Tested up to: 6.8
Requires PHP: 7.4
Stable tag: 1.0.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Embed Vimeo videos in WordPress beautifully. Embed video with a URL or shortcode and customize the Vimeo player using this Vimeo embed plugin.

== Description ==

[Embed for Vimeo](https://noorsplugin.com/embed-for-vimeo-wordpress-plugin/) plugin is the easiest way to embed Vimeo videos in WordPress. This plugin extends the default Vimeo embed with advanced player parameters.

Unlike other Vimeo plugins, It doesn't replace your on-page video embed code with JavaScript/HTML code. Loading a video with JavaScript doesn't provide any video SEO benefit as a search engine crawler will only see some code instead of the actual video object. 

Embed for Vimeo is easy to use because there is no setting to configure. It uses the oEmbed API so your videos will be responsive and provide all the benefits that core WordPress Vimeo embed has to offer. Vimeo videos on your website will continue to work even if you choose to deactivate the plugin.

=== Features ===

* Responsive and mobile friendly.
* Proper Vimeo video embed with no additional JavaScript code.
* No setting to configure. Install, activate and start using it.
* No Vimeo API key needed.
* Embed Vimeo videos in WordPress with the Vimeo block.
* Enable/Disable airplay.
* Enable/Disable autopause.
* Enable/Disable cc (closed captions).
* Enable/Disable byline (author name).
* Enable/Disable video title display.

=== How to Use Embed for Vimeo ===

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

**title**

If you do not want to display the video title in the player, add "title=false" to your Vimeo URL.

`https&#58;//vimeo.com/1084536?title=false`

**cc**

This argument is enabled by default which enables closed captions in the player. To disable closed captions you can add "cc=false" to your Vimeo URL.

`https&#58;//vimeo.com/1084536?cc=false`

This option has no effect if your video does not have captions or subtitles.

=== How to Add Multiple Arguments ===

You can add multiple arguments to your Vimeo URL with &.

`https&#58;//vimeo.com/1084536?autopause=false&byline=false`

For a single argument ? needs to be used.

=== Embed for Vimeo Add-ons ===

* [Advanced Parameters](https://noorsplugin.com/embed-for-vimeo-wordpress-plugin/)

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

= 1.0.4 =
* Added support for advanced parameters

= 1.0.3 =
* Added an option to disable video title display

= 1.0.2 =
* Added options to control closed captions

= 1.0.1 =
* First commit

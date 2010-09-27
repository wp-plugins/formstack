=== Formstack Online Forms ===
Contributors: mmattax, noahwesley
Donate link: http://www.formstack.com
Tags: forms, online forms, web forms, form builder, lead generation, contact form, contact forms, surveys, order forms, online order forms, online surveys, registration forms, event registration forms, lead generation form
Requires at least: 2.8
Tested up to: 3.0
Stable tag: 1.0.0

This plugin allows you to easily embed Web forms built with Formstack's online form builder
into your sidebar, pages, and posts.

== Description ==

The Formstack plugin makes embedding your [Formstack](http://www.formstack.com "Online Form Builder")
web forms as easy as clicking a button. This plugin features two components:

*    Formstack Widget
*    Formstack Plugin

All you need is a Formstack account and the plugin.  [Signup for free at Formstack](http://www.formstack.com/pricing?source=wp-plugin_utm_medium=pluginlisting "Free Online Forms")

The Formstack widget allows you to embed Formstack web forms into your sidebar. The widget automatically optimizes the web form's
CSS so that your online form will fit and look great in the sidebar.

The Formstack plugin will add a button to the TinyMCE editor that allows you to easily select a Formstack web form
you wish to embed. Once a form is selected, a shortcode will be inserted into the editor, which will be converted
to the selected form once your page or post is rendered.

This plugin supports the following shortcodes `[Formstack]`, `[formstack]`, and `[fs]`.

This plugin requires a [Formstack](http://www.formstack.com "Online Form Builder") account and an API key.

== Installation ==

1. Upload `Formstack.zip` via the Upload link in the WordPress plugins dashboard.
2. Activate the Formstack Plugin through the 'Plugins' menu in WordPress
3. Activate the Formstack Widget through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Where can I find my Formstack API key? =

Your Formstack API key can be found or created in your account settings. Go here:
to find to create an API key: https://www.formstack.com/admin/apiKey/main

== Changelog ==

= 1.0.1 =
* Now using wp_remote_fopen for improved server compatibility. Should fix errors some people were having when loading the widgets page.
* Minor housekeeping

= 1.0.0 =
* Hello World

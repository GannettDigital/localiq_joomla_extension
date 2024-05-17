# LOCALiQ Joomla 5.0 Extension

A Joomla Extension to add LOCALiQ Tracking.

Compatible with Joomla 4.0 or above.
Tested up to: 5.1
Stable tag: 2.1.0.0
License: GPLv2
License URI: https://opensource.org/licenses/GPL-2.0

## Ownership

- *Team Multi-User Chat:* https://usatnetwork-product.slack.com/messages/capture
- *Confluence:* Needed
- *Jira:* https://jira.gannett.com/projects/RCAP

## Building

$ zip -r localiq_plugin_v2.1.0.0.zip ./localiq_joomla_30_extension -x ./localiq_joomla_30_extension/.git/\*

## Downloading ##
- Download or copy url to the zip file from here:  [Latest Release](https://github.com/reachlocal/localiq_joomla_30_extension/releases/latest)

## Installation ##

After logging in to the administration area, click "System" and then "Manage/Extensions".
![](/docs/install_1.png)

Then click "Install Extensions"
![](/docs/install_2.png)

From this page you have four options to install from. We will use "Upload Package File".
![](/docs/install_3.png)

Upload Package File: for this option all you have to do is browse for the (zipped) extension on your computer, select it and click "Open".

After installation you should see the following success message:
![](/docs/install_4.png)

## Configuration ##

After installation the extension needs to be configured with your ReachLocal Site ID and enabled.

Go to the "Home Dashboard" and click "Plugins".
![](/docs/config_1.png)

Filter Plugins by "Localiq" and click on "System - LOCALiQ Tracking Code".
![](/docs/config_2.png)

Enter your your ReachLocal Tracking ID and set the status to enabled.
![](/docs/config_3.png)

Click "Save & Close" and ReachLocal Tracking will now be active on your site.
![](/docs/config_4.png)



## License

The ReachLocal Tracking Extension is licensed under the GPLv2 license.

A copy of the license is included in the Extension at `LICENSE.txt`.

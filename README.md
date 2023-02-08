# LOCALiQ Joomla 3.0 Extension

A Joomla Extension to add LOCALiQ Tracking.

Tested up to: 3.8.13
Stable tag: 1.1.1.0
License: GPLv2
License URI: https://opensource.org/licenses/GPL-2.0

## Ownership

- *Team Multi-User Chat:* https://usatnetwork-product.slack.com/messages/capture
- *Confluence:* Needed
- *Jira:* https://jira.gannett.com/projects/RCAP


## Downloading ##
- Download or copy url to the zip file from here:  [Latest Release](https://github.com/reachlocal/localiq_joomla_30_extension/releases/latest)

## Installation ##

After logging to the administration area, click "Install Extensions".
![](/docs/install_1.png)

From this page you have three options: upload package file, install from directory, or install from URL.
![](/docs/install_2.png)

1. Upload Package File: for this option all you have to do is browse for the (zipped) extension on your computer then after selecting your file all you have to do is press the "Upload File & Install" button and you're done.
2. Install from Directory: This option will find the file in a directory of your web server which you can place there using an FTP server or just placing it there if your sever is locally hosted. A useful option if you get a timeout in the upload option because the file is too large, for instance.
   First you will need to unzip the extension into its own directory on the main server (make sure everyone can read it all). Since as a default joomla uses 'tmp' in its home directory for installs, it's easiest to use a subdirectory of that to place your installs, then you just add it to the default path presented. Finally click the "Install" button.
3. Install from URL: This will install your extension from any URL as long as you give the full URL. (ex: https://github.com/reachlocal/localiq_joomla_30_extension/archive/VERSION.zip) The only problem with this option is depending on your connection speed and file size it can take quite a while to retrieve the file from an external site, which could cause installation issues.

After installation you should see the following success message:
![](/docs/install_3.png)

## Configuration ##

After installation the extension needs to be configured with your ReachLocal Site ID and activated.

Go to the extensions tab and click "Plug-in Manager".
![](/docs/config_1.png)

Filter Plugins by "ReachLocal" and click on "ReachLocal Tracking Code"
![](/docs/config_2.png)

Enter your your ReachLocal Tracking ID and set the status to enabled
![](/docs/config_3.png)

Click "Save & Close" and ReachLocal Tracking will now be active on your site.
![](/docs/config_4.png)



## License

The ReachLocal Tracking Extension is licensed under the GPLv2 license.

> Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

> The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

A copy of the license is included in the Extension at `LICENSE.txt`.

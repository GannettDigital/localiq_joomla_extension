# ReachLocal Joomla 3.0 Extension

A Joomla Extension to add ReachEdge Tracking.

## Downloading ##
- Download or copy url to the zip file from here:  [Latest Release](https://github.com/reachlocal/reachlocal_joomla_30_extension/releases/latest)

## Installation ##

After logging to the administration area, click "Install Extensions".
![](/docs/install_1.png)

From this page you have three options: upload package file, install from directory, or install from URL.
![](/docs/install_2.png)

1. Upload Package File: for this option all you have to do is browse for the (zipped) extension on your computer then after selecting your file all you have to do is press the "Upload File & Install" button and you're done.
2. Install from Directory: This option will find the file in a directory of your web server which you can place there using an FTP server or just placing it there if your sever is locally hosted. A useful option if you get a timeout in the upload option because the file is too large, for instance.
   First you will need to unzip the extension into its own directory on the main server (make sure everyone can read it all). Since as a default joomla uses 'tmp' in its home directory for installs, it's easiest to use a subdirectory of that to place your installs, then you just add it to the default path presented. Finally click the "Install" button.
3. Install from URL: This will install your extension from any URL as long as you give the full URL. (ex: https://github.com/reachlocal/reachlocal_joomla_30_extension/archive/V1.0.3.0.zip) The only problem with this option is depending on your connection speed and file size it can take quite a while to retrieve the file from an external site, which could cause installation issues.

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

The ReachLocal Tracking Extension is licensed under the GPL v2 or later.

> This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

> You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

A copy of the license is included in the Extension at `LICENSE.txt`.

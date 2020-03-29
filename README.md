Block Category List plugin for Moodle
====================================
![PHP](https://img.shields.io/badge/PHP-v5.6%20%2F%20v7.0%20%2F%20v7.1%20%2F%207.2-blue.svg)
![Moodle](https://img.shields.io/badge/Moodle-v3.5%20to%20v3.6.x-orange.svg)
[![GitHub Issues](https://img.shields.io/github/issues/michael-milette/moodle-block_category_list.svg)](https://github.com/michael-milette/moodle-block_category_list/issues)
[![Contributions welcome](https://img.shields.io/badge/contributions-welcome-green.svg)](#contributing)
[![License](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](#license)

# Table of Contents

- [Basic Overview](#basic-overview)
- [Requirements](#requirements)
- [Download Category List for Moodle](#download-category-list-for-moodle)
- [Installation](#installation)
- [Usage](#usage)
- [Updating](#updating)
- [Uninstallation](#uninstallation)
- [Limitations](#limitations)
- [Language Support](#language-support)
- [Frequently Asked Questions (FAQ)](#faq)
- [Contributing](#contributing)
- [Motivation for this plugin](#motivation-for-this-plugin)
- [Further information](#further-information)
- [License](#license)

# Basic Overview

The Category List plugin for Moodle displays a list of top level categories.

[(Back to top)](#table-of-contents)

# Requirements

This plugin requires Moodle 3.5 or 3.6 from https://moodle.org .

If you roll it back to the Initial Commit using Git, it may work with previous versions of Moodle all the way back to Moodle 2.7 but was only tested with Moodle 3.0. If it works for you, let us know. Tip: You might need to modify the version.php in order for Moodle to let you install it on earlier versions than 3.0.

[(Back to top)](#table-of-contents)

# Download Categoru List for Moodle

The most recent STABLE release of Category List for Moodle is available from:
https://moodle.org/plugins/block_category_list

The most recent DEVELOPMENT release can be found at:
https://github.com/michael-milette/moodle-block_category_list

[(Back to top)](#table-of-contents)

# Installation

Install the plugin, like any other plugin, to the following folder:

    /blocks/category_list

IMPORTANT: The there are different branches for different Moodle releases. You must choose a branch which is the same or closest lower for your version of Moodle. Example, choose MOODLE_37_STABLE for Moodle 3.8.

See https://docs.moodle.org/en/Installing_plugins for details on installing Moodle plugins.

[(Back to top)](#table-of-contents)

# Usage

Works just like the Courses block but only displays Categories.

[(Back to top)](#table-of-contents)

# Updating

There are no special considerations required for updating the plugin.

The first public BETA version was released on 2016-12-05. For more information on releases since then, see
[CHANGELOG.md](https://github.com/michael-milette/moodle-block_category_list/blob/master/CHANGELOG.md).

[(Back to top)](#table-of-contents)

# Uninstallation

Uninstalling the plugin by going into the following:

Home > Administration > Site Administration > Plugins > Manage plugins > Category List

...and click Uninstall. You may also need to manually delete the following folder:

    /blocks/category_list

[(Back to top)](#table-of-contents)

# Limitations

There are no known limitations.

[(Back to top)](#table-of-contents)

# Language Support

This plugin includes support for the English language. Additional languages including French are supported if you've installed one or more additional Moodle language packs.

If you need a language that is not yet supported, please contribute translations using the Moodle AMOS Translation Toolkit for Moodle at
https://lang.moodle.org/

[(Back to top)](#table-of-contents)

# Contributing

If you are interested in helping, please take a look at our [contributing](https://github.com/michael-milette/moodle-block_category_list/blob/master/CONTRIBUTING.md) guidelines for details on our code of conduct and the process for submitting pull requests to us.

## Contributors

Michael Milette - block_category_list
Martin Dougiamas - Author and Lead Developer of the block_course_list plugin upon which this is based.

## Pending Features

Eventually I would like to see a configurable setting added to the course_list plugin making this plugin obsolete.

If you would like to see this happen as well, consider contributing or hiring us to accelerate development.

[(Back to top)](#table-of-contents)

# Motivation for this plugin

The initial development for this project was sponsored by the kind folk at l'Action ontarienne contre la violence aux femmes together with TNG Consulting Inc.

[(Back to top)](#table-of-contents)

# Further information

For further information regarding the block_category_list plugin, support or to report a bug, please visit the project page at:

https://github.com/michael-milette/moodle-block_category_list

[(Back to top)](#table-of-contents)

# License

Copyright © 2016-2020 TNG Consulting Inc. - https://www.tngconsulting.ca/

This file is part of Category List plugin for Moodle - https://moodle.org/plugins/block_category_list/

Category List is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Category List is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Category List.  If not, see <https://www.gnu.org/licenses/>.

[(Back to top)](#table-of-contents)

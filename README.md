Skeleton Module for Joomla! 2.5+
================================

This repository is just a simple template to get you started creating a Joomla Module.

It includes all the base files and a languages folder with easily replaced "skeleton" placeholders to insert your own unique details and module name.

Getting started
---------------
Download the files ([zip][3]) or fork the repository.

####Replace Module Name####
Make a copy of the files and using your favourite editor search and replace on the following to turn it into a starting point for your module. (NB. these are _case sensitive_ search and replaces, also if you do it in the order listed it will make life easier)

- `MOD_SKELETON` should be replaced by your modules prefix<br />(usually based on the name e.g. `MOD_NEWTWEETS`)
- `skeleton` should be replaced by your modules name<br />(usually something indicative of the functionality e.g. `newtweets`)
- `Skeleton` should be replaced by your modules name<br />(e.g. `New Tweets`)
- `SKELETON` should also be replaced by your modules name
- `© YYYY My Name or My Company` should be replaced by the appropriate information e.g. `© 2015 Craig Phillips Pty Ltd`
- `My Name`  should be replaced by the appropriate information e.g. `Craig Phillips`
- `dd-MMM-YYYY` should be replaced with the current date e.g. 25-May-2015
- `dd-mm-YYYY`  should be replaced with the current date e.g. 25-05-2015

[Modules][1] are discussed on the [Joomla Doc's website][2].

####Change File & Folder names####
For a module the top-level folder, and each of the files must follow a naming convention shown in the current file and folder structure:

	/mod_skeleton/
		helper.php
		mod_skeleton.php
		mod_skeleton.xml
		languages/en-GB/en-GB.mod_skeleton.ini
		languages/en-GB/en-GB.mod_skeleton.sys.ini
		tmpl/default.php

Specifically, they must all match the name of the module in the XML file.


So, for example if you have a module with this name element in the XML `<name>mod_newtweets</name>` the module file folder should be named:

	/mod_newtweets/
		helper.php
		mod_newtweets.php
		mod_newtweets.xml
		languages/en-GB/en-GB.mod_newtweets.ini
		languages/en-GB/en-GB.mod_newtweets.sys.ini
		tmpl/default.php

####Build Number
Finally if you use a build process that generates a build number, as a part of your build process you can replace the token `#buildno#` in the modules XML file `VERSION` attribute.

[1]: http://docs.joomla.org/Module_Development
[2]: http://docs.joomla.org
[3]: https://github.com/cppl/Skeleton-Module-for-Joomla/archive/master.zip
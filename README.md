Skeleton Module for Joomla! 2.5+
================================

This repository is just a simple template to get you started creating a Joomla Module.

It includes all the base files and a languages folder with easily replaced "skeleton" placeholders to insert your own unique details and module name.

Getting started
---------------
Download the files ([zip][3]) or fork the repository.

####Replace Module Name####
Make a copy of the files and using your favourite editor search and replace on the following to turn it into a starting point for your module.

- `skeleton` should be replaced by your modules name<br />(usually something indicative of the functionality e.g. `newtweets`)
- `SKELETON` should also be replaced by your modules name

[Modules][1] are discussed on the [Joomla Doc's website][2].

####Change File & Folder names####
For a module the top-level folder, and each of the files must follow a naming convention shown in the current file and folder structure:

	/mod_skeleton/
		helper.php
		skeleton.php
		skeleton.xml
		languages/en-GB/en-GB.mod_skeleton.ini
		languages/en-GB/en-GB.mod_skeleton.sys.ini
		tmpl/default.php

Specifically, they must all match the name of the module in the XML file.


So, for example if you have a module with this name element in the XML `<name>mod_newtweets</name>` the module file folder should be named:

	/mod_newtweets/
		helper.php
		newtweets.php
		newtweets.xml
		languages/en-GB/en-GB.mod_newtweets.ini
		languages/en-GB/en-GB.mod_newtweets.sys.ini
		tmpl/default.php

[1]: http://docs.joomla.org/Module_Development
[2]: http://docs.joomla.org
[3]: https://github.com/cppl/Skeleton-Module-for-Joomla/archive/master.zip
<?php

return [

  /*
  |   Entity
  |    ____        _ _     _
  |   | __ ) _   _(_) | __| | ___ _ __
  |   |  _ \| | | | | |/ _` |/ _ \ '__|
  |   | |_) | |_| | | | (_| |  __/ |
  |   |____/ \__,_|_|_|\__,_|\___|_|  Extension . . .
  |
  |   This file contains all the entity builder configs
  |
  */

	/*
	|--------------------------------------------------------------------------
	| Namespaces
	|--------------------------------------------------------------------------
	| A list of all the Stream Namespaces used in this Module.
	|
	| More control over code generated can be established per assignment,
	| for example, hide / show table columns and form fields per stream assignment,
	| also table column field view / template.
	|
	| for example:
	|
	|	'namespaces' => [
	|		'namespace' => [
	|			'field_slug' => [
	|				'hide_column' => true,  *optional, (false by default)
	|				'hide_field'  => false,  *optional, (false by default)
	|				'column_template'    =>
	|     '<span class="label label-default">{value}</span> *optional, ('{value}' by default)
	|			]
	|		]
	| ]
	|
	| Boolean Field Type:
	| ------------------
	| For boolean type there's a default column_template if it's value is set to,
	|  			'column_template'    =>  'default'
	| You can also have your own markup, for that there's two variables {class} & {value}
	| For example, '<span class="label label-{class}">{value}</span>'
	|
	|	*/

	'namespaces' => [
		'todo' => [
		]
	],

	/*
	|--------------------------------------------------------------------------
	| Seeding
	|--------------------------------------------------------------------------
	| Allow to seed the module after it has installed by:
	|
	| (1) The Entity Builder : 'builder'   (*default)
	| (2) An internal seeder command : 'self'
	| (3) Disable seeding : 'no'
	|
	*/

	'seeding' => 'no',

	/*
	|--------------------------------------------------------------------------
	| Relationship 'null' value
	|--------------------------------------------------------------------------
	| The default view for a null relationship entry
	|
	*/

	'null_relationship_entry' => '<span class="label label-default">null</span>',

	/*
	|--------------------------------------------------------------------------
	| Namespaces folder
	|--------------------------------------------------------------------------
	| Group all streams in one folder
	|
	*/

	'namespace_folder' => true,

	/*
	|--------------------------------------------------------------------------
	| Repository Super Class
	|--------------------------------------------------------------------------
	| Extend all generated repositories to a common super class, if any!
	| For example: 'Websemantics\NamedModule\Common\CommonRepository'
	|
	*/

	'extends_repository' => null,

	/*
	|--------------------------------------------------------------------------
	| Avoid Overwrite
	|--------------------------------------------------------------------------
	|
	| For development and to avoid overwriting on code added, list all the files
	| that should not be overwritten by the builder. Use the last part of the
	| file name, ..
	|
	| for example:
	|   -PostModel.php 		  -> 'Model.php'
	|   -FileTableColumns.php -> 'TableColumns.php'
	|
	| If you require the builder to generate a fresh copy of the file, either remove it from
	| here or delete it form the module.
	|
	*/

	'avoid_overwrite' => [
		'Model.php',
		'Repository.php',
		 // 'TableColumns.php', /* uncomment this if you no longer want this to be overwritten */
	   // 'FormBuilder.php'
		 // 'ModuleSeeder.php'
	],

	/*
	|--------------------------------------------------------------------------
	| Docblock
	|--------------------------------------------------------------------------
	|	Docblock text to include with generated files
	|
	*/

	'docblock' =>
' *
 * 2011-2016 Web Semantics, Inc.
 *
 * @link      http://websemantics.ca
 * @author    WebSemantics, Inc. <info@websemantics.ca>'
];

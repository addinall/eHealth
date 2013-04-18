<?php
// vim: set tabstop=4 shiftwidth=4 expandtab autoindent smartindent :
// CAPTAIN  SLOG
//
//  FILE:       new_config.php
//  SYSTEM:     generic
//  AUTHOR:     Mark Addinall
//  DATE:       28 Feb 2008
//  SYNOPSIS:   A configuration file to enable
//              this software to run on various
//              machines, databases and networks.  It is
//              'include()'ed  by the PHP applications.
//
// DATE       |    CHANGE                     |    WHO
// 19/03/2008 | OOP changes. Removed database |   MA
//            | connectivity. Now in object.  |
// 04/01/2011 | Adapt for ehealth             |   MA
//
//

// global DEBUG

$debug = 1 ;

// this is for deBroglie 



$config  = array
(
'db'        =>  'mySQL',
'hostname'  =>  'localhost',
'user'      =>  'root', 
'password'  =>  'Fl0werch1ld',
'database'  =>  'ehealth',
'stream'    =>  ''
) ;

?>




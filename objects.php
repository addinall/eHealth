<?php
// vim: set tabstop=4 shiftwidth=4 expandtab autoindent smartindent :
// CAPTAIN  SLOG
//
//	FILE:		objects.php
//	SYSTEM:		generic
//	AUTHOR:		Mark Addinall
//	DATE:		20 Mar 2008
//	SYNOPSIS:	The Object definitions for the
//				classes used within the CMS
//				system both for data storage
//				and for connectivity establishment
//				and manipulation.
//
// DATE       |    CHANGE                     |    WHO
// 20/03/2008 | Create                        | MA
// 20/07/2008 | Implement a REAL object model |
//            | in the Media object as a base |
//            | for the structure of v1.x     | MA
// 02/01/2011 | Adept to ehealth system		  | MA
//
// :set tabstop=4 for readability



// now we describe some purpose
// built stacks used throughout
// the CMS and the front facing
// application.

$administrators        	= array() ;
$blogs				   	= array() ;
$bloggers				= array() ;



//-------------
class Primitive
{

// This is our entry level object.
// All of the entities contained
// in the database in this CMS
// have these attributes.

private		$id ;			// row num

private		$name ;			// what is this called?
private		$short_name ;	// computer freindly name
private		$active ;		// is it alive?


	//-----------------
	function Primitive()
	{
	// constructor
	// do nothing
	}
} // Primitive



//--------------------------
class Base extends Primitive
{

// This is our baseline object
// model.  MOST entities in the 
// database contain these attributes

private		$description ;
private		$tags ;
private		$image ;
	//-------------	
	function Base()
	{
	// constructor
	// do nothing
	}
} // Base





//----------------------------------------------
// OK, now describe the first of v.1.x/v2.x of
// object classes. As the objects are transformed they should be moved
// below here, leaving Primitive, Base and Connection at the top
// of the declarations.


//---------------------------------
class Bloggers extends Base
{

	// This object is going to look a little different
	// this is how the objects should now be transformed
	// into the hopefully stable 1.x model. MA - 19/7/2008
	//  
	// The current software is BETA and taking it to market
	// at the moment is fraught with danger.  Having one
	// well understood customer like OE assisting with the
	// ALPHA and BETA stage is managable and helpful,
	// trying to port it to another non-LAMP system at
	// this stage of the development to a machine in 
	// another country is commercial suicide. The developer
	// will spend all of his time chasing bugs, making
	// 'quick' fixes and 'temporary hacks' which will
	// destroy the aim of the intended design of this system.
	// Someone now needs to sit down for another 10 weeks
	// and model the application based on the structure
	// of this object.
	//
	// The reason the application is 'half' object oriented is
	// historical.  It was always my intention to do it right the
	// first time and quoted 14 weeks development. Of course this plan
	// lasted all of two days and it became 'urgent' and 'political'
	// to give OE some screens to play with immediatly. This led
	// Isis and I to deliver a very quick and dirty mixture
	// of some DBASE PHP and some HTML ADD forms.  The OOD went
	// on hold for a few weeks.  After this 'urgency' the customer added
	// about a dozen database entries and went on holiday.  Work on this
	// file and model resumed. For a few days.  Then it became 'urgent'
	// and political to give the customer the ability to EDIT the
	// few database entries being added.  So work on the OOD stopped
	// again, and Isis and I delivered a whole bunch of EDIT HTML
	// forms.  Of course, the DBASE programs no longer had to
	// INSERT into the database, but SELECT and UPDATE.
	//
	// 2011 - This file has been used in several versions of
	// chameleon.  Now being used in eHealth.  I left the
	// above commenents in for MY historical purpose.
	//
	// The database strategy now is half traditional (on application
	// start, loading major stacks of objects) and AJAXy database
	// updates which obviously do not require a document re-fetch.
		
	private		$email ;			// qualified email address
	private		$url ;				// web page (if applicable)
	private		$updated ;			// last updated

    //---------------
    function Bloggers()
    {
	// nothing to do	
	
	}

    //-----------------------------
    private function populate( $row )
    {
        // get a data base row and populate
        // the object


        $this->id                       =   $row[ 'id' ] ;
        $this->name              		=   $row[ 'name' ] ;
        $this->short_name               =   $row[ 'short_name' ] ;
        $this->active                   =   $row[ 'active' ] ;
		$this->description				=	$row[ 'description' ] ;
        $this->tags	            		=   $row[ 'tags' ] ;
        $this->image	           		=   $row[ 'image' ] ;
		$this->email					=	$row[ 'email' ] ;
		$this->url						=	$row[ 'url' ] ;
        $this->updated	           		=   $row[ 'updated' ] ;
        
    }
} // Bloggers 


//---------------------------------
class Blog extends Base
{

	private $updated ;

    //---------------
    function Blog()
    {
	// nothing to do	
	
	}

    //-----------------------------
    private function populate( $row )
    {
        // get a data base row and populate
        // the object

        // first the inherited data type from class Primitive

        $this->id                       =   $row[ 'id' ] ;
        $this->name              		=   $row[ 'name' ] ;
        $this->short_name               =   $row[ 'short_name' ] ;
        $this->active                   =   $row[ 'active' ] ;
		$this->description				=	$row[ 'description' ] ;
        $this->tags	            		=   $row[ 'tags' ] ;
        $this->image	           		=   $row[ 'image' ] ;
        $this->updated	           		=   $row[ 'updated' ] ;
		
        
    }
} // Blog 




//--------------
class Connection

// This object opens, closes, manages, manipulates
// and reports on our database.  This is pointed
// only at mySQL at the moment.  
// This level of abstraction will allow us to use 
// ORACLE, DB2, MSql and Postgress drivers easily
// by the application programmers.
//
// Two classes of methods are contained in this class.
// 1.  Methods for accessing local or network attached
// database (hard drive for small machines, NAS or SAN
// for larger installations), and,
// 2. The AJaX routines for retreiving and storing
// data.


{

private		$configuration ;
private		$alive ;

	//-----------------------------------
	function Connection( $local )
	{
	// constructor

	require("config.php");  // text file with db info

    // first populate our internal configuration
    // from the array argument passed in

    $this->configuration = $config ;   // this is an array containing database variables (globalish) ;

    // and try to connect to the database
    // this level of abstraction will allow for
    // ORACLE, Postgres of DB2 databases

	$this->connect() ;

	} // constructor

	//-------------------------------------
	private function connect()
	{
	// connect to the RDMS first 

			$this->alive = FALSE ;										// start out dead
			if ($this->configuration[ 'db' ] == 'mySQL')				// cater for several types of database
			{
				$this->configuration[ 'stream' ] =						// he stream is in effect a socket
				mysql_connect(	$this->configuration['hostname'],		// hostname or LUN
								$this->configuration['user'],			// username
								$this->configuration['password'] ) 		// password in plain.  must look into this
					or die('Database not started :    '.mysql_error()) ;// fail?  die with the error

																		// now connect to the database required

				mysql_select_db( 	$this->configuration[ 'database' ],	// this is the database name ie. ehealth
									$this->configuration[ 'stream' ] )	// this is a binary stream (socket())
					or die('Database   :  '. 
							$this->configuration[ 'database' ] .		// in this instance we can connect to
							  '   not in Mysql Namespace' . 			// the RDBMS but not to the namespace
							  			mysql_error() ) ;				// database name spelled wrong in the
																		// config or the database is off-line
			}															// end of mySQL
																		// -----------------------------------
			else if ($this->configuration[ 'db' ] == 'ORACLE')			// cater for several types of database
			{
				$this->configuration[ 'stream' ] = 						// tell ORACLE we want a permanent connection
				oci_pconnect( 	$this->configuration['user'],			// username
								$this->configuration['password'],  		// password in plain.  must look into this
								$this->configuration['hostname'] ) 		// 
					or die('Database not started :    ' ) ;				// fail? 
			}															// end of ORACLE
																		// -------------------------------------
			else if ($this->configuration[ 'db' ] == 'DB2')				// The IBM offering.  This is important
																		// as mainframes haven't gone away.
																		// IBM has Linux and DB2 running native
																		// in the zEnterprize models and implementing
																		// dozens to tens of thousands virtual
																		// hosts on the mainframe.
			{
				$this->configuration[ 'stream' ] = 					
				odbc_pconnect( 	$this->configuration['database'],		// DB2 is a little weird, this is sort of a namespace 
								$this->configuration['user'],  			// user in catalog 
								$this->configuration['password'] ) 		// password in plain again
					or die('Database not started :    ' .				// fail? 
							$this->configuration[ 'database' ] .		// in this instance we can connect to
							  '   not in DB2 Catalog' . 				// the RDBMS but not to the namespace
							  			odbc_errormsg( $this->configuration['stream']) ) ;				
																		// database name spelled wrong in the
																		// config or the database is off-line
			}															// end of DB2
																		// -------------------------------------
			$this->alive = TRUE ;

	} // connect

	//--------------------------------------
	private function execute( $sql ) 
    {

		if ($this->configuration[ 'db' ] == 'mySQL')
		{
        	$result = mysql_query( 	$sql, 
            						$this->configuration['stream']) ;
        	if (! $result )
        	{
            	die('SQL Failure:   ' . mysql_error() . '<BR>') ;
        	}
        return $result ;
		}
		else if ($this->configuration[ 'db' ] == 'ORACLE')
		{


		}
		else if ($this->configuration[ 'db' ] == 'DB2')
		{


		}



    } // execute 


    //----------------------------
	private function fetch( $handle ) 
    {

        $row = mysql_fetch_array( $handle ) ;

        return $row ;

    } //  fetch


	//--------------------------------------
	private function close() 
    {
        mysql_close( $this->configuration['stream']) ;

	} // close	

	
	//------------------------	
	private function is_alive()
	{	
		return $this->alive ;
	}

} // class Connection




//-------
class Link
{
    // This object is quite different from the
    // other database entities.
    // It is what forms the 'glue' on the
    // many to many relationships within this
    // system.  It allows multi-way unbalanced
    // relations.

    private  $major_category ;		// major TYPE of data object
    private  $minor_category ;		// minor TYPE of data object
    private  $link_from ;			// parent object in tree
    private  $link_to ;				// child object in tree
	private  $updated ;				// when last updated

	private	 $list = array() ;		// this is a linked list used to
									// build multiple choice checkboxes
									// and pull-downs

	//global	 $database ;


	//-----------
	function Link()
	{
		// do nothing, constructer
	}


	//-----------------------------
	function add( 	$major,
					$minor,
					$link_from,
					$link_to,
					$update = '' 
				)


    {

		// firstly populate the object as
		// it will be itself populating a stack
		// in the outside world

		if ( $update == '' )
		{
			$update = date( 'Y-m-d' ) ;
		}


    	$this->major_category	=	$major ;
    	$this->minor_category	=	$minor ;
    	$this->link_from		=	$link_from  ;
    	$this->link_to			=	$link_to ;
		$this->updated			=	$update ;


		// Now build the database EXEC statement

		$sql  = 	"INSERT INTO many_to_many " ;
		$sql .= 	"(	major_category, "  ;
		$sql .= 	"	minor_category, "  ;
		$sql .= 	"	link_from, "  ;
		$sql .= 	"	link_to, "  ;
		$sql .= 	"	updated ) "  ;
		$sql .= 	"VALUES "  ;
		$sql .= 	"(	'$this->major_category', "  ;
		$sql .= 	"	'$this->minor_category', "  ;
		$sql .= 	"	'$this->link_from', "  ;
		$sql .= 	"	'$this->link_to', "  ;
		$sql .= 	"	'$this->updated' )"  ;

		if ( $database->alive )
		{
			$database->execute( $sql ) ;
		} // if
	} // add

	//--------------------------------
	function delete( $who )
	{

		global $database ;

		$sql = "DELETE FROM many_to_many WHERE link_from  = '$who'" ;
		
		$database->execute( $sql ) ;
	} // delete


	//--------------------------
	function create( $parent, $name )
	{

	global	$location_checkbox,
			$event_checkbox,
			$staff_checkbox,	
			$product_checkbox	;

	global 	$database ;


		$size = count( $location_checkbox ) ;
		if ($size)
		{
			for(	$count = 0 ;
					$count < $size ;
					$count++ )
			{
				$this->add(	"location",
							"$parent",
							"$name",
							"{$location_checkbox[ $count ]}",
							date( 'Y-m-d' ) ) ;
			}
		}

		$size = count( $holiday_checkbox ) ;
		if ($size)
		{
			for(	$count = 0 ;
					$count < $size ;
					$count++ )
			{
				$this->add(	"machine",
							"$parent",
							"$name",
							"{$machine_checkbox[ $count ]}",
							date( 'Y-m-d' ) ) ;
			}
		}
	}
	//-----------------------------------------
	function build_list( $what_type, $for_whom )

	{
		global $database ;

		// build a list of reference from the many to many
		// link file of a specific type ie properties
		// for a specific Object 'Mark Addinall the Guide'

		// clean out the list

		$this->list = '' ;

		$sql = "SELECT * from many_to_many " ;
		$sql .= "      WHERE major_category = '$what_type'  " ;
		$sql .= "      AND   link_from = '$for_whom' " ;

		$handle = $database->execute( $sql ) ;
		if ( $handle )
		{
			while ( $row = $database->fetch( $handle ) )
			{
				$this->list[] = $row['link_to'] ;
			}
		}

		return( $this->list ) ;
	}	

} // Link



?>


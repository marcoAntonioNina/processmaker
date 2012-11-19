<?php



/**
 * This class defines the structure of the 'APP_NOTES' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.classes.model.map
 */
class AppNotesTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.AppNotesTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('APP_NOTES');
		$this->setPhpName('AppNotes');
		$this->setClassname('AppNotes');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('NOTES_UID', 'NotesUid', 'INTEGER', true, 11, null);
		$this->addColumn('APP_UID', 'AppUid', 'VARCHAR', true, 32, '');
		$this->addColumn('USR_UID', 'UsrUid', 'VARCHAR', true, 32, '');
		$this->addColumn('NOTE_DATE', 'NoteDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('NOTE_CONTENT', 'NoteContent', 'LONGVARCHAR', true, null, null);
		$this->addColumn('NOTE_TYPE', 'NoteType', 'VARCHAR', true, 32, 'USER');
		$this->addColumn('NOTE_AVAILABILITY', 'NoteAvailability', 'VARCHAR', true, 32, 'PUBLIC');
		$this->addColumn('NOTE_ORIGIN_OBJ', 'NoteOriginObj', 'VARCHAR', false, 32, '');
		$this->addColumn('NOTE_AFFECTED_OBJ1', 'NoteAffectedObj1', 'VARCHAR', false, 32, '');
		$this->addColumn('NOTE_AFFECTED_OBJ2', 'NoteAffectedObj2', 'VARCHAR', true, 32, '');
		$this->addColumn('NOTE_RECIPIENTS', 'NoteRecipients', 'LONGVARCHAR', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // AppNotesTableMap

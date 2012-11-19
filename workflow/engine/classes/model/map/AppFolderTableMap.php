<?php



/**
 * This class defines the structure of the 'APP_FOLDER' table.
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
class AppFolderTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.AppFolderTableMap';

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
		$this->setName('APP_FOLDER');
		$this->setPhpName('AppFolder');
		$this->setClassname('AppFolder');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('FOLDER_UID', 'FolderUid', 'VARCHAR', true, 32, '');
		$this->addColumn('FOLDER_PARENT_UID', 'FolderParentUid', 'VARCHAR', true, 32, '');
		$this->addColumn('FOLDER_NAME', 'FolderName', 'LONGVARCHAR', true, null, null);
		$this->addColumn('FOLDER_CREATE_DATE', 'FolderCreateDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('FOLDER_UPDATE_DATE', 'FolderUpdateDate', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // AppFolderTableMap

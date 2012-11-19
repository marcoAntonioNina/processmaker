<?php



/**
 * This class defines the structure of the 'CONTENT' table.
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
class ContentTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.ContentTableMap';

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
		$this->setName('CONTENT');
		$this->setPhpName('Content');
		$this->setClassname('Content');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('CON_CATEGORY', 'ConCategory', 'VARCHAR', true, 30, '');
		$this->addPrimaryKey('CON_PARENT', 'ConParent', 'VARCHAR', true, 32, '');
		$this->addPrimaryKey('CON_ID', 'ConId', 'VARCHAR', true, 100, '');
		$this->addPrimaryKey('CON_LANG', 'ConLang', 'VARCHAR', true, 10, '');
		$this->addColumn('CON_VALUE', 'ConValue', 'LONGVARCHAR', true, null, null);
		// validators
		$this->addValidator('CON_LANG', 'maxLength', 'propel.validator.MaxLengthValidator', '5', 'Language can be no larger than 5 in size');
		$this->addValidator('CON_LANG', 'required', 'propel.validator.RequiredValidator', '', 'Language is required.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ContentTableMap

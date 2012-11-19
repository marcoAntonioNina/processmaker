<?php



/**
 * This class defines the structure of the 'LEXICO' table.
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
class LexicoTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.LexicoTableMap';

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
		$this->setName('LEXICO');
		$this->setPhpName('Lexico');
		$this->setClassname('Lexico');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('LEX_TOPIC', 'LexTopic', 'VARCHAR', true, 64, '');
		$this->addPrimaryKey('LEX_KEY', 'LexKey', 'VARCHAR', true, 128, '');
		$this->addColumn('LEX_VALUE', 'LexValue', 'VARCHAR', true, 128, '');
		$this->addColumn('LEX_CAPTION', 'LexCaption', 'VARCHAR', true, 128, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // LexicoTableMap

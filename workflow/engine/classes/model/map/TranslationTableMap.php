<?php



/**
 * This class defines the structure of the 'TRANSLATION' table.
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
class TranslationTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.TranslationTableMap';

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
		$this->setName('TRANSLATION');
		$this->setPhpName('Translation');
		$this->setClassname('Translation');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('TRN_CATEGORY', 'TrnCategory', 'VARCHAR', true, 100, '');
		$this->addPrimaryKey('TRN_ID', 'TrnId', 'VARCHAR', true, 100, '');
		$this->addPrimaryKey('TRN_LANG', 'TrnLang', 'VARCHAR', true, 10, 'en');
		$this->addColumn('TRN_VALUE', 'TrnValue', 'LONGVARCHAR', true, null, null);
		$this->addColumn('TRN_UPDATE_DATE', 'TrnUpdateDate', 'DATE', false, null, null);
		// validators
		$this->addValidator('TRN_CATEGORY', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Category can be no larger than 100 in size');
		$this->addValidator('TRN_CATEGORY', 'required', 'propel.validator.RequiredValidator', '', 'Category is required.');
		$this->addValidator('TRN_ID', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'ID can be no larger than 100 in size');
		$this->addValidator('TRN_ID', 'required', 'propel.validator.RequiredValidator', '', 'ID is required.');
		$this->addValidator('TRN_LANG', 'maxLength', 'propel.validator.MaxLengthValidator', '5', 'Language can be no larger than 5 in size');
		$this->addValidator('TRN_LANG', 'required', 'propel.validator.RequiredValidator', '', 'Language is required.');
		$this->addValidator('TRN_VALUE', 'maxLength', 'propel.validator.MaxLengthValidator', '200', 'Value can be no larger than 200 in size');
		$this->addValidator('TRN_VALUE', 'required', 'propel.validator.RequiredValidator', '', 'Value is required.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // TranslationTableMap
